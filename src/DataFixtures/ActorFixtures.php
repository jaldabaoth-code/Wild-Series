<?php
//ActorFixtures.php

namespace App\DataFixtures;

use App\Entity\Actor;
use App\Service\FixturesData;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ActorFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        foreach (FixturesData::ACTORS as $key => $data) {
            $actor = new Actor();
            $actor->setName($data['name']);
            $actor->setPoster($data['poster']);
            $manager->persist($actor);
            $this->addReference('actor_' . $key, $actor);
        }
        $manager->flush();
    }
}
