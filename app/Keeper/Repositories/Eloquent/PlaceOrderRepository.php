<?php

namespace App\Keeper\Repositories\Eloquent;

use App\Keeper\PlaceOrder;
use App\Keeper\Repositories\PlaceOrderRepositoryInterface;
use App\Keeper\Services\Forms\PlaceOrderForm;

class PlaceOrderRepository extends AbstractRepository implements PlaceOrderRepositoryInterface
{

    /**
     * Create a new DBPayerRepository instance
     * @param \Keeper\PaceOrder $placeOrder
     */

    public function __construct(PlaceOrder $placeOrder)
    {
        $this->model = $placeOrder;

    }


    /**
     * Get an array of key-value ( id=>name ) pairs of all place order
     * @return array
     */
    public function listAll()
    {
        return $this->model->lists('name', 'id');
    }

    /**
     * @param string $orderColumn
     * @param string $orderDir
     * @return mixed
     */
    public function findAll($orderColumn = 'created_at', $orderDir = 'desc')
    {
        $placeOrder = $this->model
            ->orderBy($orderColumn, $orderDir)
            ->get();
        return $placeOrder;
    }

    /**
     * Find a place order by id
     * @param $id
     * @return mixed
     */
    public function findById($id)
    {
        return $this->model->find($id);
    }

    /**
     * Create a new payer in the database
     * @param array $data
     * @return mixed
     */
    public function create(array $data)
    {
        $placeOrder = $this->getNew();
        $placeOrder->order_id = $data['order'];
        $placeOrder->line_id = $data['line_id'];
        $placeOrder->sku = $data['sku'];
        $placeOrder->qty = $data['qty'];
        $placeOrder->save();

        return $placeOrder;
    }

    /**
     * Update the specific payer in the database
     *
     * @param $id
     * @param array $data
     * @return mixed
     */
    public function update($id, array $data)
    {
        //$payer = new Payer();
        $payer = $this->findById($id);
        $payer->name = $data['name'];
        $payer->save();
        return $payer;

    }

    /**
     * Delete the specific payer from the database.
     *
     * @param $id
     * @return mixed
     */
    public function delete($id)
    {
        $payer = $this->findById($id);
        $payer->delete();
    }


    /**
     * Get the payer create/update form service
     *
     * @return \Keeper\Services\Forms\PayerForm
     */

    public function getForm()
    {
        return new PlaceOrderForm();
    }
}