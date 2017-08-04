<?php

namespace MiguelAlcaino\GulpableBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MiguelAlcainoGulpableBundle:Default:index.html.twig');
    }
}
