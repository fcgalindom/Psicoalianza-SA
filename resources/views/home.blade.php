@extends('adminlte')

@section('form_content')

<div class="container" >

    <div class="title" >

        <div class="row" >
            <div class="col-12" style="font-family: roboto">
                <h1 class="text-center">Bienvenida!</h1>
            </div>
            <div class="col-12" style="font-family: roboto">
                <h1 class="text-center">Elisa Gomes</h1>
            </div>
            <div class="col-12" style="margin-top: 5rem ; margin-bottom:5rem">
                <h4 class="text-center">Añade los datos personales de tus empleados y después agrega su cargo en tu empresa</h4>

            </div>
            <div class="col-12" style="display: flex; justify-content: center; align-items: center;">
                <button  type ="button"  class="btn"  data-bs-toggle="modal" data-bs-target="#exampleModal"> 
                    @include('icons.buttonhome')   
                </button>
                    
            </div>

        </div>

    </div>
    @include('modals.createemploy')
    
    

   

    
</div>
<div class="logo-bottom d-none d-md-block" >
    @include('icons.logohome')   
</div>

@stop