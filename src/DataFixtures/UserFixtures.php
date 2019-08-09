<?php

namespace App\DataFixtures;

use Faker;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixtures extends Fixture
{
    public const CUSTOMERREFERENCE = "customer-%s";
    public const DRIVERREFERENCE = "driver-%s";

    private $encoder;

    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
    }

    public function load(ObjectManager $manager)
    {
        $faker = Faker\Factory::create('fr_FR');
        // Client
        for ($i = 0; $i < 500; $i++) {
            $user = new User();
            $user
                ->setFirstName($faker->firstName)
                ->setLastName($faker->lastName)
                ->setEmail($faker->email)
                ->setPhone($faker->e164PhoneNumber)
                ->setPassword($this->encoder->encodePassword($user, 'password'))
                ->setCreatedAt($faker->dateTimeBetween('-6 months', 'now'))
                ->setRoles(['ROLE_CUSTOMER']);
            $manager->persist($user);
            if ($i % 200) {
                $manager->flush();
            }
            // Reference
            $this->addReference(sprintf(self::CUSTOMERREFERENCE, $i), $user);
        }
        // Chauffeur
        for ($i = 0; $i < 100; $i++) {
            $user = new User();
            $user
                ->setFirstName($faker->firstName)
                ->setLastName($faker->lastName)
                ->setEmail($faker->email)
                ->setPhone($faker->e164PhoneNumber)
                ->setPassword($this->encoder->encodePassword($user, 'password'))
                ->setCreatedAt($faker->dateTimeBetween('-6 months', 'now'))
                ->setRoles(['ROLE_DRIVER']);
            $manager->persist($user);
            if ($i % 200) {
                $manager->flush();
            }
            // Reference
            $this->addReference(sprintf(self::DRIVERREFERENCE, $i), $user);
        }
        $manager->flush();
    }
}
