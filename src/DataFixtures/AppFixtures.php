<?php

namespace App\DataFixtures;

use App\Entity\Activite;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $product = new Activite();
        // $manager->persist($product);

        $manager->flush();
    }
}
