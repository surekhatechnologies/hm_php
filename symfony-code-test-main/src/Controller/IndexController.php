<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use App\Service\CircleService;
use App\Service\TriangleService;
use App\Entity\Circle;
use App\Entity\Triangle;

class IndexController extends AbstractController
{
    /**
     * @Route("/circle/{radius}", name="app_circle")
     */
    public function getCircleInformation($radius, ManagerRegistry $doctrine): JsonResponse
    {
        $circle = new CircleService($radius);

        $entityManager = $doctrine->getManager();
        $circleData = new Circle();
        $circleData->setRadius($circle->getRadius());
        $circleData->setSurface($circle->getArea());
        $circleData->setCircumference($circle->getCircumference());

        // tell Doctrine you want to (eventually) save the Circle (no queries yet)
        $entityManager->persist($circleData);

        // actually executes the queries (i.e. the INSERT query)
        $entityManager->flush();

        return $this->json([
            "type" => "circle", 
            "radius" => $circle->getRadius(), 
            "surface" => $circle->getArea(), 
            "circumference" => $circle->getCircumference()
        ]);
    }

    /**
     * @Route("/triangle/{a}/{b}/{c}", name="app_triangle")
     */
    public function getTriangleInformation($a, $b, $c, ManagerRegistry $doctrine): JsonResponse
    {
        $triangle = new TriangleService($a, $b, $c);

        $entityManager = $doctrine->getManager();
        $triangleData = new Triangle();
        $triangleData->setSideA($triangle->getSideA());
        $triangleData->setSideB($triangle->getSideB());
        $triangleData->setSideC($triangle->getSideC());
        $triangleData->setSurface($triangle->getArea());
        $triangleData->setCircumference($triangle->getCircumference());

        // tell Doctrine you want to (eventually) save the triangle (no queries yet)
        $entityManager->persist($triangleData);

        // actually executes the queries (i.e. the INSERT query)
        $entityManager->flush();

        return $this->json([
            "type" => "triangle",
            "a" => $triangle->getSideA(),
            "b" => $triangle->getSideB(),
            "c" => $triangle->getSideC(), 
            "surface" => $triangle->getArea(), 
            "circumference" => $triangle->getCircumference()
        ]);
    }
}
