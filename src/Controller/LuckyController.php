<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class LuckyController
{
    public function number(): Response
    {
        $number = random_int(0, 100);

        return new Response(
            '<html>
                <head>
                    <title>
                        Lucky1
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