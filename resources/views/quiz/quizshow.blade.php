@extends('layouts.app')

  <meta charset="utf-8">
  <link rel="stylesheet" href="{{asset('css/quizshow.css')}}">
  <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @section('content')
 
  <nav style="box-shadow: 0 5px 5px black;">
    <ul>
<li class="logo"><img src="{{asset('images/logo1.jpg')}}" style="width: 80px;height: 60px;margin-left: 20px;"></li>
    
<li class="items"><a href="/">Exit</a></li>
<li class="btn"><a href="#"><i class="fas fa-bars"></i></a></li>
</ul>
</nav>
  <div style="  margin: 0;
  position: absolute;top: 50%;left: 50%;transform: translate(-50%, -50%);">
    <div class="container" style="text-align:center;min-width: fit-content;  ">
      <div id="question-container">
        <div id="question" style="font-family:monospace;font-size: 30px;">Question</div>
        <div id="answer-buttons" class="btn-grid">
          <button class="btn">Answer 1</button>
          <button class="btn">Answer 2</button>
          <button class="btn">Answer 3</button>
          <button class="btn">Answer 4</button>
        </div>
      </div>
      <div class="controls">
        <button id="start-btn" class="start-btn btn">Start</button>
        <button id="next-btn" class="next-btn btn ">Next</button>
      </div>

    </div>
  </div>
  <br><br>
  <div style="text-align:center; position: absolute;top: 70%;left: 50%;transform: translate(-50%, -30%);">
    <form action="/result/{{$quiz_id}}/" id="result_page">
      @csrf
    <button class="btnconti hide" id="conti" align:center type="submit">Continue</button>
    </form>
  </div>
  
  
  <script>

    $(document).ready(function () {
      $('.btn').click(function () {
        $('.items').toggleClass("show");
        $('nav ul li').toggleClass("hide");
      });
    });



    const startButton = document.getElementById("start-btn");
    const nextButton = document.getElementById("next-btn");
    const questionContainerElement = document.getElementById("question-container");
    const questionElement = document.getElementById("question");
    const answerButtonsElement = document.getElementById("answer-buttons");
    const conti = document.getElementById("conti");
    var score = 0;
    var done = false;
    let shuffledQuestions, currentQuestionIndex;
    var questions = <?php echo json_encode($questions) ?>;

    startButton.addEventListener("click", startGame);
    nextButton.addEventListener("click", () => {
      currentQuestionIndex++;
      setNextQuestion();
    });

    function startGame() {
      score = 0;
      startButton.classList.add("hide");
      shuffledQuestions = questions.sort(() => Math.random() - 0.5);
      // console.log(shuffledQuestions);
      currentQuestionIndex = 0;
      questionContainerElement.classList.remove("hide");
      setNextQuestion();
    }

    function setNextQuestion() {
      resetState();
      // console.log(shuffledQuestions[currentQuestionIndex]);
      showQuestion(shuffledQuestions[currentQuestionIndex]);
    }

    function showQuestion(question) {
      try {

        questionElement.innerText = question.question;
        ans= question['answer'];
      ans = ans.sort(() => Math.random() - 0.5);

       ans.forEach((answer) => {
          const button = document.createElement("button");
          button.innerText = answer.text;
          button.classList.add("btn");
          if (answer.correct) {
            button.dataset.correct = answer.correct;
          }
          done = false;
          button.addEventListener("click", selectAnswer);
          answerButtonsElement.appendChild(button);
        });




      } catch {
        var temp = document.getElementById("question-container");
        var gameOverhtml1 = "Your Score Is " + String(score) + " Out of " + String(questions.length);
        temp.style.fontSize = "40px";
        temp.innerText = gameOverhtml1;
        conti.classList.remove("hide");
      }
    }

    function resetState() {
      clearStatusClass(document.body);
      nextButton.classList.add("hide");
      while (answerButtonsElement.firstChild) {
        answerButtonsElement.removeChild(answerButtonsElement.firstChild);
      }
    }

    function selectAnswer(e) {
      const selectedButton = e.target;

      const correct = selectedButton.dataset.correct;
      if (correct) {
        if (done == false) {
        score += 1;
        }
      }
      done = true;
      setStatusClass(document.body, correct);
      Array.from(answerButtonsElement.children).forEach((button) => {
        setStatusClass(button, button.dataset.correct);
      });
      if (shuffledQuestions.length > currentQuestionIndex + 1) {
        nextButton.classList.remove("hide");
      } else if (shuffledQuestions.length == currentQuestionIndex + 1) {
        nextButton.classList.remove("hide");
        nextButton.innerText = "Next";
      }
    }

    function setStatusClass(element, correct) {
      clearStatusClass(element);
      if (correct) {
        element.classList.add("correct");
      } else {
        element.classList.add("wrong");
      }
    }

    function clearStatusClass(element) {
      element.classList.remove("correct");
      element.classList.remove("wrong");
    }
    $('#result_page').on('submit', function() {
    var formAction = $('#result_page').attr('action');
    $('#result_page').attr('action', formAction + score +'/' + questions.length);
    });
    startGame();

  </script>
 
@endsection
