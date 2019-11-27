<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">




<form class="container" method="POST" action="{{ route('menu')}}">
    @csrf
<div class="form-group">
    <label for="nombres">Nombres:</label>
<input type="text" class="form-control" value="{{old('nombres')}}" name="nombres">
    {!!$errors->first('nombres', '<small>:message</small><br>')!!}
  </div>
  <div class="form-group">
    <label for="apellidos">Apellidos:</label>
    <input type="text" class="form-control" value="{{old('apelldos')}}" name="apellidos">
    {!!$errors->first('apellidos', '<small>:message</small><br>')!!}
  </div>
  <div class="form-group">
    <label for="telefono">Telefono:</label>
    <input type="text" class="form-control" value="{{old('telefono')}}" name="telefono">
    {!!$errors->first('telefono', '<small>:message</small><br>')!!}
  </div>
  <div class="form-group">
    <label for="correo">Correo:</label>
    <input type="email" class="form-control" value="{{old('correo')}}" name="correo">
    {!!$errors->first('correo', '<small>:message</small><br>')!!}
  </div>
  <div class="form-group">
    <label for="password">Password:</label>
    <input type="password" class="form-control" name="password">
    {!!$errors->first('password', '<small>:message</small><br>')!!}
  </div>
  <div class="form-group">
    <label for="pwd">Confirmar Password:</label>
    <input type="password" class="form-control" name="confirmpass">
    {!!$errors->first('confirmpass', '<small>:message</small><br>')!!}
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

