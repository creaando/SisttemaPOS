@extends('auth.contenido')

@section('login')
<div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card-group mb-0">
          <div class="card p-4">
          <form class="form-horizontal was-validated" method="POST" action="{{ route('login')}}">
          {{ csrf_field() }}
              <div class="card-body">
              <h2 class="text-center">Ingresar al sistema</h2>
              <p class="text-muted text-center">Control de acceso al sistema</p>
              <div class="form-group mb-3{{$errors->has('usuario' ? 'is-invalid' : '')}}">
                <span class="input-group-addon"><i class="icon-user"></i></span>
                <input type="text" value="{{old('usuario')}}" name="usuario" id="usuario" class="form-control" placeholder="Usuario">
                {!!$errors->first('usuario','<span class="invalid-feedback">:message</span>')!!}
              </div>
              <div class="form-group mb-4{{$errors->has('password' ? 'is-invalid' : '')}}">
                <span class="input-group-addon"><i class="icon-lock"></i></span>
                <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                {!!$errors->first('password','<span class="invalid-feedback">:message</span>')!!}
              </div>
              <div class="row">
                <div class="col-6">
                  <button type="submit" class="btn btn-dark px-4">Ingresar</button>
                </div>
              </div>
            </div>
          </form>
          </div>
          <div class="card text-white bg-dark py-5 d-md-down-none" style="width:44%">
            <div class="card-body text-center">
              <div>
                <img src="img/logo.png" class="img" alt="creaando.com" style="width:100%">
                <br>
                <h2>Sistema de Ventas</h2>
                <p>Desarrollado por Creaando Studio</p>                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
