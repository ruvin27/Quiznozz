@extends('layouts.app')
    <link rel="stylesheet" href="css/dashboard.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
@section('content')
<nav style="box-shadow: 0 5px 5px black;">
    <ul>
<li class="logo"><img src="images/logo1.jpg" style="width: 80px;height: 60px;margin-left: 20px;"></li>
@if (Auth::guest())
        <li class="items"><a href="{{ url('/login') }}">Login/Register</a></li>
        
      @else      
      <li class="items"><a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                Logout
                            </a></li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
   @endif
<li class="items"><a href="/about">About</a></li>
<li class="items"><a href="/contact">Contact Us</a></li>
<li class="btn"><a href="#"><i class="fas fa-bars"></i></a></li>
</ul>
</nav>
<br>
  <script>
    $(document).ready(function(){
      $('.btn').click(function(){
        $('.items').toggleClass("show");
        $('ul li').toggleClass("hide");
      });
    });
  </script>

  <div style="display:flex;justify-content:center;align-items:center;">
<div style="display:flex;justify-content:space-between;flex-wrap:wrap;align-items:center;">
  <form id="joinForm" action="/quizshow" style="display:flex;align-items:center;background-color:#222222;min-height:80px;border-radius:10px;padding:1rem;">
  @csrf
  <input type="text" name="code" class="inputdash" placeholder="Quiz code" >
  <button type="submit" class="btndash btndash-2 btndash-2c" style=" padding:20 10px;margin:0;margin-left:10px;background-color:#696969">   JOIN</button>
    </form>
  <a href="/quizname"><button class="btndash btndash-2 btndash-2c" style="height:80px" id="CreateQuiz">CREATE</button></a>
</div>  
</div>
<div class="boxesContainer"  >

  <div class="cardBox">
    <div class="card">
      <div class="front">
        <img src="images/python.jpg" class="imgbox">
      </div>
      <div class="back">
        <h3>PYTHON</h3>
        <p>Python is a general-purpose programming language that is becoming ever more popular for data science.</p>
        <a href="/quizshow/4eAFB0">Join</a>
      </div>
    </div>
  </div>

  <div class="cardBox">
    <div class="card">
      <div class="front">
       <img src="images/cpro.jpg" class="imgbox">
      </div>
      <div class="back">
        <h3>C++</h3>
        <p>C++ is a cross-platform language that can be used to create high-performance applications.</p>
        <a href="/quizshow/Fvoic6">Join</a>
      </div>
    </div>
  </div>

  <div class="cardBox">
    <div class="card">
      <div class="front">
        <img src="images/js.png" class="imgbox" style="width: 250px;">
      </div>
      <div class="back">
        <h3>JAVASCRIPT</h3>
        <p>JavaScript is a lightweight, interpreted, object-oriented scripting language for Web pages.</p>
        <a href="/quizshow/OD64wG">Join</a>
      </div>
    </div>
  </div>

  <div class="cardBox">
    <div class="card">
      <div class="front">
        <img src="images/html.png" class="imgbox" style="width: 250px;">
      </div>
      <div class="back" style="color:black;">
        <h3>HTML</h3>
        <p >HTML is the standard markup language and allows the user to create and structure for web pages and applications.</p>
        <a href="/quizshow/oe2buW">Join</a>
      </div>
    </div>
  </div>


</div>
  @if($temp !== [])
    <h1>Your Quizzez</h1>
  <div class="boxesContainer"> 

    @foreach($temp as $quiz)
    <div class="cardBox">
    <div class="card">
      <div class="front">
      <h3 style="top:5%;"><?php echo $quiz->qname ?></h3><br/>
      CODE -
      <?php echo $quiz->quiz_id ?>
      </div>
      <div class="back">
        <h3><?php echo $quiz->qname ?></h3><br/>
        <p><?php echo $quiz->desc ?></p>
        <a href="/create/{{$quiz->quiz_id}}">Edit</a><br/><br/>
        <a href="/result/{{$quiz->quiz_id}}">View Leaderboard</a>
      </div>
    </div>
  </div>
    @endforeach
  @endif
@endsection