<?php

namespace ProductosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ProductosBundle:Default:index.html.twig');
    }

    public function producto1Action()
    {
      return $this->render('ProductosBundle:Default:producto1.html.twig');
    }

    public function producto2Action()
    {
      return $this->render('ProductosBundle:Default:producto2.html.twig');
    }
}
