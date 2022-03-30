<?php
// src/Controller/ProjectController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProjectController
{
    /**
    * @Route("project")
    */
    public function number(): Response
    {
        include 'project.html';
        return new Response();
    }
}