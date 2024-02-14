<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VideogameRequest extends FormRequest
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

            "title"=>"required",
            // "author"=>"required",
            "year"=>'max_digits:4|numeric',
            "description"=>"required",
            // "img" => "required",
        ];
    }

    public function messages(): array
    {
        return[
            "title.required" => "Ricordati di inserire il titolo!!!",
            "year.max_digits" => "non puoi inserire piu' di 4 caratteri",
            "description.required" => "descrizione del gioco obbligatoria",
            "img.required"=> "devi inserire una immagine di copertina",
            "img.image"=> "devi inserire file con soli questi formati jpg, jpeg, png, bmp, gif, svg, or webp"
        ];
    }
}