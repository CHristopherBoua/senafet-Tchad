<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Validator;

class UpdateCarouselSlideRequest extends FormRequest
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
        $maxKb = config('app.max_upload_kb', 524288);

        return [
            'title' => 'nullable|string|max:255',
            'subtitle' => 'nullable|string|max:500',
            'type' => 'required|in:image,video',
            'image' => 'nullable|image|max:'.$maxKb,
            'video' => 'nullable|file|mimetypes:video/mp4,video/quicktime,video/webm|max:'.$maxKb,
            'video_url' => 'nullable|string|max:500',
            'link_url' => 'nullable|string|max:500',
            'sort_order' => 'nullable|integer|min:0',
            'is_active' => 'nullable|boolean',
        ];
    }

    /**
     * Get custom messages for validator errors.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        $maxMo = (int) round(config('app.max_upload_kb', 524288) / 1024);

        return [
            'video.uploaded' => 'Le téléchargement de la vidéo a échoué. Vérifiez que le fichier ne dépasse pas '.$maxMo.' Mo et que le serveur PHP autorise les gros fichiers (upload_max_filesize, post_max_size dans php.ini).',
            'video.max' => 'La vidéo ne doit pas dépasser '.$maxMo.' Mo.',
            'video.mimetypes' => 'La vidéo doit être au format MP4, MOV ou WebM.',
        ];
    }

    /**
     * Configure the validator instance.
     */
    public function withValidator(Validator $validator): void
    {
        $validator->after(function (Validator $validator) {
            if ($this->type === 'video' && ! $this->hasFile('video') && empty(trim($this->video_url ?? ''))) {
                $carousel = $this->route('carousel_slide');
                $hasExistingVideo = $carousel && ($carousel->video_path || $carousel->video_url);
                if (! $hasExistingVideo) {
                    $validator->errors()->add('video', 'Une vidéo (fichier ou URL) est requise pour le type Vidéo.');
                }
            }
        });
    }
}
