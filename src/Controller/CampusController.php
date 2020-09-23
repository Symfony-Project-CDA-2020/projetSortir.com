<?php

namespace App\Controller;


use App\Repository\CampusRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/campus")
 */
class CampusController extends AbstractController
{
    /**
     * @Route("/", name="campus_index", methods={"GET"})
     */
    public function index (CampusRepository $campusRepository)
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        return $this->render('campus/index.html.twig', [
            'campus' => $campusRepository->findAll(),
        ]);
    }
}