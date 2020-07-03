<?php
//le namespace permet d'identifier ma lase pour pouvoir l'appeller dans d'autres classes
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
//je crée une classe HomeController, qui correspond au nom du fichier, et qui me permet de regrouper des routes.
    class HomeController{
        /**
         * @Route("/", name="home")
         *
         * je crée une route dans un commentaire que PHP va exécuter ( c'est une annotation). Je sais que c'est une
         * annotation car il y a une classe avec un @ devant.
         * J'assoscie une url à ma route, et je lui associe aussi une méthode de controleur
         */
        public function home(){
            var_dump("Bienvenue sur la page d'accueil"); die;
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

        public function contact(){
            var_dump("Welcome in contact page");die;
        }

    }

