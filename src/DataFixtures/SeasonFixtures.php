<?php

namespace App\DataFixtures;

use App\Entity\Season;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class SeasonFixtures extends Fixture implements DependentFixtureInterface
{
    const SAISONS = [
        'Saison 01' => [
            'number' => 1,
            'description' => 'Saison 1 De la Serie',
            'year' => 2010
        ],
        'Saison 02' => [
            'number' => 2,
            'description' => 'Saison 2 De la Serie',
            'year' => 2011
        ],
        'Saison 03' => [
            'number' => 3,
            'description' => 'Saison 3 De la Serie',
            'year' => 2012
        ],
        'Saison 04' => [
            'number' => 4,
            'description' => 'Saison 4 De la Serie',
            'year' => 2013
        ],
        'Saison 05' => [
            'number' => 5,
            'description' => 'Saison 5 De la Serie',
            'year' => 2014
        ],
    ];

    public function load(ObjectManager $manager)
    {
        foreach (ProgramFixtures::PROGRAMS as $title => $data) {
            foreach (self::SAISONS as $number => $seasonData) {
                $season = new Season();
                $season->setNumber($seasonData['number']);
                $season->setYear($seasonData['year']);
                $season->setDescription($seasonData['description']);
                $season->setProgram($this->getReference('program_' . $title));
                $manager->persist($season);
                $this->addReference('season_' . $title . '_' . $number, $season);
            }
        }
        $manager->flush();
    }

    public function getDependencies()
    {
        return [ProgramFixtures::class];
    }
}