<h1>
	Bodegas
</h1>

<ul>
@foreach($bodegas as $bodega)
<li>
	{{$bodega->nombre_bodega.' hola '.$bodega->codigo_bodega}}
</li>
@endforeach
</ul>