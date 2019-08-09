<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Faker;
use App\Entity\Ad;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class AdFixtures extends Fixture implements DependentFixtureInterface
{
    public const ADREFERENCE = "ad-%s";

    public function load(ObjectManager $manager)
    {
        $faker = Faker\Factory::create('fr_FR');
        for ($i = 0; $i < 1000; $i++) {
            $date = $faker->dateTimeBetween('-6 months', 'now');
            $departureHour = new \DateTime($faker->time());
            $arrivalHour = clone $departureHour;
            $createdAt = clone $date;
            $ad = new Ad();
            $ad
                ->setDeparture($faker->city)
                ->setArrival($faker->city)
                ->setDepartureDate($date)
                ->setArrivalDate($date)
                ->setDepartureHour($departureHour)
                ->setArrivalHour($arrivalHour->add(new \DateInterval('PT' . mt_rand(1, 5) . 'H')))
                ->setCreatedAt($createdAt->sub(new \DateInterval('P' . mt_rand(1, 4) . 'D')))
                ->setNbrPlaces(mt_rand(1, 3))
                ->setDescription($faker->text)
                ->setUser(
                    $this->getReference(sprintf(UserFixtures::DRIVERREFERENCE, mt_rand(0, 99)))
                );
            $manager->persist($ad);
            $this->addReference(sprintf(self::ADREFERENCE, $i), $ad);
            if ($i % 200) {
                $manager->flush();
            }
        }

        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            UserFixtures::class
        ];
    }
}
