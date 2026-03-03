<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateHomeVideoSectionRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    /**
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'nullable|string|max:255',
            'subtitle' => 'nullable|string|max:500',
            'cta_text' => 'nullable|string|max:255',
            'cta_url' => 'nullable|string|max:500',
            'video' => 'nullable|file|mimes:mp4,mov,webm|max:102400',
            'poster' => 'nullable|image|max:5120',
            'is_active' => 'nullable|boolean',
        ];
    }
}
