<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateDesaAPIRequest;
use App\Http\Requests\API\UpdateDesaAPIRequest;
use App\Models\Desa;
use App\Repositories\DesaRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use App\Http\Resources\DesaResource;
use Response;

/**
 * Class DesaController
 * @package App\Http\Controllers\API
 */

class DesaAPIController extends AppBaseController
{
    /** @var  DesaRepository */
    private $desaRepository;

    public function __construct(DesaRepository $desaRepo)
    {
        $this->desaRepository = $desaRepo;
    }

    /**
     * Display a listing of the Desa.
     * GET|HEAD /desas
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $desas = $this->desaRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse(
            DesaResource::collection($desas),
            __('messages.retrieved', ['model' => __('models/desas.plural')])
        );
    }

    /**
     * Store a newly created Desa in storage.
     * POST /desas
     *
     * @param CreateDesaAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateDesaAPIRequest $request)
    {
        $input = $request->all();

        $desa = $this->desaRepository->create($input);

        return $this->sendResponse(
            new DesaResource($desa),
            __('messages.saved', ['model' => __('models/desas.singular')])
        );
    }

    /**
     * Display the specified Desa.
     * GET|HEAD /desas/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Desa $desa */
        $desa = $this->desaRepository->find($id);

        if (empty($desa)) {
            return $this->sendError(
                __('messages.not_found', ['model' => __('models/desas.singular')])
            );
        }

        return $this->sendResponse(
            new DesaResource($desa),
            __('messages.retrieved', ['model' => __('models/desas.singular')])
        );
    }

    /**
     * Update the specified Desa in storage.
     * PUT/PATCH /desas/{id}
     *
     * @param int $id
     * @param UpdateDesaAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDesaAPIRequest $request)
    {
        $input = $request->all();

        /** @var Desa $desa */
        $desa = $this->desaRepository->find($id);

        if (empty($desa)) {
            return $this->sendError(
                __('messages.not_found', ['model' => __('models/desas.singular')])
            );
        }

        $desa = $this->desaRepository->update($input, $id);

        return $this->sendResponse(
            new DesaResource($desa),
            __('messages.updated', ['model' => __('models/desas.singular')])
        );
    }

    /**
     * Remove the specified Desa from storage.
     * DELETE /desas/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Desa $desa */
        $desa = $this->desaRepository->find($id);

        if (empty($desa)) {
            return $this->sendError(
                __('messages.not_found', ['model' => __('models/desas.singular')])
            );
        }

        $desa->delete();

        return $this->sendResponse(
            $id,
            __('messages.deleted', ['model' => __('models/desas.singular')])
        );
    }
}
