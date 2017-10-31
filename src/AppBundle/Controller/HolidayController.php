<?php

namespace AppBundle\Controller;


use FOS\RestBundle\Controller\Annotations\Get;
use FOS\RestBundle\Controller\Annotations\Route;
use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\JsonResponse;

class HolidayController extends FOSRestController
{
    /**
     * @Route("/holidays/count", name="count")
     *
     * @Get("/holidays/count")
     */
    public function getCountHolidays()
    {
        return new JsonResponse('holiday count stub');
    }


    /**
     * @Route("/holidays/count", name="count")
     *
     * @Get("/holidays/all")
     */
    public function getAllHolidays()
    {
        return new JsonResponse('list holiday stub');
    }
}