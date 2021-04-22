<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use DB;

class quiz extends Controller
{
    public function __construct()
    {
    $this->middleware('auth');
    }

    function qname_create(Request $request){
        $qid = Str::random(6);
        $qname = $request->input('qname');
        $desc = $request->input('desc');
        $email = Auth::user()->email;
        $temp = "INSERT INTO `quiz` (`quiz_id`, `qname`, `desc`, `email`) VALUES ('$qid', '$qname', '$desc', '$email');";
        $temp = DB::statement($temp);
        $url = "create/$qid";
        return redirect($url);
    }

    function qname(){
        return view('quiz/quizname');
    }

    function create($id){
        $temp="Select * from question where quiz_id='$id';";
        $temp = DB::select($temp);
        return view('quiz/create', ['id' => $id, "questions" => $temp ]);
    }

    function create_add(Request $request, $id){
        $ques_id = Str::random(6);
        $question = $request->input('question');
        $answer = $request->input('answer');
        $quiz_id = $id;
        $temp = "INSERT INTO `question` (`ques_id`, `quiz_id`, `question`, `answer`) VALUES ('$ques_id', '$quiz_id', '$question', '$answer');";
        $temp = DB::statement($temp);
        $url = "create/$quiz_id";
        $option2 = $request->input('option2');
        $option3 = $request->input('option3');
        $option4 = $request->input('option4');
        $temp = "INSERT INTO `options` (`ques_id`, `options`) VALUES ('$ques_id', '$answer'), ('$ques_id', '$option2');";
        $temp = DB::statement($temp);
        // error_log($option4);
        // error_log();

        if(strlen($option3) !==0){
        $temp = "INSERT INTO `options` (`ques_id`, `options`) VALUES ('$ques_id', '$option3');";
        $temp = DB::statement($temp);
        }
        if(strlen($option4) !==0){

            $temp = "INSERT INTO `options` (`ques_id`, `options`) VALUES ('$ques_id', '$option4');";
            $temp = DB::statement($temp);
            }
        return redirect($url);
    }

    function delete_ques($quiz_id, $ques_id){
        $temp = "DELETE FROM `question` WHERE ques_id='$ques_id';";
        $temp = DB::statement($temp);
        $url="create/$quiz_id";
        return redirect($url);
    }

    function delete_quiz($id){
        $temp = "DELETE FROM `quiz` WHERE quiz_id='$id';";
        $temp = DB::statement($temp);
        return redirect('/');
    }

    function quiz_show(Request $request){
        $email = Auth::user()->email;
        $id = $request->input('code');
        $temp = "select * from quiz where quiz_id='$id';";
        $temp = DB::select($temp);
        if($temp === []){
            return redirect('/joinerr/wrongkey');
        }
        $temp = "select * from question where quiz_id='$id';";
        $temp = DB::select($temp);
        if($temp === []){
            return redirect('/joinerr/emptyquiz');
        }
        $temp = "select * from result where email='$email' and quiz_id='$id';";
        $temp = DB::select($temp);
        if($temp !== []){
            return redirect("/joinerr/reattempt/$id");
        }
        $questions = "Select * from question where quiz_id='$id';";
        $questions = DB::select($questions);
        $total = array();
      foreach($questions as $question){ 
        $myobj = array();
        $myobj['answer']= array();
        $ans = array();
      $ques_id = $question->ques_id;
      $options = "select * from options where ques_id='$ques_id'";
      $options = DB::select($options);
      $myobj['question'] = $question->question;
      foreach($options as $option){
      if($option->options === $question->answer){
          $ans["text"] = $option->options;
          $ans['correct'] = true;
      }
      else{
      $ans["text"]= $option->options;
      $ans['correct']= false;
      }
      $myobj['answer'][] = $ans;
      }
      array_push($total,$myobj);
      }
        return view('quiz/quizshow', ["questions" => $total, "quiz_id" => $id]);
    }

    function premade($id){
        $email = Auth::user()->email;
        $temp = "select * from result where email='$email' and quiz_id='$id';";
        $temp = DB::select($temp);
        if($temp !== []){
            return redirect("/joinerr/reattempt/$id");
        }
        $questions = "Select * from question where quiz_id='$id';";
        $questions = DB::select($questions);
        $total = array();
      foreach($questions as $question){ 
        $myobj = array();
        $myobj['answer']= array();
        $ans = array();
      $ques_id = $question->ques_id;
      $options = "select * from options where ques_id='$ques_id'";
      $options = DB::select($options);
      $myobj['question'] = $question->question;
      foreach($options as $option){
      if($option->options === $question->answer){
          $ans["text"] = $option->options;
          $ans['correct'] = true;
      }
      else{
      $ans["text"]= $option->options;
      $ans['correct']= false;
      }
      $myobj['answer'][] = $ans;
      }
      array_push($total,$myobj);
      }
        return view('quiz/quizshow', ["questions" => $total, "quiz_id" => $id]);
    }

    function tryagain($id){
        $email = Auth::user()->email;
        $temp = "DELETE FROM `result` WHERE quiz_id='$id' and email='$email';";
        $temp = DB::statement($temp);
        return redirect("/quizshow/$id");
    }

    function result($id, $score, $total){
        $result_id = Str::random(6);
        $quiz_id = $id;
        $email = Auth::user()->email;
        $temp = "select * from result where email='$email' and quiz_id='$quiz_id';";
        $temp = DB::select($temp);
        if($temp === []){
            $upload = "INSERT INTO `result` (`result_id`, `quiz_id`, `email`, `score`, `total`) VALUES ('$result_id', '$quiz_id', '$email', '$score', '$total');";
            $upload = DB::statement($upload);
        }
        $data = "select * from result where quiz_id='$quiz_id' order by score desc";
        $data = DB::select($data);
        return view('quiz/result', ["data" => $data, "total" => $total]);
    }

    function join_error($id){
        if($id === "wrongkey"){
            $message = "You have entered wrong quiz code";
        }
        elseif ($id === "emptyquiz"){
            $message = "This quiz has no questions";
        }
        else{
            $message = "Your quiz code is $id";
        }
        return view('quiz/joinerr',['message' => $message]);
    }

    function join_reattempt($id){
        $message = "You have already attempted this quiz";
        return view('quiz/joinerr',['message' => $message, 'id' => $id]);
    }

    function leaderboard($id){
        $quiz_id = $id;
        $temp = "select * from question where quiz_id='$quiz_id';";
        $temp = DB::select($temp);
        $total = count($temp);
        $data = "select * from result where quiz_id='$quiz_id' order by score desc";
        $data = DB::select($data);
        return view('quiz/result', ["data" => $data, "total" => $total]);
    }
}
