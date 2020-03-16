<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;



class CvController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        return $this -> render('cv/index.html.twig', [
            'controller_name' => 'CvController',
        ]);
    }

    /**
     * @Route("/modele", name="modele")
    */
    public function modele(){
    	return $this -> render('modele/index.html.twig');
    }

    /**
     * @Route("/choix-modele", name="choix_model")
    */
    public function choixModele(){
         
       return $this -> render('cv/chargeur.html.twig');
    }

    /**
     * @Route("/choix-modeles", name="les_modeles")
    */
    public function modeles(){

    	return $this -> render('cv/les-modeles.html.twig');
    }

    /**
     * @Route("/inscription", name="inscription")
    */
    public function inscription(){
          
          if ($this -> getUser()) {
              $this -> redirectToRoute('cv_start');
          }

        return $this -> render('cv/inscription.html.twig');
    }

    /**
     * @Route("/save-user", name="save_user")
    */
    public function saveUser(Request $request){

        $user = new User(); //extentiation 

    //recuperation des informations du formulaire
        $nom = $request->request -> get('nom');
        $prenom = $request->request -> get('prenom');
        $email = $request->request -> get('email');
        $pass = $request->request -> get('password2');

    //enregistrement des infos dans la class user
        $em = $this -> getDoctrine() -> getManager();
        
        $user -> setNom($nom);
        $user -> setPrenom($prenom);
        $user -> setEmail($email);
        $user -> setPassword($pass);
        $user -> setRoles(['ROLE_USER']);

    //sauvegarde des donnee dans la bdd
        $em -> persist($user);
        $em -> flush();

        return $this -> redirectToRoute('cv_start');
    }

    /**
     * @Route("/cv-start", name="cv_start")
     * Require ROLE_USER for only this controller method.
     *
     * @IsGranted("ROLE_USER")
    */
    public function cvStart(){
        
        return $this -> render('cv/cv-form.html.twig');
    }

    /**
     * @Route("/save-cv", name="save_cv")
     * Require ROLE_USER for only this controller method.
     *
     * @IsGranted("ROLE_USER")
    */
    public function cvSave(Request $request){
        //ce controleur permet de traiter le formulaire de remplissage du cv

        $nom = $request  ->request -> get('nom');
        $dr = $request ->request -> get('description_responsabilite');
        $n = $request ->request -> get('nom'); 
        return new Response('nom: '. $nom . 'description respon: '. $dr );
    }
}
