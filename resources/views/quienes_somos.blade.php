@extends('app')
@section('title', __('Quienes Somos'))

@section('styles')

<style>
    .container-quienes{
        background: rgb(14,5,36);
        background: linear-gradient(0deg, rgba(14,5,36,1) 0%, rgba(62,18,69,1) 83%);
        display: flex;
        flex-direction: row;
        width: 100%;
    }

    .info-quienes{
        color: #FFF;
        width: 45%;
        display: flex;
        flex-direction:column;
        justify-content: center;
        align-items: center;
        padding-left: 5%;
        text-align: center;
    }

    .catainer-img-quienes{
        width: 50%;
        display: flex;
        justify-content: center;
        
    }

    .catainer-img-quienes img{
        margin: 0 auto;
        height: 500px;
    }
</style>
    
@endsection('styles')

@section('content')
    <div class="container-quienes">
        <div class="info-quienes">
            <h1>¿Quienes somos?</h1>
            <p>Lorem ipsum dolor sit amet.</p>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugit tenetur praesentium voluptate consequuntur nostrum impedit, et similique accusantium sit sed, sint deserunt laboriosam minus nam eos, corrupti tempore! Exercitationem autem assumenda fugit voluptatum eius.</p>
        </div>
        <div class="catainer-img-quienes">
            <img src="{{ asset('img/chica.png') }}" alt="Tarot">
        </div>
    </div>
@endsection('content')