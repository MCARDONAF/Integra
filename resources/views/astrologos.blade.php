@extends('app')
@section('title', __('Astrologos'))

@section('styles')


<link rel="stylesheet" href="{{ asset('css/tarod.css') }}">
    
@endsection('styles')

@section('content')
    <div class="container-cont">
        <div class="banner-taro">
            <h1>Astrologos</h1>
        </div>
        <section class="container-info">
            <h3>Bien conocido</h3>
            <h1>Titulo contexto</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde dolorem consequatur quisquam asperiores libero, enim perferendis non qui. Corporis, accusantium.</p>

            <div class="content-card-info">
                <div class="card-info">
                    <div class="cont-1">
                        <img src="{{ asset('img/team1.jpg') }}" alt="toratista">
                    </div>
                    <div class="cont-2">
                        <h1>Jhon T.</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore eius ea officiis ipsam, dolore quis et eveniet necessitatibus aspernatur minus possimus fugiat deleniti expedita exercitationem earum aliquam quas eaque laborum.</p>
                    </div>
                </div>

                <div class="card-info">
                    <div class="cont-2">
                        <h1>Jhon T.</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore eius ea officiis ipsam, dolore quis et eveniet necessitatibus aspernatur minus possimus fugiat deleniti expedita exercitationem earum aliquam quas eaque laborum.</p>
                    </div>
                    <div class="cont-1">
                        <img src="{{ asset('img/team1.jpg') }}" alt="toratista">
                    </div>
                </div>

                <div class="card-info">
                    <div class="cont-1">
                        <img src="{{ asset('img/team1.jpg') }}" alt="toratista">
                    </div>
                    <div class="cont-2">
                        <h1>Jhon T.</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore eius ea officiis ipsam, dolore quis et eveniet necessitatibus aspernatur minus possimus fugiat deleniti expedita exercitationem earum aliquam quas eaque laborum.</p>
                    </div>
                </div>

             
            </div>
        </section>
    </div>
@endsection('content')