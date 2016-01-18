<?php

namespace indexBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class IndexController extends Controller
{
    /** display index page
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction()
    {
        return $this->render('indexBundle:Default:index.html.twig');
    }
}
