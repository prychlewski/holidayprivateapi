<?php


namespace AppBundle\Controller;

use FOS\RestBundle\Controller\Annotations\Route;
use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\JsonResponse;
class MemberController extends FOSRestController
{
    /**
     * @param $username
     *
     * Route("/user/register", name="count")
     *
     * @Post("/user/register")
     */
    public function registerUser($username): void
    {
        $username = isset($argv[1]) ? $argv[1] : null;
        $commandBus->handle(new RegisterMember($username));
    }
}
