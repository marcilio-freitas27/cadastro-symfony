<?php

namespace App\Controller;

//importar classes
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController
{   
    // //annotations
    // /**
    //  * @Route("/",methods={"POST","GET"})
    //  */
    // //tipagem: :tipo
    // public function index(Request $request): Response{
    //     $resp = new Response();
    //     //pode ser qualquer um, 404,300, etc

    //     //alterando o construtor do response
    //     //covertendo array em json
    //     $resp->setContent(json_encode(
    //         [
    //             "recebido" => $request->get('nome'),
    //             "Ip" => $request->getClientIp()
    //         ]
    //     ));
    //     $resp->setStatusCode(200);

    //     return $resp;
    // }
}