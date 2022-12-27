@extends('welcome')
@section('login')
<div class="container col-md-8 offset-md-2">
    <br>
    <h3 class="login">Login Form</h3>
    <br><br><br>
<form>
  <div class="form-group">
    <label for="exampleInputEmail1">User Name</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
<style>
    .login{
        display : flex ;
        justify-content : center ;
    }
</style>
@endsection