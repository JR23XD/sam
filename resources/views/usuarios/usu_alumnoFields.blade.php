<div class="row">
  <div class="form-group col-sm btn-sm">
    <label for="name">{{ __('Nombre') }}(s) *</label>
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"><i class="fas fa-user"></i></span>
      </div>
      {!! Form::text('name', null, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'maxlength' => 40, 'placeholder' => __('Nombre')]) !!}
    </div>
    <span class="text-danger">{{ $errors->first('name') }}</span>
  </div>
  <div class="form-group col-sm btn-sm">
    <label for="apes">{{ __('Apellidos') }} *</label>
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"><i class="fas fa-user"></i></span>
      </div>
      {!! Form::text('apes', null, ['class' => 'form-control' . ($errors->has('apes') ? ' is-invalid' : ''), 'maxlength' => 40, 'placeholder' => __('Apellidos')]) !!}
    </div>
    <span class="text-danger">{{ $errors->first('apes') }}</span>
  </div>
</div>

<div class="row">
  <div class="form-group col-sm btn-sm">
    <label for="call">{{ __('Calle') }} *</label>
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"><i class="fas fa-road"></i></span>
      </div>
      {!! Form::text('call', null, ['class' => 'form-control' . ($errors->has('call') ? ' is-invalid' : ''), 'maxlength' => 40, 'placeholder' => __('Calle')]) !!}
    </div>
    <span class="text-danger">{{ $errors->first('call') }}</span>
  </div>
</div>
<div class="row">
  <div class="form-group col-sm btn-sm">
    <label for="num_int">{{ __('Numero Interior') }} *</label>
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"><i class="fas fa-hashtag"></i></span>
      </div>
      {!! Form::text('num_int', null, ['class' => 'form-control' . ($errors->has('num_int') ? ' is-invalid' : ''), 'maxlength' => 4, 'placeholder' => __('Numero Interior')]) !!}
    </div>
    <span class="text-danger">{{ $errors->first('num_int') }}</span>
  </div>

  <div class="form-group col-sm btn-sm">
    <label for="num_ext">{{ __('Numero Exterior') }} *</label>
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"><i class="fas fa-hashtag"></i></i></span>
      </div>
      {!! Form::text('num_ext', null, ['class' => 'form-control' . ($errors->has('num_ext') ? ' is-invalid' : ''), 'maxlength' => 5, 'placeholder' => __('Numero Exterior')]) !!}
    </div>
    <span class="text-danger">{{ $errors->first('num_ext') }}</span>
  </div>

  

    <div class="form-group col-sm btn-sm">
      <label for="col">{{ __('Colonia') }} *</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text"><i class="fas fa-building"></i></span>
        </div>
        {!! Form::text('col', null, ['class' => 'form-control' . ($errors->has('col') ? ' is-invalid' : ''), 'maxlength' => 40, 'placeholder' => __('Colonia')]) !!}
      </div>
      <span class="text-danger">{{ $errors->first('col') }}</span>
    </div>
</div>

<div class="row">
  <div class="form-group col-sm btn-sm">
    <label for="cp">{{ __('Codigo Postal') }} *</label>
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"><i class="fas fa-shipping-fast"></i></span>
      </div>
      {!! Form::text('cp', null, ['class' => 'form-control' . ($errors->has('cp') ? ' is-invalid' : ''), 'maxlength' => 7, 'placeholder' => __('Codigo Postal')]) !!}
    </div>
    <span class="text-danger">{{ $errors->first('cp') }}</span>
  </div>

  <div class="form-group col-sm btn-sm">
    <label for="mun">{{ __('Municipio') }} *</label>
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"><i class="fas fa-city"></i></span>
      </div>
      {!! Form::text('mun', null, ['class' => 'form-control' . ($errors->has('mun') ? ' is-invalid' : ''), 'maxlength' => 40, 'placeholder' => __('Municipio')]) !!}
    </div>
    <span class="text-danger">{{ $errors->first('mun') }}</span>
  </div>

  <div class="form-group col-sm btn-sm">
    <label for="est">{{ __('Estado') }} *</label>
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
      </div>
      {!! Form::text('est', null, ['class' => 'form-control' . ($errors->has('est') ? ' is-invalid' : ''), 'maxlength' => 40, 'placeholder' => __('Estado')]) !!}
    </div>
    <span class="text-danger">{{ $errors->first('est') }}</span>
  </div>
</div>


<div class="row">
  <div class="form-group col-sm btn-sm">
    <label for="email">{{ __('Correo') }} *</label>
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
      </div>
      {!! Form::text('email', null, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'maxlength' => 40, 'placeholder' => __('Correo')]) !!}
    </div>
    <span class="text-danger">{{ $errors->first('email') }}</span>
  </div>
</div>
<div class="row">
  <div class="form-group col-sm btn-sm">
    <label for="password">{{ __('Contraseña') }} *</label>
    <a href="#" class="" data-toggle="modal" data-target="#generar-password" data-backdrop="static" data-keyboard="false">{{ __('Generar Contraseña') }}</a>
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"><i class="fas fa-lock"></i></span>
      </div>
      {!! Form::password('password', ['id' => 'password', 'class' => 'form-control' . ($errors->has('password') ? ' is-invalid' : ''), 'maxlength' => 60, 'placeholder' => __('Contraseña'), 'autocomplete' => 'new-password']) !!}
      <span class="input-group-append">
        <button id="show_password1" class="btn btn-info btn-flat btn-sm" type="button" onclick="mostrarPassword('password', 'show_password1', 'icon1')"><span class="fa fa-eye-slash icon1"></span></button>
      </span>
    </div>
    <span class="text-danger">{{ $errors->first('password') }}</span>
  </div>
  <div class="form-group col-sm btn-sm">
    <label for="password_confirmation">{{ __('Confirmación de contraseña') }} *</label>
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"><i class="fas fa-lock"></i></span>
      </div>
      {!! Form::password('password_confirmation', ['id' => 'password_confirmation', 'class' => 'form-control' . ($errors->has('password_confirmation') ? ' is-invalid' : ''), 'maxlength' => 60, 'placeholder' => __('Confirmación de contraseña')]) !!}
      <span class="input-group-append">
        <button id="show_password2" class="btn btn-info btn-flat btn-sm" type="button" onclick="mostrarPassword('password_confirmation', 'show_password2', 'icon2')"><span class="fa fa-eye-slash icon2"></span></button>
      </span>
    </div>
  </div>
</div>

<div class="row">
  <div class="form-group col-sm btn-sm">
    <label for="telf">{{ __('Telefono Fijo') }} *</label>
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"><i class="fad fa-phone-volume"></i>"></i></span>
      </div>
      {!! Form::text('telf', null, ['class' => 'form-control' . ($errors->has('telf') ? ' is-invalid' : ''), 'maxlength' => 13, 'placeholder' => __('Telefono Fijo')]) !!}
    </div>
    <span class="text-danger">{{ $errors->first('telf') }}</span>
  </div>

  <div class="form-group col-sm btn-sm">
    <label for="telm">{{ __('Telefono Celular') }} *</label>
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"><i class="fas fa-mobile-alt"></i></span>
      </div>
      {!! Form::text('telm', null, ['class' => 'form-control' . ($errors->has('telm') ? ' is-invalid' : ''), 'maxlength' => 12, 'placeholder' => __('Telefono Movil')]) !!}
    </div>
    <span class="text-danger">{{ $errors->first('telm') }}</span>
  </div>
</div>

<div class="row">
  <div class="form-group col-sm btn-sm">
    <label for="obs">{{ __('Observaciones') }} *</label>
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"><i class="fas fa-comments"></i></span>
      </div>
      {!! Form::textarea('obs', null, ['class' => 'form-control' . ($errors->has('obs') ? ' is-invalid' : ''), 'maxlength' => 40, 'placeholder' => __('Observaciones')]) !!}
    </div>
    <span class="text-danger">{{ $errors->first('obs') }}</span>
  </div>
</div>




<div class="row">
  <div class="form-group col-sm btn-sm">
    <a href="{{ route('usuarios.index') }}" class="btn btn-info w-100 p-2"><i class="fas fa-reply"></i> {{ __('Regresar') }}</a>
  </div>

  <div class="form-group col-sm btn-sm">
    <button type="reset"
            class="btn btn-info w-100 p-2"> <i class="fas fa-broom"></i>
      {{ __('Limpiar') }}</button>
  </div>
  <div class="form-group col-sm btn-sm">
    <button type="submit"
            id="btnsubmit"
            class="btn btn-info w-100 p-2"> <i class="fas fa-save"></i>
      {{ __('Guardar') }}</button>
  </div>

</div>