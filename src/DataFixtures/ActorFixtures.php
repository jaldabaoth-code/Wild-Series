<?php
//ActorFixtures.php

namespace App\DataFixtures;

use App\Entity\Actor;
use App\Service\FixturesData;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ActorFixtures extends Fixture
{
 /*   public const ACTORS = [
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
        'Alanna Masterson',
        'Christian Serratos',
        'Andrew J. West',
        'Lennie James',
        'Ross Marquand',
        'Tovah Feldshuh',
        'Austin Nichols',
        'Tom Payne (II)',
        'Austin Amelio',
        'Xander Berkeley',
        'Pollyanna McIntosh',
        'Samantha Morton',
        'Katelyn Nacon',
        'Avi Nash',
        'Callan McAuliffe',
        'Ryan Hurst',
        'Norman Reedus',
        'Melissa McBride',
        'Seth Gilliam',
        'Khary Payton',
        'Cooper Andrews',
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
        'Laurie Fortier',
        'Pedro Pascal',
        'Troy Kotsur',
        'Katee Sackhoff',
        'Christopher Lloyd',
        'Giancarlo Esposito',
        'Carl Weathers',
        'Romi Pak',
        'Yui Ishikawa',
        'Yûki Kaji',
        'Marina Inoue',
        'Hiroshi Kamiya',
        'Yû Kobayashi',
        'Daisuke Ono',
        'Yoshimasa Hosoya',
        'Kenjiro Tsuda',
        'Kazuhiro Yamaji',
        'Ayane Sakura',
        'Hiroshi Tsuchida',
        'Bryan Cranston',
        'Anna Gunn',
        'Aaron Paul',
        'Dean Norris',
        'Betsy Brandt',
        'RJ Mitte',
        'Bob Odenkirk',
        'Jonathan Banks',
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
    }*/

    public function load(ObjectManager $manager)
    {
        foreach (FixturesData::ACTORS as $key => $data) {
            $actor = new Actor();
            $actor->setName($data['name']);
            $actor->setPoster($data['poster']);
            $manager->persist($actor);
            $this->addReference('actor_' . $key, $actor);
        }
        $manager->flush();
    }

/*    public const ACTORS = [
        [
            'name' => 'Sean Bean',
            'poster' => 'https://fr.web.img6.acsta.net/c_310_420/pictures/15/07/20/17/45/031961.jpg'
        ],
        [
            'name' => 'Peter Dinklage',
            'poster' => 'https://fr.web.img6.acsta.net/c_310_420/pictures/15/07/20/17/24/353481.jpg'
        ],
        [
            'name' => 'Kit Harington',
            'poster' => 'https://fr.web.img5.acsta.net/c_310_420/pictures/17/07/13/11/23/574012.jpg'
        ],
        [
            'name' => 'Emilia Clarke',
            'poster' => 'https://fr.web.img5.acsta.net/c_310_420/pictures/15/06/04/16/19/049773.jpg'
        ],
        [
            'name' => 'Lena Headey',
            'poster' => 'https://fr.web.img4.acsta.net/c_310_420/pictures/17/07/13/11/36/018746.jpg'
        ],
        [
            'name' => 'Nikolaj Coster-Waldau',
            'poster' => 'https://fr.web.img5.acsta.net/c_310_420/pictures/19/04/17/11/22/3086231.jpg'
        ],
        [
            'name' => 'Sophie Turner',
            'poster' => 'https://fr.web.img4.acsta.net/c_310_420/pictures/19/04/04/13/58/5444916.jpg'
        ],
        [
            'name' => 'Maisie Williams',
            'poster' => 'https://fr.web.img4.acsta.net/c_310_420/pictures/17/07/17/15/22/062939.jpg'
        ],
        [
            'name' => 'Iain Glen',
            'poster' => 'https://fr.web.img6.acsta.net/c_310_420/pictures/19/04/04/14/08/4625835.jpg'
        ],
        [
            'name' => 'Michelle Fairley',
            'poster' => 'https://fr.web.img2.acsta.net/c_310_420/pictures/16/02/08/17/10/536071.jpg'
        ],
        [
            'name' => 'Mark Addy',
            'poster' => 'https://fr.web.img4.acsta.net/c_310_420/pictures/17/01/10/15/04/280215.jpg'
        ],
        [
            'name' => 'Aidan Gillen',
            'poster' => 'https://fr.web.img3.acsta.net/c_310_420/pictures/17/07/13/10/56/166119.jpg'
        ],
        [
            'name' => 'Harry Lloyd',
            'poster' => 'https://fr.web.img2.acsta.net/c_310_420/pictures/18/12/18/13/44/4736292.jpg'
        ],
        [
            'name' => 'Isaac Hempstead Wright',
            'poster' => 'https://fr.web.img4.acsta.net/c_310_420/pictures/17/07/13/11/08/247839.jpg'
        ],
        [
            'name' => 'Richard Madden',
            'poster' => 'https://fr.web.img3.acsta.net/c_310_420/pictures/19/05/16/16/43/3344047.jpg'
        ],
        [
            'name' => 'Jack Gleeson',
            'poster' => 'https://fr.web.img3.acsta.net/c_310_420/medias/nmedia/18/85/17/70/19775669.jpg'
        ],
        [
            'name' => 'Alfie Allen',
            'poster' => 'https://fr.web.img4.acsta.net/c_310_420/pictures/19/04/05/16/48/0284736.jpg'
        ],
        [
            'name' => 'Rory McCann',
            'poster' => 'https://fr.web.img3.acsta.net/c_310_420/pictures/16/06/14/09/50/205091.jpg'
        ],
        [
            'name' => 'Jason Momoa',
            'poster' => 'https://fr.web.img2.acsta.net/c_310_420/pictures/17/11/16/14/08/4596459.jpg'
        ],
        [
            'name' => 'Liam Cunningham',
            'poster' => 'https://fr.web.img5.acsta.net/c_310_420/pictures/19/07/15/09/51/5048242.jpg'
        ],
        [
            'name' => 'John Bradley (II)',
            'poster' => 'https://fr.web.img5.acsta.net/c_310_420/pictures/17/07/13/11/19/201494.jpg'
        ],
        [
            'name' => 'Charles Dance',
            'poster' => 'https://fr.web.img6.acsta.net/c_310_420/pictures/15/10/12/12/30/345331.jpg'
        ],
        [
            'name' => 'Stephen Dillane',
            'poster' => 'https://fr.web.img6.acsta.net/c_310_420/pictures/15/08/04/12/41/236432.jpg'
        ],
        [
            'name' => 'Carice van Houten',
            'poster' => 'https://fr.web.img5.acsta.net/c_310_420/pictures/17/07/17/15/26/102863.jpg'
        ],
        [
            'name' => 'James Cosmo',
            'poster' => 'https://fr.web.img2.acsta.net/c_310_420/pictures/18/11/12/14/54/2712017.jpg'
        ],
        [
            'name' => 'Jerome Flynn',
            'poster' => 'https://fr.web.img6.acsta.net/c_310_420/pictures/17/07/13/11/10/464869.jpg'
        ],
        [
            'name' => 'Conleth Hill',
            'poster' => 'https://fr.web.img4.acsta.net/c_310_420/pictures/17/07/13/10/57/445650.jpg'
        ],
        [
            'name' => 'Sibel Kekilli',
            'poster' => 'https://fr.web.img3.acsta.net/c_310_420/medias/nmedia/18/35/36/68/20229743.jpg'
        ],
        [
            'name' => 'Gordon Fulton',
            'poster' => ''
        ],
        [
            'name' => 'Natalie Dormer',
            'poster' => 'https://fr.web.img2.acsta.net/c_310_420/pictures/15/07/31/16/23/417580.jpg'
        ],
        [
            'name' => 'Rose Leslie',
            'poster' => 'https://fr.web.img6.acsta.net/c_310_420/pictures/14/03/20/14/49/358662.jpg'
        ],
        [
            'name' => 'Oona Chaplin',
            'poster' => 'https://fr.web.img4.acsta.net/c_310_420/pictures/15/10/19/12/01/156254.jpg'
        ],
        [
            'name' => 'Kristofer Hivju',
            'poster' => 'https://fr.web.img4.acsta.net/c_310_420/pictures/17/07/17/15/34/314813.jpg'
        ],
        [
            'name' => 'Gwendoline Christie',
            'poster' => 'https://fr.web.img6.acsta.net/c_310_420/pictures/19/04/04/14/01/0909358.jpg'
        ],
        [
            'name' => 'Iwan Rheon',
            'poster' => 'https://fr.web.img5.acsta.net/c_310_420/pictures/16/03/08/15/52/352709.jpg'
        ],
        [
            'name' => 'Hannah Murray',
            'poster' => 'https://fr.web.img6.acsta.net/c_310_420/pictures/17/07/13/11/01/466857.jpg'
        ],
        [
            'name' => 'Michiel Huisman',
            'poster' => 'https://fr.web.img6.acsta.net/c_310_420/pictures/15/08/04/15/34/112264.jpg'
        ],
        [
            'name' => 'Nathalie Emmanuel',
            'poster' => 'https://fr.web.img2.acsta.net/c_310_420/pictures/17/07/13/11/27/140511.jpg'
        ],
        [
            'name' => 'Dean-Charles Chapman',
            'poster' => 'https://fr.web.img5.acsta.net/c_310_420/pictures/19/12/19/10/04/3601193.jpg'
        ],
        [
            'name' => 'Indira Varma',
            'poster' => 'https://fr.web.img2.acsta.net/c_310_420/pictures/19/07/23/14/43/1155026.jpg'
        ],
        [
            'name' => 'Tom Wlaschiha',
            'poster' => 'https://fr.web.img5.acsta.net/c_310_420/pictures/19/06/18/13/43/3694359.jpg'
        ],
        [
            'name' => 'Michael McElhatton',
            'poster' => 'https://fr.web.img4.acsta.net/c_310_420/pictures/17/05/11/16/45/021619.jpg'
        ],
        [
            'name' => 'Jonathan Pryce',
            'poster' => 'https://fr.web.img5.acsta.net/c_310_420/pictures/19/12/11/12/11/2629132.jpg'
        ],
        [
            'name' => 'Joe Dempsie',
            'poster' => 'https://fr.web.img6.acsta.net/c_310_420/pictures/17/07/13/11/12/315839.jpg'
        ],
        [
            'name' => 'Jacob Anderson',
            'poster' => 'https://fr.web.img6.acsta.net/c_310_420/pictures/17/07/13/11/10/159244.jpg'
        ],
        [
            'name' => 'Andrew Lincoln',
            'poster' => 'https://fr.web.img3.acsta.net/c_310_420/pictures/16/10/25/11/49/315640.jpg'
        ],
        [
            'name' => 'Sarah Wayne Callies',
            'poster' => 'https://fr.web.img6.acsta.net/c_310_420/pictures/16/05/19/17/48/475157.jpg'
        ],
        [
            'name' => 'Jon Bernthal',
            'poster' => 'https://fr.web.img3.acsta.net/c_310_420/pictures/15/08/10/16/47/000886.jpg'
        ],
        [
            'name' => 'Laurie Holden',
            'poster' => 'https://fr.web.img2.acsta.net/c_310_420/pictures/17/03/14/11/18/536751.jpg'
        ],
        [
            'name' => 'Jeffrey DeMunn',
            'poster' => 'https://fr.web.img6.acsta.net/c_310_420/medias/nmedia/18/81/92/91/19585642.jpg'
        ],
        [
            'name' => 'Steven Yeun',
            'poster' => 'https://fr.web.img4.acsta.net/c_310_420/pictures/18/05/17/16/17/3203188.jpg'
        ],
        [
            'name' => 'Chandler Riggs',
            'poster' => 'https://fr.web.img3.acsta.net/c_310_420/pictures/16/07/25/11/24/080516.jpg'
        ],
        [
            'name' => 'David Morrissey',
            'poster' => 'https://fr.web.img6.acsta.net/c_310_420/pictures/15/10/28/14/33/261894.jpg'
        ],
        [
            'name' => 'Danai Gurira',
            'poster' => 'https://fr.web.img3.acsta.net/c_310_420/pictures/20/02/24/13/14/1429893.jpg'
        ],
        [
            'name' => 'Scott Wilson',
            'poster' => 'https://fr.web.img4.acsta.net/c_310_420/pictures/16/12/22/17/13/544506.jpg'
        ],
        [
            'name' => 'Lauren Cohan',
            'poster' => 'https://fr.web.img6.acsta.net/c_310_420/pictures/15/07/28/16/04/503040.jpg'
        ],
        [
            'name' => 'Michael Rooker',
            'poster' => 'https://fr.web.img3.acsta.net/c_310_420/pictures/16/02/17/15/31/521431.jpg'
        ],
        [
            'name' => 'Chad L. Coleman',
            'poster' => 'https://fr.web.img6.acsta.net/c_310_420/pictures/15/08/03/12/56/358191.jpg'
        ],
        [
            'name' => 'Sonequa Martin-Green',
            'poster' => 'https://fr.web.img4.acsta.net/c_310_420/pictures/15/08/03/12/50/315439.jpg'
        ],
        [
            'name' => 'Emily Kinney',
            'poster' => 'https://fr.web.img6.acsta.net/c_310_420/pictures/17/04/28/16/40/466055.jpg'
        ],
        [
            'name' => 'Lawrence Gilliard Jr.',
            'poster' => 'https://fr.web.img6.acsta.net/c_310_420/pictures/14/10/30/11/51/247038.jpg'
        ],
        [
            'name' => 'Michael Cudlitz',
            'poster' => 'https://fr.web.img2.acsta.net/c_310_420/pictures/16/10/25/11/49/538965.jpg'
        ],
        [
            'name' => 'Josh McDermitt',
            'poster' => 'https://fr.web.img4.acsta.net/c_310_420/pictures/18/09/14/14/46/5954496.jpg'
        ],
        [
            'name' => 'Alanna Masterson',
            'poster' => 'https://fr.web.img4.acsta.net/c_310_420/pictures/15/08/03/13/06/134885.jpg'
        ],
        [
            'name' => 'Christian Serratos',
            'poster' => 'https://fr.web.img5.acsta.net/c_310_420/pictures/15/08/03/13/03/269745.jpg'
        ],
        [
            'name' => 'Andrew J. West',
            'poster' => 'https://fr.web.img6.acsta.net/c_310_420/pictures/210/616/21061694_20131128115028006.jpg'
        ],
        [
            'name' => 'Lennie James',
            'poster' => 'https://fr.web.img6.acsta.net/c_310_420/pictures/16/08/02/16/14/047309.jpg'
        ],
        [
            'name' => 'Ross Marquand',
            'poster' => 'https://fr.web.img3.acsta.net/c_310_420/pictures/16/07/25/11/18/079421.jpg'
        ],
        [
            'name' => 'Tovah Feldshuh',
            'poster' => 'https://fr.web.img4.acsta.net/c_310_420/pictures/16/02/16/09/26/028553.jpg'
        ],
        [
            'name' => 'Austin Nichols',
            'poster' => 'https://fr.web.img4.acsta.net/c_310_420/pictures/16/02/16/09/28/411717.jpg'
        ],
        [
            'name' => 'Tom Payne (II)',
            'poster' => 'https://fr.web.img3.acsta.net/c_310_420/pictures/16/10/25/11/51/314639.jpg'
        ],
        [
            'name' => 'Austin Amelio',
            'poster' => 'https://fr.web.img2.acsta.net/c_310_420/pictures/16/10/25/11/52/241782.jpg'
        ],
        [
            'name' => 'Xander Berkeley',
            'poster' => 'https://fr.web.img6.acsta.net/c_310_420/pictures/15/09/24/11/21/289035.jpg'
        ],
        [
            'name' => 'Pollyanna McIntosh',
            'poster' => 'https://fr.web.img6.acsta.net/c_310_420/pictures/17/10/02/16/41/0603848.jpg'
        ],
        [
            'name' => 'Samantha Morton',
            'poster' => 'https://fr.web.img6.acsta.net/c_310_420/pictures/16/08/16/17/30/471199.jpg'
        ],
        [
            'name' => 'Katelyn Nacon',
            'poster' => 'https://fr.web.img5.acsta.net/c_310_420/pictures/18/02/27/17/07/5185672.jpg'
        ],
        [
            'name' => 'Avi Nash',
            'poster' => 'https://fr.web.img4.acsta.net/c_310_420/pictures/19/09/25/09/55/2081138.jpg'
        ],
        [
            'name' => 'Callan McAuliffe',
            'poster' => 'https://fr.web.img6.acsta.net/c_310_420/pictures/18/02/27/16/47/3942578.jpg'
        ],
        [
            'name' => 'Ryan Hurst',
            'poster' => 'https://fr.web.img5.acsta.net/c_310_420/pictures/18/11/14/11/43/2010122.jpg'
        ],
        [
            'name' => 'Norman Reedus',
            'poster' => 'https://fr.web.img4.acsta.net/c_310_420/pictures/19/09/25/09/52/1052084.jpg'
        ],
        [
            'name' => 'Melissa McBride',
            'poster' => 'https://fr.web.img3.acsta.net/c_310_420/pictures/18/02/27/17/17/1335649.jpg'
        ],
        [
            'name' => 'Seth Gilliam',
            'poster' => 'https://fr.web.img3.acsta.net/c_310_420/pictures/17/08/01/10/33/305065.jpg'
        ],
        [
            'name' => 'Khary Payton',
            'poster' => 'https://fr.web.img3.acsta.net/c_310_420/pictures/18/02/27/17/13/5123057.jpg'
        ],
        [
            'name' => 'Cooper Andrews',
            'poster' => 'https://fr.web.img6.acsta.net/c_310_420/pictures/17/11/28/15/35/5564623.jpg'
        ],
        [
            'name' => 'Jeffrey Dean Morgan',
            'poster' => 'https://fr.web.img6.acsta.net/c_310_420/pictures/18/02/27/17/18/1720065.jpg'
        ],
        [
            'name' => 'Eleanor Matsuura',
            'poster' => 'https://fr.web.img3.acsta.net/c_310_420/pictures/19/02/19/10/53/1613658.jpg'
        ],
        [
            'name' => 'Nadia Hilker',
            'poster' => 'https://fr.web.img6.acsta.net/c_310_420/pictures/17/03/28/16/05/440507.jpg'
        ],
        [
            'name' => 'Cailey Fleming',
            'poster' => 'https://fr.web.img3.acsta.net/c_310_420/pictures/19/09/25/10/06/3654574.jpg'
        ],
        [
            'name' => 'Cassady McClincy',
            'poster' => 'https://fr.web.img3.acsta.net/c_310_420/pictures/19/02/19/10/48/0172745.jpg'
        ],
        [
            'name' => 'Lauren Ridloff',
            'poster' => 'https://fr.web.img6.acsta.net/c_310_420/pictures/19/02/19/10/50/0581320.jpg'
        ],
        [
            'name' => 'Margot Bingham',
            'poster' => 'https://fr.web.img2.acsta.net/c_310_420/pictures/20/07/21/14/16/5276088.jpg'
        ],
        [
            'name' => 'Michael James Shaw',
            'poster' => ''
        ],
        [
            'name' => 'Ian Anthony Dale',
            'poster' => 'https://fr.web.img4.acsta.net/c_310_420/pictures/19/06/17/14/54/5335761.jpg'
        ],
        [
            'name' => 'Laila Robins',
            'poster' => 'https://fr.web.img6.acsta.net/c_310_420/pictures/14/06/06/17/43/573881.jpg'
        ],
        [
            'name' => 'Josh Hamilton',
            'poster' => 'https://fr.web.img4.acsta.net/c_310_420/pictures/18/10/24/22/50/1438627.jpg'
        ],
        [
            'name' => 'Laurie Fortier',
            'poster' => 'https://fr.web.img6.acsta.net/c_310_420/pictures/16/03/01/13/32/005385.jpg'
        ],
        [
            'name' => 'Pedro Pascal',
            'poster' => 'https://fr.web.img6.acsta.net/c_310_420/pictures/16/07/27/11/24/278731.jpg'
        ],
        [
            'name' => 'Troy Kotsur',
            'poster' => 'https://fr.web.img6.acsta.net/c_310_420/pictures/22/03/28/10/15/1601867.jpg'
        ],
        [
            'name' => 'Katee Sackhoff',
            'poster' => 'https://fr.web.img6.acsta.net/c_310_420/medias/nmedia/18/36/16/05/19439740.jpg'
        ],
        [
            'name' => 'Christopher Lloyd',
            'poster' => 'https://fr.web.img3.acsta.net/c_310_420/pictures/15/07/29/14/54/407417.jpg'
        ],
        [
            'name' => 'Giancarlo Esposito',
            'poster' => 'https://fr.web.img6.acsta.net/c_310_420/pictures/210/145/21014590_2013062117141352.jpg'
        ],
        [
            'name' => 'Carl Weathers',
            'poster' => 'https://fr.web.img4.acsta.net/c_310_420/pictures/15/11/23/17/08/374382.jpg'
        ],
        [
            'name' => 'Romi Pak',
            'poster' => ''
        ],
        [
            'name' => 'Yui Ishikawa',
            'poster' => ''
        ],
        [
            'name' => 'Yûki Kaji',
            'poster' => ''
        ],
        [
            'name' => 'Marina Inoue',
            'poster' => ''
        ],
        [
            'name' => 'Hiroshi Kamiya',
            'poster' => ''
        ],
        [
            'name' => 'Yû Kobayashi',
            'poster' => ''
        ],
        [
            'name' => 'Daisuke Ono',
            'poster' => 'https://fr.web.img3.acsta.net/c_310_420/pictures/16/07/12/17/32/318562.jpg'
        ],
        [
            'name' => 'Yoshimasa Hosoya',
            'poster' => ''
        ],
        [
            'name' => 'Kenjiro Tsuda',
            'poster' => ''
        ],
        [
            'name' => 'Kazuhiro Yamaji',
            'poster' => ''
        ],
        [
            'name' => 'Ayane Sakura',
            'poster' => ''
        ],
        [
            'name' => 'Hiroshi Tsuchida',
            'poster' => ''
        ],
        [
            'name' => 'Bryan Cranston',
            'poster' => 'https://fr.web.img2.acsta.net/c_310_420/pictures/19/10/23/12/10/3830800.jpg'
        ],
        [
            'name' => 'Anna Gunn',
            'poster' => 'https://fr.web.img3.acsta.net/c_310_420/pictures/18/10/01/17/09/0077364.jpg'
        ],
        [
            'name' => 'Aaron Paul',
            'poster' => 'https://fr.web.img3.acsta.net/c_310_420/pictures/20/01/27/11/03/5568116.jpg'
        ],
        [
            'name' => 'Dean Norris',
            'poster' => 'https://fr.web.img3.acsta.net/c_310_420/pictures/16/01/12/15/57/364496.jpg'
        ],
        [
            'name' => 'Betsy Brandt',
            'poster' => 'https://fr.web.img5.acsta.net/c_310_420/pictures/19/10/23/12/04/5066647.jpg'
        ],
        [
            'name' => 'RJ Mitte',
            'poster' => 'https://fr.web.img6.acsta.net/c_310_420/pictures/20/01/27/11/00/2871374.jpg'
        ],
        [
            'name' => 'Bob Odenkirk',
            'poster' => 'https://fr.web.img3.acsta.net/c_310_420/pictures/20/01/27/11/02/2911620.jpg'
        ],
        [
            'name' => 'Jonathan Banks',
            'poster' => 'https://fr.web.img3.acsta.net/c_310_420/pictures/16/07/15/12/17/522276.jpg'
        ]
    ];*/











}
