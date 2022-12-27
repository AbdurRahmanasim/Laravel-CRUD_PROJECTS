@extends('welcome')
@section('signup')
<div class="container col-md-8 offset-md-2">
    <br>
    <h3 class="login">SignUp Form</h3>
    <br><br><br>
<form method="POST" action="api/signupdata" >
  <div class="form-group">
    <label for="exampleInputEmail1">User Name</label>
    <input name="name" placeholder="UserName" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Email</label>
    <input type="email" name="email" placeholder="Email"  class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Contact Number</label>
    <input type="number"  name="contactnumber" placeholder="Contact Number" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" placeholder="password" class="form-control" id="exampleInputPassword1">
  </div>
  
  <button type="submit" class="btn btn-primary">Sign Up</button>
  @csrf
</form>
</div>
<style>
    .login{
        display : flex ;
        justify-content : center ;
    }
</style>
@endsection