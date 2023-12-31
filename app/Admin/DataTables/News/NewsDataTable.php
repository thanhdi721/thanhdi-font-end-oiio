<?php

namespace App\Admin\DataTables\News;

use App\Admin\DataTables\BaseDataTable;
use App\Admin\Repositories\News\NewsRepositoryInterface;
use App\Admin\Traits\GetConfig;

class NewsDataTable extends BaseDataTable
{

    use GetConfig;

    protected array $actions = ['reset', 'reload'];

    public function __construct(
        NewsRepositoryInterface $repository
    ){
        parent::__construct();

        $this->repository = $repository;
    }

    public function getView(){
        return [
            'action' => 'admin.news.datatable.action',
            'editlink' => 'admin.news.datatable.editlink',
        ];
    }

    public function dataTable($query)
    {
        $this->instanceDataTable = datatables()->eloquent($query)->addIndexColumn();
        $this->filterColumnCreatedAt();
        $this->editColumnId();
        $this->editColumnTitle();
        $this->editColumnCreatedAt();
        $this->addColumnAction();
        $this->rawColumnsNew();
        return $this->instanceDataTable;
    }

    public function query(\App\Models\News $model)
    {
        return $model->newQuery();
    }

    public function html()
    {
        $this->instanceHtml = $this->builder()
        ->setTableId('userTable')
        ->columns($this->getColumns())
        ->minifiedAjax()
        ->dom('Bfrtip')
        ->orderBy(0)
        ->selectStyleSingle();

        $this->htmlParameters();

        return $this->instanceHtml;
    }

    protected function setCustomColumns(){
        $this->customColumns = $this->traitGetConfigDatatableColumns('news');
    }

    protected function filename(): string
    {
        return 'News_' . date('YmdHis');
    }

    protected function filterColumnCreatedAt(){
        $this->instanceDataTable = $this->instanceDataTable->filterColumn('created_at', function($query, $keyword) {

            $query->whereDate('created_at', date('Y-m-d', strtotime($keyword)));

        });
    }

    protected function editColumnId(){
        $this->instanceDataTable = $this->instanceDataTable->editColumn('id', $this->view['editlink']);
    }
    protected function editColumnTitle(){
        $this->instanceDataTable = $this->instanceDataTable->editColumn('title', $this->view['editlink']);
    }
    protected function editColumnCreatedAt(){
        $this->instanceDataTable = $this->instanceDataTable->editColumn('created_at', '{{ date("d-m-Y", strtotime($created_at)) }}');
    }
    protected function addColumnAction(){
        $this->instanceDataTable = $this->instanceDataTable->addColumn('action', $this->view['action']);
    }
    protected function rawColumnsNew(){
        $this->instanceDataTable = $this->instanceDataTable->rawColumns(['title', 'action']);
    }
    protected function htmlParameters(){

        $this->parameters['buttons'] = $this->actions;

        $this->parameters['initComplete'] = "function () {

            moveSearchColumnsDatatable('#userTable');

            searchColumsDataTable(this);
        }";

        $this->instanceHtml = $this->instanceHtml
            ->parameters($this->parameters);
    }
}
