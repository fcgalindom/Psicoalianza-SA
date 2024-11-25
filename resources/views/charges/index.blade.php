@extends('adminlte')

@section('form_content')
<div class="container-fluid" style="z-index:100">
    <div class="d-flex">
            <button onclick="window.location.href='{{ route('home') }}'"  style="margin-bottom: 0.5rem" class="btn">
                @include('icons.right')
            </button>
           
       
        <h1>Cargos</h1>
    
    </div>

    <div class="row">
        <div class="col-12 col-md-4 mb-2">
            <button type="button" data-bs-toggle="modal" data-bs-target="#deleteModalcharge" class="btn btn">@include('icons.trash')</button>
            <button type="button" class="btn btn">@include('icons.download')</button>
        </div>
        <div class="col-12 col-md-6 mb-2 text-start">
            
        </div>
        <div class="col-12 col-md-2 mb-2" data-bs-toggle="modal" data-bs-target="#exampleModalcharge">
            <button type="button" class="btn btn">@include('icons.buttoncreate')</button>
        </div>
    </div>
    
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead class="theadstyle">
                <tr>
                <th style="align-content: initial">
                    <div class="contenedor-padre">
                        <div class="contenedo-check">
                            <div class="form-check d-flex flex-row-reverse">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" style="margin-right: 1.5rem ;" for="defaultCheck1" >
                                    Todos
                                  </label>
                              </div>
                        </div>
                    </div>
                            
                </th>
                <th>
                    <div class="position-relative">
                        <div class="d-flex">
                            <p style="padding: 0; margin:0;margin-right:0.5rem;">Nombre</p>
                            @include('icons.simple')

                        </div>
                        
                        <input type="text" class="form-control pr-5" style="border-radius: 1rem" placeholder="Buscar...">
                        <i class="fas fa-search position-absolute" style="top: 70%; right: 10px; transform: translateY(-50%); color: #F5F5F5;"></i>
                    </div>

                </th>
                <th>
                    <div class="position-relative">
                        <div class="d-flex">
                            <p style="padding: 0; margin:0;margin-right:0.5rem;">Identificacion</p>
                            @include('icons.simple')

                        </div>
                        
                        <input type="text" class="form-control pr-5" style="border-radius: 1rem" placeholder="Buscar...">
                        <i class="fas fa-search position-absolute" style="top: 70%; right: 10px; transform: translateY(-50%); color: #F5F5F5;"></i>
                    </div>
                </th>
                <th>
                    <div class="position-relative">
                    <div class="d-flex">
                        <p style="padding: 0; margin:0;margin-right:0.5rem;">Area</p>
                        @include('icons.simple')

                    </div>
                    
                      <input type="text" class="form-control pr-5" style="border-radius: 1rem" placeholder="Buscar...">
                       <i class="fas fa-search position-absolute" style="top: 70%; right: 10px; transform: translateY(-50%); color: #F5F5F5;"></i>
                    </div>
                </th>
                <th>
                    <div class="position-relative">
                        <div class="d-flex">
                            <p style="padding: 0; margin:0;margin-right:0.5rem;">Cargo</p>
                            @include('icons.simple')
    
                        </div>
                        
                          <input type="text" class="form-control pr-5" style="border-radius: 1rem" placeholder="Buscar...">
                           <i class="fas fa-search position-absolute" style="top: 70%; right: 10px; transform: translateY(-50%); color: #F5F5F5;"></i>
                    </div>
                </th>
                <th>
                    <div class="position-relative">
                        <div class="d-flex">
                            <p style="padding: 0; margin:0;margin-right:0.5rem;">Rol</p>
                            @include('icons.simple')
    
                        </div>
                        
                          <input type="text" class="form-control pr-5" style="border-radius: 1rem" placeholder="Buscar...">
                           <i class="fas fa-search position-absolute" style="top: 70%; right: 10px; transform: translateY(-50%); color: #F5F5F5;"></i>
                    </div>
                </th>
                <th>
                    <div class="position-relative">
                        <div class="d-flex">
                            <p style="padding: 0; margin:0;margin-right:0.5rem;">Jefe</p>
                            @include('icons.simple')
    
                        </div>
                        
                          <input type="text" class="form-control pr-5" style="border-radius: 1rem" placeholder="Buscar...">
                           <i class="fas fa-search position-absolute" style="top: 70%; right: 10px; transform: translateY(-50%); color: #F5F5F5;"></i>
                    </div>
                </th>
                <th class="text-center mb-4">
                    <div class="contenedor-padre">
                        Acciones
                    </div>
                </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($charges as $charge)
                    <tr>
                        <td style="text-align: center">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            </div>
                        </td>
                        <td>{{ $charge->name }}</td>
                        <td>{{ $charge->document }}</td>
                        <td>{{ $charge->area }}</td>
                        <td>{{ $charge->cargo }}</td>
                        <td>{{ $charge->rol }}</td>
                        <td>{{ $charge->jefe }}</td>
                        <td>
                            <div class="d-flex">
                                <button type ="button" class="btn" data-bs-toggle="modal" data-bs-target="#editmodalcharge">@include('icons.editsimple')</button>
                                <form  style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type ="button" class="btn">@include('icons.trashsimple')</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    
                @endforeach
            </tbody>
        </table>
        @include('modals.editcharge')
        @include('modals.trashcharge')
        @include('modals.createcharge')

        
    </div>
    <div class="row">
        <div class="col-8">
            <div class="dropdown">
                <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                  Mostrar de a
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <li><a class="dropdown-item" href="#" data-limit="10">10 resultados</a></li>
                  <li><a class="dropdown-item" href="#" data-limit="50">50 resultados</a></li>
                  <li><a class="dropdown-item" href="#" data-limit="100">100 resultados</a></li>
                </ul>
              </div>
    
        </div>
        <div class="col-4">
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                  <!-- Botón "Anterior" -->
                  <li class="page-item">
                    <a class="page-link text-primary" href="#" aria-label="Previous">
                      <span aria-hidden="true">@include('icons.left')</span>
                    </a>
                  </li>
                  
                  <!-- Números de página -->
                  <li class="page-item active">
                    <a class="page-link" href="#" style="background-color: #e0e0e0; border-color: #e0e0e0;">1</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link text-primary" href="#">2</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link text-primary" href="#">3</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link text-primary" href="#">4</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link text-primary" href="#">5</a>
                  </li>
                  
                  <!-- Botón "Siguiente" -->
                  <li class="page-item">
                    <a class="page-link text-primary" href="#" aria-label="Next">
                        <span aria-hidden="true">@include('icons.rightf')</span>
                    </a>
                  </li>
                </ul>
              </nav>
    
        </div>
    </div>
</div>
@stop
