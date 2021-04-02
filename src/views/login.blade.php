@extends('vendor.template.master.master')
@section('content')
<div>
<h3>Login</h3>
<form method="post" action="login-submit">
<lable>Email: </lable><input type="text" name="email" id="email"/>
<br>
<lable>Password: </lable><input type="password" name="password" id="password"/>
<br>
<input type="submit"/>
</form>
</div>
@stop