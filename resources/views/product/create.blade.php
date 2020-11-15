@extends('layouts.plantilla')

@section('contenido')

<div class="container productos">

  <h2>Agregá un nuevo producto</h2>

<form id="form-create" action="/productos" method="post" enctype="multipart/form-data">

  @csrf

    <div class="form-group">
      <label for="name">Nombre del Producto:</label>
    <input type="text" class="form-control" id="name" placeholder="Escribí el nombre del producto" value="{{ old('name') }}" name="name">
      @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>


    <div class="form-group">
      <label for="description">Breve descripción del producto:</label>
      <input type="text-area" class="form-control" id="description" placeholder="Descripción del producto" value="{{ old('description') }}" name="description">
      @error('description')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>

    <div class="form-group">
        <label for="price">Precio:</label>
        <input type="number" step=".01" class="form-control" id="price" placeholder="Precio del producto" value="{{ old('price') }}" name="price">
        @error('price')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>


    <div class="form-group">
        <label for="avatar">Subir imagen:</label>

        <input type="file" id="avatar" name="avatar" class="form-control @error('avatar') is-invalid @enderror">
        @error('avatar')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div> <br>

    <div class="form-group">
        <label for="price">Stock:</label>
        <input type="number" class="form-control" id="stock" placeholder="escriba stock" value="{{ old('stock') }}" name="stock">
        @error('stock')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="promo">esta en promocion? (0 no 1 si)</label>
        <input type="number" class="form-control" id="promo" placeholder="escriba promo" value="{{ old('promo') }}" name="promo">
        @error('promo')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>



      <label for="categories">Categorias</label>
      <select class="form-control" name="category_id">
        @foreach ($categorias as $categoria)
        <option value="{{$categoria->id}}"> {{$categoria->name}} </option>
        @endforeach
      </select>


    <button type="submit" class="btn btn-primary">Agregar Producto</button>
  </form>


</div>


<!-- <script type="text/javascript" src="/js/librerias.js"></script>
<script type="text/javascript" src="/js/productos1.js"></script> -->
@endsection
