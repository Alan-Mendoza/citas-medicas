@extends('plantilla')
@section('contenido')
<div class="login-box">
  <div class="login-logo">
    <b>Citas Médicas</b>
  </div>
  <div class="login-box-body">
    <p class="login-msg">Ingresar al sistema</p>
    <form action="POST" action="{{ route('login') }}">
      @csrf
      <div class="form-group has-feedback">
        <input type="email" name="email" class="form-control" value="" required>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="password" class="form-control" value="" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-12">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Ingresar</button>
        </div>
      </div>
    </form>
  </div>
</div>
@endsection