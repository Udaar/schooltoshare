<?php

namespace Bimmunity\Invoice\Http\Requests;

use App\Http\Requests\Request;
use Bimmunity\Invoice\Models\PaymentMethod;

class UpdatePaymentMethodRequest extends Request
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
        return PaymentMethod::$rules;
    }
}
