<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class ResidenceRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg,svg|max:10000',
            'links.*' => ['nullable', 'regex:[^(?:<iframe[^>]*)(?:(?:\/>)|(?:>.*?<\/iframe>))$]'],
            'videos.*' => ['nullable', 'regex:[^(?:https?:\/\/)?(?:m\.|www\.)?(?:youtu\.be\/|youtube\.com\/(?:embed\/|v\/|watch\?v=|watch\?.+&v=))((\w|-){11})(?:\S+)?$]'],
            'title' => 'required|string|max:255|unique:residences',
            'date' => 'nullable|date_format:Y-m-d',
            'date_to' => 'nullable|date_format:Y-m-d',
            'description' => 'nullable|string',
            'location' => 'nullable|string',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'A title is required for the creation of a residency.',
            'title.unique' => 'A residency with this title already exists. Please choose a unique title.',
            'title.max' => 'The title you submitted is too long, a maximum of 50 characters is allowed.',
            'date.format' => 'The submitted date wasn&quot;t of the right format. example; 2024-05-31',
            'date_to.format' => 'The submitted date wasn&quot;t of the right format. example; 2024-05-31',
            'images.*.image' => 'One or more of the submitted files was not an image.',
            'images.*.max' => 'A maximum size of 10MB is allowed per image.',
            'images.*.mimes' => 'One or more of the submitted images were of the wrong filetype. accepted filetypes: .jpeg, .jpg, .png, .svg',
            'links.*.regex' => 'One or more of the submitted links was not a valid bandcamp iframe.',
            'videos.*.regex' => 'One or more of the submitted videos was not a valid YouTube link.'
        ];
    }
}
