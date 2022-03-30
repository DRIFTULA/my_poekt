<?php
// src/Controller/WorkController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WorkController
{
    /**
    * @Route("/work")
    */
    public function Work()
    {
        include 'work1.html';
        return new Response();
    }
}