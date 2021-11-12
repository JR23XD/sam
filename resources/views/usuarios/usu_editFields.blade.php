<div class="row">
  <div class="form-group col-sm btn-sm">
    <label for="name">{{ __('Nombre') }}(s) *</label>
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"><i class="fas fa-user"></i></span>
      </div>
       {!! Form::text('name', $usuario->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'maxlength' => 40, 'placeholder' => __('Nombre')]) !!}
    </div>
    <span class="text-danger">{{ $errors->first('name') }}</span>
  </div>
  <div class="form-group col-sm btn-sm">
    <label for="apes">{{ __('Apellidos') }} *</label>
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"><i class="fas fa-user"></i></span>
      </div>
      {!! Form::text('apes', $usuario->apes, ['class' => 'form-control' . ($errors->has('apes') ? ' is-invalid' : ''), 'maxlength' => 40, 'placeholder' => __('Apellidos')]) !!}
    </div>
    <span class="text-danger">{{ $errors->first('apes') }}</span>
  </div>
</div>


  <div class="form-group col-sm btn-sm">
    <label for="call">{{ __('Calle') }} *</label>
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"><i class="fas fa-road"></i></span>
      </div>
      {!! Form::text('call', $usuario->call, ['class' => 'form-control' . ($errors->has('call') ? ' is-invalid' : ''), 'maxlength' => 40, 'placeholder' => __('Calle')]) !!}
    </div>
    <span class="text-danger">{{ $errors->first('call') }}</span>
  </div>

<div class="row">
  <div class="form-group col-sm btn-sm">
    <label for="num_int">{{ __('Numero Interior') }} *</label>
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"><i class="fas fa-hashtag"></i></span>
      </div>
      {!! Form::text('num_int', $usuario->num_int, ['class' => 'form-control' . ($errors->has('num_int') ? ' is-invalid' : ''), 'maxlength' => 4, 'placeholder' => __('Numero Interior')]) !!}
    </div>
    <span class="text-danger">{{ $errors->first('num_int') }}</span>
  </div>

  <div class="form-group col-sm btn-sm">
    <label for="num_ext">{{ __('Numero Exterior') }} *</label>
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"><i class="fas fa-hashtag"></i></i></span>
      </div>
      {!! Form::text('num_ext', $usuario->num_ext, ['class' => 'form-control' . ($errors->has('num_ext') ? ' is-invalid' : ''), 'maxlength' => 5, 'placeholder' => __('Numero Exterior')]) !!}
    </div>
    <span class="text-danger">{{ $errors->first('num_ext') }}</span>
  </div>

    <div class="form-group col-sm btn-sm">
      <label for="col">{{ __('Colonia') }} *</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text"><i class="fas fa-building"></i></span>
        </div>
        {!! Form::text('col', $usuario->colonia, ['class' => 'form-control' . ($errors->has('col') ? ' is-invalid' : ''), 'maxlength' => 40, 'placeholder' => __('Colonia')]) !!}
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
      {!! Form::text('cp', $usuario->cp, ['class' => 'form-control' . ($errors->has('cp') ? ' is-invalid' : ''), 'maxlength' => 7, 'placeholder' => __('Codigo Postal')]) !!}
    </div>
    <span class="text-danger">{{ $errors->first('cp') }}</span>
  </div>

  <div class="form-group col-sm btn-sm">
    <label for="mun">{{ __('Municipio') }} *</label>
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"><i class="fas fa-city"></i></span>
      </div>
      {!! Form::text('mun', $usuario->mun, ['class' => 'form-control' . ($errors->has('mun') ? ' is-invalid' : ''), 'maxlength' => 40, 'placeholder' => __('Municipio')]) !!}
    </div>
    <span class="text-danger">{{ $errors->first('mun') }}</span>
  </div>

  <div class="form-group col-sm btn-sm">
    <label for="est">{{ __('Estado') }} *</label>
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
      </div>
      {!! Form::text('est', $usuario->est, ['class' => 'form-control' . ($errors->has('est') ? ' is-invalid' : ''), 'maxlength' => 40, 'placeholder' => __('Estado')]) !!}
    </div>
    <span class="text-danger">{{ $errors->first('est') }}</span>
  </div>
</div>

<div class="row">
  <div class="form-group col-sm btn-sm">
    <label for="telf">{{ __('Telefono Fijo') }} *</label>
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"><i class="fas fa-file-signature"></i></span>
      </div>
      {!! Form::text('telf', $usuario->telf, ['class' => 'form-control' . ($errors->has('telf') ? ' is-invalid' : ''), 'maxlength' =>13, 'placeholder' => __('Telefono Fijo')]) !!}
    </div>
    <span class="text-danger">{{ $errors->first('telf') }}</span>
  </div>

  <div class="form-group col-sm btn-sm">
    <label for="telm">{{ __('Telefono Celular') }} *</label>
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"><i class="fas fa-mobile-alt"></i></span>
      </div>
      {!! Form::text('telm', $usuario->telm, ['class' => 'form-control' . ($errors->has('telm') ? ' is-invalid' : ''), 'maxlength' => 12, 'placeholder' => __('Telefono Movil')]) !!}
    </div>
    <span class="text-danger">{{ $errors->first('telm') }}</span>
  </div>
</div>
<div class="row">
  <div class="form-group col-sm btn-sm">
    <a href="{{ route('usuarios.index') }}" class="btn btn-info w-100 p-2"><i class="fas fa-reply"></i> {{ __('Regresar') }}</a>
  </div>
  <div class="form-group col-sm btn-sm">
    <button type="submit" id="btnsubmit" class="btn btn-info w-100 p-2" onclick="return check('btnsubmit', 'usuarioUpdate', '¡Alerta!', '¿Estás seguro quieres actualizar el registro?', 'info', 'Continuar', 'Cancelar', 'false');"><i class="fas fa-save"></i> {{ __('Guardar') }}</button>
  </div>
</div>