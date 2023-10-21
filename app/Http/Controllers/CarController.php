<?php

namespace App\Http\Controllers;

use App\Repositories\CarRepository;

class CarController extends Controller
{
    protected $carRepository;

    public function __construct(CarRepository $carRepository)
    {
        $this->carRepository = $carRepository;
    }

    public function index()
    {
        $cars = $this->carRepository->getAll();

        foreach ($cars as $car) {
            echo $car->name . "<br>";
        }
    }
}