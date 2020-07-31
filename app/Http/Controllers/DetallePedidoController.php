<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDetallePedidoRequest;
use App\Http\Requests\UpdateDetallePedidoRequest;
use App\Repositories\DetallePedidoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class DetallePedidoController extends AppBaseController
{
    /** @var  DetallePedidoRepository */
    private $detallePedidoRepository;

    public function __construct(DetallePedidoRepository $detallePedidoRepo)
    {
        $this->detallePedidoRepository = $detallePedidoRepo;
    }

    /**
     * Display a listing of the DetallePedido.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $detallePedidos = $this->detallePedidoRepository->all();

        return view('detalle_pedidos.index')
            ->with('detallePedidos', $detallePedidos);
    }

    /**
     * Show the form for creating a new DetallePedido.
     *
     * @return Response
     */
    public function create()
    {
        return view('detalle_pedidos.create');
    }

    /**
     * Store a newly created DetallePedido in storage.
     *
     * @param CreateDetallePedidoRequest $request
     *
     * @return Response
     */
    public function store(CreateDetallePedidoRequest $request)
    {
        $input = $request->all();

        $detallePedido = $this->detallePedidoRepository->create($input);

        Flash::success('Detalle Pedido saved successfully.');

        return redirect(route('detallePedidos.index'));
    }

    /**
     * Display the specified DetallePedido.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $detallePedido = $this->detallePedidoRepository->find($id);

        if (empty($detallePedido)) {
            Flash::error('Detalle Pedido not found');

            return redirect(route('detallePedidos.index'));
        }

        return view('detalle_pedidos.show')->with('detallePedido', $detallePedido);
    }

    /**
     * Show the form for editing the specified DetallePedido.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $detallePedido = $this->detallePedidoRepository->find($id);

        if (empty($detallePedido)) {
            Flash::error('Detalle Pedido not found');

            return redirect(route('detallePedidos.index'));
        }

        return view('detalle_pedidos.edit')->with('detallePedido', $detallePedido);
    }

    /**
     * Update the specified DetallePedido in storage.
     *
     * @param int $id
     * @param UpdateDetallePedidoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDetallePedidoRequest $request)
    {
        $detallePedido = $this->detallePedidoRepository->find($id);

        if (empty($detallePedido)) {
            Flash::error('Detalle Pedido not found');

            return redirect(route('detallePedidos.index'));
        }

        $detallePedido = $this->detallePedidoRepository->update($request->all(), $id);

        Flash::success('Detalle Pedido updated successfully.');

        return redirect(route('detallePedidos.index'));
    }

    /**
     * Remove the specified DetallePedido from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $detallePedido = $this->detallePedidoRepository->find($id);

        if (empty($detallePedido)) {
            Flash::error('Detalle Pedido not found');

            return redirect(route('detallePedidos.index'));
        }

        $this->detallePedidoRepository->delete($id);

        Flash::success('Detalle Pedido deleted successfully.');

        return redirect(route('detallePedidos.index'));
    }
}
