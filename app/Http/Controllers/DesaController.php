<?php

namespace App\Http\Controllers;

use App\DataTables\DesaDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateDesaRequest;
use App\Http\Requests\UpdateDesaRequest;
use App\Repositories\DesaRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class DesaController extends AppBaseController
{
    /** @var DesaRepository $desaRepository*/
    private $desaRepository;

    public function __construct(DesaRepository $desaRepo)
    {
        $this->desaRepository = $desaRepo;
    }

    /**
     * Display a listing of the Desa.
     *
     * @param DesaDataTable $desaDataTable
     *
     * @return Response
     */
    public function index(DesaDataTable $desaDataTable)
    {
        return $desaDataTable->render('desas.index');
    }

    /**
     * Show the form for creating a new Desa.
     *
     * @return Response
     */
    public function create()
    {
        return view('desas.create');
    }

    /**
     * Store a newly created Desa in storage.
     *
     * @param CreateDesaRequest $request
     *
     * @return Response
     */
    public function store(CreateDesaRequest $request)
    {
        $input = $request->all();

        $desa = $this->desaRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/desas.singular')]));

        return redirect(route('desas.index'));
    }

    /**
     * Display the specified Desa.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $desa = $this->desaRepository->find($id);

        if (empty($desa)) {
            Flash::error(__('messages.not_found', ['model' => __('models/desas.singular')]));

            return redirect(route('desas.index'));
        }

        return view('desas.show')->with('desa', $desa);
    }

    /**
     * Show the form for editing the specified Desa.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $desa = $this->desaRepository->find($id);

        if (empty($desa)) {
            Flash::error(__('messages.not_found', ['model' => __('models/desas.singular')]));

            return redirect(route('desas.index'));
        }

        return view('desas.edit')->with('desa', $desa);
    }

    /**
     * Update the specified Desa in storage.
     *
     * @param int $id
     * @param UpdateDesaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDesaRequest $request)
    {
        $desa = $this->desaRepository->find($id);

        if (empty($desa)) {
            Flash::error(__('messages.not_found', ['model' => __('models/desas.singular')]));

            return redirect(route('desas.index'));
        }

        $desa = $this->desaRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/desas.singular')]));

        return redirect(route('desas.index'));
    }

    /**
     * Remove the specified Desa from storage.
     *
     * @param int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $desa = $this->desaRepository->find($id);

        if (empty($desa)) {
            Flash::error(__('messages.not_found', ['model' => __('models/desas.singular')]));

            return redirect(route('desas.index'));
        }

        $this->desaRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/desas.singular')]));

        return redirect(route('desas.index'));
    }
}
