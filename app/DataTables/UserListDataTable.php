<?php

namespace App\DataTables;

use App\Customers as Customer ;
use App\Models\Bike;
use App\Models\UserList;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class UserListDataTable extends DataTable
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
    public function query(UserList $model)
    {
//        return $model->newQuery();
        $data = UserList::select();
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
                    ->setTableId('user-list-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->dom('Bfrtip')
                    ->orderBy(1)
                    ->buttons(
//                        Button::make('csv'),
                        Button::make('excel'),
//                        Button::make('reset'),
                        Button::make('reload')
//                Button::make('edit')->editor('editor')
                    )


//            ->addAction([ 'data' => 'id'])


            /*->addColumn(['data' => 'id' , 'name'           => 'action'],function ($ues){
                return $this->getActionColumn($ues);
            })*/




/*            ->addColumn(['data'           => 'id',
                'name'           => 'action',
                'title'          => 'Action'])*/


            ->addAction([
                'defaultContent' => '<a class="btn btn-info" href="'.route('user_list.create').'">Edit</a>',
//                'defaultContent' => '',
                'data'           => 'action',//$this->getActionColumn($this),
                'name'           => 'action',
                'title'          => 'Action',
                'render'         => null,
                'orderable'      => false,
                'searchable'     => false,
                'exportable'     => false,
                'printable'      => true,
                'footer'         => '',
            ] )




            /*->editor(
                Editor::make()
                    ->fields([
                        Fields\Text::make('first_name'),
                    ])
                    ->idSrc(['id'])
            )*/

            ;

    }

    /**
     * Get columns.
     *
     * @return array
     */

    protected function getActionColumn($data)
    {
//        dd($data);
        $showUrl = route('user_list.edit', 1);//$data->id);
        $editUrl = route('user_list.edit', 1);//$data->id);
        return "<a class='waves-effect btn btn-success' data-value='$data->id' href='$showUrl'><i class='material-icons'>visibility</i>Details</a> 
                        <a class='waves-effect btn btn-primary' data-value='$data->id' href='$editUrl'><i class='material-icons'>edit</i>Update</a>
                        <button class='waves-effect btn deepPink-bgcolor delete' data-value='$data->id' ><i class='material-icons'>delete</i>Delete</button>";
    }

    protected function getColumns()
    {
        return [
            Column::make('id' ),
            Column::make('first_name'),
            Column::make('last_name'),
            Column::make('phone_no'),
            Column::make('cnic_no'),
            Column::make('user_picture'),
            Column::make('created_at'),
            Column::make('updated_at'),


//            Column::computed('id' , 'sdfsdf' , 'ssssssss ')->render($this->id),
//            Column::make('id')->renderRaw($this->first_name),
//            Column::make('first_name')->render($this->first_name),

//            Column::computed('id'),

//            Column::computed('id')
//                ->exportable(false)
//                ->printable(false)
//                ->width(60)
//                ->addClass('text-center')
//                ->render("dfsdfsdf")
//            ,
//            Column::make('id')->renderRaw("wwwwwwwww")
//            Column::make('id')->parseRender("wwwwwwwww")

        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'UserList_' . date('YmdHis');
    }
}
