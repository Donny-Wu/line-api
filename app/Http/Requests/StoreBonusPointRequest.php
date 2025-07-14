<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\BonusPoint;
class StoreBonusPointRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
            'vendor_id'     => 'required|exists:vendors,id',
            'consumer_id'   => 'nullable|exists:consumers,id',
            'offer_points'  => 'required|integer|min:1',
            'type'          => "required|integer|in:".BonusPoint::TYPE_LIMIT.",".BonusPoint::TYPE_PERMANENT,
            'start_at'      => 'exclude_if:type,'.BonusPoint::TYPE_PERMANENT.'|required|date',
            'end_at'        => 'exclude_if:type,'.BonusPoint::TYPE_PERMANENT.'|required|date|after:start_at',
        ];
    }
}
