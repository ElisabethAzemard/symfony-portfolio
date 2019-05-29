<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Post;
use App\Entity\Category;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="app_work")
     */
    public function allProjects()
    {

        return $this->render('work/index.html.twig');
    }

    /**
     * @Route("/{category}", name="app_work_category")
     */
    public function oneCategory(/*Category $cat_name*/) // pass the category id to display the proper one
    {
        return $this->render('work/category.html.twig');
    }

    /**
     * @Route("/{category}/{project}", name="app_work_project")
     */
    public function oneProject(/*Category $cat_name, Post $project_name*/) // pass the category id to display the proper one
    {
        return $this->render('work/project.html.twig');
    }
}
