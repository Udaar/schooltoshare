<?php

namespace Bimmunity\Inventory\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Bimmunity\Inventory\Models\CompanyAccount;

class CreateCompanyAccountRequest extends FormRequest
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
        return CompanyAccount::$rules;
    }
}
