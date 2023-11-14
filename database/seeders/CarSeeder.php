<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Car;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $car= new Car();

        $car->name="Fiesta";
        $car->description="Auto de la ford";
        $car->year=2015;
        $car->save();

        $car= new Car();

        $car->name="Wrangler";
        $car->description="Jeep";
        $car->year=2015;
        $car->save();

        $car= new Car();

        $car->name="Sahara";
        $car->description="Dessert";
        $car->year=2015;
        $car->save();

        $car= new Car();

        $car->name="Civic";
        $car->description="Uber";
        $car->year=2015;
        $car->save();

        $car= new Car();

        $car->name="Accord";
        $car->description="Deportiv";
        $car->year=2015;
        $car->save();
    }
}
