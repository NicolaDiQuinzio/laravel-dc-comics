<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateComicRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title'=>'required|unique:comics|max:255|min:3',
            'thumb' => 'required',
            'price' => 'required|max:255',
            'series' => 'required|max:255',
            'sale_date' => 'required',
            'type' => 'max:255'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => "Il titolo è obbligatorio",
            'title.max' => "Il titolo non deve superare i 255 caratteri",
            'title.min' => "Il titolo deve contenere almano 3 caratteri",
            'thumb.required' => "Inserire obbligatoriamente la url di un'immagine",
            'price.required' => 'Il campo è obbligatorio',
            'price.max' => 'Lunghezza massima è di 255 caratteri',
            'series.required' => 'Il campo è obbligatorio',
            'series.max' => 'Lunghezza massima è di 255 caratteri',
            'sale_date.required' => 'Il campo è obbligatorio',
            'type.required' => 'Il campo è obbligatorio'

        ];
    }
}
