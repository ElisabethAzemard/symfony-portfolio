<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Post;
use App\Entity\Tag;

class BlogController extends AbstractController
{
    /**
     * @Route("/blog", name="app_blog")
     */
    public function allPosts()
    {
        return $this->render('blog/index.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }

    /**
     * @Route("/blog", name="app_blog")
     */
    public function oneTag()
    {
        return $this->render('blog/tag.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }

    /**
     * @Route("/blog", name="app_blog")
     */
    public function onePost()
    {
        return $this->render('blog/post.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }
}
