<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUrlRequest extends FormRequest
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
            'original' => 'present|required|url'
        ];
    }

    /**
     * Set customized validation messages for present|required|url
     * on the original field from urls table.
     *
     * @return array<string>
     */
    public function messages()
    {
        return [
            'present' => 'The URL must be present.',
            'required' => 'The URL is required.',
            'url' => 'The URL must be a valid one.'
        ];
    }
}
