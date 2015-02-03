<?php
use Laracasts\Validation\FormValidator;

class FormDatHang extends FormValidator
{
    protected $rules = array(
        'name'          => 'required',
        'phone'         => 'required',
        'address'       => 'required',
        'delivery_date' => 'required',
        'amount'        => 'required',
        'type'        => 'required',
    );

    protected $messages = [
        'required' => 'Bạn chưa điền thông tin.'
    ];
}
