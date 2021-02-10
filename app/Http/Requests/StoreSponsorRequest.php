<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSponsorRequest extends FormRequest
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
            'name' => ['required', 'string'],
            'email' => ['string', 'required', 'unique:users'],
            'username' => ['sometimes', 'string'], //generated
            'slug' => ['sometimes', 'string'], //generated
            'password' => ['string', 'required'],
            'phone' => ['nullable', 'integer'],
            'profile_photo_path' => [ 'nullable', 'string'],
            'cover_photo_path' => ['sometimes', 'string'], //only when its included in input array
            'account_type' => ['required', 'string'],
            'display_name' => ['nullable', 'string'],
            'phone_1' => ['nullable', 'integer'],
            'phone_2' => ['nullable', 'integer'],
            'sponsor_type' => ['string'],
            'location'  => [ 'nullable', 'string'],
            'about' => [ 'nullable', 'string'],
            'website' => ['nullable', 'string'],
            'twitter' => ['nullable', 'string'],
            'linkedin' => ['nullable', 'string'],
            'facebook' => ['nullable', 'string'],



        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            // 'title.required' => 'A title is required',
            // 'body.required'  => 'A message is required',
        ];
    }



}
