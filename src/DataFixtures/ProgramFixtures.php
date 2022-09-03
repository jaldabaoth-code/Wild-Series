<?php

namespace App\DataFixtures;

use App\Entity\Program;
use App\Entity\Category;
use App\Service\FixturesData;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use App\Service\Slugify;

class ProgramFixtures extends Fixture implements DependentFixtureInterface
{
    private Slugify $slugify;

    public function __construct(Slugify $slugify)
    {
        $this->slugify = $slugify;
    }

    public function load(ObjectManager $manager)
    {
        foreach (FixturesData::TV_SERIES as $title => $data) {
            $program = new Program();
            $program->setTitle($title);
            $program->setDescription($data['description']);
            $program->setPoster($data['poster']);
            $program->setImage($data['image']);
            $program->setYear($data['year']);
            $program->setCountry($data['country']);
            $program->setCategory($this->getReference('category_' . $data['category']));
            $program->setSlug($this->slugify->generate($program->getTitle()));
            $manager->persist($program);
            $this->addReference('program_' . $title, $program);
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
