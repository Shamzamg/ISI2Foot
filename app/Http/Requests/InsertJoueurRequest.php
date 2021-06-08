<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InsertJoueurRequest extends FormRequest
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
            'equipe_id' => 'required',
            'nom' => 'required',
            'prenom' => 'required',
            'age' => 'required',
            'numero' => 'required',
            'photo' => 'required'
        ];
    }
}
