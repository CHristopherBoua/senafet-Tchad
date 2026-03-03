<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePartenaireRequest extends FormRequest
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
            'company' => 'required|string|max:255',
            'contact_name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'nullable|string|max:50',
            'level' => 'required|in:platine,or,argent,bronze',
            'partenaire_sector_id' => 'nullable|exists:partenaire_sectors,id',
            'message' => 'nullable|string|max:2000',
            'logo' => 'nullable|image|max:2048',
            'password' => 'nullable|string|min:8|confirmed',
        ];
    }
}
