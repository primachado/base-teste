<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ImovelRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
        	'logradouro' => 'required',
        	'cep' =>  'required|regex:/^[0-9]{5}-[0-9]{3}$/',
			'bairro' => 'required',
        	'estado' => 'required',
        	'municipio' => 'required',
        	'id_tipo_imovel' => 'required',
        	'id_proprietario' => 'required'
        ];
    }
    
    public function messages()
    {
    	return [
    			'logradouro.required' => 'logradouro é obrigatório',
    			'cep.required' => 'cep é obrigatório',
    			'bairro.required' => 'bairro é obrigatório',    			
    			'estado.required' => 'estado é obrigatório',
    			'municipio.required' => 'municipio é obrigatório',
    			'id_tipo_imovel' => 'tipo do imóvel é obrigatório',
    			'id_proprietario' => 'proprietário é obrigatório',
    			'cep.regex'	=> 'Formato de cep inválido'
    	];
    }
}
