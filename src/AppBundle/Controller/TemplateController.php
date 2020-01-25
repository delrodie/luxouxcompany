<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

/**
 * Class TemplateController
 * @Route("/template")
 */
class TemplateController extends Controller
{
    /**
     * @Route("/", name="tempate_index")
     */
    public function indexAction()
    {
        return $this->render('template/index.html.twig');
    }
}
