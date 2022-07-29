<?php

namespace App\DataTables;

use App\Models\Dokumentasi;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Column;
use Illuminate\Support\Facades\Auth;

class DokumentasiDataTable extends DataTable
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

        return $dataTable->addColumn('action', 'dokumentasis.datatables_actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Dokumentasi $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Dokumentasi $model)
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
            'id' => new Column(['title' => __('models/dokumentasis.fields.id'), 'data' => 'id','searchable' => false]),
            'desa' => new Column(['title' => __('models/dokumentasis.fields.desa'), 'data' => 'desa','searchable' => false]),
            'kategori' => new Column(['title' => __('models/dokumentasis.fields.kategori'), 'data' => 'kategori','searchable' => false]),
            'nama' => new Column(['title' => __('models/dokumentasis.fields.nama'), 'data' => 'nama','searchable' => false]),
            'file' => new Column(['title' => __('models/dokumentasis.fields.file'), 'data' => 'file','searchable' => false]),
            'keterangan' => new Column(['title' => __('models/dokumentasis.fields.keterangan'), 'data' => 'keterangan','searchable' => false])
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'dokumentasis_datatable_' . time();
    }
}
