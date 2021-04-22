@extends('layouts.app')

    <meta charset="utf-8">
    <link rel="stylesheet" href="css/contact.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">





    @section('content')
  
    <div class="container">
      <div class="text">
Create Quiz</div>
<form method="POST" action="/quizname">
@csrf
        <div class="form-row">
          <div class="input-data">
            <input type="text" name="qname" required>
            <div class="underline">
</div>
<label for="">Name</label>
          </div>
<div class="input-data">
            <input type="text" name="desc" required>
            <div class="underline">
</div>
<label for="">Description</label>
          </div>
</div>

          
        
       
<div class="form-row submit-btn">
          <div class="input-data">
            <div class="inner"></div>
            <input type="submit" value="Create">
          </div>
        </div>
      </form>
    </div>
    @endsection


