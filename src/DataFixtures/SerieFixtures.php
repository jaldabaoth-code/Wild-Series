<?php

namespace App\DataFixtures;

use App\Entity\Serie;
use App\Entity\Category;
use App\Service\FixturesData;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use App\Service\Slugify;

class SerieFixtures extends Fixture implements DependentFixtureInterface
{
    private Slugify $slugify;

    public function __construct(Slugify $slugify)
    {
        $this->slugify = $slugify;
    }

    public function load(ObjectManager $manager)
    {
        foreach (FixturesData::TV_SERIES as $title => $data) {
            $serie = new Serie();
            $serie->setTitle($title);
            $serie->setDescription($data['description']);
            $serie->setPoster($data['poster']);
            $serie->setImage($data['image']);
            $serie->setYear($data['year']);
            $serie->setCountry($data['country']);
            $serie->setCategory($this->getReference('category_' . $data['category']));
            $serie->setSlug($this->slugify->generate($serie->getTitle()));
            $manager->persist($serie);
            $this->addReference('serie_' . $title, $serie);
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
