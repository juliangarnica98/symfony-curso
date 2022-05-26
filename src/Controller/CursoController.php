<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use function Symfony\Component\String\u;

class CursoController
{
    #[Route('/')]
    public function homepage(): Response
    {
        return $this->render('');
        //return new Response('Title : Curse');
    }

    #[Route('/rol/{slug}')]
    public function rol(String $slug = null): Response
    {
        if($slug){
            $role = 'Role: '.u(str_ireplace('-',' ',$slug))->title(true);
        }else{
            $role = 'All roles';
        }
        return new Response($role);
    }
}