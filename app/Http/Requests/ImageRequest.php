<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ImageRequest extends FormRequest
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
        return [
            
        ];
    }
	 public function rules()
    {
        return [
            'passwordOld' => 'required',
			'password' => 'required|min:6',
			'passwordConfirm' => 'required|same:password',
        ];
    }
	
	public function messages() {
		
		return [
			'passwordOld.required' => 'Ancien mot de passe obligatoire',
			'password.required' => 'nouveau mot de passe obligatoire',
			'passwordConfirm.required' => 'confirmation obligatoire',
			'passwordConfirm.same' => 'le mot de passe est différent',
		];
	}
}

}
 