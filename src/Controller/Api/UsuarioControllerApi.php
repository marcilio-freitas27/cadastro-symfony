<?php

namespace App\Controller\Api;

use App\Entity\Usuario;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * @Route("/api/v1",name="api_usuario_")
 */
class UsuarioControllerApi extends AbstractController
{
    /**
     * @Route("/lista",methods={"GET"}, name="lista")
     */
    public function lista(): JsonResponse
    {   
        // pegar dados usando o doctrine
        $doctrine = $this->getDoctrine()->getRepository(Usuario::class);

        // debug de todo o conteúdo
        //dump($doctrine->findAll());
        //dump($doctrine->pegarAtivos());

        // status fora do array
        //return new JsonResponse(["Implementar lista na API"],404);

        return new JsonResponse($doctrine->pegarTodos());
    }

    /**
     * @Route("/cadastra", methods={"POST"}, name="cadastra")
     */
    public function cadastra(Request $request): Response
    {
        $data = $request->request->all();

        $usuario = new Usuario;
        $usuario->setNome($data['nome']);
        $usuario->setEmail($data['email']);
        
        $doctrine = $this->getDoctrine()->getManager();
        $doctrine->persist($usuario);
        $doctrine->flush();

        
        if ($doctrine->contains($usuario))
        {
            return new Response("ok", 200);
        }else {
            return new Response("error", 404);
        }

    }
}