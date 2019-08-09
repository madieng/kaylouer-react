<?php

namespace App\DataFixtures;

use Faker;
use App\Entity\Car;
use App\DataFixtures\UserFixtures;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class CarFixtures extends Fixture implements DependentFixtureInterface
{
    public const CARREFERENCE = "car-%s";
    public function load(ObjectManager $manager)
    {
        $faker = Faker\Factory::create('fr_FR');
        $cars = $this->getCars($faker);
        for ($i = 0; $i < 50; $i++) {
            $c = $cars[mt_rand(0, count($cars) - 1)];
            $car = new Car();
            $car
                ->setMarque($c['marque'])
                ->setModele($c['modele'])
                ->setYear($c['annee'])
                ->setNbrPlaces(mt_rand(2, 7))
                ->setUser(
                    $this->getReference(sprintf(UserFixtures::DRIVERREFERENCE, mt_rand(0, 99)))
                );;
            $manager->persist($car);
            $this->addReference(sprintf(self::CARREFERENCE, $i), $car);
        }
        $manager->flush();
    }

    public function getDependencies()
    {
        return [UserFixtures::class];
    }

    private function getCars($faker)
    {
        return [
            [
                "marque" => "BMW",
                "modele" => "Série 3",
                "annee" => $faker->dateTimeBetween('-6 years', 'now')
            ],
            [
                "marque" => "Citroën",
                "modele" => "C5",
                "annee" => $faker->dateTimeBetween('-6 years', 'now')
            ],
            [
                "marque" => "DS",
                "modele" => "5",
                "annee" => $faker->dateTimeBetween('-6 years', 'now')
            ],
            [
                "marque" => "Volkswagen",
                "modele" => "Passat",
                "annee" => $faker->dateTimeBetween('-6 years', 'now')
            ],
            [
                "marque" => "Volvo",
                "modele" => "V60",
                "annee" => $faker->dateTimeBetween('-6 years', 'now')
            ],
            [
                "marque" => "Skoda",
                "modele" => "Superb",
                "annee" => $faker->dateTimeBetween('-6 years', 'now')
            ],
            [
                "marque" => "Toyota",
                "modele" => "Avensis",
                "annee" => $faker->dateTimeBetween('-6 years', 'now')
            ],
            [
                "marque" => "Renault",
                "modele" => "Laguna",
                "annee" => $faker->dateTimeBetween('-6 years', 'now')
            ],
            [
                "marque" => "Opel",
                "modele" => "Insignia",
                "annee" => $faker->dateTimeBetween('-6 years', 'now')
            ],
            [
                "marque" => "Mercedes",
                "modele" => "Classe C",
                "annee" => $faker->dateTimeBetween('-6 years', 'now')
            ],
        ];
    }
}
