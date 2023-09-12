<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function show()
    {
        return view('home');
    }

    public function quienesSomos()
    {
        return view('quienes_somos');
    }

    public function tarotistas()
    {
        return view('tarotistas');
    }

    public function astrologos()
    {
        return view('astrologos');
    }

    public function numerologos()
    {
        return view('numerologos');
    }

    public function signoszodiacales()
    {
        return view('signosZodiacales');
    }

    public function zodical(Request $request)
    {
        $predicciones = [
            [
                "nombreSigno" => "Aries",
                "futuro" => "Tendrás una oportunidad emocionante en el horizonte que te llevará a nuevas aventuras.",
                "amor" => "Las relaciones amorosas serán intensas este mes, asegúrate de comunicarte y escuchar a tu pareja.",
                "trabajo" => "En el trabajo, podrías recibir reconocimiento por tus esfuerzos y ver avances en tus proyectos.",
                "salud" => "La salud estará en buena forma, pero recuerda mantener un equilibrio entre el trabajo y el descanso.",
                "dinero" => "Tendrás buenas perspectivas financieras, pero evita gastos impulsivos."
            ],
            [
                "nombreSigno" => "Tauro",
                "futuro" => "El futuro se ve prometedor, pero debes ser paciente y persistente en tus metas.",
                "amor" => "En el amor, fortalece los lazos con tu pareja y disfruta de momentos románticos juntos.",
                "trabajo" => "En el trabajo, es un buen momento para buscar nuevas oportunidades y desafíos.",
                "salud" => "La salud será excelente si mantienes una rutina de ejercicio y una dieta equilibrada.",
                "dinero" => "Las finanzas estarán estables, pero considera ahorrar para metas a largo plazo."
            ],
            [
                "nombreSigno" => "Géminis",
                "futuro" => "El futuro traerá cambios inesperados, mantén la mente abierta y adapta tus planes.",
                "amor" => "En el amor, podrías conocer a alguien especial si te abres a nuevas conexiones sociales.",
                "trabajo" => "En el trabajo, sé flexible y dispuesto a aprender nuevas habilidades para avanzar.",
                "salud" => "La salud requerirá atención, no descuides el ejercicio y la nutrición.",
                "dinero" => "Gastos imprevistos podrían surgir, así que mantén un fondo de emergencia."
            ],
            [
                "nombreSigno" => "Cáncer",
                "futuro" => "El futuro estará lleno de emociones, cuida tus relaciones personales y busca el equilibrio emocional.",
                "amor" => "Las relaciones amorosas serán cálidas y afectuosas, dedica tiempo a tu ser querido.",
                "trabajo" => "En el trabajo, tu creatividad será una ventaja, pero también mantén la organización.",
                "salud" => "La salud será robusta, pero evita el estrés en la medida de lo posible.",
                "dinero" => "Las finanzas se verán beneficiadas si ahorras y gestionas tus gastos de manera responsable."
            ],
            [
                "nombreSigno" => "Leo",
                "futuro" => "El futuro será brillante, aprovecha las oportunidades para destacar y liderar.",
                "amor" => "En el amor, tu carisma será una ventaja, pero recuerda ser generoso y atento.",
                "trabajo" => "En el trabajo, tu ambición te llevará lejos, pero no dejes que el ego te controle.",
                "salud" => "La salud será robusta, pero no te excedas en actividades extenuantes.",
                "dinero" => "Las finanzas estarán en alza si mantienes una visión a largo plazo y evitas derrochar."
            ],
            [
                "nombreSigno" => "Virgo",
                "futuro" => "El futuro te desafiará a perfeccionar tus habilidades y ser meticuloso en tus esfuerzos.",
                "amor" => "En el amor, la comunicación es clave, así que sé claro y comprensivo con tu pareja.",
                "trabajo" => "En el trabajo, tu atención al detalle te hará destacar, pero no te obsesiones.",
                "salud" => "La salud será buena si mantienes una dieta equilibrada y haces ejercicio regularmente.",
                "dinero" => "Las finanzas serán estables si te organizas y haces un seguimiento de tus gastos."
            ],
            [
                "nombreSigno" => "Libra",
                "futuro" => "El futuro traerá equilibrio y armonía, pero debes tomar decisiones equitativas.",
                "amor" => "En el amor, busca relaciones equitativas y evita los conflictos innecesarios.",
                "trabajo" => "En el trabajo, tu diplomacia será una ventaja, pero también toma decisiones firmes.",
                "salud" => "La salud estará en buen estado si encuentras un equilibrio entre trabajo y descanso.",
                "dinero" => "Las finanzas serán estables si mantienes una gestión cuidadosa y evitas gastos impulsivos."
            ],
            [
                "nombreSigno" => "Escorpio",
                "futuro" => "El futuro estará lleno de intensidad, abraza la transformación y las oportunidades de crecimiento.",
                "amor" => "En el amor, sé honesto y profundo en tus relaciones, pero evita los celos y la posesividad.",
                "trabajo" => "En el trabajo, tu determinación te llevará lejos, pero evita ser dominante.",
                "salud" => "La salud será buena si canalizas tu energía de manera constructiva y te cuidas.",
                "dinero" => "Las finanzas tendrán un potencial de crecimiento si inviertes sabiamente y evitas deudas innecesarias."
            ],
            [
                "nombreSigno" => "Sagitario",
                "futuro" => "El futuro será aventurero, busca nuevas experiencias y amplía tus horizontes.",
                "amor" => "En el amor, la libertad y la diversión serán esenciales, pero mantén la sinceridad.",
                "trabajo" => "En el trabajo, tu entusiasmo te abrirá puertas, pero mantén el enfoque en tus metas.",
                "salud" => "La salud será buena si mantienes una actividad física regular y te cuidas durante tus aventuras.",
                "dinero" => "Las finanzas pueden mejorar si diversificas tus ingresos y evitas gastos impulsivos en tus viajes."
            ],
            [
                "nombreSigno" => "Capricornio",
                "futuro" => "El futuro requerirá disciplina y determinación, pero te llevará a alcanzar tus metas a largo plazo.",
                "amor" => "En el amor, mantén una base sólida en tus relaciones y busca la estabilidad emocional.",
                "trabajo" => "En el trabajo, tu enfoque en objetivos será recompensado, pero no sacrifiques tu vida personal.",
                "salud" => "La salud será buena si mantienes una rutina de ejercicio y descanso adecuada.",
                "dinero" => "Las finanzas serán estables si te comprometes a ahorrar y a tomar decisiones financieras responsables."
            ],
            [
                "nombreSigno" => "Acuario",
                "futuro" => "El futuro será innovador y lleno de sorpresas, mantén la mente abierta y acepta el cambio.",
                "amor" => "En el amor, busca conexiones intelectuales y sé auténtico en tus relaciones.",
                "trabajo" => "En el trabajo, tu creatividad y originalidad serán tus mayores activos, pero mantén la concentración.",
                "salud" => "La salud será buena si equilibras tu vida social y tu bienestar físico y mental.",
                "dinero" => "Las finanzas pueden mejorar si exploras oportunidades inusuales y te mantienes adaptable."
            ],
            [
                "nombreSigno" => "Piscis",
                "futuro" => "El futuro será emocional y espiritual, confía en tu intuición y compasión.",
                "amor" => "En el amor, la sensibilidad y la empatía serán esenciales, pero también establece límites.",
                "trabajo" => "En el trabajo, tu creatividad artística florecerá, pero mantén la organización.",
                "salud" => "La salud será buena si encuentras tiempo para la meditación y el autocuidado.",
                "dinero" => "Las finanzas serán estables si sigues tu intuición y evitas inversiones riesgosas."
            ]
        ];

        $signoBuscado = $request->signo;

   
        // Iterar sobre el arreglo de predicciones
        foreach ($predicciones as $prediccion) {
            // Verificar si el nombre del signo coincide con el signo buscado
            if ($prediccion["nombreSigno"] === $signoBuscado) {
                return view('zodical', [
                    'signo' => $prediccion["nombreSigno"], 
                    'futuro'=>$prediccion["futuro"], 
                    'amor'=>$prediccion["amor"],
                    'trabajo'=>$prediccion["trabajo"],
                    'salud' => $prediccion["salud"],
                    'dinero' => $prediccion["dinero"]
                ]);
            }
        }

        // var_dump($parametro);
    }
}
