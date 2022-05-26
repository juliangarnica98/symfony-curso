<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use function Symfony\Component\String\u;

class CursoController extends AbstractController
{
    #[Route('/')]
    public function homepage()
    {
        $tracks = [
            ['song' => 'Gangsta\'s Paradise', 'artist' => 'Coolio'],
            ['song' => 'Waterfalls', 'artist' => 'TLC'],
            ['song' => 'Creep', 'artist' => 'Radiohead'],
            ['song' => 'Kiss from a Rose', 'artist' => 'Seal'],
            ['song' => 'On Bended Knee', 'artist' => 'Boyz II Men'],
            ['song' => 'Fantasy', 'artist' => 'Mariah Carey'],
        ];

        return $this->render('curso/base.html.twig', [
            'title' => 'PB & Jams',
            'tracks' => $tracks,
        ]);
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