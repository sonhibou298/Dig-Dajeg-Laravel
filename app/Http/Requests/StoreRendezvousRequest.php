<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRendezvousRequest extends FormRequest
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
            'dateReservation' => ['required', 'date'],
            'dateRendezVous' => ['required', 'date', 'before:today'],
            'heureRendezVous' => ['required', 'time'],
            'motifConsultation' => ['required', 'string'],
            'medecin_id' => ['required', 'int'],
        ];
    }
}
