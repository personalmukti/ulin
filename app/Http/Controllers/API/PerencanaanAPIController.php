<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreatePerencanaanAPIRequest;
use App\Http\Requests\API\UpdatePerencanaanAPIRequest;
use App\Models\Perencanaan;
use App\Repositories\PerencanaanRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use App\Http\Resources\PerencanaanResource;
use Response;

/**
 * Class PerencanaanController
 * @package App\Http\Controllers\API
 */

class PerencanaanAPIController extends AppBaseController
{
    /** @var  PerencanaanRepository */
    private $perencanaanRepository;

    public function __construct(PerencanaanRepository $perencanaanRepo)
    {
        $this->perencanaanRepository = $perencanaanRepo;
    }

    /**
     * Display a listing of the Perencanaan.
     * GET|HEAD /perencanaans
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $perencanaans = $this->perencanaanRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse(
            PerencanaanResource::collection($perencanaans),
            __('messages.retrieved', ['model' => __('models/perencanaans.plural')])
        );
    }

    /**
     * Store a newly created Perencanaan in storage.
     * POST /perencanaans
     *
     * @param CreatePerencanaanAPIRequest $request
     *
     * @return Response
     */
    public function store(CreatePerencanaanAPIRequest $request)
    {
        $input = $request->all();

        $perencanaan = $this->perencanaanRepository->create($input);

        return $this->sendResponse(
            new PerencanaanResource($perencanaan),
            __('messages.saved', ['model' => __('models/perencanaans.singular')])
        );
    }

    /**
     * Display the specified Perencanaan.
     * GET|HEAD /perencanaans/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Perencanaan $perencanaan */
        $perencanaan = $this->perencanaanRepository->find($id);

        if (empty($perencanaan)) {
            return $this->sendError(
                __('messages.not_found', ['model' => __('models/perencanaans.singular')])
            );
        }

        return $this->sendResponse(
            new PerencanaanResource($perencanaan),
            __('messages.retrieved', ['model' => __('models/perencanaans.singular')])
        );
    }

    /**
     * Update the specified Perencanaan in storage.
     * PUT/PATCH /perencanaans/{id}
     *
     * @param int $id
     * @param UpdatePerencanaanAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePerencanaanAPIRequest $request)
    {
        $input = $request->all();

        /** @var Perencanaan $perencanaan */
        $perencanaan = $this->perencanaanRepository->find($id);

        if (empty($perencanaan)) {
            return $this->sendError(
                __('messages.not_found', ['model' => __('models/perencanaans.singular')])
            );
        }

        $perencanaan = $this->perencanaanRepository->update($input, $id);

        return $this->sendResponse(
            new PerencanaanResource($perencanaan),
            __('messages.updated', ['model' => __('models/perencanaans.singular')])
        );
    }

    /**
     * Remove the specified Perencanaan from storage.
     * DELETE /perencanaans/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Perencanaan $perencanaan */
        $perencanaan = $this->perencanaanRepository->find($id);

        if (empty($perencanaan)) {
            return $this->sendError(
                __('messages.not_found', ['model' => __('models/perencanaans.singular')])
            );
        }

        $perencanaan->delete();

        return $this->sendResponse(
            $id,
            __('messages.deleted', ['model' => __('models/perencanaans.singular')])
        );
    }
}
