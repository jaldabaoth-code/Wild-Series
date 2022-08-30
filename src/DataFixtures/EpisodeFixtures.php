<?php

namespace App\DataFixtures;

use App\Entity\Episode;
use App\Service\FixturesData;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use App\Service\Slugify;

class EpisodeFixtures extends Fixture implements DependentFixtureInterface
{
    const EPISODES = [
        [
            'title' => "Le Premier",
            'number' => 1,
            'synopsis' => 'Synopsis du premier',
        ],
        [
            'title' => "Le deuxieme",
            'number' => 2,
            'synopsis' => 'Synopsis du deuxieme',
        ],
        [
            'title' => "Le Troisieme",
            'number' => 3,
            'synopsis' => 'Synopsis du troisieme',
        ],
        [
            'title' => "Le Quatrieme",
            'number' => 4,
            'synopsis' => 'Synopsis du quatrieme',
        ],
        [
            'title' => "La Cinquieme",
            'number' => 5,
            'synopsis' => 'Synopsis de la cinquieme',
        ],
    ];
    
    private Slugify $slugify;

    public function __construct(Slugify $slugify)
    {
        $this->slugify = $slugify;
    }


    public function load(ObjectManager $manager)
    {
        $seasonFixtures = new SeasonFixtures;
        foreach (FixturesData::TV_SERIES as $programTitle => $programData) {
            foreach ($seasonFixtures->getSeries($programTitle) as $seasonNumber => $seasonData) {
                foreach ($seasonData['episodes'] as $episodeNumber => $episodeData) {
                    $episode = new Episode();
                    $episode->setTitle($episodeData['title']);
                    $episode->setSlug($this->slugify->generate($programTitle .'-' . $episode->getTitle()));
                    $episode->setNumber($episodeData['number']);
                    $episode->setSynopsis($episodeData['description']);
                    $episode->setSeason($this->getReference('season_'. $programTitle . '_' . $seasonNumber));
                    $manager->persist($episode);
                }
            }
        }
        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            SeasonFixtures::class,
        ];
    }
}