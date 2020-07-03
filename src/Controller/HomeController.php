<?php
//le namespace permet d'identifier ma lase pour pouvoir l'appeller dans d'autres classes
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
//je crée une classe HomeController, qui correspond au nom du fichier, et qui me permet de regrouper des routes.
    class HomeController extends AbstractController {
        /**
         * @Route("/", name="home")
         *
         * je crée une route dans un commentaire que PHP va exécuter ( c'est une annotation). Je sais que c'est une
         * annotation car il y a une classe avec un @ devant.
         * J'assoscie une url à ma route, et je lui associe aussi une méthode de controleur
         */
        public function home(Request $request){

            $age = $request->query->get('age');
            var_dump($age);die;
            //var_dump("Bienvenue sur la page d'accueil"); die;
        }

        /**
         * @Route("/article", name="article")
         */

        public function article(){
            var_dump("¡ Bienvenido en la pagina del artico !");die;
        }

        /**
         * @Route("/contact", name="contact")
         */

        public function contact(Request $request){

            $nom= $request->query->get('nom');
            var_dump($nom);die;

            //var_dump("Welcome in contact page");die;
        }


        /**
         * @Route("/Poker", name="poker")
         */

        public function poker(Request $request){

            $age= $request->query->get('age');

            if($age<18){
                var_dump(" tu as $age ans tu es donc mineur sorry not sorry");die;

            }else {
                var_dump("Tu as $age ans tu es validé par la street"); die;
            }
        }

    }

