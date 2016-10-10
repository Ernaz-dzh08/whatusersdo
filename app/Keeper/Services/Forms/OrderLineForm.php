<?php

namespace App\Keeper\Services\Forms;

class OrderLineForm extends AbstractForm
{

    /**
     * The validation rules to validate the input data against
     *
     * @var array
     */

    protected $rules = array(
        'line_id' => 'required',
        'sku' => 'required',
        'qty' => 'required'

    );

}