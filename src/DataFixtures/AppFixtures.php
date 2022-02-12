<?php

namespace App\DataFixtures;

use App\Entity\Activite;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = \Faker\Factory::create("fr_FR");

        for ($i = 0; $i < 3; $i++) {
            $user = new User();
            $pseudo = $faker->userName;
            $user->setNom($faker->lastName)
                ->setPrenom($faker->firstName)
                ->setUsername($pseudo)
                ->setPassword($pseudo . "1")
                ->setRoles(array("ROLE_ANIMATEUR"));
            $manager->persist($user);

            for ($i = 0; $i < 2; $i++) {
                $activite = new Activite();
                $activite->setNom($faker->sentence)
                    ->setDescription(join("\n\n", $faker->paragraphs))
                    ->setUser($user);
                $manager->persist($activite);
            }
        }

        $manager->flush();
    }
}
