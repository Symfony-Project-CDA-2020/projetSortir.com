<?php

namespace App\Controller;


use App\Repository\CityRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/city")
 */
class CityController extends AbstractController
{
    /**
     * @Route("/", name="city_index", methods={"GET"})
     */
    public function index (CityRepository $cityRepository)
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        return $this->render('city/index.html.twig', [
            'city' => $cityRepository->findAll(),
        ]);
    }
}