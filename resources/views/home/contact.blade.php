@extends('layout.master')
@section('content')
<div class="container">

   <h2>Contact with Us</h2>
   <div class="respond box padding">	   
        <h3>Contact form </h3>
        <form action="">
            <div class="form-group">
                <label for="InputName">Name:<span class="required">*</span></label>
                <div>
                    <input type="name" class="form-control" id="InputName" placeholder="Name">
                </div>
            </div>

            <div class="form-group">
                <label for="InputEmail">Email:<span class="required">*</span></label>
                <input type="name" class="form-control" id="InputEmail" placeholder="Email">
            </div>

            <div class="form-group">
                <label>Message:<span class="required">*</span></label>
                <textarea rows="3" cols="10" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <button class="btn btn-primary" type="button">Post Comment</button>
            </div>
        </form>
    </div>

</div>

@endsection