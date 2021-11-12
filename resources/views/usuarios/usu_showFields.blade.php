<div class="row">
  <div class="form-group col-sm btn-sm">
    <label for="nombre">{{ __('Nombre') }}(s)</label>
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"><i class="fas fa-user"></i></span>
      </div>
      {!! Form::text('nombre', $usuario->name, ['class' => 'form-control disabled', 'maxlength' => 0, 'placeholder' => __('Nombre'), 'readonly' => 'readonly']) !!}
    </div>
  </div>
  <div class="form-group col-sm btn-sm">
    <label for="apes">{{ __('Apellidos') }}</label>
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"><i class="fas fa-user"></i></span>
      </div>
      {!! Form::text('apellidos', $usuario->apes, ['class' => 'form-control disabled', 'maxlength' => 0, 'placeholder' => __('Apellidos'), 'readonly' => 'readonly']) !!}
    </div>
  </div>
</div>
<div class="row">
  <div class="form-group col-sm btn-sm">
    <label for="email">{{ __('Correo') }}</label>
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
      </div>
      {!! Form::text('email', $usuario->email, ['class' => 'form-control disabled', 'maxlength' => 0, 'placeholder' => __('Email'), 'readonly' => 'readonly']) !!}
    </div>
  </div>
</div>
<div class="row">
  <div class="form-group col-sm btn-sm">
    <label for="call">{{ __('Calle') }}</label>
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"><i class="fas fa-road"></i></span>
      </div>
      {!! Form::text('call', $usuario->call, ['class' => 'form-control disabled', 'maxlength' => 0, 'placeholder' => __('Calle'), 'readonly' => 'readonly']) !!}
    </div>
  </div>
</div>
<div class="row">
  <div class="form-group col-sm btn-sm">
    <label for="num_int">{{ __('Numero Interior') }}</label>
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"><i class="fas fa-hashtag"></i></span>
      </div>
      {!! Form::text('num_int', $usuario->num_int, ['class' => 'form-control disabled', 'maxlength' => 0, 'placeholder' => __('Número Interior'), 'readonly' => 'readonly']) !!}
    </div>
  </div>


  <div class="form-group col-sm btn-sm">
    <label for="num_ext">{{ __('Numero Exterior') }}</label>
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"><i class="fas fa-hashtag"></i></span>
      </div>
      {!! Form::text('num_ext', $usuario->num_ext, ['class' => 'form-control disabled', 'maxlength' => 0, 'placeholder' => __('Número Exterior'), 'readonly' => 'readonly']) !!}
    </div>
  </div>
</div>
<div class="row">
  <div class="form-group col-sm btn-sm">
    <label for="col">{{ __('Colonia') }}</label>
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"><i class="fas fa-building"></i></span>
      </div>
      {!! Form::text('col', $usuario->col, ['class' => 'form-control disabled', 'maxlength' => 0, 'placeholder' => __('Colonia'), 'readonly' => 'readonly']) !!}
    </div>
  </div>
  <div class="form-group col-sm btn-sm">
    <label for="cp">{{ __('Código Postal') }}</label>
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"><i class="fas fa-shipping-fast"></i></span>
      </div>
      {!! Form::text('cp', $usuario->cp, ['class' => 'form-control disabled', 'maxlength' => 0, 'placeholder' => __('Código Postal'), 'readonly' => 'readonly']) !!}
    </div>
  </div>
</div>
<div class="row">
  <div class="form-group col-sm btn-sm">
    <label for="mun">{{ __('Municipio') }}</label>
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"><i class="fas fa-city"></i></span>
      </div>
      {!! Form::text('mun', $usuario->mun, ['class' => 'form-control disabled', 'maxlength' => 0, 'placeholder' => __('Municipio'), 'readonly' => 'readonly']) !!}
    </div>
  </div>
  <div class="form-group col-sm btn-sm">
    <label for="est">{{ __('Estado') }}</label>
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
      </div>
      {!! Form::text('est', $usuario->est, ['class' => 'form-control disabled', 'maxlength' => 0, 'placeholder' => __('Estado'), 'readonly' => 'readonly']) !!}
    </div>
  </div>
</div>
<div class="row">
  <div class="form-group col-sm btn-sm">
    <label for="telf">{{ __('Teléfono Fijo') }}</label>
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
      </div>
      {!! Form::text('telf', $usuario->telf, ['class' => 'form-control disabled', 'maxlength' => 0, 'placeholder' => __('Teléfono Fijo'), 'readonly' => 'readonly']) !!}
    </div>
  </div>
  <div class="form-group col-sm btn-sm">
    <label for="telm">{{ __('teléfono Celular') }}</label>
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"><i class="fas fa-mobile-alt"></i></span>
      </div>
      {!! Form::text('telm', $usuario->telm, ['class' => 'form-control disabled', 'maxlength' => 0, 'placeholder' => __('Teléfono Celular'), 'readonly' => 'readonly']) !!}
    </div>
  </div>
</div>
<div class="row">
  <div class="form-group col-sm btn-sm">
    <label for="created_at">{{ __('Creado el:') }}</label>
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"><i class="fas fa-edit"></i></span>
      </div>
      {!! Form::text('created_at', $usuario->created_at, ['class' => 'form-control disabled', 'maxlength' => 0, 'placeholder' => __('Creado el'), 'readonly' => 'readonly']) !!}
    </div>
  </div>
  <div class="form-group col-sm btn-sm">
    <label for="updated_at">{{ __('Editado el:') }}</label>
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"><i class="fas fa-edit"></i></span>
      </div>
      {!! Form::text('updated_at', $usuario->updated_at, ['class' => 'form-control disabled', 'maxlength' => 0, 'placeholder' => __('Editado el'), 'readonly' => 'readonly']) !!}
    </div>
  </div>
</div>
<div class="row">
  <div class="form-group col-sm btn-sm">
    <label for="rol">{{ __('Rol') }}</label>
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"><i class="fas fa-dice-six"></i></span>
      </div>
      <select name="rol"  class="form-control select2 disabled" multiple readonly>
        @foreach ($usuario->roles as $rol)
          <option selected>{{ $rol->nom }}</option>
        @endforeach
      </select>
    </div>
  </div>
</div>

<div class="row">
  <div class="card-body table-responsive p-0" id="div-tabla-scrollbar" style="height: 40em;">
      <table class="table table-head-fixed table-striped table-hover table-sm table-bordered y">
          <thead></thead>
          <thead>
              <tr>
                  <th colspan="4" ><center>{{ __('Clase(s)')}}</center></th>
              </tr>
            <tr>
                <th>{{ __('ID')}}</th>
                <th>{{ __('Nombre')}}</th>
                <th>{{ __('Modalidad')}}</th>
                <th>{{ __('Tipo de Clase')}}</th>
            </tr>
        </thead>
        <tbody>
          @foreach ($usuario->clases as $clase)
            <tr title="{{$clase->id}}">
                <td with="1rem">{{$clase->id}}</td>
                <td><a href="{{ route('clases.show', $clase->id) }}" title="Detalles: {{ $clase->id }}">{{ $clase->nom }}</a></td>
                <td>@foreach ($usuario->modalidads as $modalidad)
          {{$modalidad->nom}}

@endforeach </td>
<td>{{$clase->tip}}</td>
            </tr>
          @endforeach
        </tbody>
        </table>
      </div>
  </div>