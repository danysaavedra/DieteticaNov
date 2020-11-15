@extends('layouts.plantilla')

@section('contenido')

<section class="principal">
     <article class="nuevas" id="peliculas">
         <div class="peliculas">

    <div class="form-header">
      <h2 style="color:black;" class="form-title">C<span>rear</span> sub<span>categoria</span> </h2>
    </div>
    <div class="contenedor">



      <form class="formulariogrande" id="formCreate" action="/subcategoriecreate" method="post" enctype="multipart/form-data">
       @csrf

        <label for="name">Nombre</label>
        <div class="">
        <input type="text" name="name" id="name" value="{{old('name')}}"><br>
          @error('name')
          <span class="alert alert-danger">
            <strong>{{ $message }}</strong>
          </span>
           @enderror <br>
        </div>

       <label for="imagen">IMAGEN</label>
       <div class="">
       <input type="file" name="imagen" id="imagen" value="{{old('imagen')}}"><br>
       @error('imagen')
       <span class="alert alert-danger">
         <strong>{{ $message }}</strong>
       </span>
      @enderror <br>
      </div>



        <button onclick="alert('la subcategoria fue creado correctamente.')"  type="submit" class="btn btn-success">Crear Subcategoria</button>

      </form>
    </div>
</div>
</article>
</section>

@endsection
