<?php

namespace Bimmunity\Bimmodels\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Bimmunity\Bimmodels\Models\Bim_model;

class CreateBim_modelRequest extends FormRequest
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
        return Bim_model::$rules;
    }
}
