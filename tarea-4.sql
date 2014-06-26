create table bodega(

  id serial not null,
  nombre_bodega character(255),
  codigo_bodega character(255),
  unique (nombre_bodega , codigo_bodega),
  primary key (id)
);

create table producto(

   id serial not null,
   nombre_producto character(255),
   codigo_producto character(255),
   precio_neto character (255),
   fk_bodega_id serial not null references bodega(id) on update cascade on delete cascade,
   unique (nombre_producto , codigo_producto),
   primary key (id)
);