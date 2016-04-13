<?php

namespace System\CoreBundle\Controller\Setting;

use System\CoreBundle\Controller\AdminBaseController;
use System\CoreBundle\Form\SettingType;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class SettingController extends AdminBaseController
{
    /**
     * @Route("/admin/setting/", name="admin_setting")
     */
    public function indexAction()
    {
        
        $form = $this->createForm(SettingType::class);
        
        return $this->render('SystemCoreBundle:Admin:Setting/index.html.twig', 
            array(
                'form' => $form->createView(),
            )
        );
    }
    
}
