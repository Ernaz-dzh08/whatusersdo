<?php


namespace App\Keeper;

use Illuminate\Database\Eloquent\Model;

class PlaceOrder extends Model
{

    /**
     * The table associated with the model.
     *
     * @var string
     */
  protected $table = 'order_lines';
  protected $fillable = array('line_id','sku','qty');
}