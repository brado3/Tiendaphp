@extends('layouts.menu')
@section ('contenido')

<div class="row">
    <h1 class="grey-text text-darken-1">Nuevos productos</h1>
</div>

<div class="row">
    <form 
    action="" 
    class="col s8"
    method="POST">
    <div class="row">
        <div class="col s8 input-field">
        <i class="Medium material-icons">extension</i>
            <input 
            type="text"
            id="nombre"
            name="nombre"
            placeholder="Nombre de producto">
            <label for="nombre" class="fingerprint">Nombre de producto</label>
        </div>
    </div>
    <div class="row">
    <div class="col s8 input-field">
    <i class="Medium material-icons">clear_all</i>
    
    <textarea 
    name="desc"
    id="desc" 
    class="materialize-textarea"
    ></textarea>
    <label for="desc">Descripcion</label>
    </div>
    </div>

    <div class="row">
        <div class="col s8 input-field">
        <i class="Medium material-icons">euro_symbol</i>
        
            <input 
            type="text"
            id="precio"
            name="precio">
            <label for="precio">Precio</label>
        </div>
    </div>

    <div class="row">
        <div class="col s8 file-field input-field">
            <div class="btn">
                <span >Imagen de el producto===</span>
                <input type="file" name="imagen">
            </div>
            <div class="file-path-wrapper">
            <input class="file-path validate" type="text">
            </div>
            
        </div>
    </div>

</form>
</div>

@endsection