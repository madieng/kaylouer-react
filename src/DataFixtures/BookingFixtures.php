<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class BookingFixtures extends Fixture
{
    public const BOOKINGREFERENCE = "booking-%";

    public function load(ObjectManager $manager)
    {


        // $manager->flush();
    }
}
