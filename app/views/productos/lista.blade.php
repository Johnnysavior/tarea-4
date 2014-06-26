<h1>
	Productos
</h1>

<ul>
@foreach($productos as $producto)
<li>
	{{$producto->nombre_producto.' '.$producto->precio_neto}}
</li>
@endforeach
</ul>