<?php

namespace App\DataFixtures;

use App\Entity\Series;
use App\Entity\Category;
use App\Service\FixturesData;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use App\Service\Slugify;

class SeriesFixtures extends Fixture implements DependentFixtureInterface
{
    private Slugify $slugify;

    public function __construct(Slugify $slugify)
    {
        $this->slugify = $slugify;
    }

    public function load(ObjectManager $manager)
    {
        foreach (FixturesData::TV_SERIES as $title => $data) {
            $series = new Series();
            $series->setTitle($title);
            $series->setDescription($data['description']);
            $series->setPoster($data['poster']);
            $series->setImage($data['image']);
            $series->setYear($data['year']);
            $series->setCountry($data['country']);
            $series->setCategory($this->getReference('category_' . $data['category']));
            $series->setSlug($this->slugify->generate($series->getTitle()));
            $manager->persist($series);
            $this->addReference('series_' . $title, $series);
        }
        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            ActorFixtures::class,
            CategoryFixtures::class,
        ];
    }
}
