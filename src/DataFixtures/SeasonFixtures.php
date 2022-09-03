<?php

namespace App\DataFixtures;

use App\Entity\Season;
use App\Service\FixturesData;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class SeasonFixtures extends Fixture implements DependentFixtureInterface
{
     public function load(ObjectManager $manager)
    {
        foreach (FixturesData::TV_SERIES as $seriesTitle => $seriesData) {
            foreach ($this->getSeries($seriesTitle) as $seasonNumber => $seasonData) {
                $season = new Season();
                $season->setNumber($seasonData['number']);
                $season->setYear($seasonData['year']);
                $season->setDescription($seasonData['description']);
                $season->setProgram($this->getReference('program_' . $seriesTitle));
                if (array_key_exists('actors', $seasonData)) {

                    foreach ($seasonData['actors'] as $actor) {
                        for ($i=0; $i < count(FixturesData::ACTORS); $i++) {
                            if (FixturesData::ACTORS[$i]['name'] == $actor) {
                                $season->addActor($this->getReference('actor_' . $i));
                            }
                        }
                    }
                }
                $manager->persist($season);
                $this->addReference('season_' . $seriesTitle . '_' . $seasonNumber, $season);

            }
        }
        $manager->flush();
    }

    public function getSeries(string $title): array
    {
        switch ($title) {
            case 'The Walking Dead':
                return FixturesData::THE_WALKING_DEAD;
            case 'Game of Thrones':
                return FixturesData::GAME_OF_THRONES;
            case 'Breaking Bad':
                return FixturesData::BREAKING_BAD;
            case 'Attack on Titan':
                return FixturesData::ATTACK_ON_TITAN;
            case 'The Mandalorian':
                return FixturesData::THE_MANDALORIAN;
            default:
                return [];
        }
    }

    public function getDependencies()
    {
        return [ProgramFixtures::class];
    }
}