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
            <li class="items"><a href="/">Home</a></li>
            <li class="btn"><a href="#"><i class="fas fa-bars"></i></a></li>
        </ul>
    </nav>
    <div style="    text-align: center;">
    <h1><?php echo $message ?></h1><br/>
    @if($id ?? '' ?? '' !== "")
    <a href="/result/{{ $id ?? '' }}">View Leaderboard</a><br/><br/>
    @endif
    @if($id ?? '' ?? '' === "4eAFB0" || $id ?? '' ?? '' === "Fvoic6" || $id ?? '' ?? '' === "OD64wG" || $id ?? '' ?? '' === "oe2buW")
    <a onclick="event.preventDefault();
             document.getElementById('delete_result').submit();" href="#">Try Again</a><br/><br/>
             <form id="delete_result" action="/tryagain/{{ $id ?? '' }}" method="POST" style="display: none;">
                @csrf
            </form>
    @endif
    <a href="/" >Back to Home Page</a>
    </div>



    </body>   
<script>
    $(document).ready(function () {
        $('.btn').click(function () {
            $('.items').toggleClass("show");
            $('ul li').toggleClass("hide");
        });
    });
</script>

</html>