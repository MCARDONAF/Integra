@extends('app')
@section('title', __('Numerologia'))

@section('styles')

<link rel="stylesheet" href="{{ asset('css/numerologia.css') }}">
    
@endsection('styles')

@section('content')
    <div id="cont-zoodiaco" class="container-cont">
        <div class="card-signo">
            <h1>signor</h1>
        </div>
    </div>

    <script>
    
        const numeros = [
            {
              "nombreSigno": "Aries",
              "numerosSuerte": [7, 12, 21, 34, 40, 55]
            },
            {
              "nombreSigno": "Tauro",
              "numerosSuerte": [4, 16, 22, 38, 44, 61]
            },
            {
              "nombreSigno": "Géminis",
              "numerosSuerte": [3, 14, 27, 39, 47, 66]
            },
            {
              "nombreSigno": "Cáncer",
              "numerosSuerte": [2, 11, 29, 37, 45, 64]
            },
            {
              "nombreSigno": "Leo",
              "numerosSuerte": [1, 15, 25, 41, 50, 69]
            },
            {
              "nombreSigno": "Virgo",
              "numerosSuerte": [5, 19, 31, 42, 48, 57]
            },
            {
              "nombreSigno": "Libra",
              "numerosSuerte": [6, 18, 28, 35, 49, 58]
            },
            {
              "nombreSigno": "Escorpio",
              "numerosSuerte": [8, 20, 30, 43, 56, 67]
            },
            {
              "nombreSigno": "Sagitario",
              "numerosSuerte": [9, 17, 26, 36, 51, 68]
            },
            {
              "nombreSigno": "Capricornio",
              "numerosSuerte": [10, 23, 32, 46, 53, 63]
            },
            {
              "nombreSigno": "Acuario",
              "numerosSuerte": [13, 24, 33, 54, 59, 70]
            },
            {
              "nombreSigno": "Piscis",
              "numerosSuerte": [7, 21, 38, 45, 52, 60]
            }
        ]

       
    
        var numero = ''
            
        numeros.map(signos =>{
            numero += `<div onclick="mesage('${signos.numerosSuerte}')" class="card-signo"><h2>${signos.nombreSigno}</h2> </div>`
        })
    
        let iner = document.getElementById('cont-zoodiaco')
        iner.innerHTML = numero

        const mesage=(numeros)=>{
            alert(numeros);
        }
    
    </script>
@endsection('content')
