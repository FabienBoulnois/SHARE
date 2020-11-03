<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


use App\Entity\Theme;
use App\Form\AjoutThemeType;
use Symfony\Component\HttpFoundation\Request;

class ThemeController extends AbstractController
{
    /**
     * @Route("/ajout-theme", name="ajout-theme")
     */
    public function ajoutTheme(Request $request)
    {
        $theme = new Theme();

        $form = $this->createForm(AjoutThemeType::class, $theme);//saisir un formulaire qui doit gerer les données du $theme

        if ($request->isMethod('POST')) {
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                $this->addFlash('notice','Theme inséré');
                $em = $this->getDoctrine()->getManager();
                $em->persist($theme);
                $em->flush();
            }
        }

        return $this->render('theme/ajout-theme.html.twig', [
            'form'=>$form->createView()
        ]);
    }

    /**
     * @Route("/liste_theme", name="liste_theme")
     */
    public function listeTheme(Request $request)
    {
        $em = $this->getDoctrine();
        $repoTheme = $em->getRepository(Theme::class);

        if ($request->get('supp')!=null){
            $theme = $repoTheme->find($request->get('supp'));
            if($theme!=null){
                $em->getManager()->remove($theme);
                $em->getManager()->flush();
            }    
            return $this->redirectToRoute('liste_theme');
        }

        $themes = $repoTheme->findBy(array(),array('libelle'=>'ASC'));
        return $this->render('theme/liste_theme.html.twig', [
            'themes'=>$themes
        ]);
    }

    /**
     * @Route("/modif_theme/{id}", name="modif_theme", requirements={"id"="\d+"})
     */
    public function modifTheme(int $id, Request $request)
    {
        $em = $this->getDoctrine();
        $repoTheme = $em->getRepository(Theme::class);
        $theme = $repoTheme->find($id);

        if($theme==null){
            $this->addFlash('notice', "Ce thème n'existe pas");
            return $this->redirectToRoute('liste_theme');
        }

        $form = $this->createForm(ModifThemeType::class,$theme);

        if ($request->isMethod('POST')) {            
            $form->handleRequest($request);            
            if ($form->isSubmitted() && $form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($theme);
                $em->flush();    

                $this->addFlash('notice', 'Thème modifié');

            }
            return $this->redirectToRoute('liste_theme');
        }        

        return $this->render('theme/modif_theme.html.twig', [
            'form'=>$form->createView()
        ]);
    }

}
