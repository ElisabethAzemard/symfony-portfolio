<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
// use App\Entity\FormEntry;

class ContactFormController extends AbstractController
{
    /**
     * @Route("/contact", name="app_contact")
     */
    public function contact()
    {
        return $this->render('contact_form/index.html.twig', [
            'controller_name' => 'ContactFormController',
        ]);
    }
}
