<?php

namespace Webkul\Shop\DataGrids;

use Illuminate\Support\Facades\DB;
use Webkul\Ui\DataGrid\DataGrid;

class OffersDataGrid extends DataGrid
{
    protected $index = 'id';

    protected $sortOrder = 'desc';

    public function prepareQueryBuilder()
    {
        $queryBuilder = DB::table('offers')
            ->where('author_id', auth()->guard('customer')->user()->id);

        $this->addFilter('status', 'offers.status');
        $this->addFilter('created_at', 'offers.created_at');

        $this->setQueryBuilder($queryBuilder);
    }

    public function addColumns()
    {
        $this->addColumn([
            'index'      => 'id',
            'label'      => trans('shop::app.customer.account.offer.id'),
            'type'       => 'integer',
            'searchable' => false,
            'sortable'   => true,
            'filterable' => true,
        ]);

        $this->addColumn([
            'index'      => 'name',
            'label'      => trans('shop::app.customer.account.offer.name'),
            'type'       => 'string',
            'searchable' => true,
            'sortable'   => true,
            'filterable' => true,
            'closure'    => true,
        ]);

        $this->addColumn([
            'index'      => 'created_at',
            'label'      => trans('shop::app.customer.account.offer.date'),
            'type'       => 'datetime',
            'searchable' => false,
            'sortable'   => true,
            'filterable' => true,
        ]);

        $this->addColumn([
            'index'      => 'status',
            'label'      => trans('shop::app.customer.account.offer.status'),
            'type'       => 'string',
            'searchable' => false,
            'sortable'   => true,
            'filterable' => true,
            'closure'    => true,
            'wrapper'    => function ($value) {
                if ($value->status == 1) {
                    return trans('shop::app.customer.account.offer.pending');
                } elseif ($value->status == 2) {
                    return trans('shop::app.customer.account.offer.available');
                } elseif ($value->status == 3) {
                    return trans('shop::app.customer.account.offer.expired');
                }
            }
        ]);

        $this->addColumn([
            'index'      => 'info',
            'label'      => trans('shop::app.customer.account.offer.info'),
            'type'       => 'string',
            'searchable' => false,
            'sortable'   => false,
            'filterable' => false,
        ]);

        $this->addColumn([
            'index'      => 'id',
            'label'      => trans('shop::app.customer.account.offer.delete'),
            'type'       => 'string',
            'searchable' => false,
            'sortable'   => false,
            'filterable' => false,
            'closure'    => true,
            'wrapper'    => function($value){
                return '
                <a href="' . route('customer.offer.delete', $value->id) . '" target="_blank">
                    <svg class="bi bi-trash-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" d="M2.5 1a1 1 0 00-1 1v1a1 1 0 001 1H3v9a2 2 0 002 2h6a2 2 0 002-2V4h.5a1 1 0 001-1V2a1 1 0 00-1-1H10a1 1 0 00-1-1H7a1 1 0 00-1 1H2.5zm3 4a.5.5 0 01.5.5v7a.5.5 0 01-1 0v-7a.5.5 0 01.5-.5zM8 5a.5.5 0 01.5.5v7a.5.5 0 01-1 0v-7A.5.5 0 018 5zm3 .5a.5.5 0 00-1 0v7a.5.5 0 001 0v-7z" clip-rule="evenodd"/>
                    </svg>
                </a>';
            }
        ]);
    }
}