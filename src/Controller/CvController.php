<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\User;
use App\Repository\UserRepository;
use App\Entity\Datas;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use App\Service\FileUploader;



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
     * @Route("/user", name="dash")
     * Require ROLE_USER for only this controller method.
     *
     * @IsGranted("ROLE_USER")
    */
    public function dash(){
        //ce controller conserne l'espace utilisateur
        
      return new Response('<center> ici votre dash <br /> en cours de conception... </center>');
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
     * @Route("/critique", name="critique")
     * Require ROLE_USER for only this controller method.
     *
     * @IsGranted("ROLE_USER")
    */
    public function critique(){
        $user = $this -> getUser();

        return new Response('bienvenu '.$user -> getNom());
    }


    /**
     * @Route("/save-cv", name="save_cv")
     * Require ROLE_USER for only this controller method.
     *
     * @IsGranted("ROLE_USER")
    */
    public function cvSave(Request $request, FileUploader $fileUploader){
        //ce controleur permet de traiter le formulaire de remplissage du cv

        $datas = new Datas();
        $em = $this -> getDoctrine() -> getManager();
        $userCurrent = $this -> getUser(); //on recupere les information de l'utitlisateur courant

        //recuperation des information pris au formulaire
         $nom = $userCurrent -> getNom();
         $prenom = $userCurrent -> getPrenom();
         $email = $userCurrent -> getEmail();

         $titre_pro = $request->request -> get('titre_pro');
         $adresse_post = $request->request -> get('adresse_post');
         $code_post = $request->request -> get('code_post');
         $phone = $request->request -> get('phone');
         $email = $request->request -> get('email');
         $intitule = $request->request -> get('intitule');
         $ville = $request->request -> get('ville');
         $date_debut = $request->request -> get('date_debut');
         $employeur = $request->request -> get('employeur');
         $departement = $request->request -> get('departement');
         $date_fin = $request->request -> get('date_fine');
         $travail_actu = $request->request -> get('travailActu');

           if ($travail_actu == null) {
                $travail_actu = 'false';
           }else $travail_actu = 'true';


         $description_respon = $request->request -> get('description_respon');
         $etablissement = $request->request -> get('etablisement');
         $diplome = $request->request -> get('diplome');
         $domaine_etudes = $request->request -> get('domaine_etude');
         $zone_geographique= $request->request -> get('zone_geographique');

          $competences= $request->request -> get('competences');
          $profil_prof= $request->request -> get('profilePro');
          $competences= $request->request -> get('competences');

          $datas -> setNom($nom);
          $datas -> setPrenom($prenom);
          $datas -> setEmail($email);
          $datas -> setTitreProfessionnel($titre_pro);
          $datas -> setAdressePostal($adresse_post);
          $datas -> setCodePostal($code_post);
          $datas -> setTelephone($phone);
          $datas -> setIntituleDePost($intitule);
          $datas -> setVille($ville);
          $datas -> setDateDeDebut($date_debut);
          $datas -> setEmployeur($employeur);
          $datas -> setDepartement($departement);
          $datas -> setTravailActuellement($travail_actu);
          $datas -> setDescriptionResponsabilite($description_respon);
          $datas -> setEtablissement($etablissement);
          $datas -> setDiplome($diplome);
          $datas -> setDomaineDetude($domaine_etudes);
          $datas -> setZoneGeographique($zone_geographique);
          $datas -> setProfilProfessionnel($profil_prof);
          $datas -> setCompetence($competences);
          $datas -> setProfilProfessionnel($profil_prof);
          $datas -> setDateFin($date_fin);

         $em -> persist($datas);
         $em -> flush();
         
        return $this -> redirectToRoute('visualisation');
    }

    /**
     * @Route("/apercu", name="visualisation")
     * Require ROLE_USER for only this controller method.
     *
     * @IsGranted("ROLE_USER")
    */
    public function apercu(){
        //ce controleur permet de donner une apercu sur le model de cv choisir par l'utilisateur
        $userCurrent = $this -> getUser();
        $repository = $this -> getDoctrine() -> getRepository(Datas::class);
        $user = $repository -> findOneBy(['email' => $userCurrent -> getEmail(),]);
          $statut = $user -> getTravailActuellement();
          if ($statut == 'true') {
               $statut = 'travails actuellement' ;
          }else $statut = 'n\'y travails plus';

        return $this -> render('modele/build/index.html.twig',
               [
                'nom' => $user -> getNom(),
                'prenom' => $user -> getPrenom(),
                'email' => $user -> getEmail(),
                'titre_pro' => $user -> getTitreProfessionnel(),
                'adresse_post' => $user -> getAdressePostal(),
                'code_post' => $user -> getCodePostal(),
                'phone' => $user -> getTelephone(),
                'intitule' => $user -> getIntituleDePost(),
                'ville' => $user -> getVille(),
                'date_debut' => $user -> getDateDeDebut(),
                'employeur' => $user -> getEmployeur(),
                'departement' => $user -> getDepartement(),
                'travail_actu' => $statut,
                'description_respon' => $user -> getDescriptionResponsabilite(),
                'etablissement' => $user -> getEtablissement(),
                'diplome' => $user -> getDiplome(),
                'domaine_etude' => $user -> getDomaineDetude(),
                'zone_geographique' => $user -> getZoneGeographique(),
                'profil_prof' => $user -> getProfilProfessionnel(),
                'date_fin' => $user -> getDateFin(),
                'competences' => $user -> getCompetence(),
               ]
          );
    }

    /**
     * @Route("/cv-user", name="son_cv")
     * Require ROLE_USER for only this controller method.
     *
     * @IsGranted("ROLE_USER")
    */
    public function cvUser(){
        return new Response('ici votre cv');
    }
}
