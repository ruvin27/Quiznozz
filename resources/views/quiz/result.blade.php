<!DOCTYPE html>
<html lang="en">

<head>


    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/quizAddstyle.css')}}">

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
    <div class="quizQuestionContainer">
        <div style="display: flex;justify-content: space-between;width: 80%;">
            <h1>Leader Board<i class="fas fa-trophy" style="margin-left:0.5rem;background-color: inherit ;color:
                    white;"></i>
            </h1>
            <h1>Out of <?php echo $total ?></h1>
        </div>
        <div class="LeaderBoard">
            <div class="LeaderBoardItem">
                <span>Rank</span>
                <h3>Name</h3>
                <span>Score</span>
            </div>
            <?php $i=1; ?>
            @foreach($data as $person)
            <?php
                $temp = "select fname,lname from users where email='$person->email'";
                $temp = DB::select($temp);
            ?>
            @foreach($temp as $name)
            <div class="LeaderBoardItem">
                <span><?php echo $i ?></span>
                <h3><?php echo $name->fname;?> <?php echo $name->lname; $i++;?></h3>
                <span><?php echo $person->score ?></span>
            </div>
            @endforeach

            @endforeach
        </div>



</body>


<script src="index.js"></script>
<script>
    $(document).ready(function () {
        $('.btn').click(function () {
            $('.items').toggleClass("show");
            $('ul li').toggleClass("hide");
        });
    });
</script>


</html>