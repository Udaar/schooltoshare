<?php

namespace Bimmunity\Invoice\Http\Requests;

use App\Http\Requests\Request;
use Bimmunity\Invoice\Models\ExpensesType;

class UpdateExpensesTypeRequest extends Request
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
        return ExpensesType::$rules;
    }
}
