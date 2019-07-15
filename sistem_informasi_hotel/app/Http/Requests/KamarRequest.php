<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KamarRequest extends FormRequest
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
        $rules['nama_kamar'] = 'required|string|max:30|';
        $rules['no_kamar']   = 'required|string|size:3|unique:kamar,no_kamar';
        }
        if (request()->isMethod('delete')) {
            $rules['id'] = 'required|int';
        }
        if (request()->isMethod('patch')) {
            $rules['no_kamar'] = 'required|string|size:3|unique:kamar,no_kamar,'.$this->get('id').',id';
        }
        $rules = [
            'nama_kamar' => 'required|string|max:30',
            'id_tipekamar' => 'required',
            'harga' => 'required',
            'keterangan' => 'sometimes',
            'foto' => 'sometimes|image|max:500|mimes:jpeg,jpg,bmp,png',
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
