<?php
// src/Controller/LuckyController2.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class LuckyController2
{
    /**
    * @Route("/lucky/number2")
    */
    public function number(): Response
    {
        
        $number = random_int(0, 100);

        return new Response(
            '<html>
                <head>
                    <title>
                        Lucky2
                    </title>
                </head>
                <body>
                Счастливый номер через маршруты атрибутов: '.$number.'
                <p>
                    <input type="button" value=" На главную " onclick=\'location.href="http://localhost/project"\'>
                </p>
                </body>
            </html>'
        );
    }
}