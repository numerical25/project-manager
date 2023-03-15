<?php

namespace App\Http\Requests;

use App\Http\Response\DefaultReponse;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\Validator;

class WorkRequestRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'project_name' => 'required',
            'description' => 'required',
            'business_case' => 'required',
            'consequences' => 'required',
            'risk_level_id' => 'required',
            'objectives' => 'required',
            'long_term_goals' => 'required',
            'metrics_to_compare' => 'required',
        ];
    }

    /**
     * Returns validations errors.
     *
     * @param Validator $validator
     * @throws  HttpResponseException
     */
    protected function failedValidation(Validator|\Illuminate\Contracts\Validation\Validator $validator)
    {
        if ($this->wantsJson() || $this->ajax()) {
            // throw new HttpResponseException(response()->json($validator->errors(), 422));
            throw new HttpResponseException(response()->json(new DefaultReponse($validator->errors(),
                'Fields are required',  false, 422), 422));
        }
        // parent::failedValidation($validator);
    }
}
