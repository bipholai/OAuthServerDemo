<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Class ApiController
 * Demo more response API
 * @package AppBundle\Controller
 */
class ApiController extends Controller
{
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
}
