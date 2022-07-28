<?php

namespace App\Http\Controllers;

use App\DataTables\KelembagaanDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateKelembagaanRequest;
use App\Http\Requests\UpdateKelembagaanRequest;
use App\Repositories\KelembagaanRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class KelembagaanController extends AppBaseController
{
    /** @var KelembagaanRepository $kelembagaanRepository*/
    private $kelembagaanRepository;

    public function __construct(KelembagaanRepository $kelembagaanRepo)
    {
        $this->kelembagaanRepository = $kelembagaanRepo;
    }

    /**
     * Display a listing of the Kelembagaan.
     *
     * @param KelembagaanDataTable $kelembagaanDataTable
     *
     * @return Response
     */
    public function index(KelembagaanDataTable $kelembagaanDataTable)
    {
        return $kelembagaanDataTable->render('kelembagaans.index');
    }

    /**
     * Show the form for creating a new Kelembagaan.
     *
     * @return Response
     */
    public function create()
    {
        return view('kelembagaans.create');
    }

    /**
     * Store a newly created Kelembagaan in storage.
     *
     * @param CreateKelembagaanRequest $request
     *
     * @return Response
     */
    public function store(CreateKelembagaanRequest $request)
    {
        $input = $request->all();

        $kelembagaan = $this->kelembagaanRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/kelembagaans.singular')]));

        return redirect(route('kelembagaans.index'));
    }

    /**
     * Display the specified Kelembagaan.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $kelembagaan = $this->kelembagaanRepository->find($id);

        if (empty($kelembagaan)) {
            Flash::error(__('messages.not_found', ['model' => __('models/kelembagaans.singular')]));

            return redirect(route('kelembagaans.index'));
        }

        return view('kelembagaans.show')->with('kelembagaan', $kelembagaan);
    }

    /**
     * Show the form for editing the specified Kelembagaan.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $kelembagaan = $this->kelembagaanRepository->find($id);

        if (empty($kelembagaan)) {
            Flash::error(__('messages.not_found', ['model' => __('models/kelembagaans.singular')]));

            return redirect(route('kelembagaans.index'));
        }

        return view('kelembagaans.edit')->with('kelembagaan', $kelembagaan);
    }

    /**
     * Update the specified Kelembagaan in storage.
     *
     * @param int $id
     * @param UpdateKelembagaanRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateKelembagaanRequest $request)
    {
        $kelembagaan = $this->kelembagaanRepository->find($id);

        if (empty($kelembagaan)) {
            Flash::error(__('messages.not_found', ['model' => __('models/kelembagaans.singular')]));

            return redirect(route('kelembagaans.index'));
        }

        $kelembagaan = $this->kelembagaanRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/kelembagaans.singular')]));

        return redirect(route('kelembagaans.index'));
    }

    /**
     * Remove the specified Kelembagaan from storage.
     *
     * @param int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $kelembagaan = $this->kelembagaanRepository->find($id);

        if (empty($kelembagaan)) {
            Flash::error(__('messages.not_found', ['model' => __('models/kelembagaans.singular')]));

            return redirect(route('kelembagaans.index'));
        }

        $this->kelembagaanRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/kelembagaans.singular')]));

        return redirect(route('kelembagaans.index'));
    }
}
