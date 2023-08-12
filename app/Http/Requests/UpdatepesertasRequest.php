<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatepesertasRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'txtidpesertas' => 'require|unique:pesertas,idpesertas|min:7|max:7',
            'txtpendaftaran' => 'require|unique:pesertas,no_pendaftaran',
            'txttempatlahir' => 'require|unique:pesertas,tempat_lahir',
            'txttanggallahir' => 'require|unique:pesertas,tanggal_lahir',
            'txtsarjana' => 'require|unique:pesertas,sarjana',
            'txtdakultas' => 'require|unique:pesertas,pendidikan_fakultas',
            'txtuniv' => 'require|unique:pesertas,pendidikan_universitas',
            'txtorganisasi' => 'require|unique:pesertas,organisasi',
            'txtketerampilan' => 'require|unique:pesertas,keterampilan',
            'txtkota' => 'require|unique:pesertas,kota',
            'txthandphone' => 'require|unique:pesertas,handphone',
            'txtname' => 'require|unique:pesertas,name',
            'txtphone' => 'require|unnumeric|uniqid:pesertas,telepon',
            'txtalamat' => 'require|unique:pesertas,alamat',
            'txtgender' => 'require|unique:pesertas,jenis_kelamin',
            'txtemail' => 'require|email|unique:pesertas,email',
        ];
    }
}
