<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMovieRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function rules()
    {
        return [
            'title' => ['required', 'unique:movies', 'max:100'],
            'original_title' => ['required', 'unique:movies', 'max:100'],
            'nationality' => ['required', 'max:50'],
            'release_date' => ['required', 'max:20'],
            'vote' => ['required', 'max:4'],
            'cast' => ['nullable'],
            'cover_path' => ['nullable'],
            'genre_id' => ['nullable', 'exists:genres, id']
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'Il titolo è obbligatorio',
            'title.unique' => 'Il titolo è già utilizzato',
            'title.max' => 'Il titolo non può superare :max parole',
            'original_title.required' => 'Il titolo originale è obbligatorio',
            'original_title.unique' => 'Il titolo originale è già utilizzato',
            'original_title.max' => 'Il titolo originale non può superare :max parole',
            'nationality.required' => 'La nazionalità è obbligatoria',
            'nationality.max' => 'La nazionalità non può superare :max parole',
            'release_date.required' => 'La data di uscita è obbligatoria',
            'release_date.max' => 'La data di uscita non può superare :max caratteri',
            'vote.required' => 'Il voto è obbligatoria',
            'vote.max' => 'Il voto non può superare :max caratteri'
        ];
    }
}
