<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEnvioPedidoRequest;
use App\Http\Requests\UpdateEnvioPedidoRequest;
use App\Repositories\EnvioPedidoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class EnvioPedidoController extends AppBaseController
{
    /** @var  EnvioPedidoRepository */
    private $envioPedidoRepository;

    public function __construct(EnvioPedidoRepository $envioPedidoRepo)
    {
        $this->envioPedidoRepository = $envioPedidoRepo;
    }

    /**
     * Display a listing of the EnvioPedido.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $envioPedidos = $this->envioPedidoRepository->all();

        return view('envio_pedidos.index')
            ->with('envioPedidos', $envioPedidos);
    }

    /**
     * Show the form for creating a new EnvioPedido.
     *
     * @return Response
     */
    public function create()
    {
        return view('envio_pedidos.create');
    }

    /**
     * Store a newly created EnvioPedido in storage.
     *
     * @param CreateEnvioPedidoRequest $request
     *
     * @return Response
     */
    public function store(CreateEnvioPedidoRequest $request)
    {
        $input = $request->all();

        $envioPedido = $this->envioPedidoRepository->create($input);

        Flash::success('Envio Pedido saved successfully.');

        return redirect(route('envioPedidos.index'));
    }

    /**
     * Display the specified EnvioPedido.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $envioPedido = $this->envioPedidoRepository->find($id);

        if (empty($envioPedido)) {
            Flash::error('Envio Pedido not found');

            return redirect(route('envioPedidos.index'));
        }

        return view('envio_pedidos.show')->with('envioPedido', $envioPedido);
    }

    /**
     * Show the form for editing the specified EnvioPedido.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $envioPedido = $this->envioPedidoRepository->find($id);

        if (empty($envioPedido)) {
            Flash::error('Envio Pedido not found');

            return redirect(route('envioPedidos.index'));
        }

        return view('envio_pedidos.edit')->with('envioPedido', $envioPedido);
    }

    /**
     * Update the specified EnvioPedido in storage.
     *
     * @param int $id
     * @param UpdateEnvioPedidoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEnvioPedidoRequest $request)
    {
        $envioPedido = $this->envioPedidoRepository->find($id);

        if (empty($envioPedido)) {
            Flash::error('Envio Pedido not found');

            return redirect(route('envioPedidos.index'));
        }

        $envioPedido = $this->envioPedidoRepository->update($request->all(), $id);

        Flash::success('Envio Pedido updated successfully.');

        return redirect(route('envioPedidos.index'));
    }

    /**
     * Remove the specified EnvioPedido from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $envioPedido = $this->envioPedidoRepository->find($id);

        if (empty($envioPedido)) {
            Flash::error('Envio Pedido not found');

            return redirect(route('envioPedidos.index'));
        }

        $this->envioPedidoRepository->delete($id);

        Flash::success('Envio Pedido deleted successfully.');

        return redirect(route('envioPedidos.index'));
    }
}
