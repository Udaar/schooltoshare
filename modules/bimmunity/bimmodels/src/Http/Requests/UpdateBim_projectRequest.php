<?php

namespace Bimmunity\Bimmodels\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Bimmunity\Bimmodels\Models\Bim_project;

class UpdateBim_projectRequest extends FormRequest
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
        return Bim_project::$rules;
    }
}
