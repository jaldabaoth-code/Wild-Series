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
            'number' => 6,
            'description' => 'Saison 5 De la Serie',
            'year' => 2014
        ],
        'Season07' => [
            'number' => 7,
            'description' => 'Saison 5 De la Serie',
            'year' => 2014
        ],
        'Season08' => [
            'number' => 8,
            'description' => 'Saison 5 De la Serie',
            'year' => 2014
        ],
        'Season09' => [
            'number' => 9,
            'description' => 'Saison 5 De la Serie',
            'year' => 2014
        ],
        'Season10' => [
            'number' => 10,
            'description' => 'Saison 5 De la Serie',
            'year' => 2014
        ],
        'Season11' => [
            'number' => 11,
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
            'number' => 4,
            'description' => 'Saison 1 De la Serie',
            'year' => 2010,
            'actors' => [
                'Pedro Pascal',
                'Kit Harington',
            ]
        ],
        'Season05' => [
            'number' => 5,
            'description' => 'Saison 2 De la Serie',
            'year' => 2011
        ],
        'Season06' => [
            'number' => 6,
            'description' => 'Saison 3 De la Serie',
            'year' => 2012
        ],
        'Season07' => [
            'number' => 7,
            'description' => 'Saison 1 De la Serie',
            'year' => 2010,
            'actors' => [
                'Pedro Pascal',
                'Kit Harington',
            ]
        ],
        'Season08' => [
            'number' => 8,
            'description' => 'Saison 3 De la Serie',
            'year' => 2012
        ],
    ];


    const PROGRAMS = [
        'The Walking Dead' => [
            'summary' => 'Après une apocalypse ayant transformé la quasi-totalité de la population en zombies, un groupe d\'hommes et de femmes mené par l\'officier Rick Grimes tente de survivre... Ensemble, ils vont devoir tant bien que mal faire face à ce nouveau monde devenu méconnaissable, à travers leur périple dans le Sud profond des États-Unis.',
            'poster' => 'https://fr.web.img6.acsta.net/c_225_300/pictures/210/454/21045474_20130930201634487.jpg',
            'image' => 'https://www.melty.fr/wp-content/uploads/meltyfr/2021/07/media-1842.jpg',
            'country' => 'U.S.A.',
            'year' => '2010',
            'category' => 'Horreur'
        ],
        'Game of Thrones' => [
            'summary' => 'Il y a très longtemps, à une époque oubliée, une force a détruit l\'équilibre des saisons. Dans un pays où l\'été peut durer plusieurs années et l\'hiver toute une vie, des forces sinistres et surnaturelles se pressent aux portes du Royaume des Sept Couronnes. La confrérie de la Garde de Nuit, protégeant le Royaume de toute créature pouvant provenir d\'au-delà du Mur protecteur, n\'a plus les ressources nécessaires pour assurer la sécurité de tous. Après un été de dix années, un hiver rigoureux s\'abat sur le Royaume avec la promesse d\'un avenir des plus sombres. Pendant ce temps, complots et rivalités se jouent sur le continent pour s\'emparer du Trône de Fer, le symbole du pouvoir absolu.',
            'poster' => 'https://fr.web.img6.acsta.net/c_225_300/pictures/19/03/21/17/05/1927893.jpg',
            'image' => 'https://www.rcinet.ca/fr/wp-content/uploads/sites/2/2019/04/game-of-thones.jpg',
            'country' => 'U.S.A.',
            'year' => '2011',
            'category' => 'Fantastique'
        ],
        'Breaking Bad' => [
            'summary' => 'Walter White, 50 ans, est professeur de chimie dans un lycée du Nouveau-Mexique. Pour subvenir aux besoins de Skyler, sa femme enceinte, et de Walt Junior, son fils handicapé, il est obligé de travailler doublement. Son quotidien déjà morose devient carrément noir lorsqu\'il apprend qu\'il est atteint d\'un incurable cancer des poumons. Les médecins ne lui donnent pas plus de deux ans à vivre. Pour réunir rapidement beaucoup d\'argent afin de mettre sa famille à l\'abri, Walter ne voit plus qu\'une solution : mettre ses connaissances en chimie à profit pour fabriquer et vendre du crystal meth, une drogue de synthèse qui rapporte beaucoup. Il propose à Jesse, un de ses anciens élèves devenu un petit dealer de seconde zone, de faire équipe avec lui. Le duo improvisé met en place un labo itinérant dans un vieux camping-car. Cette association inattendue va les entraîner dans une série de péripéties tant comiques que pathétiques.',
            'poster' => 'https://fr.web.img6.acsta.net/c_225_300/pictures/18/07/23/11/26/1597342.jpg',
            'image' => 'https://www.presse-citron.net/app/uploads/2022/07/breaking-bad-unreal-engine-5.jpg',
            'country' => 'U.S.A.',
            'year' => '2008',
            'category' => 'Aventure'
        ],
        'Attack on Titan' => [
            'summary' => 'Dans un monde ravagé par des titans mangeurs d\’homme depuis plus d\’un siècle, les rares survivants de l\’Humanité n\’ont d’autre choix pour survivre que de se barricader dans une cité-forteresse. Le jeune Eren, témoin de la mort de sa mère dévorée par un titan, n\’a qu’un rêve : entrer dans le corps d\’élite chargé de découvrir l\’origine des Titans et les annihiler jusqu\’au dernier…',
            'poster' => 'https://fr.web.img4.acsta.net/c_225_300/pictures/18/10/31/18/23/3895256.jpg',
            'image' => 'https://www.kanpai.fr/sites/default/files/uploads/2021/04/attaque-titans-shingeki-kyojin-03.png',
            'country' => 'Japon',
            'year' => '2013',
            'category' => 'Animation'
        ],
        'The Mandalorian' => [
            'summary' => 'Après les aventures de Jango et Boba Fett, un nouveau héros émerge dans l\'univers Star Wars. L\'intrigue, située entre la chute de l\'Empire et l\'émergence du Premier Ordre, suit les voyages d\'un chasseur de primes solitaire dans les contrées les plus éloignées de la Galaxie, loin de l\’autorité de la Nouvelle République.',
            'poster' => 'https://fr.web.img2.acsta.net/c_225_300/pictures/19/10/29/09/01/2094959.jpg',
            'image' => 'https://www.numerama.com/wp-content/uploads/2020/09/the-mandalorian.jpg',
            'country' => 'U.S.A.',
            'year' => '2019',
            'category' => 'Action'
        ],

    ];

    public function load(ObjectManager $manager)
    {
        foreach (self::PROGRAMS as $title => $data) {
            $toto = $this->getSeries($title);
            foreach ($toto as $seasonNumber => $seasonData) {
                $season = new Season();
                $season->setNumber($seasonData['number']);
                $season->setYear($seasonData['year']);
                $season->setDescription($seasonData['description']);
                $season->setProgram($this->getReference('program_' . $title));
                if (array_key_exists('actors', $seasonData)) {
                    foreach ($seasonData['actors'] as $actor) {
                        $season->addActor($this->getReference('actor_' . '1'));
                    }
                }
                $manager->persist($season);
                $this->addReference('season_' . $title . '_' . $seasonNumber, $season);

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
            case 'Breaking Bad':
                return [''];
            default:
                return [];
        }
    }



    public function getActorsForSeries(string $title, Season $program, array $seasonActors)
    {
        switch ($title) {
            case 'The Walking Dead':
                for ($i=0; $i < count($seasonActors); $i++) {
/*                    if(in_array($number[$i], ActorFixtures::ACTORS)) {*/
                        $program->addActor($this->getReference('actor_' . $i));
/*                    }*/
                }
                break;
            case 'Game of Thrones':
                for ($i=0; $i < count($seasonActors); $i++) {
                   // if (in_array(self::ACTORS_OF_GAME_OF_THRONES[$i], ActorFixtures::ACTORS)) {
                        $program->addActor($this->getReference('actor_' . $i));
                  //  }
                }
                break;/*
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