<?php

namespace App\Keeper\Services\Forms;


class OrderForm extends AbstractForm
{

    protected $rules = array(
        'first_name' => 'required|min:2',
        'last_name' => 'required|min:2',
        'email' => 'required',
        'address_line1' => 'required|min:2',
        'city' => 'required',
        'post_code' => 'required|min:5'

    );

}