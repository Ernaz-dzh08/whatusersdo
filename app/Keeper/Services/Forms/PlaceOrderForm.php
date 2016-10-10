<?php

namespace App\Keeper\Services\Forms;


class PlaceOrderForm extends AbstractForm
{
    protected $rules = array(
        'line_id' => 'required',
        'sku' => 'required',
        'qty' => 'required'
    );

}