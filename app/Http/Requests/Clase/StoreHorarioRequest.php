<?php
namespace App\Http\Requests\Clase;
use Illuminate\Foundation\Http\FormRequest;

class StoreHorarioRequest extends FormRequest {
  public function authorize() {
    return true;
  }
  public function rules() {
    return [
      'nom' => 'required',
      'tip' => 'required',
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
      'nom'  => 'nombre',
      'tip' => 'tipo de clase',
    ];
  }
}