<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateProjectAPIRequest;
use App\Http\Requests\API\UpdateProjectAPIRequest;
use App\Models\Project;
use App\Repositories\ProjectRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class ProjectController
 * @package App\Http\Controllers\API
 */

class ProjectAPIController extends AppBaseController
{
    /** @var  ProjectRepository */
    private $projectRepository;

    public function __construct(ProjectRepository $projectRepo)
    {
        $this->projectRepository = $projectRepo;
    }

    /**
     * Display a listing of the Project.
     * GET|HEAD /projects
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $projects = $this->projectRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse(
            $projects->toArray(),
            __('messages.retrieved', ['model' => __('models/projects.plural')])
        );
    }

    /**
     * Store a newly created Project in storage.
     * POST /projects
     *
     * @param CreateProjectAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateProjectAPIRequest $request)
    {
        $input = $request->all();

        $project = $this->projectRepository->create($input);

        return $this->sendResponse(
            $project->toArray(),
            __('messages.saved', ['model' => __('models/projects.singular')])
        );
    }

    /**
     * Display the specified Project.
     * GET|HEAD /projects/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Project $project */
        $project = $this->projectRepository->find($id);

        if (empty($project)) {
            return $this->sendError(
                __('messages.not_found', ['model' => __('models/projects.singular')])
            );
        }

        return $this->sendResponse(
            $project->toArray(),
            __('messages.retrieved', ['model' => __('models/projects.singular')])
        );
    }

    /**
     * Update the specified Project in storage.
     * PUT/PATCH /projects/{id}
     *
     * @param int $id
     * @param UpdateProjectAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateProjectAPIRequest $request)
    {
        $input = $request->all();

        /** @var Project $project */
        $project = $this->projectRepository->find($id);

        if (empty($project)) {
            return $this->sendError(
                __('messages.not_found', ['model' => __('models/projects.singular')])
            );
        }

        $project = $this->projectRepository->update($input, $id);

        return $this->sendResponse(
            $project->toArray(),
            __('messages.updated', ['model' => __('models/projects.singular')])
        );
    }

    /**
     * Remove the specified Project from storage.
     * DELETE /projects/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Project $project */
        $project = $this->projectRepository->find($id);

        if (empty($project)) {
            return $this->sendError(
                __('messages.not_found', ['model' => __('models/projects.singular')])
            );
        }

        $project->delete();

        return $this->sendResponse(
            $id,
            __('messages.deleted', ['model' => __('models/projects.singular')])
        );
    }
}
