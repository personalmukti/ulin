<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateKelembagaanAPIRequest;
use App\Http\Requests\API\UpdateKelembagaanAPIRequest;
use App\Models\Kelembagaan;
use App\Repositories\KelembagaanRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use App\Http\Resources\KelembagaanResource;
use Response;

/**
 * Class KelembagaanController
 * @package App\Http\Controllers\API
 */

class KelembagaanAPIController extends AppBaseController
{
    /** @var  KelembagaanRepository */
    private $kelembagaanRepository;

    public function __construct(KelembagaanRepository $kelembagaanRepo)
    {
        $this->kelembagaanRepository = $kelembagaanRepo;
    }

    /**
     * Display a listing of the Kelembagaan.
     * GET|HEAD /kelembagaans
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $kelembagaans = $this->kelembagaanRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse(
            KelembagaanResource::collection($kelembagaans),
            __('messages.retrieved', ['model' => __('models/kelembagaans.plural')])
        );
    }

    /**
     * Store a newly created Kelembagaan in storage.
     * POST /kelembagaans
     *
     * @param CreateKelembagaanAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateKelembagaanAPIRequest $request)
    {
        $input = $request->all();

        $kelembagaan = $this->kelembagaanRepository->create($input);

        return $this->sendResponse(
            new KelembagaanResource($kelembagaan),
            __('messages.saved', ['model' => __('models/kelembagaans.singular')])
        );
    }

    /**
     * Display the specified Kelembagaan.
     * GET|HEAD /kelembagaans/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Kelembagaan $kelembagaan */
        $kelembagaan = $this->kelembagaanRepository->find($id);

        if (empty($kelembagaan)) {
            return $this->sendError(
                __('messages.not_found', ['model' => __('models/kelembagaans.singular')])
            );
        }

        return $this->sendResponse(
            new KelembagaanResource($kelembagaan),
            __('messages.retrieved', ['model' => __('models/kelembagaans.singular')])
        );
    }

    /**
     * Update the specified Kelembagaan in storage.
     * PUT/PATCH /kelembagaans/{id}
     *
     * @param int $id
     * @param UpdateKelembagaanAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateKelembagaanAPIRequest $request)
    {
        $input = $request->all();

        /** @var Kelembagaan $kelembagaan */
        $kelembagaan = $this->kelembagaanRepository->find($id);

        if (empty($kelembagaan)) {
            return $this->sendError(
                __('messages.not_found', ['model' => __('models/kelembagaans.singular')])
            );
        }

        $kelembagaan = $this->kelembagaanRepository->update($input, $id);

        return $this->sendResponse(
            new KelembagaanResource($kelembagaan),
            __('messages.updated', ['model' => __('models/kelembagaans.singular')])
        );
    }

    /**
     * Remove the specified Kelembagaan from storage.
     * DELETE /kelembagaans/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Kelembagaan $kelembagaan */
        $kelembagaan = $this->kelembagaanRepository->find($id);

        if (empty($kelembagaan)) {
            return $this->sendError(
                __('messages.not_found', ['model' => __('models/kelembagaans.singular')])
            );
        }

        $kelembagaan->delete();

        return $this->sendResponse(
            $id,
            __('messages.deleted', ['model' => __('models/kelembagaans.singular')])
        );
    }
}
