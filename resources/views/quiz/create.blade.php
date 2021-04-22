<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/create.css') }}" rel="stylesheet" type="text/css" >
    <title>Quizz</title>
</head>

<body>
    <nav style="box-shadow: 0 5px 5px black;">
        <ul>
            <li class="logo"><img src="{{asset('images/logo1.jpg')}}" style="width: 80px;height: 60px;margin-left: 20px;"></li>
            <li class="items"><a href="/joinerr/{{ $id }}">Save</a></li>
            <li class="items" onclick="event.preventDefault();
             document.getElementById('delete_quiz').submit();"><a >Delete</a></li>
             <form id="delete_quiz" action="/delete_quiz/{{ $id }}" method="POST" style="display: none;">
                @csrf
            </form>
            <li class="btn"><a href="#"><i class="fas fa-bars"></i></a></li>
        </ul>
    </nav>
    <div class="quizQuestionContainer">

        <div class="headerQuizQuestion">
            <h3>Quiz Editor</h3>
            <a style="text-decoration: none;color:black;font-size: medium;" onclick=" customModal(); return false">Add Question<i
                    class="fas fa-plus"
                    style="border:1px solid black;padding:0.2rem;border-radius:25%;background-color: black;color: white;"></i></a>
        </div>
        <?php
        $i=1; ?>
       @if(count($questions)==0)
       <a onclick=" customModal(); return false"><div style="padding-top:100px;"><h1>Add questions here</h1></div></a>
       @else
       @foreach ($questions as $question)
       <?php 
                         $ques_id = $question->ques_id;
                         $options = "Select * from options where ques_id='$ques_id';";
                         $options = DB::select($options);

                ?>
       <div class="quizQuestions">
            <div class="question" style="box-shadow: 4px 4px 4px rgba(175, 172, 172, 0.4);">
                <div class="questionOptions">
                    <h3>Question {{$i}}</h3>
                    <div style="display: flex;">

                        <li style="list-style: none; padding:0.5rem;background-color: #fff;margin-right:0.5rem" onclick="event.preventDefault();
                                             document.getElementById('delete_ques').submit();"><a
                                 style="color: black;text-decoration: none;" ><i class="fas fa-trash"
                                    style=""></i></a>
                        </li>
                        <form id="delete_ques" action="/delete_ques/{{ $id }}/{{ $ques_id }}" method="POST" style="display: none;">
                                @csrf
                            </form>

                    </div>
                </div>
                <div class="questionQuestion">
                   <h3>{{ $question->question}}</h3>                
                </div>
                <div class="questionAns">
                @foreach($options as $option) 
                <div class="options">
                    @if($question->answer === $option->options)
                    <span class="round" style="background-color:#01D38C">
                        </span>
                    @else
                        <span class="round" style="background-color:#EE4F73"></span>
                    @endif    
                        <label for="opt1" style="margin-top:0.2rem;"> {{$option->options}}</label>
                    </div>
                @endforeach
                
                </div>
            </div>
            <?php
            $i++; ?>
       @endforeach
       @endif
           
    <div class="coverall customHide " id="over">
        <span> </span>
    </div>
    <div class="customModal customHide" id="inputModal">
        <div class="modalHeader">
            <h3>Add a question</h3>
        </div>
        <div class="modalContent">
        
            <form action="{{$id}}" id="ModalForm" method="POST" >
                @csrf
                <textarea name="question" id="textArea" cols="30" rows="5" placeholder="Enter The Question" autofocus required
                    style="text-align: center;    resize: none; justify-content: center;border: 1px solid rgba(0,0,0,0.2);border-radius: 5px;margin-top: 0rem;margin-bottom: 0rem;"></textarea>

                <div style="display: flex;justify-content:space-around; color:red;">
                    <input type="text" id="input0modal"
                        style="margin-bottom:0.1rem;padding: 0.1rem;border: 1px solid rgba(0,0,0,0.2);border-radius: 5px;padding-left:0.5rem  ;"
                        name="answer"
                        placeholder="Correct Option" required>*
                </div>
                <div style="display: flex;justify-content:space-around; color:red;">
                
                    <input type="text"
                    id="input1modal"
                        style="margin-bottom:0.1rem;padding: 0.1rem;border: 1px solid rgba(0,0,0,0.2);border-radius: 5px;padding-left:0.5rem  ;"
                        name="option2"
                        placeholder="Option 2" required>*
                </div>
                <div style="display: flex;justify-content:space-around;">
                    <input type="text"
                        style="margin-bottom:0.1rem;padding: 0.1rem;border: 1px solid rgba(0,0,0,0.2);border-radius: 5px;padding-left:0.5rem  ;"
                        name="option3"
                        placeholder="Option 3">
                </div>
                <div style="display: flex;justify-content:space-around;">
                    <input type="text"
                        style="margin-bottom:0.1rem;padding: 0.1rem;border: 1px solid rgba(0,0,0,0.2);border-radius: 5px;padding-left:0.5rem  ;"
                        name="option4"
                        placeholder="Option 4">
                </div>

            </form>
        </div>
        <div class="modalFotter">
            <button onclick="customModal()" style="background-color: #EE4F73;">Close</button>
            <button type="submit" onclick="validateModal();"
                style="background-color: #01D38C;" >Add</button>
        </div>
    </div>


</body>
<script>
    const over = document.getElementById('over');
    const modal = document.getElementById('inputModal');
    function customModal() {
        // console.log('called');
        over.classList.toggle('customHide');
        modal.classList.toggle('customHide');
    }

    function validateModal(e){
        
       
        if(document.getElementById('textArea').value!="" && document.getElementById('input1modal').value!="" && document.getElementById('input0modal').value!=""){
           document.getElementById('ModalForm').submit();
        }
        else if(document.getElementById('textArea').value==""){
            alert('please enter the question!!');
        }
        else if(document.getElementById('input0modal').value==""){
            alert('Correct option is mandatory!!');
        }
        else{
            alert('Option 2 is mandatory!!');
        }

    }
</script>

<script>
    $(document).ready(function () {
        $('.btn').click(function () {
            $('.items').toggleClass("show");
            $('ul li').toggleClass("hide");
        });
    });
</script>


</html>