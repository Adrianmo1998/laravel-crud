@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Envio Pedido
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($envioPedido, ['route' => ['envioPedidos.update', $envioPedido->id], 'method' => 'patch']) !!}

                        @include('envio_pedidos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection