<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\AjoutUtilisateurType;
use App\Entity\Utilisateur;

class UtilisateurController extends AbstractController
{
    /**
     * @Route("/ajout_utilisateur", name="ajout_utilisateur")
     */
    public function ajoutUtilisateur()
    {

        $utilisateur = new utilisateur();
        $utilisateur->setDateInscription(new \DatTime());

        //$form = $this->createForm
        return $this->render('ajout_utilisateur/index.html.twig', [
            
        ]);
    }
}
