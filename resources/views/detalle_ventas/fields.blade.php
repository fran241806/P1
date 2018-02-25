<!-- Venta Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('venta_id', 'Numero de Venta:') !!}
    {!! Form::text('venta_id', $ventas->id, ['class' => 'form-control','readonly'=>'readonly']) !!}
    {!! Form::label('fecha', 'Fecha:') !!}
    {!! Form::date('fecha', $ventas->fecha, ['class' => 'form-control','readonly'=>'readonly']) !!}
    {!! Form::label('venta_id', 'Cliente:') !!}
    {!! Form::text('venta_id', $ventas->cliente->id, ['class' => 'form-control','readonly'=>'readonly']) !!}
</div>


<!-- Producto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('producto_id', 'Seleccione el producto:') !!}
    {!! Form::select('producto_id', $productos, null, ['class' => 'form-control']) !!}
    {!! Form::label('cantidad', 'Cantidad:') !!}
    {!! Form::text('cantidad', null, ['class' => 'form-control']) !!}
</div>
</div>



<!-- Submit Field -->
<div class="form-group col-sm-12">
    
    <a href="{!! route('detalleVentas.index') !!}" class="btn btn-default">Ver Detalle de Venta</a>
    {!! Form::submit('Agregar a la venta', ['class' => 'btn btn-primary']) !!} 
<div class="table-responsive">
    <table class="table table-hover" id="table">
        <thead>
            <tr>
               
        <th>Producto</th>
        <th>Precio</th>
        <th>Cantidad</th>
        <th>Subtotal</th>
       
        
        
        
            </tr>
        </thead>
        <tbody>
          @foreach($ventas->detalleVenta as $detalleVenta) 
        <tr>
            <td>{!!$detalleVenta->producto_id!!} - {!!$detalleVenta->producto->nombre!!}</td>
            <td>{!!$detalleVenta->producto->precio!!}</td>
            <td>{!!$detalleVenta->cantidad!!}</td>
            <td>{!!$detalleVenta->subtotal!!}</td>
            
           
            
        </tr>
         @endforeach
        </tbody>
    </table>
</div>
</div>
