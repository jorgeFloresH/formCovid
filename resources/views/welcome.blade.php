@extends('layouts.app')
@section('title', __('Bienvenido'))
@section('content')
<div class="container-fluid">
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header"><h5><span class="text-center fa fa-home"></span> @yield('title')</h5></div>
            <div class="card-body">
              <h5>  
            @guest
				
				{{ __('Bienvenido al ') }} {{ config('app.name', 'Laravel') }} </br>
				Sistema de registro de pruebas antigenos nasal para Covid-19.
                
			@else
					Hi {{ Auth::user()->name }}, Bienvenido nuevamente {{ config('app.name', 'Laravel') }}.
            @endif	
				</h5>
            </div>
        </div>
    </div>
</div>
</div>
@endsection