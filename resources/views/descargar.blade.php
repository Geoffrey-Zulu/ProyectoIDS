@extends('layouts.app')

@section('content')
<div class="container">

    <!-- Start Content-->
    <div class="container-fluid">



        @include('layouts.menu')

        <div class="row">
           @php
               //****************************paquetes adicionales paa ubuntu --------------- */
        //shell_exec('apt-get update');
        //shell_exec('apt-get upgrade');
        //shell_exec('sudo apt-get dist-upgrade -y');
        
            //echo("Iniciando Descarga Snort <br>");
            echo('instalando automake <br><br>');
            print_r(shell_exec('sudo apt-get install -y automake'));
            echo(' <br><br> instalando autorecof <br><br>');
            print_r(shell_exec('sudo apt-get install -y dh-autoreconf'));

            $daq= shell_exec('sh bash/daq.sh');

           
             /*if ($daq == "Descargando") {
                exec('tar xvzf daq-2.0.7.tar.gz');
             }else{
                exec('wget https://www.snort.org/downloads/snort/daq-2.0.7.tar.gz');
                exec('tar xvzf daq-2.0.7.tar.gz');
                
                $daq= 'Daq descargado sactifactoriamente';
             }*/

             $snort = shell_exec('sh bash/snort.sh');

             
             /*if ($snort == "Descargando") {
                exec('tar xvzf snort-2.9.17.tar.gz');
             }else{
                exec('wget https://www.snort.org/downloads/snort/snort-2.9.17.tar.gz');
                exec('tar xvzf snort-2.9.17.tar.gz');
                $snort= 'Snort descargado sactifactoriamente';
             }*/


           @endphp
        </div>
    </div>
</div>

@endsection
