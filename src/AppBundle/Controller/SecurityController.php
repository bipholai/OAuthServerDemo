<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SecurityController extends Controller
{
    /**
     * @Route("/oauth/v2/auth_login_check", name="oauth_security_check")
     */
    public function loginCheckAction()
    {
    }

    /**
     * @Route("/oauth/v2/auth_logout", name="oauth_security_logout")
     */
    public function logoutCheckAction()
    {
    }
}
