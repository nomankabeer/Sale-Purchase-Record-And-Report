<?php

namespace App\DataTables;

use App\Customers as Customer ;
use App\Models\Bike;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class BikeDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ;
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Bike $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Bike $model)
    {
//        return $model->newQuery();
        $data = Bike::select();
        return $this->applyScopes($data);
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->setTableId('bike-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->dom('Bfrtip')
                    ->orderBy(1)
                    ->buttons(
//                        Button::make('csv'),
                        Button::make('excel'),
//                        Button::make('reset'),
                        Button::make('reload')
                    );
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            Column::make('id'),
            Column::make('bike_no'),
            Column::make('engine_no'),
            Column::make('chassis_no'),
            Column::make('purchase_price'),
            Column::make('sold_price'),
            Column::make('color'),
            Column::make('purchase_date'),
            Column::make('sold_date'),
            Column::make('created_at'),
            Column::make('updated_at'),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Customers_' . date('YmdHis');
    }
}
