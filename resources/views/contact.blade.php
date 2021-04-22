@extends('layouts.app')

    <meta charset="utf-8">
    <link rel="stylesheet" href="css/contact.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">





    @section('content')
  
    <div class="container">
      <div class="text">
Contact us </div>
<form method="POST" action="/contact">
@csrf
        <div class="form-row">
          <div class="input-data">
            <input type="text" name="first" required>
            <div class="underline">
</div>
<label for="">First Name</label>
          </div>
<div class="input-data">
            <input type="text" name="last" required>
            <div class="underline">
</div>
<label for="">Last Name</label>
          </div>
</div>
<div class="form-row">
          <div class="input-data">
            <input type="text" name="Email" required>
            <div class="underline">
</div>
<label for="">Email Address</label>
          </div>
<div class="input-data">
            <input type="text" name="message" required>
            <div class="underline">
</div>
<label for="">Message</label>
          </div>
</div>

          
        
       
<div class="form-row submit-btn">
          <div class="input-data">
            <div class="inner"></div>
            <input type="submit" value="submit">
          </div>
        </div>
      </form>
    </div>
    @endsection


