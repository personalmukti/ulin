<?php

namespace App\DataTables;

use App\Models\Kelembagaan;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Column;
use Illuminate\Support\Facades\Auth;

class KelembagaanDataTable extends DataTable
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

        return $dataTable->addColumn('action', 'kelembagaans.datatables_actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Kelembagaan $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Kelembagaan $model)
    {
        if(Auth::user()->role=='admin') {
            return $model->newQuery();
            }else{
               $query =$model->newQuery();
                return $query->where('desa', Auth::user()->name);
            }
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
            'id' => new Column(['title' => __('models/kelembagaans.fields.id'), 'data' => 'id','searchable' => false]),
            'desa' => new Column(['title' => __('models/kelembagaans.fields.desa'), 'data' => 'desa','searchable' => false]),
            'bpd' => new Column(['title' => __('models/kelembagaans.fields.bpd'), 'data' => 'bpd','searchable' => false]),
            'lkd' => new Column(['title' => __('models/kelembagaans.fields.lkd'), 'data' => 'lkd','searchable' => false]),
            'pkk' => new Column(['title' => __('models/kelembagaans.fields.pkk'), 'data' => 'pkk','searchable' => false]),
            'rt' => new Column(['title' => __('models/kelembagaans.fields.rt'), 'data' => 'rt','searchable' => false]),
            'rw' => new Column(['title' => __('models/kelembagaans.fields.rw'), 'data' => 'rw','searchable' => false]),
            'posyandu' => new Column(['title' => __('models/kelembagaans.fields.posyandu'), 'data' => 'posyandu','searchable' => false]),
            'karangtaruna' => new Column(['title' => __('models/kelembagaans.fields.karangtaruna'), 'data' => 'karangtaruna','searchable' => false]),
            'bumdes' => new Column(['title' => __('models/kelembagaans.fields.bumdes'), 'data' => 'bumdes','searchable' => false]),
            'lpm' => new Column(['title' => __('models/kelembagaans.fields.lpm'), 'data' => 'lpm','searchable' => false]),
            'keterangan' => new Column(['title' => __('models/kelembagaans.fields.keterangan'), 'data' => 'keterangan','searchable' => false])
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'kelembagaans_datatable_' . time();
    }
}
