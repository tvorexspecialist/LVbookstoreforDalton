<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateItemRequest extends FormRequest
{
    // Determine if the user is authorized to make this request
    public function authorize()
    {
        return true;
    }

    // Get the validation rules that apply to the request
    public function rules()
    {
		return [
			'title'		 => 'required|min:4|max:80',
			'content'    => 'required|min:4|max:900',
			'category'	 => 'required',
			'type' 		 => 'required',
			'price1' 	 => 'required|numeric',
			'price2' 	 => 'required|numeric',
		];
	}

	// Custom messages
	public function messages()
    {
        return [
            'title.required' 		=> trans('items.title_required'),
            'content.required' 		=> trans('items.content_required'),
            'category.required' 	=> trans('items.category_required'),
            'type.required' 		=> trans('items.type_required'),
            'image.required'	    => trans('items.image_required'),
            'price1.required' 		=> trans('items.price_required'),
            'price2.required' 		=> trans('items.price_required'),
            'title.min' 			=> trans('items.title_min'),
            'content.min'			=> trans('items.content_min'),
            'title.max'				=> trans('items.title_max'),
            'content.max'			=> trans('items.content_max'),
            'price1.numeric'		=> trans('items.price_numeric'),
            'price2.numeric'		=> trans('items.price_numeric')
        ];
    }
}
