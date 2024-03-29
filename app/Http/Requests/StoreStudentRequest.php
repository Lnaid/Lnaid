<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreStudentRequest extends FormRequest
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
            'username' => ['sometimes', 'unique:users', 'string'], //generated
            'password' => ['string', 'required'],
            'phone' => ['nullable', 'unique:users', 'string'],
            'profile_photo_path' => [ 'nullable', 'string'],
            'cover_photo_path' => ['sometimes', 'string'], //only when its included in input array
            'account_type' => ['nullable', 'string'],

            'gender' => ['nullable', 'string'],
            'pronoun' => ['nullable', 'string'],
            'dob' => ['nullable', 'string'],
            'state' => ['nullable', 'string'],
            'country' => ['nullable', 'string'],

            'school_id' => [ 'required', 'string'],
            'course' => [ 'nullable', 'string'],
            'department'  => ['nullable', 'string'],
            'falculty' => [ 'nullable', 'string'],
            'level' => [ 'nullable', 'integer'],
            'program_type' => [ 'required', 'string'],
            'matric_no' => [ 'nullable', 'string'],
            'admission_year' => [ 'nullable', 'string'],
            'graduation_year' => [ 'nullable', 'string'],
            'program_duration' => [ 'nullable', 'string'],
            'school_email' => [ 'nullable', 'string'],

            'phone_2' => ['nullable', 'string'],
            'about' => [ 'nullable', 'string'],
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
            'school_id.required' => 'Please choose a choose',
            // 'body.required'  => 'A message is required',
        ];
    }



}
