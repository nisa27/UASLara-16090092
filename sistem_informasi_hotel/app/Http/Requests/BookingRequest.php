<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookingRequest extends FormRequest
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
        
        if (request()->isMethod('post')) {
        $rules['nama'] = 'required|string|max:30|';
        // $rules['no_kamar']   = 'required|string|size:3|unique:kamar,no_kamar';
        }
        if (request()->isMethod('delete')) {
            $rules['id'] = 'required|int';
        }
        if (request()->isMethod('patch')) {
            // $rules['no_kamar'] = 'required|string|size:3|unique:kamar,no_kamar,'.$this->get('id').',id';
        }
        $rules = [
            'nama' => 'required|string|max:30',
            'id_kamar' => 'required',
            'no_hp' => 'required',
            'alamat' => 'required',
            'check_in' => 'required|date',
            'check_out' => 'required|date',
        ];
        return $rules;
        //  if($this->method() == 'PATCH'){
        //     $no_kamar_rules = 'required|string|size:4|unique:kamar,no_kamar,'.
        //     $this->get('id');
        // }else{
        //     $no_kamar_rules = 'required|string|size:4|unique:kamar,no_kamar';
        // }
        
    }
}
