<?php
    namespace App\Controller;

    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Annotation\Route;
    use Symfony\Bundle\FrameworkBundle\Controller\Controller;

    class MainController extends Controller{
        /**
         * @Route("/")
         */
        public function welcome(){
            return $this->render('welcome.html.twig');
        }
    }