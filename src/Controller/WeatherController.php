<?php

namespace App\Controller;

use App\Entity\OpenWeatherMap;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\WeatherService;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;

class WeatherController extends AbstractController
{
    private $weatherService;

    public function __construct(WeatherService $weather)
    {
        $this->weatherService = $weather;
    }

    /**
     * @Route("/weather", name="weather")
     */
    public function index(Request $request)
    {
        // form generation
        $city_name = new OpenWeatherMap();

        $form = $this->createFormBuilder($city_name)
            ->add('city_name', TextType::class)
            ->add('save', SubmitType::class, [
                'label' => 'chercher'
            ])
            ->getForm();
        // form validation
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $city_name = $form->getData();

            return $this->redirectToRoute('weather_city', [
                'city' => $city_name->getCityName(),
            ]);
        }
        return $this->render('weather/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/weather/{city}", name="weather_city")
     */
    public function findWeatherByCity($city, Request $request)
    {
        // data generation
        $city_name = new OpenWeatherMap();

        $form = $this->createFormBuilder($city_name)
            ->add('city_name', TextType::class)
            ->add('save', SubmitType::class, [
                'label' => 'chercher'
            ])
            ->getForm();
        // form validation
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $city_name = $form->getData();

            return $this->redirectToRoute('weather_city', [
                'city' => $city_name->getCityName(),
            ]);
        }
        $data = $this->weatherService->getWeather($city);
        if (is_array($data)) {
            return $this->render('weather/index.html.twig', [
                'data' => $data,
                'form' => $form->createView(),
            ]);
        } else {
            $statusCode = 0;
            $errorMessage = '';
            $e = $data;
            if (method_exists($e, 'getResponse')) {
                $statusCode = $e->getResponse()->getStatusCode();
            }
            if ($statusCode == 0) {
                $errorMessage = 'Error occurs';
            }
            if (401 == $statusCode) {
                $errorMessage = "401 Unauthorized";
            }
            if (404 == $statusCode) {
                $errorMessage = "404 Not Found";
            }
            if (429 == $statusCode) {
                $errorMessage = "429 Too Many Requests";
            }
            return $this->render('errors.html.twig', ['error' => $errorMessage]);
        }
    }
}
