<?php

namespace erpBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
class DefaultController extends Controller{
    public function indexAction(Request $request)
    {

        echo 'ffff fdfdfd';
       if($request->get('login')!='' ) {

        $email = $request->get('email');
        $password =  $request->get('password');

        echo ($email);
        echo ($password);
       } 



        return $this->render('@erp/Default/index.html.twig');
    }

    public function personneAction($nom) {
    
        return $this->render('@erp/Default/personne.html.twig', array('name' => $nom));
    }

    public function sommeAction($permierNombre, $deuxiemeNombre) {
        
        $sommeTotale = floatval($permierNombre) + floatval($deuxiemeNombre);

        return $this->render('@erp/Default/somme.html.twig', array('premierNombre' => $permierNombre, 
                                                                    'deuxiemeNombre' => $deuxiemeNombre,
                                                                    'sommeTotale' => $sommeTotale
                                                                    )
                                                                
                            );
    }

}
