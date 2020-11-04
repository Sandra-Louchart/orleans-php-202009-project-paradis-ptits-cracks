<?php

/**
 * Created by PhpStorm.
 * User: aurelwcs
 * Date: 08/04/19
 * Time: 18:40
 */

namespace App\Controller;

use App\Model\DogManager;

class DogController extends AbstractController
{

    /**
     * Display home page
     *
     * @return string
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public function index()
    {
        $dogManager = new DogManager();
        $males = $dogManager->selectAllAdultMales();
        $females = $dogManager->selectAllAdultFemales();
        return $this->twig->render('Dog/index.html.twig', [
        'males' => $males, 'females' => $females,
        ]);
    }
}
