<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\User;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use App\Entity\Product;
use App\Entity\Modele;
use App\Form\ProductType;
use App\Repository\UserRepository;
use App\Entity\Datas;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use App\Service\FileUploader;
use Symfony\Component\String\Slugger\SluggerInterface;


class CvController extends AbstractController
{
  private $session;

    public function __construct(SessionInterface $session)
    {
        $this->session = $session;
    }

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
    public function cvSave(Request $request){
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

        return $this -> redirectToRoute('app_pdp');
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
        $repository2 = $this -> getDoctrine() -> getRepository(Product::class);

        $user = $repository -> findOneBy(['email' => $userCurrent -> getEmail(),]);
        $pdp = $repository2 -> findOneBy(['mail_user' => $userCurrent -> getEmail(),]);

          $statut = $user -> getTravailActuellement();
          if ($statut == 'true') {
               $statut = 'travails actuellement' ;
          }else $statut = 'n\'y travails plus';

 //start date in format french
//tecking the values of date to reformat
          $date_debut = $user -> getDateDeDebut();
          $date_fin = $user -> getDateFin();
//translate string to array
          $tabDateDebut = explode('-', $date_debut);
          $tabDateDeFin = explode('-', $date_fin);
//reformating date
          $date_debut = $tabDateDebut[2] . '/' . $tabDateDebut[1] . '/' . $tabDateDebut[0];
          $date_fin =$tabDateDeFin[2] . '/' . $tabDateDeFin[1] . '/' . $tabDateDeFin[0];

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
                'date_debut' => $date_debut,
                'employeur' => $user -> getEmployeur(),
                'departement' => $user -> getDepartement(),
                'travail_actu' => $statut,
                'description_respon' => $user -> getDescriptionResponsabilite(),
                'etablissement' => $user -> getEtablissement(),
                'diplome' => $user -> getDiplome(),
                'domaine_etude' => $user -> getDomaineDetude(),
                'zone_geographique' => $user -> getZoneGeographique(),
                'profil_prof' => $user -> getProfilProfessionnel(),
                'date_fin' => $date_fin,
                'competences' => $user -> getCompetence(),
                'pdp' => $pdp -> getBrochure(),
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
        return new Response('ici votre cv <br /> cette session est encore indis pour le momment car le site est en cours de maintenance');
    }

    /**
     * @Route("/pdp", name="app_pdp")
     * Require ROLE_USER for only this controller method.
     *
     * @IsGranted("ROLE_USER")
     */
    public function new(Request $request, SluggerInterface $slugger)
    {
        $product = new Product();
        $form = $this->createForm(ProductType::class, $product);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var UploadedFile $brochureFile */
            $brochureFile = $form->get('brochure')->getData();

            // this condition is needed because the 'brochure' field is not required
            // so the PDF file must be processed only when a file is uploaded
            if ($brochureFile) {
                $originalFilename = pathinfo($brochureFile->getClientOriginalName(), PATHINFO_FILENAME);
                // this is needed to safely include the file name as part of the URL
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$brochureFile->guessExtension();

                // Move the file to the directory where brochures are stored
                try {
                    $brochureFile->move(
                        $this->getParameter('brochures_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    // ... handle exception if something happens during file upload
                    //throw new Exception("Error Processing Request", 1);

                }

                // updates the 'brochureFilename' property to store the PDF file name
                // instead of its contents
                $product->setBrochure($newFilename);
            }

             $product = new Product();
             $userimg = $this -> getUser();
             $em = $this -> getDoctrine() -> getManager();
             $product -> setBrochure($newFilename);
             $product -> setMailUser($userimg -> getEmail());
             $em -> persist($product);
             $em -> flush();
            // ... persist the $product variable or any other work

            return $this->redirect($this->generateUrl('visualisation'));
        }

        return $this->render('cver/index.html.twig', [
            'form' => $form->createView(),
            'controller_name' => 'hum',
        ]);
    }

    /**
     * @Route("/admin-save", name="admin_save")
     */
     public function saveAdmin(Request $request){
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
       $user -> setRoles(['ROLE_ADMIN']);

   //sauvegarde des donnee dans la bdd
       $em -> persist($user);
       $em -> flush();

       return $this -> redirectToRoute('add_admin');
     }

     /**
     *@Route("/dashroot",name="dashroot")
     *Require ROLE_ADMIN for only this controller method.
     *
     * @IsGranted("ROLE_ADMIN")
     */
     public function dashroot(){
       return $this -> render('cver/root/dashboad.html.twig');
     }


     /**
     *@Route("/build-model",name="build_model")
     *Require ROLE_ADMIN for only this controller method.
     *
     * @IsGranted("ROLE_ADMIN")
     */
     public function buildModel(){
       //this controller is used to allow the user to be able to create a model
       //render notice
       return $this -> render('cver/root/build-model.html.twig');
     }

     /**
     *@Route("/build-model-form",name="build_model_form")
     *Require ROLE_ADMIN for only this controller method.
     *
     * @IsGranted("ROLE_ADMIN")
     */
   public function buildModelForm(){
       //this controller is used to allow the user to be able to create a model
       //render form

       return $this -> render('cver/root/build-model-form.html.twig');
     }

     /**
     *@Route("/build-model-tempo",name="build_model_tempo")
     *Require ROLE_ADMIN for only this controller method.
     *
     * @IsGranted("ROLE_ADMIN")
     */
     public function teckFormTempo(Request $request){
       $nom = $request->request->get('nomModele');
       $codeModele = $request->request->get('codeModele');
       $builModele = $request->request->get('buildModele');

        $this->session->set('nomM',$nom);
        $this->session->set('codeM',$codeModele);
        $this->session->set('builN',$builModele);

       return $this->redirectToRoute('build_model_img');
     }

     /**
     *@Route("/build-model-img",name="build_model_img")
     *Require ROLE_ADMIN for only this controller method.
     *
     * @IsGranted("ROLE_ADMIN")
     */
     public function buildModelImg(Request $request, SluggerInterface $slugger){

           $product = new Product();
           $form = $this->createForm(ProductType::class, $product);
           $form->handleRequest($request);

           if ($form->isSubmitted() && $form->isValid()) {
               /** @var UploadedFile $brochureFile */
               $brochureFile = $form->get('brochure')->getData();

               // this condition is needed because the 'brochure' field is not required
               // so the PDF file must be processed only when a file is uploaded
               if ($brochureFile) {
                   $originalFilename = pathinfo($brochureFile->getClientOriginalName(), PATHINFO_FILENAME);
                   // this is needed to safely include the file name as part of the URL
                   $safeFilename = $slugger->slug($originalFilename);
                   $newFilename = $safeFilename.'-'.uniqid().'.'.$brochureFile->guessExtension();

                   // Move the file to the directory where brochures are stored
                   try {
                       $brochureFile->move(
                           $this->getParameter('brochures_directory'),
                           $newFilename
                       );
                   } catch (FileException $e) {
                       // ... handle exception if something happens during file upload
                       //throw new Exception("Error Processing Request", 1);

                   }

                   // updates the 'brochureFilename' property to store the PDF file name
                   // instead of its contents
                   $product->setBrochure($newFilename);
               }

                $nom = $this->session->get('nomM');
                $codeModele = $this->session->get('codeM');
                $buikModele = $this->session->get('builN');


                $modele = new Modele();
                $userCurrent = $this -> getUser();
                $em = $this -> getDoctrine() -> getManager();
                $modele -> setImage($newFilename);
                $modele ->setNom($nom);
                $modele -> setModele($codeModele);
                $modele -> setBuild($buikModele);
                $modele -> setMail($userCurrent -> getEmail());
                $em -> persist($modele);
                $em -> flush();
               // ... persist the $product variable or any other work

               return $this->redirect($this->generateUrl('traitementFinal'));
           }

           return $this->render('cver/root/build-model-img.html.twig', [
               'form' => $form->createView(),
               'controller_name' => 'hum',
           ]);
       }




}
