<?php


namespace App\Keeper\Repositories\Eloquent;

use App\Keeper\OrderLine;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Keeper\Repositories\OrderLineRepositoryInterface;
use App\Keeper\Services\Forms\OrderLineForm;


class OrderLineRepository extends AbstractRepository implements OrderLineRepositoryInterface
{


    /**
     * Create a new DBCategoryRepository instance
     *
     * @param \Keeper\Category $category
     */
    public function __construct(OrderLine $orderLine)
    {
        $this->model = $orderLine;
    }

    /**
     * Get an array of key-value ( id=>name ) pairs of all orderline
     * @return array
     */
    public function listAll()
    {
        $orderLine = $this->model->lists('name', 'id');
        return $orderLine;
    }

    /**
     * @param string $orderColumn
     * @param string $orderDir
     * @return mixed
     */
    public function findAll($orderColumn = 'created_at', $orderDir = 'desc')
    {
        $orderLine = $this->model
            ->orderBy($orderColumn, $orderDir)
            ->get();
        return $orderLine;
    }

    /**
     * Find a category by id
     * @param $id
     * @return mixed
     */
    public function findById($id)
    {
        return $this->model->find($id);
    }

    /**
     * Create a new category in the database
     * @param array $data
     * @return mixed
     */
    public function create(array $data)
    {

        $orderLine = $this->getNew();
        $orderLine->line_id = $data['line_id'];
        $orderLine->sku = $data['sku'];
        $orderLine->qty = $data['qty'];
        $orderLine->save();

        return $orderLine;
    }

    /**
     * Update the specific category in the database
     *
     * @param $id
     * @param array $data
     * @return mixed
     */
    public function update($id, array $data)
    {
        $orderLine = $this->findById($id);
        $orderLine->line_id = $data['line_id'];
        $orderLine->sku = $data['sku'];
        $orderLine->qty = $data['qty'];
        $orderLine->save();
        return $orderLine;

    }

    /**
     * Delete the specific orderline from the database.
     *
     * @param $id
     * @return mixed
     */
    public function delete($id)
    {
        $orderLine = $this->findById($id);
        $orderLine->delete();
    }


    /**
     * Return all the expenses
     *
     * @param string $type
     * @return mixed
     */
    public function findAllExpenses($type = 'Expense')
    {
        return $this->model->where('type', '=', $type)->get();

    }

    /**
     * Return all the incomes
     *
     * @param string $type
     * @return mixed
     */
    public function findAllIncomes($type = 'Income')
    {
        return $this->model->where('type', '=', $type)->get();
    }


    /**
     * Get the category create/update form service
     *
     * @return \Keeper\Services\Forms\CategoryForm
     */
    public function getForm()
    {
        return new OrderLineForm;
    }
}