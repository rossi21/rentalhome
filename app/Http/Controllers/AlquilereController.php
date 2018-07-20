<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAlquilereRequest;
use App\Http\Requests\UpdateAlquilereRequest;
use App\Repositories\AlquilereRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class AlquilereController extends AppBaseController
{
    /** @var  AlquilereRepository */
    private $alquilereRepository;

    public function __construct(AlquilereRepository $alquilereRepo)
    {
        $this->alquilereRepository = $alquilereRepo;
    }

    /**
     * Display a listing of the Alquilere.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->alquilereRepository->pushCriteria(new RequestCriteria($request));
        $alquileres = $this->alquilereRepository->all();

        return view('alquileres.index')
            ->with('alquileres', $alquileres);
    }

    /**
     * Show the form for creating a new Alquilere.
     *
     * @return Response
     */
    public function create()
    {
        return view('alquileres.create');
    }

    /**
     * Store a newly created Alquilere in storage.
     *
     * @param CreateAlquilereRequest $request
     *
     * @return Response
     */
    public function store(CreateAlquilereRequest $request)
    {
        $input = $request->all();

        $alquilere = $this->alquilereRepository->create($input);

        Flash::success('Alquilere saved successfully.');

        return redirect(route('alquileres.index'));
    }

    /**
     * Display the specified Alquilere.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $alquilere = $this->alquilereRepository->findWithoutFail($id);

        if (empty($alquilere)) {
            Flash::error('Alquilere not found');

            return redirect(route('alquileres.index'));
        }

        return view('alquileres.show')->with('alquilere', $alquilere);
    }

    /**
     * Show the form for editing the specified Alquilere.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $alquilere = $this->alquilereRepository->findWithoutFail($id);

        if (empty($alquilere)) {
            Flash::error('Alquilere not found');

            return redirect(route('alquileres.index'));
        }

        return view('alquileres.edit')->with('alquilere', $alquilere);
    }

    /**
     * Update the specified Alquilere in storage.
     *
     * @param  int              $id
     * @param UpdateAlquilereRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAlquilereRequest $request)
    {
        $alquilere = $this->alquilereRepository->findWithoutFail($id);

        if (empty($alquilere)) {
            Flash::error('Alquilere not found');

            return redirect(route('alquileres.index'));
        }

        $alquilere = $this->alquilereRepository->update($request->all(), $id);

        Flash::success('Alquilere updated successfully.');

        return redirect(route('alquileres.index'));
    }

    /**
     * Remove the specified Alquilere from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $alquilere = $this->alquilereRepository->findWithoutFail($id);

        if (empty($alquilere)) {
            Flash::error('Alquilere not found');

            return redirect(route('alquileres.index'));
        }

        $this->alquilereRepository->delete($id);

        Flash::success('Alquilere deleted successfully.');

        return redirect(route('alquileres.index'));
    }
}
