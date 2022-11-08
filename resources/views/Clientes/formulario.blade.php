@extends('plantilla')

    @section('contenido')


    <form class="row g-3">
      <div class="col-md-12">
        <label for="inputEmail4" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="inputEmail4">
      </div>
      <div class="col-md-6">
        <label for="inputEmail4" class="form-label">Email</label>
        <input type="email" class="form-control" id="inputEmail4">
      </div>
      <div class="col-md-6">
        <label for="inputPassword4" class="form-label">Password</label>
        <input type="password" class="form-control" id="inputPassword4">
      </div>
      <div class="col-12">
        <label for="inputAddress" class="form-label">Dirección</label>
        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
      </div>
      <div class="col-md-6">
        <label for="inputCity" class="form-label">Ciudad</label>
        <input type="text" class="form-control" id="inputCity">
      </div>
      <div class="col-md-4">
        <label for="inputState" class="form-label">Estado</label>
        <input type="text" class="form-control" id="inputState">
      </div>
      <div class="col-md-2">
        <label for="inputZip" class="form-label">CP</label>
        <input type="text" class="form-control" id="inputZip">
      </div>
      <div class="col-12">
        <button type="submit" class="btn btn-primary">Agrear</button>
      </div>
    </form>

    @endsection