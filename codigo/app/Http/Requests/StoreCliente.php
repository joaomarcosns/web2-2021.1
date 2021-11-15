<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCliente extends FormRequest
{
    public function rules()
    {
        return [
            "nome" => [
                "required",
                "min:3",
                "max:255"
            ],
            'endereco' => [
                "required",
                "min:3",
                "max:255"
            ],
            "debito" => [
                "required",
                "numeric",
                "min:0",
                "max:9999999999.99"
            ],
           
        ];
    }

    public function messages()
    {
        return [
            "nome.required" => "O campo obrigatório",
            "nome.min" => "O campo nome deve ter no mínimo :min caracteres",
            "nome.max" => "O campo nome deve ter no máximo :max caracteres",

            "endereco.required" => "O campo obrigatório",
            "endereco.min" => "O campo endereço deve ter no mínimo :min caracteres",
            "endereco.max" => "O campo endereço deve ter no máximo :max caracteres",

            "debito.required" => "O campo obrigatório",
            "debito.numeric" => "O campo debito deve ser numérico",
            "debito.min" => "O campo debito deve ter no mínimo :min caracteres",
            "debito.max" => "O campo debito deve ter no máximo :max caracteres",
        ];
    }
}
