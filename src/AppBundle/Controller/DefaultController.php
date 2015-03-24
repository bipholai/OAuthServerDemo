<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

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
     * @Route("/api/users", name="homepage")
     */
    public function userAction()
    {
        return new JsonResponse(
            [
                [
                    'id' => 1,
                    'name' => 'John Doe'
                ],
                [
                    'id' => 2,
                    'name' => 'Steve'
                ]
            ]
        );
    }
}
