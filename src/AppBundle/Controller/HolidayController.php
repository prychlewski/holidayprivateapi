<?php

namespace AppBundle\Controller;


use FOS\RestBundle\Controller\Annotations\Get;
use FOS\RestBundle\Controller\Annotations\Route;
use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Yasumi\Holiday;
use Yasumi\Yasumi;

class HolidayController extends FOSRestController
{
    private $holidays;

    public function __construct()
    {
        $this->holidays = Yasumi::create('Poland', date('Y'));
    }

    /**
     * @Route("/holidays/count", name="count")
     *
     * @Get("/holidays/count")
     */
    public function getCountHolidays()
    {
        return new JsonResponse(['holidaysCount' => $this->holidays->count()]);
    }


    /**
     * @Route("/holidays/count", name="count")
     * @Route("/", name="home")
     *
     * @Get("/holidays/all")
     */
    public function getAllHolidays()
    {
        $holidaysList = [];

        /** @var Holiday $holiday */
        foreach ($this->holidays->getIterator() as $holiday) {
            $holidaysList[date('d-m-Y', $holiday->getTimestamp())] = [
                'name' => $holiday->getName(),
                'type' => $holiday->getType(),
            ];
        }


        return new JsonResponse($holidaysList);
    }
}