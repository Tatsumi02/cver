<?php
// src/Controller/ProductController.php
namespace App\Controller;

use App\Entity\Product;
use App\Form\ProductType;
use App\Entity\User;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;


//normalement je devais nomer cette classe admindControleur. mais vu que j'avais cree le controlleur avant meme que j'ai l'idee que cela pouvais m'etre utile en admin
/**
 * @Route("/root",name="root")
 */
class CverController extends AbstractController
{
     /**
      * @Route("/add-admin", name="add_admin")
      */
      public function root(){
        return $this -> render('cver/root/save-root.html.twig');
      }

      
}
