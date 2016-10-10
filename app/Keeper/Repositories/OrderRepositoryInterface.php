<?php

namespace App\Keeper\Repositories;


interface OrderRepositoryInterface extends BaseRepositoryInterface
{
	//public function __construct();
    public function getTotalOrder();
	
}