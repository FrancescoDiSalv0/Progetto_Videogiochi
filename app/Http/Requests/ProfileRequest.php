<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [

            "phone"=>'max_digits:10|numeric',
            "description"=>"required",
            // "userimage" => "required",
        ];
    }

    public function messages(): array
    {
        return[
            "phone.max_digits" => "non puoi inserire piu' di 10 numeri",
            "description.required" => "descrizione obbligatoria",
            "img.required"=> "devi inserire una immagine di copertina",
            "img.image"=> "devi inserire file con soli questi formati jpg, jpeg, png, bmp, gif, svg, or webp"
        ];
    }
}