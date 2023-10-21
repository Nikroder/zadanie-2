<?php

namespace App\Repositories;

use App\Models\Car;

class CarRepository
{
    public function getAll()
    {
        return Car::all();
    }
}