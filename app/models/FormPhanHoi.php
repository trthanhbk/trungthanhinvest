<?php
use Laracasts\Validation\FormValidator;

class FormPhanHoi extends FormValidator
{
    protected $rules = array(
        'name'          => 'required',
        'phone'         => 'required',
        'email'       => 'required',        
    );

    protected $messages = [
        'required' => 'Bạn chưa điền thông tin.'
    ];
}
