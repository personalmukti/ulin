<?php

namespace App\Http\Controllers;

use App\DataTables\PerencanaanDataTable;
use App\Http\Requests;
use App\Http\Requests\CreatePerencanaanRequest;
use App\Http\Requests\UpdatePerencanaanRequest;
use App\Repositories\PerencanaanRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class PerencanaanController extends AppBaseController
{
    /** @var PerencanaanRepository $perencanaanRepository*/
    private $perencanaanRepository;

    public function __construct(PerencanaanRepository $perencanaanRepo)
    {
        $this->perencanaanRepository = $perencanaanRepo;
    }

    /**
     * Display a listing of the Perencanaan.
     *
     * @param PerencanaanDataTable $perencanaanDataTable
     *
     * @return Response
     */
    public function index(PerencanaanDataTable $perencanaanDataTable)
    {
        return $perencanaanDataTable->render('perencanaans.index');
    }

    /**
     * Show the form for creating a new Perencanaan.
     *
     * @return Response
     */
    public function create()
    {
        return view('perencanaans.create');
    }

    /**
     * Store a newly created Perencanaan in storage.
     *
     * @param CreatePerencanaanRequest $request
     *
     * @return Response
     */
    public function store(CreatePerencanaanRequest $request)
    {
        $input = $request->all();

        $perencanaan = $this->perencanaanRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/perencanaans.singular')]));

        return redirect(route('perencanaans.index'));
    }

    /**
     * Display the specified Perencanaan.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $perencanaan = $this->perencanaanRepository->find($id);

        if (empty($perencanaan)) {
            Flash::error(__('messages.not_found', ['model' => __('models/perencanaans.singular')]));

            return redirect(route('perencanaans.index'));
        }

        return view('perencanaans.show')->with('perencanaan', $perencanaan);
    }

    /**
     * Show the form for editing the specified Perencanaan.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $perencanaan = $this->perencanaanRepository->find($id);

        if (empty($perencanaan)) {
            Flash::error(__('messages.not_found', ['model' => __('models/perencanaans.singular')]));

            return redirect(route('perencanaans.index'));
        }

        return view('perencanaans.edit')->with('perencanaan', $perencanaan);
    }

    /**
     * Update the specified Perencanaan in storage.
     *
     * @param int $id
     * @param UpdatePerencanaanRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePerencanaanRequest $request)
    {
        $perencanaan = $this->perencanaanRepository->find($id);

        if (empty($perencanaan)) {
            Flash::error(__('messages.not_found', ['model' => __('models/perencanaans.singular')]));

            return redirect(route('perencanaans.index'));
        }

        $perencanaan = $this->perencanaanRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/perencanaans.singular')]));

        return redirect(route('perencanaans.index'));
    }

    /**
     * Remove the specified Perencanaan from storage.
     *
     * @param int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $perencanaan = $this->perencanaanRepository->find($id);

        if (empty($perencanaan)) {
            Flash::error(__('messages.not_found', ['model' => __('models/perencanaans.singular')]));

            return redirect(route('perencanaans.index'));
        }

        $this->perencanaanRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/perencanaans.singular')]));

        return redirect(route('perencanaans.index'));
    }
}
