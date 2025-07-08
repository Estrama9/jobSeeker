<?php

namespace App\DataFixtures;

use App\Entity\User;
use App\Enum\City;
use App\Enum\Country;
use App\Enum\UserRole;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class UserFixtures extends Fixture
{
    const ADMIN = 'admin';
    const USER1 = 'user1';
    const USER2 = 'user2';
    public function load(ObjectManager $manager): void
    {
        $user = new User();
        $user->setEmail('cfrodrigues9@gmail.com');
        $user->setPassword('$2y$13$JzSJwiSl5StjKlNZelojde.AvqAlXnjMj6wd8f6Y2TvnBQwvfaCA.');
        $user->setRoles(['ROLE_ADMIN']);
        $user->setFullName('Carlos Rodrigues');
        $user->setCountry(Country::FRANCE);
        $user->setCity(City::PARIS);
        $user->setEnumRole(UserRole::ADMIN);
        $manager->persist($user);

        $user = new User();
        $user->setEmail('toto@gmail.com');
        $user->setPassword('demo');
        $user->setRoles(['ROLE_USER']);
        $user->setFullName('Toto Doe');
        $user->setCountry(Country::FRANCE);
        $user->setCity(City::BORDEAUX);
        $user->setEnumRole(UserRole::CANDIDATE);
        $this->addReference(self::USER1, $user);
        $manager->persist($user);

        $user = new User();
        $user->setEmail('tata@gmail.com');
        $user->setPassword('demo');
        $user->setRoles(['ROLE_USER']);
        $user->setFullName('Tata Doe');
        $user->setCountry(Country::FRANCE);
        $user->setCity(City::TOULOUSE);
        $user->setEnumRole(UserRole::EMPLOYER);
        $this->addReference(self::USER2, $user);
        $manager->persist($user);

        $manager->flush();
    }
}
