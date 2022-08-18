<?php

namespace App\DataFixtures;

use App\Entity\Program;
use App\Entity\Season;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class SeasonFixtures extends Fixture implements DependentFixtureInterface
{
    const THE_WALKING_DEAD = [
        'Season01' => [
            'number' => 1,
            'description' => 'Saison 1 De la Serie',
            'year' => 2010,
            'actors' => [
                'Norman Reedus',
                'Andrew Lincoln',
                'Lauren Cohan',
                'Jeffrey Dean Morgan',
                'Chandler Riggs'
            ]
        ],
        'Season02' => [
            'number' => 2,
            'description' => 'Saison 2 De la Serie',
            'year' => 2011
        ],
        'Season03' => [
            'number' => 3,
            'description' => 'Saison 3 De la Serie',
            'year' => 2012
        ],
        'Season04' => [
            'number' => 4,
            'description' => 'Saison 4 De la Serie',
            'year' => 2013
        ],
        'Season05' => [
            'number' => 5,
            'description' => 'Saison 5 De la Serie',
            'year' => 2014
        ],
        'Season06' => [
            'number' => 5,
            'description' => 'Saison 5 De la Serie',
            'year' => 2014
        ],
        'Season07' => [
            'number' => 5,
            'description' => 'Saison 5 De la Serie',
            'year' => 2014
        ],
        'Season08' => [
            'number' => 5,
            'description' => 'Saison 5 De la Serie',
            'year' => 2014
        ],
        'Season09' => [
            'number' => 5,
            'description' => 'Saison 5 De la Serie',
            'year' => 2014
        ],
        'Season10' => [
            'number' => 5,
            'description' => 'Saison 5 De la Serie',
            'year' => 2014
        ],
        'Season11' => [
            'number' => 5,
            'description' => 'Saison 5 De la Serie',
            'year' => 2014
        ],
    ];


    const GAME_OF_THRONES = [
        'Season01' => [
            'number' => 1,
            'description' => 'Saison 1 De la Serie',
            'year' => 2010,
            'actors' => [
                'Pedro Pascal',
                'Kit Harington',
            ]
        ],
        'Season02' => [
            'number' => 2,
            'description' => 'Saison 2 De la Serie',
            'year' => 2011
        ],
        'Season03' => [
            'number' => 3,
            'description' => 'Saison 3 De la Serie',
            'year' => 2012
        ],
        'Season04' => [
            'number' => 1,
            'description' => 'Saison 1 De la Serie',
            'year' => 2010,
            'actors' => [
                'Pedro Pascal',
                'Kit Harington',
            ]
        ],
        'Season05' => [
            'number' => 2,
            'description' => 'Saison 2 De la Serie',
            'year' => 2011
        ],
        'Season06' => [
            'number' => 3,
            'description' => 'Saison 3 De la Serie',
            'year' => 2012
        ],
        'Season07' => [
            'number' => 1,
            'description' => 'Saison 1 De la Serie',
            'year' => 2010,
            'actors' => [
                'Pedro Pascal',
                'Kit Harington',
            ]
        ],
        'Season08' => [
            'number' => 3,
            'description' => 'Saison 3 De la Serie',
            'year' => 2012
        ],
    ];

    public function load(ObjectManager $manager)
    {
        foreach (ProgramFixtures::PROGRAMS as $title => $data) {
            foreach ($this->getSeries($title) as $number => $seasonData) {
                $season = new Season();
                $season->setNumber($seasonData['number']);
                $season->setYear($seasonData['year']);
                $season->setDescription($seasonData['description']);
                $season->setProgram($this->getReference('program_' . $title));
                if (array_key_exists('actors', $seasonData)) {
                    $this->getActorsForSeries($title, $season, $seasonData['actors']);
                }
                $manager->persist($season);
                $this->addReference('season_' . $title . '_' . $number, $season);
            }
        }
        $manager->flush();
    }


    public function getSeries(string $title): array
    {
        switch ($title) {
            case 'The Walking Dead':
                return self::THE_WALKING_DEAD;
            case 'Game of Thrones':
                return self::GAME_OF_THRONES;
            default:
                return [];
        }
    }



    public function getActorsForSeries(string $title, Season $program, array $number)
    {
        switch ($title) {
            case 'The Walking Dead':
                for ($i=0; $i < count($number); $i++) {
                    if(in_array($number[$i], ActorFixtures::ACTORS)) {
                        $program->addActor($this->getReference('actor_' . $i));
                    }
                }
                break;
/*            case 'Game of Thrones':
                for ($i=0; $i < count(self::ACTORS_OF_GAME_OF_THRONES); $i++) {
                    if (in_array(self::ACTORS_OF_GAME_OF_THRONES[$i], ActorFixtures::ACTORS)) {
                        $program->addActor($this->getReference('actor_' . $i));
                    }
                }
                break;
            case 'Breaking Bad':
                for ($i=0; $i < count(self::ACTORS_OF_BREAKING_BAD); $i++) {
                    if (in_array(self::ACTORS_OF_BREAKING_BAD[$i], ActorFixtures::ACTORS)) {
                        $program->addActor($this->getReference('actor_' . $i));
                    }
                }
                break;
            case 'Attack on Titan':
                for ($i=0; $i < count(self::ACTORS_OF_ATTACK_ON_TITAN); $i++) {
                    if (in_array(self::ACTORS_OF_ATTACK_ON_TITAN[$i], ActorFixtures::ACTORS)) {
                        $program->addActor($this->getReference('actor_' . $i));
                    }
                }
                break;
            case 'The Mandalorian':
                for ($i=0; $i < count(self::ACTORS_OF_THE_MANDALORIAN); $i++) {
                    if (in_array(self::ACTORS_OF_THE_MANDALORIAN[$i], ActorFixtures::ACTORS)) {
                        $program->addActor($this->getReference('actor_' . $i));
                    }
                }
                break;*/
        }
    }





    public function getDependencies()
    {
        return [ProgramFixtures::class];
    }
}