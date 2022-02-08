<?php

namespace App\DataFixtures;

use App\Entity\Activite;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = \Faker\Factory::create("fr_FR");
        $activite = new Activite();

        for ($i = 0; $i < 5; $i++) {
            $activite = new Activite();
            $activite->setNom($faker->sentence)
                ->setDescription(join("\n\n", $faker->paragraphs));
            $manager->persist($activite);
        }
        $manager->flush();
    }
}
