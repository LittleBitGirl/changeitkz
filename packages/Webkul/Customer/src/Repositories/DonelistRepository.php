<?php

namespace Webkul\Customer\Repositories;

use Webkul\Core\Eloquent\Repository;

class DonelistRepository extends Repository
{
    /**
     * Specify Model class name
     *
     * @return mixed
     */

    function model()
    {
        return 'Webkul\Customer\Contracts\Donelist';
    }

    /**
     * @param  array  $data
     * @return \Webkul\Customer\Contracts\Donelist
     */
    public function create(array $data)
    {
        $donelist = $this->model->create($data);

        return $donelist;
    }

    /**
     * @param  array  $data
     * @param  int  $id
     * @param  string  $attribute
     * @return \Webkul\Customer\Contracts\Donelist
     */
    public function update(array $data, $id, $attribute = "id")
    {
        $donelist = $this->find($id);

        $donelist->update($data);

        return $donelist;
    }

    /**
     * To retrieve products with donelist for a listing resource.
     *
     * @param  int  $id
     * @return \Webkul\Customer\Contracts\Donelist
     */
    public function getItemsWithProducts($id)
    {
        return $this->model->find($id)->item_donelist;
    }

    /**
     * get customer wishlist Items.
     *
     * @return \Illuminate\Support\Collection
     */
    public function getCustomerDonelist()
    {
        return $this->model->where([
            'channel_id'  => core()->getCurrentChannel()->id,
            'customer_id' => auth()->guard('customer')->user()->id,
        ])->paginate(5);
    }
}