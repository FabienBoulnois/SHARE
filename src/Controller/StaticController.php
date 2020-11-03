<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\ContactType;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\User;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class StaticController extends AbstractController
{
    /**
     * @Route("/static", name="static")
     */
    public function index()
    {
        return $this->render('static/index.html.twig', [
            'controller_name' => 'StaticController',
        ]);
    }
/**
 * @Route("/inscrire", name="inscrire")
 */
public function inscrire(Request $request, UserPasswordEncoderInterface $passwordEncoder){
    $user = new User();
    $form = $this->createFormBuilder($user)
    ->add('username', TextType::class)
    ->add('password', PasswordType::class)
    ->add('save', SubmitType::class, array('label' => 'S\'inscrire'))
    ->getForm();
   
    if ($request->isMethod('POST')){
    $form -> handleRequest($request);
    if($form->isValid()){
    $em = $this->getDoctrine()->getManager();
    $user->setRoles(array('ROLE_USER'));
   
    $user->setPassword($passwordEncoder->encodePassword($user, $user->getPassword()));
    $em->persist($user);
    $em->flush();
 return $this->redirectToRoute('static');
 }
 }

 return $this->render('accueil/inscrire.html.twig', ['form' => $form->createView()]);
 }







    /** 
     * @Route("/contact", name="contact")
    */
    public function contact(Request $request)
    {
        $form = $this->createForm(ContactType::class);

        if ($request->isMethod('POST')) {
            $form->handleRequest($request);            
            if ($form->isSubmitted() && $form->isValid()) {
            $this->addFlash('notice','Bouton appuyé');
        }          
    } 
        return $this->render('static/contact.html.twig', [
            'form'=>$form->createView()
        ]);
    }

}
