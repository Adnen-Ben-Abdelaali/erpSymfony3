<?php

namespace erpBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use erpBundle\Form\employeType;
use erpBundle\Entity\employe;
use Symfony\Component\HttpFoundation\Request;
class employeController extends Controller {
    
    public function ajoutAction(Request $request,$id)
    {  
        $cnx = $this->getDoctrine()->getManager();
        $emptest = $cnx->getRepository('erpBundle:employe')->find($id);
   
  
        if(empty($emptest)) {
            $emp = new employe();
            
        } else {
            $cnx = $this->getDoctrine()->getManager();
            $emp = $cnx->getRepository('erpBundle:employe')->find($id);
        }
        
        $form = $this->createForm(employeType::class, $emp);
        $form->handleRequest($request);

        if($form->isValid()) {
            $emp->setEmail('user@gmail.com');

            //connexion à la base de données

            
            $cnx->persist($emp);
            $cnx->flush();

        }
        return $this->render('@erp/employe/ajout.html.twig', array('form' => $form->createView()
            
        ));
    }

    public function afficheAction() {
        
        //connexion à la base de données

        $cnx = $this->getDoctrine()->getManager();
      
        $form = $this->createForm(employeType::class);
       $result = $cnx->getRepository('erpBundle:employe')->findAll();

        // pour retiurner une page Twig : on utilise $this->render()
        return $this->render('@erp/employe/affiche.html.twig', array( 'result' => $result ,'form' =>$form->createView())
    
                            );
    }

    public function supprimeAction($id) {

        //connexion à la base de données

        $cnx = $this->getDoctrine()->getManager();
        
        $result = $cnx->getRepository('erpBundle:employe')->find($id);

        //pour préparer la requete
        $cnx->remove($result);
        // pour executer la requete
        $cnx->flush();

        // pour faire la redirection : on utilise $this->redirectToRoute('le nom de route')
        return $this->redirectToRoute('affiche');

    }

    public function ModifierAction(Request $request) {

         $id=$request->get('id');
        //connexion à la base de données

        $cnx = $this->getDoctrine()->getManager();
        
        $q = $cnx->createQueryBuilder()
			->update('erpBundle:employe', 'erp')
			->set('erp.nom', '?1')
            ->set('erp.prenom', '?2')
            ->set('erp.email', '?3')
			->where('erp.id = ?4')
            ->setParameter(1, $request->get('nom'))
            ->setParameter(2, $request->get('prenom'))
            ->setParameter(3, $request->get('email'))
			->setParameter(4, $id)
			->getQuery();
		$p = $q->execute();

        // pour faire la redirection : on utilise $this->redirectToRoute('le nom de route')
        return $this->redirectToRoute('affiche');

    }
}
