<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Car;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Car::insert([
            [
                'brand' => 'Toyota',
                'model' => 'Corolla',
                'year' => 2024,
                'description' => 'Reliable family sedan',
            ],
            [
                'brand' => 'Toyota',
                'model' => 'Camry',
                'year' => 2023,
                'description' => 'Comfortable and spacious sedan',
            ],
            [
                'brand' => 'Toyota',
                'model' => 'Yaris',
                'year' => 2022,
                'description' => 'Compact and economical car',
            ],
            [
                'brand' => 'Toyota',
                'model' => 'Fortuner',
                'year' => 2024,
                'description' => 'Powerful family SUV',
            ],
            [
                'brand' => 'Toyota',
                'model' => 'Land Cruiser',
                'year' => 2023,
                'description' => 'Premium off-road SUV',
            ],

            [
                'brand' => 'Honda',
                'model' => 'Civic',
                'year' => 2024,
                'description' => 'Popular modern sedan',
            ],
            [
                'brand' => 'Honda',
                'model' => 'City',
                'year' => 2023,
                'description' => 'Fuel efficient sedan',
            ],
            [
                'brand' => 'Honda',
                'model' => 'Accord',
                'year' => 2022,
                'description' => 'Premium comfortable sedan',
            ],
            [
                'brand' => 'Honda',
                'model' => 'CR-V',
                'year' => 2024,
                'description' => 'Comfortable family SUV',
            ],
            [
                'brand' => 'Honda',
                'model' => 'HR-V',
                'year' => 2023,
                'description' => 'Compact crossover SUV',
            ],

            [
                'brand' => 'Suzuki',
                'model' => 'Swift',
                'year' => 2024,
                'description' => 'Small and economical hatchback',
            ],
            [
                'brand' => 'Suzuki',
                'model' => 'Alto',
                'year' => 2023,
                'description' => 'Affordable city car',
            ],
            [
                'brand' => 'Suzuki',
                'model' => 'Wagon R',
                'year' => 2022,
                'description' => 'Practical compact car',
            ],
            [
                'brand' => 'Suzuki',
                'model' => 'Cultus',
                'year' => 2024,
                'description' => 'Compact family hatchback',
            ],
            [
                'brand' => 'Suzuki',
                'model' => 'Jimny',
                'year' => 2023,
                'description' => 'Compact off-road vehicle',
            ],

            [
                'brand' => 'BMW',
                'model' => '3 Series',
                'year' => 2024,
                'description' => 'Luxury sports sedan',
            ],
            [
                'brand' => 'BMW',
                'model' => '5 Series',
                'year' => 2023,
                'description' => 'Premium executive sedan',
            ],
            [
                'brand' => 'BMW',
                'model' => '7 Series',
                'year' => 2022,
                'description' => 'Luxury flagship sedan',
            ],
            [
                'brand' => 'BMW',
                'model' => 'X3',
                'year' => 2024,
                'description' => 'Premium compact SUV',
            ],
            [
                'brand' => 'BMW',
                'model' => 'X5',
                'year' => 2023,
                'description' => 'Luxury midsize SUV',
            ],

            [
                'brand' => 'Mercedes-Benz',
                'model' => 'C-Class',
                'year' => 2024,
                'description' => 'Luxury compact sedan',
            ],
            [
                'brand' => 'Mercedes-Benz',
                'model' => 'E-Class',
                'year' => 2023,
                'description' => 'Premium executive sedan',
            ],
            [
                'brand' => 'Mercedes-Benz',
                'model' => 'S-Class',
                'year' => 2022,
                'description' => 'Luxury flagship sedan',
            ],
            [
                'brand' => 'Mercedes-Benz',
                'model' => 'GLC',
                'year' => 2024,
                'description' => 'Premium luxury SUV',
            ],
            [
                'brand' => 'Mercedes-Benz',
                'model' => 'GLE',
                'year' => 2023,
                'description' => 'Luxury midsize SUV',
            ],

            [
                'brand' => 'Audi',
                'model' => 'A3',
                'year' => 2024,
                'description' => 'Compact luxury sedan',
            ],
            [
                'brand' => 'Audi',
                'model' => 'A4',
                'year' => 2023,
                'description' => 'Premium executive sedan',
            ],
            [
                'brand' => 'Audi',
                'model' => 'A6',
                'year' => 2022,
                'description' => 'Luxury business sedan',
            ],
            [
                'brand' => 'Audi',
                'model' => 'Q5',
                'year' => 2024,
                'description' => 'Premium midsize SUV',
            ],
            [
                'brand' => 'Audi',
                'model' => 'Q7',
                'year' => 2023,
                'description' => 'Large luxury SUV',
            ],

            [
                'brand' => 'Hyundai',
                'model' => 'Elantra',
                'year' => 2024,
                'description' => 'Modern compact sedan',
            ],
            [
                'brand' => 'Hyundai',
                'model' => 'Sonata',
                'year' => 2023,
                'description' => 'Comfortable midsize sedan',
            ],
            [
                'brand' => 'Hyundai',
                'model' => 'Tucson',
                'year' => 2024,
                'description' => 'Modern family SUV',
            ],
            [
                'brand' => 'Hyundai',
                'model' => 'Santa Fe',
                'year' => 2022,
                'description' => 'Spacious midsize SUV',
            ],
            [
                'brand' => 'Hyundai',
                'model' => 'Kona',
                'year' => 2023,
                'description' => 'Compact crossover SUV',
            ],

            [
                'brand' => 'Kia',
                'model' => 'Sportage',
                'year' => 2024,
                'description' => 'Modern compact SUV',
            ],
            [
                'brand' => 'Kia',
                'model' => 'Sorento',
                'year' => 2023,
                'description' => 'Spacious family SUV',
            ],
            [
                'brand' => 'Kia',
                'model' => 'Picanto',
                'year' => 2022,
                'description' => 'Small city hatchback',
            ],
            [
                'brand' => 'Kia',
                'model' => 'Cerato',
                'year' => 2024,
                'description' => 'Comfortable compact sedan',
            ],
            [
                'brand' => 'Kia',
                'model' => 'Stonic',
                'year' => 2023,
                'description' => 'Compact crossover',
            ],

            [
                'brand' => 'Ford',
                'model' => 'Mustang',
                'year' => 2024,
                'description' => 'Iconic sports car',
            ],
            [
                'brand' => 'Ford',
                'model' => 'Focus',
                'year' => 2023,
                'description' => 'Practical compact car',
            ],
            [
                'brand' => 'Ford',
                'model' => 'Explorer',
                'year' => 2022,
                'description' => 'Large family SUV',
            ],
            [
                'brand' => 'Ford',
                'model' => 'Ranger',
                'year' => 2024,
                'description' => 'Powerful pickup truck',
            ],
            [
                'brand' => 'Ford',
                'model' => 'Everest',
                'year' => 2023,
                'description' => 'Rugged family SUV',
            ],

            [
                'brand' => 'Nissan',
                'model' => 'Sunny',
                'year' => 2024,
                'description' => 'Economical family sedan',
            ],
            [
                'brand' => 'Nissan',
                'model' => 'Altima',
                'year' => 2023,
                'description' => 'Comfortable midsize sedan',
            ],
            [
                'brand' => 'Nissan',
                'model' => 'X-Trail',
                'year' => 2022,
                'description' => 'Family crossover SUV',
            ],
            [
                'brand' => 'Nissan',
                'model' => 'Patrol',
                'year' => 2024,
                'description' => 'Large powerful SUV',
            ],
            [
                'brand' => 'Nissan',
                'model' => 'Juke',
                'year' => 2023,
                'description' => 'Compact crossover SUV',
            ],

            [
                'brand' => 'Volkswagen',
                'model' => 'Golf',
                'year' => 2024,
                'description' => 'Popular European hatchback',
            ],
            [
                'brand' => 'Volkswagen',
                'model' => 'Passat',
                'year' => 2023,
                'description' => 'Comfortable family sedan',
            ],
            [
                'brand' => 'Volkswagen',
                'model' => 'Tiguan',
                'year' => 2022,
                'description' => 'Compact family SUV',
            ],
            [
                'brand' => 'Volkswagen',
                'model' => 'Touareg',
                'year' => 2024,
                'description' => 'Premium midsize SUV',
            ],
            [
                'brand' => 'Volkswagen',
                'model' => 'Polo',
                'year' => 2023,
                'description' => 'Compact city hatchback',
            ],

            [
                'brand' => 'Tesla',
                'model' => 'Model 3',
                'year' => 2024,
                'description' => 'Electric compact sedan',
            ],
            [
                'brand' => 'Tesla',
                'model' => 'Model Y',
                'year' => 2023,
                'description' => 'Electric crossover SUV',
            ],
            [
                'brand' => 'Tesla',
                'model' => 'Model S',
                'year' => 2022,
                'description' => 'Premium electric sedan',
            ],
            [
                'brand' => 'Tesla',
                'model' => 'Model X',
                'year' => 2024,
                'description' => 'Luxury electric SUV',
            ],
            [
                'brand' => 'Tesla',
                'model' => 'Cybertruck',
                'year' => 2023,
                'description' => 'Electric pickup truck',
            ],
        ]);
    }
}