<?php

namespace App\Http\Requests\Card;

use Illuminate\Foundation\Http\FormRequest;
use Carbon\Carbon;

class CreateCardRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Prepare the data for validation.
     */
    protected function prepareForValidation(): void
    {
        $this->merge([
            'cut_day' => Carbon::parse($this->cut_day)->day,
            'pay_day' => Carbon::parse($this->pay_day)->day,
        ]);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'logo' => 'nullable',
            'card_name' => 'required|string|max:250',
            'cut_day' => 'required|integer',
            'pay_day' => 'required|integer',
            'credit_limit' => 'required|numeric|min:0',
        ];
    }
}
