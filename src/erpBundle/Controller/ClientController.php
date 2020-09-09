<?php

    namespace erpBundle\Controller;
    use Symfony\Bundle\FrameworkBundle\Controller\Controller;
    class ClientController extends Controller {

        public function ajouterAction() {

            return $this->render('@erp/Client/setClient.html.twig', array());
        }

        public function afficherAction() {

           // return $this->render('@erp/Client/getClient.html.twig', array());

           return $this->render('@erp/Client/login.html.twig', array());
        }
    }