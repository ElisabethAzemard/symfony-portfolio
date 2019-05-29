<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ProfileController extends AbstractController
{
    /**
     * @Route("/about", name="app_about")
     */
    public function about()
    {
        return $this->render('profile/index.html.twig');
    }
}
