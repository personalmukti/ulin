<?php

namespace App\Http\Controllers;

use App\DataTables\DokumentasiDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateDokumentasiRequest;
use App\Http\Requests\UpdateDokumentasiRequest;
use App\Repositories\DokumentasiRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;
use Illuminate\Support\Facades\Storage;

class DokumentasiController extends AppBaseController
{
    /** @var DokumentasiRepository $dokumentasiRepository*/
    private $dokumentasiRepository;

    public function __construct(DokumentasiRepository $dokumentasiRepo)
    {
        $this->dokumentasiRepository = $dokumentasiRepo;
    }

    /**
     * Display a listing of the Dokumentasi.
     *
     * @param DokumentasiDataTable $dokumentasiDataTable
     *
     * @return Response
     */
    public function index(DokumentasiDataTable $dokumentasiDataTable)
    {
        return $dokumentasiDataTable->render('dokumentasis.index');
    }

    /**
     * Show the form for creating a new Dokumentasi.
     *
     * @return Response
     */
    public function create()
    {
        return view('dokumentasis.create');
    }

    /**
     * Store a newly created Dokumentasi in storage.
     *
     * @param CreateDokumentasiRequest $request
     *
     * @return Response
     */
    public function store(CreateDokumentasiRequest $request)
    {
        $input = $request->all();
        if ($request->hasFile('file')){

            //Validate the uploaded file
            $Validation = $request->validate([

                'file' => 'required|file|mimes:pdf|max:30000'
            ]);

            // cache the file
            $file = $Validation['file'];

            // generate a new filename. getClientOriginalExtension() for the file extension
            $filename = 'dokumentasi-' . time() . '.' . $file->getClientOriginalExtension();

            // save to storage/app/infrastructure as the new $filename
            $file-> move(public_path('public/storage'), $filename);
            $path = "/public/storage/".$filename;
        }

        $input['file'] = $path;

        $dokumentasi = $this->dokumentasiRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/dokumentasis.singular')]));

        return redirect(route('dokumentasis.index'));
    }

    /**
     * Display the specified Dokumentasi.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $dokumentasi = $this->dokumentasiRepository->find($id);

        if (empty($dokumentasi)) {
            Flash::error(__('messages.not_found', ['model' => __('models/dokumentasis.singular')]));

            return redirect(route('dokumentasis.index'));
        }

        return view('dokumentasis.show')->with('dokumentasi', $dokumentasi);
    }

    /**
     * Show the form for editing the specified Dokumentasi.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $dokumentasi = $this->dokumentasiRepository->find($id);

        if (empty($dokumentasi)) {
            Flash::error(__('messages.not_found', ['model' => __('models/dokumentasis.singular')]));

            return redirect(route('dokumentasis.index'));
        }

        return view('dokumentasis.edit')->with('dokumentasi', $dokumentasi);
    }

    /**
     * Update the specified Dokumentasi in storage.
     *
     * @param int $id
     * @param UpdateDokumentasiRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDokumentasiRequest $request)
    {
        $dokumentasi = $this->dokumentasiRepository->find($id);

        if (empty($dokumentasi)) {
            Flash::error(__('messages.not_found', ['model' => __('models/dokumentasis.singular')]));

            return redirect(route('dokumentasis.index'));
        }

        $dokumentasi = $this->dokumentasiRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/dokumentasis.singular')]));

        return redirect(route('dokumentasis.index'));
    }

    /**
     * Remove the specified Dokumentasi from storage.
     *
     * @param int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $dokumentasi = $this->dokumentasiRepository->find($id);

        if (empty($dokumentasi)) {
            Flash::error(__('messages.not_found', ['model' => __('models/dokumentasis.singular')]));

            return redirect(route('dokumentasis.index'));
        }

        $this->dokumentasiRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/dokumentasis.singular')]));

        return redirect(route('dokumentasis.index'));
    }
}
