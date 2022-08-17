<?php

namespace App\DataFixtures;

use App\Entity\Program;
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

/*    public const ACTORS_OF_THE_WALKING_DEAD = [
        ACTORS_OF_THE_WALKING_DEAD[
            'Norman Reedus',
            'Andrew Lincoln',
            'Lauren Cohan',
            'Jeffrey Dean Morgan',
            'Chandler Riggs'
         ][]
    ];*/



/*    public $toto = [
        'Pedro Pascal',
        'Kit Harington',
    ];
    public $titi = [
        'Pedro Pascal',
        'Kit Harington',
    ];
    public $tata = [$oto, $titi];

    public const ACTORS_OF_THE_WALKING_DEAD = array (
          array("Volvo", ACTORS_OF_GAME_OF_THRONES),
          array("BMW",15,13),
          array("Saab",5,2),
          array("Land Rover",17,15)
    );*/

/*    public const ACTORS_OF_GAME_OF_THRONES = [
        'Pedro Pascal',
        'Kit Harington',
    ];

    public const ACTORS_OF_BREAKING_BAD = [
        'Bryan Cranston',
    ];

    public const ACTORS_OF_ATTACK_ON_TITAN = [
        'Yûki Kaji',
    ];

    public const ACTORS_OF_THE_MANDALORIAN = [
        'Pedro Pascal',
    ];*/

    public const ACTORS_OF_THE_WALKING_DEAD = [
        'Norman Reedus',
        'Andrew Lincoln',
        'Lauren Cohan',
        'Jeffrey Dean Morgan',
        'Chandler Riggs'
    ];

    const THE_WALKING_DEAD = [
        'Saison 01' => [
            'number' => 1,
            'description' => 'Saison 1 De la Serie',
            'year' => 2010,
            'actors' => self::ACTORS_OF_THE_WALKING_DEAD
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
            foreach (self::THE_WALKING_DEAD as $number => $seasonData) {
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





    public function getActorsForSeries(string $title, Season $program, array $number) {
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