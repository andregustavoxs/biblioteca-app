<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PublisherUpdateRequest extends FormRequest
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
            'name' => 'required|string|min:5|unique:publishers,name,' . $this->publisher->id,
            'email' => 'required|string|unique:publishers,email,' . $this->publisher->id,
            'phone' => 'required|string',
            'website' => 'required|url|unique:publishers,website,' . $this->publisher->id,
            'founded_year' => 'nullable|numeric|digits:4',
        ];
    }
}
