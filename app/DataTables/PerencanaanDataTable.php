<?php

namespace App\DataTables;

use App\Models\Perencanaan;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Column;

class PerencanaanDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        $dataTable = new EloquentDataTable($query);

        return $dataTable->addColumn('action', 'perencanaans.datatables_actions')
        ->editColumn('perencanaan', '<span class="badge badge-warning">{{$perencanaan}}</span> ')
        ->escapeColumns('perencanaan')
        ->editColumn('pelaksanaan', '<span class="badge badge-warning">{{$pelaksanaan}}</span> ')
        ->escapeColumns('pelaksanaan')
        ->editColumn('pelaporan', '<button class="btn btn-primary">{{$pelaporan}}</button> ')
        ->escapeColumns('pelaporan')
      ;
       
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Perencanaan $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Perencanaan $model)
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->addAction(['width' => '120px', 'printable' => false, 'title' => __('crud.action')])
            ->parameters([
                'dom'       => 'Bfrtip',
                'stateSave' => true,
                'order'     => [[0, 'desc']],
                'buttons'   => [
                   
                    [
                       'extend' => 'export',
                       'className' => 'btn btn-default btn-sm no-corner',
                       'text' => '<i class="fa fa-download"></i> ' .__('auth.app.export').''
                    ],
                    [
                       'extend' => 'print',
                       'className' => 'btn btn-default btn-sm no-corner',
                       'text' => '<i class="fa fa-print"></i> ' .__('auth.app.print').''
                    ],
                    [
                       'extend' => 'reset',
                       'className' => 'btn btn-default btn-sm no-corner',
                       'text' => '<i class="fa fa-undo"></i> ' .__('auth.app.reset').''
                    ],
                    [
                       'extend' => 'reload',
                       'className' => 'btn btn-default btn-sm no-corner',
                       'text' => '<i class="fa fa-refresh"></i> ' .__('auth.app.reload').''
                    ],
                ],
                 'language' => [
                   'url' => url('//cdn.datatables.net/plug-ins/1.10.12/i18n/English.json'),
                 ],
            ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            'id' => new Column(['title' => __('models/perencanaans.fields.id'), 'data' => 'id','searchable' => false]),
            'desa' => new Column(['title' => __('models/perencanaans.fields.desa'), 'data' => 'desa','searchable' => false]),
            'perencanaan' => new Column(['title' => __('models/perencanaans.fields.perencanaan'), 'data' => 'perencanaan','searchable' => false]),
            'pelaksanaan' => new Column(['title' => __('models/perencanaans.fields.pelaksanaan'), 'data' => 'pelaksanaan','searchable' => false]),
            'pelaporan' => new Column(['title' => __('models/perencanaans.fields.pelaporan'), 'data' => 'pelaporan','searchable' => false]),
            'keterangan' => new Column(['title' => __('models/perencanaans.fields.keterangan'), 'data' => 'keterangan','searchable' => false])
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'perencanaans_datatable_' . time();
    }
}
