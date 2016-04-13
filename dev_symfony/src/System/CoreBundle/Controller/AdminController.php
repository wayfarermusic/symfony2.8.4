<?php

namespace System\CoreBundle\Controller;

use System\CoreBundle\Controller\AdminBaseController;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class AdminController extends AdminBaseController
{
    /**
     * @Route("/admin/")
     */
    public function indexAction()
    {
        return $this->render('SystemCoreBundle:Admin:index.html.twig');
    }
    
}
