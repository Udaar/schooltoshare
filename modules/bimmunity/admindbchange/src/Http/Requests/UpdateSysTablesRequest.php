<?php

namespace Bimmunity\Admindbchange\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Bimmunity\Admindbchange\Models\SysTables;

class UpdateSysTablesRequest extends FormRequest
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
        return SysTables::$rules;
    }
}
