<?php
namespace App\Http\Requests\Usuario;
use Illuminate\Foundation\Http\FormRequest;

class StoreAlumnoRequest extends FormRequest {
  public function authorize() {
    return true;
  }
  public function rules() {
    return [
      'name' => 'required|max:40|string',
      'apes' => 'required|max:40|string',
      'call' => 'required|max:40|string',
      'num_int' => 'nullable|numeric|min:1|max:999999',
      'num_ext' => 'required|numeric|min:1|max:999999',
      'col' => 'required|max:40|string',
      'cp' => 'required|numeric|min:2|max:9999999',
      'mun' => 'required|max:40|string',
      'est' => 'required|max:40|string',
      'email' => 'required|max:75|email|unique:users,email',
      'password' => 'required|max:20|min:8|confirmed',
      'telf' => 'required|numeric|min:10|max:999999999',
      'telm' =>'required|numeric|min:10|max:99999999999',
      
     
    ];
  }
  public function messages() {
    return [
      // Mensaje que se muestra en las diferentes validaciones, por ejemplo "required, max: min: ...".
      // 'name.required' => 'sdfzdsfzfd especificar los :attribute',
    ];
  }
  public function attributes() {
    return [
      // Nombre del campo a mostrar.
      'name'  => 'nombre(s)',
      'apes'  => 'apellidos',
      'call'  => 'calle',
      'num_int'  => 'numero interior',
      'num_ext'  => 'numero exterior',
      'col'  => 'colonia',
      'cp'  => 'codigo postal',
      'mun'  => 'municipio',
      'est'  => 'estado',
      'email'  => 'correo',
      'password' => 'password',
      'telf'  => 'telefono fijo',
      'telm'  => 'telefono celular',
      
    ];
  }
  
}