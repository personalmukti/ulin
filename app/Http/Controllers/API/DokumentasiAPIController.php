<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateDokumentasiAPIRequest;
use App\Http\Requests\API\UpdateDokumentasiAPIRequest;
use App\Models\Dokumentasi;
use App\Repositories\DokumentasiRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use App\Http\Resources\DokumentasiResource;
use Response;

/**
 * Class DokumentasiController
 * @package App\Http\Controllers\API
 */

class DokumentasiAPIController extends AppBaseController
{
    /** @var  DokumentasiRepository */
    private $dokumentasiRepository;

    public function __construct(DokumentasiRepository $dokumentasiRepo)
    {
        $this->dokumentasiRepository = $dokumentasiRepo;
    }

    /**
     * Display a listing of the Dokumentasi.
     * GET|HEAD /dokumentasis
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $dokumentasis = $this->dokumentasiRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse(
            DokumentasiResource::collection($dokumentasis),
            __('messages.retrieved', ['model' => __('models/dokumentasis.plural')])
        );
    }

    /**
     * Store a newly created Dokumentasi in storage.
     * POST /dokumentasis
     *
     * @param CreateDokumentasiAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateDokumentasiAPIRequest $request)
    {
        $input = $request->all();

        $dokumentasi = $this->dokumentasiRepository->create($input);

        return $this->sendResponse(
            new DokumentasiResource($dokumentasi),
            __('messages.saved', ['model' => __('models/dokumentasis.singular')])
        );
    }

    /**
     * Display the specified Dokumentasi.
     * GET|HEAD /dokumentasis/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Dokumentasi $dokumentasi */
        $dokumentasi = $this->dokumentasiRepository->find($id);

        if (empty($dokumentasi)) {
            return $this->sendError(
                __('messages.not_found', ['model' => __('models/dokumentasis.singular')])
            );
        }

        return $this->sendResponse(
            new DokumentasiResource($dokumentasi),
            __('messages.retrieved', ['model' => __('models/dokumentasis.singular')])
        );
    }

    /**
     * Update the specified Dokumentasi in storage.
     * PUT/PATCH /dokumentasis/{id}
     *
     * @param int $id
     * @param UpdateDokumentasiAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDokumentasiAPIRequest $request)
    {
        $input = $request->all();

        /** @var Dokumentasi $dokumentasi */
        $dokumentasi = $this->dokumentasiRepository->find($id);

        if (empty($dokumentasi)) {
            return $this->sendError(
                __('messages.not_found', ['model' => __('models/dokumentasis.singular')])
            );
        }

        $dokumentasi = $this->dokumentasiRepository->update($input, $id);

        return $this->sendResponse(
            new DokumentasiResource($dokumentasi),
            __('messages.updated', ['model' => __('models/dokumentasis.singular')])
        );
    }

    /**
     * Remove the specified Dokumentasi from storage.
     * DELETE /dokumentasis/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Dokumentasi $dokumentasi */
        $dokumentasi = $this->dokumentasiRepository->find($id);

        if (empty($dokumentasi)) {
            return $this->sendError(
                __('messages.not_found', ['model' => __('models/dokumentasis.singular')])
            );
        }

        $dokumentasi->delete();

        return $this->sendResponse(
            $id,
            __('messages.deleted', ['model' => __('models/dokumentasis.singular')])
        );
    }
}
