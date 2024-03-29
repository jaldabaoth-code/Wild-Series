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
    private Slugify $slugify;

    public function __construct(Slugify $slugify)
    {
        $this->slugify = $slugify;
    }

    public function load(ObjectManager $manager)
    {
        $seasonFixtures = new SeasonFixtures;
        foreach (FixturesData::TV_SERIES as $seriesTitle => $seriesData) {
            foreach ($seasonFixtures->getSeries($seriesTitle) as $seasonNumber => $seasonData) {
                foreach ($seasonData['episodes'] as $episodeNumber => $episodeData) {
                    $episode = new Episode();
                    $episode->setTitle($episodeData['title']);
                    $episode->setSlug($this->slugify->generate($seriesTitle .'-' . $episode->getTitle()));
                    $episode->setNumber($episodeData['number']);
                    $episode->setSynopsis($episodeData['description']);
                    $episode->setPoster($episodeData['poster']);
                    $episode->setSeason($this->getReference('season_'. $seriesTitle . '_' . $seasonNumber));
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
