<?php

namespace App\DataFixtures;

use App\Entity\Store;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class StoreFixtures extends Fixture
{
    public const STORE_REFERENCE = 'store-reference';

    public function load(ObjectManager $manager)
    {
        $store = new Store();
        $store->setName('Store 1');

        $this->addReference(self::STORE_REFERENCE, $store);

        $manager->persist($store);
        $manager->flush();
    }
}
