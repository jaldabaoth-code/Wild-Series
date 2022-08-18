<?php
//ActorFixtures.php

namespace App\DataFixtures;

use App\Entity\Actor;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ActorFixtures extends Fixture
{
    public const ACTORS = [
        'Norman Reedus',
        'Andrew Lincoln',
        'Lauren Cohan',
        'Jeffrey Dean Morgan',
        'Chandler Riggs',
        'Pedro Pascal',
        'Yûki Kaji',
        'Bryan Cranston',
        'Kit Harington',
        'Norman Reedus',
    ];

    public const ACTORS2 = [
        'Sean Bean',
        'Peter Dinklage',
        'Kit Harington',
        'Emilia Clarke',
        'Lena Headey',
        'Nikolaj Coster-Waldau',
        'Sophie Turner',
        'Maisie Williams',
        'Iain Glen',
        'Michelle Fairley',
        'Mark Addy',
        'Aidan Gillen',
        'Harry Lloyd',
        'Isaac Hempstead Wright',
        'Richard Madden',
        'Jack Gleeson',
        'Alfie Allen',
        'Rory McCann',
        'Jason Momoa',
        'Liam Cunningham',
        'John Bradley (II)',
        'Charles Dance',
        'Stephen Dillane',
        'Carice van Houten',
        'James Cosmo',
        'Jerome Flynn',
        'Conleth Hill',
        'Sibel Kekilli',
        'Gordon Fulton',
        'Natalie Dormer',
        'Rose Leslie',
        'Oona Chaplin',
        'Kristofer Hivju',
        'Gwendoline Christie',
        'Iwan Rheon',
        'Hannah Murray',
        'Michiel Huisman',
        'Nathalie Emmanuel',
        'Dean-Charles Chapman',
        'Indira Varma',
        'Tom Wlaschiha',
        'Michael McElhatton',
        'Jonathan Pryce',
        'Joe Dempsie',
        'Jacob Anderson',




        'Andrew Lincoln',
        'Sarah Wayne Callies',
        'Jon Bernthal',
        'Laurie Holden',
        'Jeffrey DeMunn',
        'Steven Yeun',
        'Chandler Riggs',
        'David Morrissey',
        'Danai Gurira',
        'Scott Wilson',
        'Lauren Cohan',
        'Michael Rooker',
        'Chad L. Coleman',
        'Sonequa Martin-Green',
        'Emily Kinney',
        'Lawrence Gilliard Jr.',
        'Michael Cudlitz',
        'Josh McDermitt',
        'Seth Gilliam',
        'Alanna Masterson',
        'Christian Serratos',
        'Andrew J. West',
        'Lennie James',
        'Ross Marquand',
        'Tovah Feldshuh',
        'Austin Nichols',

        'SEASON6',

        'Norman Reedus',
        'Melissa McBride',
        'Lauren Cohan',
        'Christian Serratos',
        'Josh McDermitt',
        'Seth Gilliam',
        'Ross Marquand',
        'Khary Payton',
        'Cooper Andrews',
        'Callan McAuliffe',
        'Jeffrey Dean Morgan',
        'Eleanor Matsuura',
        'Nadia Hilker',
        'Cailey Fleming',
        'Cassady McClincy',
        'Lauren Ridloff',
        'Margot Bingham',
        'Michael James Shaw',
        'Ian Anthony Dale',
        'Laila Robins',
        'Josh Hamilton',
        'Laurie Fortier'
    ];

    public function load(ObjectManager $manager)
    {
        foreach (self::ACTORS as $key => $actorName) {
            $actor = new Actor();
            $actor->setName($actorName);
            $manager->persist($actor);
            $this->addReference('actor_' . $key, $actor);
        }
        $manager->flush();
    }
}
