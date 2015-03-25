<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/app/example", name="homepage")
     */
    public function indexAction()
    {
        return $this->render('default/index.html.twig');
    }

    /**
     * @Route("/api/users", name="users")
     */
    public function usersAction()
    {
        return new JsonResponse(
            [
                [
                    'id' => 1,
                    'name' => 'John'
                ],
                [
                    'id' => 2,
                    'name' => 'Steve'
                ]
            ]
        );
    }

    /**
     * @Route("/api/user", name="user")
     */
    public function userAction()
    {
        return new JsonResponse(
            [
                'id' => $this->getUser()->getId(),
                'name' => $this->getUser()->getUsername()
            ]
        );
    }

    /**
     * @Route("/api/categories", name="categories")
     */
    public function categoriesAction()
    {
        return new JsonResponse(
            [
                [
                    'id' => 1,
                    'name' => 'Relax'
                ],
                [
                    'id' => 2,
                    'name' => 'Drink'
                ]
            ]
        );
    }

    /**
     * @Route("/api/categories/{id}", name="category")
     */
    public function categorieAction($id)
    {
        return new JsonResponse(
            [
                'id' => $id,
                'name' => 'Relax'
            ]
        );
    }

    /**
     * @Route("/oauth/v2/auth_login_check", name="fos_user_security_check_custom")
     */
    public function loginCheckAction()
    {
    }

    /**
     * @Route("/oauth/v2/auth_logout", name="fos_user_security_logout_custom")
     */
    public function logoutCheckAction()
    {
    }
}
