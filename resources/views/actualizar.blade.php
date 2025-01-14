@extends('layouts.app')

@section('content')
<div class="container">

    <!-- Start Content-->
    <div class="container-fluid">

        @include('layouts.menu')
    </div>


    <div class="row d-flex justify-content-center">
        <div class="alert alert-primary d-flex align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:">
                <use xlink:href="#info-fill" /></svg>
            <div class="m-3">
                Actualizando..
            </div>
        </div>
    </div>

    @php
    $validar='';
    $contador=0;

    foreach ($actualizar as $key => $value) {
        $value= trim($value);
        //echo ($key ." : ".$value."<br>");
              $contador=$contador+1;

     
    }

    @endphp
    <div class="row d-flex justify-content-center">


        @if ($actualizar == "ERROR")
        <div class="alert alert-danger d-flex align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
                <use xlink:href="#exclamation-triangle-fill" /></svg>
            <div class="m-3">
                Se interrumpiò la actualizaciòn,<strong> vuelve a intertarlo!</strong>
            </div>
        </div>

        @else
        <div class="alert alert-success d-flex align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
                <use xlink:href="#check-circle-fill" /></svg>
            <div class="m-3">
                Sistema <strong> Actualizado sastifactoriamente</strong>
            </div>
        </div>
        @endif
    </div>
</div>

@endsection
