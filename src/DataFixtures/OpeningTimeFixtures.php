<?php

namespace App\DataFixtures;

use App\Entity\OpeningTime;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class OpeningTimeFixtures extends Fixture implements DependentFixtureInterface
{
    public function getDependencies()
    {
        return [
            StoreFixtures::class
        ];
    }

    public function load(ObjectManager $manager)
    {
        $openingTime = new OpeningTime();
        $openingTime->setDay('Monday');
        $openingTime->setStore($this->getReference(StoreFixtures::STORE_REFERENCE));

        $manager->persist($openingTime);
        $manager->flush();
    }
}
