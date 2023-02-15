<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class EventRequest extends FormRequest
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
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg,svg',
            'title' => 'required|string|max:255|unique:events',
            'artists.*' => 'nullable',
            'date' => 'nullable|date_format:Y-m-d',
            'date_to' => 'nullable|date_format:Y-m-d',
            'description' => 'nullable|string',
            'location' => 'nullable|string',
            'doors' => 'nullable|date_format:H:i',
            'tickets' => ['nullable', 'regex:[^(https?:\/\/(?:www\.|(?!www))[a-zA-Z0-9][a-zA-Z0-9-]+[a-zA-Z0-9]\.[^\s]{2,}|www\.[a-zA-Z0-9][a-zA-Z0-9-]+[a-zA-Z0-9]\.[^\s]{2,}|https?:\/\/(?:www\.|(?!www))[a-zA-Z0-9]+\.[^\s]{2,}|www\.[a-zA-Z0-9]+\.[^\s]{2,})$]'],
            'additional_category' => 'string',
            'additional_description' => 'nullable|string|max:100',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'A title is required for the creation of an event.',
            'title.unique' => 'An event with this title already exists. Please choose a unique title.',
            'title.max' => 'The title you submitted is too long, a maximum of 50 characters is allowed.',
            'date.date_format' => "The submitted date wasn't of the right format (yyyy-mm-dd). example: 2024-05-31",
            'date_to.date_format' => "The submitted date wasn't of the right format (yyyy-mm-dd). example: 2024-05-31",
            'tickets.regex' => 'The ticket link you submitted was not a valid url.',
            'images.*.image' => 'One or more of the submitted files was not an image.',
            'images.*.mimes' => 'One or more of the submitted images were of the wrong filetype. accepted filetypes: .jpeg, .jpg, .png, .svg'
        ];
    }
}
