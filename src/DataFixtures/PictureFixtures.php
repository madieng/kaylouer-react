<?php

namespace App\DataFixtures;

use App\DataFixtures\CarFixtures;
use App\DataFixtures\UserFixtures;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Faker;
use App\Entity\Picture;

class PictureFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $faker = Faker\Factory::create('fr_FR');
        // Pictures Cars
        for ($i = 0; $i < 50; $i++) {
            for ($j = 0; $j < mt_rand(2, 5); $j++) {
                $picture = new Picture();
                $picture
                    ->setLabel($faker->imageUrl(640, 480, 'transport', true, 'Faker', true))
                    ->setCar(
                        $this->getReference(sprintf(CarFixtures::CARREFERENCE, $i))
                    );
                $manager->persist($picture);
            }
            $manager->flush();
        }

        // Picture Customers
        for ($i = 0; $i < 500; $i++) {
            $picture = new Picture();
            $picture
                ->setLabel("https://randomuser.me/api/portraits/men/" . mt_rand(0, 99) . ".jpg")
                ->setUser(
                    $this->getReference(sprintf(UserFixtures::CUSTOMERREFERENCE, $i))
                );
            $manager->persist($picture);
        }
        $manager->flush();
        // Picture Driver
        for ($i = 0; $i < 100; $i++) {
            $picture = new Picture();
            $picture
                ->setLabel("https://randomuser.me/api/portraits/men/" . mt_rand(0, 99) . ".jpg")
                ->setUser(
                    $this->getReference(sprintf(UserFixtures::DRIVERREFERENCE, $i))
                );
            $manager->persist($picture);
        }

        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            UserFixtures::class,
            CarFixtures::class
        ];
    }
}
