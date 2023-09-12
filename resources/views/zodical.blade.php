@extends('app')
@section('title', __('Zodical'))

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/zodical.css') }}">
@endsection('styles')

@section('content')
    <div class="container-cont">
        <div class="banner-taro">
            <img class="line-separator" src="{{ asset('img/line-tob.png') }}" alt="">
            <div class="conten-info">
                <h1>Pronóstico mensual <br> de {{ $signo }}</h1>
                <img src="{{ asset('img/leo.png') }}" alt=""> 
            </div>
            <img class="line-separator" src="{{ asset('img/line-bottom.png') }}" alt="">
        </div>

        <h1 class="title-sig">{{ $signo }}</h1>

        <div class="content-info-zodical">
            <div class="zodical-info">
                <div class="prediccion">
                    <h3>
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.0" width="20px" height="20px" viewBox="0 0 1280.000000 1210.000000" preserveAspectRatio="xMidYMid meet">
                            <g fill="#FFF" transform="translate(0.000000,1210.000000) scale(0.100000,-0.100000)" stroke="none">
                                <path d="M3290 11829 c-634 -59 -1240 -300 -1760 -703 -133 -103 -431 -399 -540 -536 -412 -520 -660 -1139 -720 -1800 -13 -147 -13 -474 0 -655 82 -1122 513 -2055 1400 -3030 71 -77 240 -251 376 -386 346 -342 513 -495 1224 -1119 723 -634 1085 -967 1454 -1336 622 -622 1090 -1184 1551 -1859 48 -72 95 -138 103 -147 13 -16 30 5 191 245 413 613 771 1058 1302 1617 417 438 781 780 1699 1595 582 517 668 595 985 896 348 330 658 663 900 964 666 831 1004 1645 1076 2595 15 197 7 594 -16 755 -85 616 -325 1176 -713 1665 -98 122 -390 414 -512 512 -533 423 -1147 669 -1820 729 -168 15 -550 6 -710 -16 -384 -53 -719 -155 -1055 -320 -509 -251 -942 -620 -1261 -1075 l-56 -80 -65 92 c-362 511 -849 905 -1418 1148 -303 129 -662 218 -1005 250 -134 12 -473 11 -610 -1z m672 -524 c241 -31 452 -85 673 -172 569 -223 1057 -637 1377 -1169 63 -104 297 -584 357 -732 8 -18 16 -31 18 -28 3 2 69 143 148 312 242 516 354 685 654 984 226 226 435 377 716 520 698 356 1526 404 2262 133 149 -54 401 -178 528 -258 354 -224 676 -546 900 -900 72 -115 213 -401 260 -529 134 -365 190 -767 166 -1179 -67 -1130 -519 -2003 -1596 -3082 -299 -300 -500 -485 -1175 -1086 -294 -261 -636 -568 -760 -680 -847 -773 -1474 -1446 -1989 -2137 -62 -83 -116 -152 -120 -152 -3 1 -33 37 -66 82 -91 125 -317 405 -465 578 -249 290 -394 445 -770 820 -465 466 -672 657 -1485 1371 -920 807 -1249 1119 -1608 1522 -705 791 -1075 1553 -1182 2430 -49 404 -42 764 21 1089 183 943 841 1735 1735 2088 230 90 502 157 734 180 61 5 128 12 150 14 79 8 403 -4 517 -19z"/>
                            </g>
                        </svg>
                        Futuro
                    </h3>
                    <p>{{ $futuro }}</p>
                    <img class="line-prediccion" src="{{ asset('img/line-bottom.png') }}" alt="">
                </div>

                <div class="prediccion">
                    <h3>
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.0" width="20px" height="20px" viewBox="0 0 1280.000000 1210.000000" preserveAspectRatio="xMidYMid meet">
                            <g fill="#FFF" transform="translate(0.000000,1210.000000) scale(0.100000,-0.100000)" stroke="none">
                                <path d="M3290 11829 c-634 -59 -1240 -300 -1760 -703 -133 -103 -431 -399 -540 -536 -412 -520 -660 -1139 -720 -1800 -13 -147 -13 -474 0 -655 82 -1122 513 -2055 1400 -3030 71 -77 240 -251 376 -386 346 -342 513 -495 1224 -1119 723 -634 1085 -967 1454 -1336 622 -622 1090 -1184 1551 -1859 48 -72 95 -138 103 -147 13 -16 30 5 191 245 413 613 771 1058 1302 1617 417 438 781 780 1699 1595 582 517 668 595 985 896 348 330 658 663 900 964 666 831 1004 1645 1076 2595 15 197 7 594 -16 755 -85 616 -325 1176 -713 1665 -98 122 -390 414 -512 512 -533 423 -1147 669 -1820 729 -168 15 -550 6 -710 -16 -384 -53 -719 -155 -1055 -320 -509 -251 -942 -620 -1261 -1075 l-56 -80 -65 92 c-362 511 -849 905 -1418 1148 -303 129 -662 218 -1005 250 -134 12 -473 11 -610 -1z m672 -524 c241 -31 452 -85 673 -172 569 -223 1057 -637 1377 -1169 63 -104 297 -584 357 -732 8 -18 16 -31 18 -28 3 2 69 143 148 312 242 516 354 685 654 984 226 226 435 377 716 520 698 356 1526 404 2262 133 149 -54 401 -178 528 -258 354 -224 676 -546 900 -900 72 -115 213 -401 260 -529 134 -365 190 -767 166 -1179 -67 -1130 -519 -2003 -1596 -3082 -299 -300 -500 -485 -1175 -1086 -294 -261 -636 -568 -760 -680 -847 -773 -1474 -1446 -1989 -2137 -62 -83 -116 -152 -120 -152 -3 1 -33 37 -66 82 -91 125 -317 405 -465 578 -249 290 -394 445 -770 820 -465 466 -672 657 -1485 1371 -920 807 -1249 1119 -1608 1522 -705 791 -1075 1553 -1182 2430 -49 404 -42 764 21 1089 183 943 841 1735 1735 2088 230 90 502 157 734 180 61 5 128 12 150 14 79 8 403 -4 517 -19z"/>
                            </g>
                        </svg>
                        Amor
                    </h3>
                    <p>{{ $amor }}</p>
                    <img class="line-prediccion" src="{{ asset('img/line-bottom.png') }}" alt="">
                </div>

                <div class="prediccion">
                    <h3>Trabajo</h3>
                    <p>{{ $trabajo}}</p>
                    <img class="line-prediccion" src="{{ asset('img/line-bottom.png') }}" alt="">
                </div>

                <div class="prediccion">
                    <h3>Salud</h3>
                    <p>{{ $salud }}</p>
                    <img class="line-prediccion" src="{{ asset('img/line-bottom.png') }}" alt="">
                </div>

                <div class="prediccion">
                    <h3>Dinero</h3>
                    <p>{{ $dinero }}</p>
                    <img class="line-prediccion" src="{{ asset('img/line-bottom.png') }}" alt="">
                </div>

            </div>
            <div id="link-zodical-id" class="links-zodicales">
                
                
            </div>
        </div>

        <section class="section-plan">
            <h1 class="title-oferta">Obtenga tu horóscopo <strong>diario</strong> personalizado</h1>
            <div class="container-planes-card">
                <div class="card-plan-zodiaco">
                    <div class="card-plan-info">
                        <h1>$20.000</h1>
                        <h2>PLAN 1</h2>
                        <P class="des">COMPRA UNICA</P>
                        <div>
                            Un solo uso
                        </div>
                        <div>
                            &nbsp; 
                        </div>
                    </div>
                    <div class="fondo-nube-cosmica">
                        <button>COMPRAR</button>
                    </div>
                </div>

                <div class="card-plan-zodiaco">
                    <div class="card-plan-info">
                        <h1>$50.000</h1>
                        <h2>PLAN 2</h2>
                        <P class="des">SUSCRIPCION 1 MES</P>
                        <div>
                            4 Usos al mes
                        </div>
                        <div>
                            &nbsp; 
                        </div>
                    </div>
                    <div class="fondo-nube-cosmica">
                        <button>COMPRAR</button>
                    </div>
                </div>

                <div class="card-plan-zodiaco">
                    <div class="card-plan-info">
                        <h1>$120.000</h1>
                        <h2>PLAN 3</h2>
                        <P class="des">SUSCRIPCION 3 MES</P>
                        <div>
                            21 Usos por plan 
                        </div>
                        <div>
                            Maximo por mes 7 
                        </div>
                    </div>
                    <div class="fondo-nube-cosmica">
                        <button>COMPRAR</button>
                    </div>
                </div>
            </div>
        </section>
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
            numero += `<a href="/zodiacal/${signos.nombreSigno}" class="link-sodical">
                <p>
                    ${signos.nombreSigno}
                    <svg  width="117" height="9" viewBox="0 0 117 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path class="svg-flecha-path" d="M0.333333 4.5C0.333333 5.97276 1.52724 7.16667 3 7.16667C4.47276 7.16667 5.66667 5.97276 5.66667 4.5C5.66667 3.02724 4.47276 1.83333 3 1.83333C1.52724 1.83333 0.333333 3.02724 0.333333 4.5ZM116.354 4.85355C116.549 4.65829 116.549 4.34171 116.354 4.14645L113.172 0.964466C112.976 0.769204 112.66 0.769204 112.464 0.964466C112.269 1.15973 112.269 1.47631 112.464 1.67157L115.293 4.5L112.464 7.32843C112.269 7.52369 112.269 7.84027 112.464 8.03553C112.66 8.2308 112.976 8.2308 113.172 8.03553L116.354 4.85355ZM3 5H116V4H3V5Z" fill="white"/>
                    </svg>
                </p>
            </a>`
        })
    
        let iner = document.getElementById('link-zodical-id')
        iner.innerHTML = numero

        
    
    </script>

        
@endsection('content')