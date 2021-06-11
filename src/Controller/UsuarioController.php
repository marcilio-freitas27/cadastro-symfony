<?php

//nome da pasta
namespace App\Controller;

// importar classes
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Usuario;

/**
 * @Route("/",name="web_usuario_")
 */
//rederizar templates: abstractcontroller
class UsuarioController extends AbstractController
{
    /**
     * @Route("/", methods={"GET"}, name="index")
     */

    public function index(): Response
    {
        //return new Response("Implementar cadastro.");
        return $this->render("usuario/form.html.twig");
        /*return $this->render("usuario/sucesso.html.twig",[
            "fulano" => "Marcilio"
        ]);*/
        /*return $this->render("usuario/erro.html.twig",[
            "fulano" => "Marcilio"
        ]);*/
    }

    /**
     * @Route("/salvar",methods={"POST"},name="salvar")
     */

    public function salvar(Request $request): Response
    {
        $data = $request->request->all();

        $usuario = new Usuario;
        $usuario->setNome($data['nome']);
        $usuario->setEmail($data['email']);

        // exibe array dos valores dos campos
        dump($data);
        
        // inserir no banco, entity
        $doctrine = $this->getDoctrine()->getManager();
        //persistir, inserir, preparar
        $doctrine->persist($usuario);
        // inserir de fato
        $doctrine->flush();

        dump($usuario);
        
        //
        //if ($doctrine->contains($usuario))
        if( $usuario->getId() )
        {
            return $this->render("usuario/sucesso.html.twig",[
                "fulano" =>$data['nome']
            ]);
        }else {
            return $this->render("usuario/erro.html.twig",[
                "fulano" =>$data['nome']
            ]);
        }

        return new Response("Implementar gravação no banco.");
    }
}