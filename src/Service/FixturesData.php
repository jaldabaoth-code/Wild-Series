<?php

namespace App\Service;

class FixturesData
{
    const TV_SERIES = [
        'The Walking Dead' => [
            'description' => 'Sheriff Deputy Rick Grimes wakes up from a coma to learn the world is in ruins and must lead a group of survivors to stay alive.',
            'poster' => 'https://fr.web.img6.acsta.net/c_225_300/pictures/210/454/21045474_20130930201634487.jpg',
            'image' => 'https://www.melty.fr/wp-content/uploads/meltyfr/2021/07/media-1842.jpg',
            'country' => 'United States',
            'year' => '2010',
            'category' => 'Horror'
        ],
        'Game of Thrones' => [
            'description' => 'Nine noble families fight for control over the lands of Westeros, while an ancient enemy returns after being dormant for millennia.',
            'poster' => 'https://fr.web.img6.acsta.net/c_225_300/pictures/19/03/21/17/05/1927893.jpg',
            'image' => 'https://www.rcinet.ca/fr/wp-content/uploads/sites/2/2019/04/game-of-thones.jpg',
            'country' => 'United States',
            'year' => '2011',
            'category' => 'Adventure'
        ],
        'Breaking Bad' => [
            'description' => 'A high school chemistry teacher diagnosed with inoperable lung cancer turns to manufacturing and selling methamphetamine in order to secure his family\'s future.',
            'poster' => 'https://fr.web.img6.acsta.net/c_225_300/pictures/18/07/23/11/26/1597342.jpg',
            'image' => 'https://www.presse-citron.net/app/uploads/2022/07/breaking-bad-unreal-engine-5.jpg',
            'country' => 'United States',
            'year' => '2008',
            'category' => 'Crime'
        ],
        'Attack on Titan' => [
            'description' => 'After his hometown is destroyed and his mother is killed, young Eren Jaeger vows to cleanse the earth of the giant humanoid Titans that have brought humanity to the brink of extinction.',
            'poster' => 'https://fr.web.img4.acsta.net/c_225_300/pictures/18/10/31/18/23/3895256.jpg',
            'image' => 'https://www.kanpai.fr/sites/default/files/uploads/2021/04/attaque-titans-shingeki-kyojin-03.png',
            'country' => 'Japan',
            'year' => '2013',
            'category' => 'Animation'
        ],
        'The Mandalorian' => [
            'description' => 'The travels of a lone bounty hunter in the outer reaches of the galaxy, far from the authority of the New Republic.',
            'poster' => 'https://fr.web.img2.acsta.net/c_225_300/pictures/19/10/29/09/01/2094959.jpg',
            'image' => 'https://www.numerama.com/wp-content/uploads/2020/09/the-mandalorian.jpg',
            'country' => 'United States',
            'year' => '2019',
            'category' => 'Action'
        ]
    ];


    const THE_WALKING_DEAD = [
        'Season 01' => [
            'number' => 1,
            'poster' => 'https://fr.web.img6.acsta.net/c_225_300/pictures/210/454/21045474_20130930201634487.jpg',
            'description' => 'After being injured in the line of duty, Sheriff Rick Grimes wakes up from a weeks-long coma to find a post-apocalyptic world where nearly the entire American population has turned into zombies. Alone and confused, Rick travels to Atlanta to search for his wife Lori and son Carl. On his way, he will meet other survivors with whom he will try to stay alive in this metamorphosed, frightening and perilous world.',
            'year' => 2010,
            'actors' => [
                'Andrew Lincoln',
                'Sarah Wayne Callies',
                'Jon Bernthal',
                'Laurie Holden',
                'Jeffrey DeMunn',
                'Steven Yeun',
                'Chandler Riggs'
            ],
            'episodes' => [
                'episode 01' => [
                    'number' => 1,
                    'title' => 'Days Gone Bye',
                    'poster' => 'https://fr.web.img2.acsta.net/c_400_200/medias/nmedia/18/81/95/48/19587064.jpg',
                    'description' => 'Deputy Sheriff Rick Grimes awakens from a coma, and searches for his family in a world ravaged by the undead.'
                ],
                'episode 02' => [
                    'number' => 2,
                    'title' => 'Guts',
                    'poster' => 'https://fr.web.img2.acsta.net/c_400_200/medias/nmedia/18/81/95/48/19587073.jpg',
                    'description' => 'In Atlanta, Rick is rescued by a group of survivors, but they soon find themselves trapped inside a department store surrounded by walkers.'
                ],
                'episode 03' => [
                    'number' => 3,
                    'title' => 'Tell It to the Frogs',
                    'poster' => 'https://fr.web.img4.acsta.net/c_400_200/medias/nmedia/18/81/95/48/19592301.jpg',
                    'description' => 'Rick is reunited with Lori and Carl but soon decides - along with some of the other survivors - to return to the rooftop and rescue Merle. Meanwhile, tensions run high between the other survivors at the camp.'
                ],
                'episode 04' => [
                    'number' => 4,
                    'title' => 'Vatos',
                    'poster' => 'https://fr.web.img3.acsta.net/c_400_200/medias/nmedia/18/81/95/48/19591985.jpg',
                    'description' => 'Rick, Glenn, Daryl and T-Dog come across a group of seemingly hostile survivors whilst searching for Merle. Back at camp, Jim begins behaving erratically.'
                ],
                'episode 05' => [
                    'number' => 5,
                    'title' => 'Wildfire',
                    'poster' => 'https://fr.web.img3.acsta.net/c_400_200/pictures/18/06/04/13/40/5360747.jpg',
                    'description' => 'After the attack on the camp, Rick leads the survivors to the C.D.C., in the hope that they can cure an infected Jim.'
                ],
                'episode 06' => [
                    'number' => 6,
                    'title' => 'TS-19',
                    'poster' => 'https://fr.web.img3.acsta.net/c_400_200/pictures/18/06/04/13/40/5407622.jpg',
                    'description' => 'The survivors gain access to the C.D.C. in the hope of a safe haven.'
                ]
            ]
        ],
        'Season 02' => [
            'number' => 2,
            'poster' => 'https://fr.web.img4.acsta.net/c_225_300/pictures/210/457/21045753_20131001203731093.jpg',
            'description' => 'In the aftermath of the CDC explosion, Rick and his group flee Atlanta as the city is infested with zombies. Faced with a new threat, they find refuge on the farm of Hershel Greene, a man whose family hides a terrible secret. But the bonds of the group are put to the test when tensions erupt between the survivors and the inhabitants of the farm, but also between Rick and Shane.',
            'year' => 2011,
            'actors' => [
                'Andrew Lincoln',
                'Jon Bernthal',
                'Sarah Wayne Callies',
                'Laurie Holden',
                'Jeffrey DeMunn',
                'Steven Yeun',
                'Chandler Riggs',
                'Norman Reedus',
                'Melissa McBride'
            ],
            'episodes' => [
                'episode 01' => [
                    'number' => 1,
                    'title' => 'What Lies Ahead',
                    'poster' => 'https://fr.web.img6.acsta.net/c_400_200/medias/nmedia/18/78/35/82/19826267.jpg',
                    'description' => 'The group\'s plan to head for Fort Benning is put on hold when Sophia goes missing.'
                ],
                'episode 02' => [
                    'number' => 2,
                    'title' => 'Bloodletting',
                    'poster' => 'https://fr.web.img4.acsta.net/c_400_200/pictures/18/06/04/13/40/5443560.jpg',
                    'description' => 'After Carl is accidentally shot, the group are brought to a family living on a nearby farm. Shane makes a dangerous trip in search of medical supplies.'
                ],
                'episode 03' => [
                    'number' => 3,
                    'title' => 'Save the Last One',
                    'poster' => 'https://fr.web.img3.acsta.net/c_400_200/medias/nmedia/18/78/35/82/19838923.jpg',
                    'description' => 'As Carl\'s condition continues to deteriorate, Shane and Otis try to dodge the walkers as they head back to the farm.'
                ],
                'episode 04' => [
                    'number' => 4,
                    'title' => 'Cherokee Rose',
                    'poster' => 'https://fr.web.img5.acsta.net/c_400_200/medias/nmedia/18/78/35/82/19841592.JPG',
                    'description' => 'With Carl recovering, the group puts their focus on finding Sophia. Glenn and Maggie go for a trip to find supplies.'
                ],
                'episode 05' => [
                    'number' => 5,
                    'title' => 'Chupacabra',
                    'poster' => 'https://fr.web.img3.acsta.net/c_400_200/medias/nmedia/18/78/35/82/19845088.jpg',
                    'description' => 'In the woods alone, Daryl finds a clue but is injured and attacked by walkers. Rick questions his choices. Glenn gets mixed signals from Maggie.'
                ],
                'episode 06' => [
                    'number' => 6,
                    'title' => 'Secrets',
                    'poster' => 'https://fr.web.img3.acsta.net/c_400_200/medias/nmedia/18/78/35/82/20343193.jpg',
                    'description' => 'Dale confronts Hershel after Glenn tells him about the walkers in the barn. Meanwhile, Lori struggles to come to terms with her pregnancy, and Shane tries to teach Andrea how to use weapons.'
                ],
                'episode 07' => [
                    'number' => 7,
                    'title' => 'Pretty Much Dead Already',
                    'poster' => 'https://fr.web.img6.acsta.net/c_400_200/medias/nmedia/18/78/35/82/19852943.jpg',
                    'description' => 'Glenn tells the rest of the group about the walkers in the barn, dividing them on what to do. Meanwhile, Hershel sets a deadline for the group to leave, unless Rick does a difficult task.'
                ],
                'episode 08' => [
                    'number' => 8,
                    'title' => 'Nebraska',
                    'poster' => 'https://fr.web.img3.acsta.net/c_400_200/pictures/21/02/16/12/23/0246999.jpg',
                    'description' => 'In the aftermath of the barn incident; the group bury loved ones, Beth falls into shock, and Rick and Glenn head out to find Hershel when he disappears.'
                ],
                'episode 09' => [
                    'number' => 9,
                    'title' => 'Triggerfinger',
                    'poster' => 'https://fr.web.img5.acsta.net/c_400_200/medias/nmedia/18/78/35/82/20028243.jpg',
                    'description' => 'Rick, Glenn and Hershel come under enemy fire after their encounter with Dave and Tony. Meanwhile, Shane goes after Lori when everyone realizes she is missing.'
                ],
                'episode 10' => [
                    'number' => 10,
                    'title' => '18 Miles Out',
                    'poster' => 'https://fr.web.img2.acsta.net/c_400_200/medias/nmedia/18/78/35/82/20032278.jpg',
                    'description' => 'Rick and Shane argue over what to do with Randall. Back at the farm, Lori, Andrea and Maggie deal with a suicidal Beth.'
                ],
                'episode 11' => [
                    'number' => 11,
                    'title' => 'Judge, Jury, Executioner',
                    'poster' => 'https://fr.web.img3.acsta.net/c_400_200/medias/nmedia/18/78/35/82/20038570.jpg',
                    'description' => 'Dale fears the group is losing its humanity as Rick and the others vote to execute Randall.'
                ],
                'episode 12' => [
                    'number' => 12,
                    'title' => 'Better Angels',
                    'poster' => 'https://fr.web.img3.acsta.net/c_400_200/medias/nmedia/18/78/35/82/20048032.jpg',
                    'description' => 'Shane\'s antagonistic behaviour reaches new heights, while Carl suffers the consequences of his actions.'
                ],
                'episode 13' => [
                    'number' => 13,
                    'title' => 'Beside the Dying Fire',
                    'poster' => 'https://fr.web.img4.acsta.net/c_400_200/medias/nmedia/18/78/35/82/20053280.jpg',
                    'description' => 'As the farm is overrun by walkers, the group fights to escape.'
                ]
            ]
        ],
        'Season 03' => [
            'number' => 3,
            'poster' => 'https://fr.web.img3.acsta.net/c_225_300/pictures/21/04/19/14/51/5593951.jpg',
            'description' => 'A few months after abandoning Hershel\'s farm, Rick and his community of survivors discover an abandoned prison in which to settle. But the security of the group is quickly threatened by the neighboring community led by a ruthless man, nicknamed the Governor.',
            'year' => 2012,
            'actors' => [
                'Andrew Lincoln',
                'Sarah Wayne Callies',
                'Steven Yeun',
                'Laurie Holden',
                'David Morrissey',
                'Chandler Riggs',
                'Norman Reedus',
                'Danai Gurira',
                'Melissa McBride',
                'Scott Wilson',
                'Lauren Cohan',
                'Michael Rooker'
            ],
            'episodes' => [
                'episode 01' => [
                    'number' => 1,
                    'title' => 'Seed',
                    'poster' => '',
                    'description' => 'After months on the run, the group take refuge in a federal prison, while elsewhere, Andrea\'s health starts to deteriorate.'
                ],
                'episode 02' => [
                    'number' => 2,
                    'title' => 'Sick',
                    'poster' => '',
                    'description' => 'As Hershel\'s condition worsens, Rick, Daryl and T-Dog deal with a group of prisoners.'
                ],
                'episode 03' => [
                    'number' => 3,
                    'title' => 'Walk with Me',
                    'poster' => '',
                    'description' => 'Andrea and Michonne are brought to a walled community run by a man called The Governor.'
                ],
                'episode 04' => [
                    'number' => 4,
                    'title' => 'Killer Within',
                    'poster' => '',
                    'description' => 'Lori goes into labour when the prison comes under attack. Michonne tries to convince Andrea to leave Woodbury.'
                ],
                'episode 05' => [
                    'number' => 5,
                    'title' => 'Say the Word',
                    'poster' => '',
                    'description' => 'Rick struggles to cope. Andrea and Michonne part ways. Daryl and Maggie head out to find food and clothes for the baby.'
                ],
                'episode 06' => [
                    'number' => 6,
                    'title' => 'Hounded',
                    'poster' => '',
                    'description' => 'Rick receives a mysterious phone call. Andrea grows closer to The Governor. Merle tries to hunt down Michonne.'
                ],
                'episode 07' => [
                    'number' => 7,
                    'title' => 'When the Dead Come Knocking',
                    'poster' => '',
                    'description' => 'Michonne leads Rick, Daryl and Oscar to Woodbury to rescue Glenn and Maggie. Merle tries to force information out of Glenn.'
                ],
                'episode 08' => [
                    'number' => 8,
                    'title' => 'Made to Suffer',
                    'poster' => '',
                    'description' => 'Rick, Daryl, Michonne and Oscar enter Woodbury in search of Glenn and Maggie. Meanwhile, a new group of survivors encounter the prison.'
                ],
                'episode 09' => [
                    'number' => 9,
                    'title' => 'The Suicide King',
                    'poster' => '',
                    'description' => 'Woodbury is left in disarray following the attack by Rick\'s group. Merle\'s presence in the group causes conflict.'
                ],
                'episode 10' => [
                    'number' => 10,
                    'title' => 'Home',
                    'poster' => '',
                    'description' => 'Rick continues to see visions of Lori. The Governor plans an assault on the prison. Daryl and Merle fend for themselves out in the forest.'
                ],
                'episode 11' => [
                    'number' => 11,
                    'title' => 'I Ain\'t a Judas',
                    'poster' => '',
                    'description' => 'As Rick and the group debate their next course of action, Andrea tries to negotiate with them. Meanwhile, The Governor prepares Woodbury for battle.'
                ],
                'episode 12' => [
                    'number' => 12,
                    'title' => 'Clear',
                    'poster' => '',
                    'description' => 'Rick runs into a familiar face when he, Carl and Michonne head back to Rick\'s hometown for more guns to fortify themselves against The Governor.'
                ],
                'episode 13' => [
                    'number' => 13,
                    'title' => 'Arrow on the Doorpost',
                    'poster' => '',
                    'description' => 'Rick and The Governor meet face-to-face, ostensibly to make a peaceful resolution to prevent further bloodshed. Back at the prison, tensions arise between Merle and the rest of the group.'
                ],
                'episode 14' => [
                    'number' => 14,
                    'title' => 'Prey',
                    'poster' => '',
                    'description' => 'The Governor hunts down Andrea when she flees Woodbury. Meanwhile, tensions arise within Tyreese\'s group, and The Governor\'s plan for Rick\'s group is sabotaged.'
                ],
                'episode 15' => [
                    'number' => 15,
                    'title' => 'This Sorrowful Life',
                    'poster' => '',
                    'description' => 'While Rick decides the fate of Michonne, Merle takes matters into his own hand.'
                ],
                'episode 16' => [
                    'number' => 16,
                    'title' => 'Welcome to the Tombs',
                    'poster' => '',
                    'description' => 'As Rick and the group prepare for the Governor\'s impending attack, Andrea fights to escape captivity.'
                ]
            ]
        ],
        'Season 04' => [
            'number' => 4,
            'poster' => 'https://fr.web.img4.acsta.net/c_225_300/pictures/210/465/21046596_20131003210208077.jpg',
            'description' => 'Several months have passed since the attack on the Governor and life is gradually resuming its course in the prison. When a tragic event forces the survivors to separate and take different paths, survival becomes more perilous. Faced with new dangers and enemies, they will have to face difficult choices.',
            'year' => 2013,
            'actors' => [
                'Andrew Lincoln',
                'Steven Yeun',
                'Chandler Riggs',
                'Norman Reedus',
                'David Morrissey',
                'Danai Gurira',
                'Lauren Cohan',
                'Chad L. Coleman',
                'Sonequa Martin-Green',
                'Emily Kinney',
                'Lawrence Gilliard Jr.',
                'Melissa McBride',
                'Scott Wilson'
            ],
            'episodes' => [
                'episode 01' => [
                    'number' => 1,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 02' => [
                    'number' => 2,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 03' => [
                    'number' => 3,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 04' => [
                    'number' => 4,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 05' => [
                    'number' => 5,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 06' => [
                    'number' => 6,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ]
            ]
        ],
        'Season 05' => [
            'number' => 5,
            'poster' => 'https://fr.web.img3.acsta.net/c_225_300/pictures/14/04/02/08/18/090301.jpg',
            'description' => 'Captives of the Terminus community, Rick and his family manage to escape. After a long journey and many sacrifices, the group finds refuge in Alexandria, a small fortified town that has never faced the horrors of the world as it has become. But their arrival will not be seen with a very good eye, especially as Rick will try to take matters into his own hands.',
            'year' => 2014,
            'actors' => [
                'Andrew Lincoln',
                'Steven Yeun',
                'Chandler Riggs',
                'Norman Reedus',
                'Lauren Cohan',
                'Danai Gurira',
                'Chad L. Coleman',
                'Emily Kinney',
                'Melissa McBride',
                'Michael Cudlitz',
                'Sonequa Martin-Green',
                'Josh McDermitt',
                'Seth Gilliam',
                'Alanna Masterson',
                'Christian Serratos',
                'Lawrence Gilliard Jr.',
                'Andrew J. West'
            ],
            'episodes' => [
                'episode 01' => [
                    'number' => 1,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 02' => [
                    'number' => 2,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 03' => [
                    'number' => 3,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 04' => [
                    'number' => 4,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 05' => [
                    'number' => 5,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 06' => [
                    'number' => 6,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ]
            ]
        ],
        'Season 06' => [
            'number' => 6,
            'poster' => 'https://fr.web.img3.acsta.net/c_225_300/pictures/18/06/04/13/40/5516999.jpg',
            'description' => 'When new threats endanger the safety of Alexandria, the utopia ends, and the community will quickly realize that the world around them is much larger and more complex than it seems. After meeting a group whose help could prove invaluable, Rick and his people are confronted by the Saviors, a cruel and relentless armed band. To face this new adversary, they will have to be more formidable than ever.',
            'year' => 2015,
            'actors' => [
                'Andrew Lincoln',
                'Steven Yeun',
                'Chandler Riggs',
                'Norman Reedus',
                'Lauren Cohan',
                'Danai Gurira',
                'Melissa McBride',
                'Michael Cudlitz',
                'Sonequa Martin-Green',
                'Josh McDermitt',
                'Seth Gilliam',
                'Alanna Masterson',
                'Christian Serratos',
                'Lennie James',
                'Ross Marquand',
                'Tovah Feldshuh',
                'Austin Nichols'
            ],
            'episodes' => [
                'episode 01' => [
                    'number' => 1,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 02' => [
                    'number' => 2,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 03' => [
                    'number' => 3,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 04' => [
                    'number' => 4,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 05' => [
                    'number' => 5,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 06' => [
                    'number' => 6,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ]
            ]
        ],
        'Season 07' => [
            'number' => 7,
            'poster' => 'https://fr.web.img3.acsta.net/c_225_300/pictures/18/11/19/12/28/1918327.jpg',
            'description' => 'Shaken by the tragic events that transpired during his confrontation with Negan, Rick is forced to submit to the demands of the Saviors. With the community of Alexandria left with no choice but to work for them, Rick and his group seek allies to get rid of Negan.',
            'year' => 2016,
            'actors' => [
                'Andrew Lincoln',
                'Norman Reedus',
                'Jeffrey Dean Morgan',
                'Steven Yeun',
                'Chandler Riggs',
                'Lauren Cohan',
                'Danai Gurira',
                'Melissa McBride',
                'Seth Gilliam',
                'Alanna Masterson',
                'Christian Serratos',
                'Ross Marquand',
                'Tovah Feldshuh',
                'Austin Nichols',
                'Tom Payne (II)',
                'Austin Amelio',
                'Xander Berkeley',
                'Pollyanna McIntosh'
            ],
            'episodes' => [
                'episode 01' => [
                    'number' => 1,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 02' => [
                    'number' => 2,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 03' => [
                    'number' => 3,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 04' => [
                    'number' => 4,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 05' => [
                    'number' => 5,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 06' => [
                    'number' => 6,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ]
            ]
        ],
        'Season 08' => [
            'number' => 8,
            'poster' => 'https://fr.web.img4.acsta.net/c_225_300/pictures/18/06/04/13/40/5717001.jpg',
            'description' => 'After suffering Negan\'s violence, Rick and the people of Alexandria declare war on the Saviors. Now allied with the Hilltop and Kingdom communities, they will stop at nothing to prevail and regain their freedom. But the man at the bat also gathers his troops, and the battles to come announce heavy losses.',
            'year' => 2017,
            'actors' => [
                'Andrew Lincoln',
                'Norman Reedus',
                'Jeffrey Dean Morgan',
                'Chandler Riggs',
                'Lauren Cohan',
                'Danai Gurira',
                'Melissa McBride',
                'Lennie James',
                'Josh McDermitt',
                'Seth Gilliam',
                'Alanna Masterson',
                'Christian Serratos',
                'Ross Marquand',
                'Tovah Feldshuh',
                'Tom Payne (II)',
                'Austin Amelio',
                'Xander Berkeley',
                'Pollyanna McIntosh'
            ],
            'episodes' => [
                'episode 01' => [
                    'number' => 1,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 02' => [
                    'number' => 2,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 03' => [
                    'number' => 3,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 04' => [
                    'number' => 4,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 05' => [
                    'number' => 5,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 06' => [
                    'number' => 6,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ]
            ]
        ],
        'Season 09' => [
            'number' => 9,
            'poster' => 'https://fr.web.img2.acsta.net/c_225_300/pictures/18/12/20/10/28/5342562.jpg',
            'description' => 'A year and a half after Negan\'s defeat, the various communities of survivors have united and now live in harmony. But a mysterious group, known as the Whisperers, threatens the foundations of the civilization Rick seeks to build to secure a better future.',
            'year' => 2018,
            'actors' => [
                'Norman Reedus',
                'Jeffrey Dean Morgan',
                'Danai Gurira',
                'Melissa McBride',
                'Josh McDermitt',
                'Samantha Morton',
                'Seth Gilliam',
                'Alanna Masterson',
                'Katelyn Nacon',
                'Christian Serratos',
                'Khary Payton',
                'Ross Marquand',
                'Avi Nash',
                'Pollyanna McIntosh',
                'Callan McAuliffe',
                'Andrew Lincoln',
                'Lauren Cohan',
                'Tom Payne (II)',
                'Austin Amelio',
                'Xander Berkeley'
            ],
            'episodes' => [
                'episode 01' => [
                    'number' => 1,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 02' => [
                    'number' => 2,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 03' => [
                    'number' => 3,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 04' => [
                    'number' => 4,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 05' => [
                    'number' => 5,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 06' => [
                    'number' => 6,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ]
            ]
        ],
        'Season 10' => [
            'number' => 10,
            'poster' => 'https://fr.web.img4.acsta.net/c_225_300/pictures/21/02/02/10/13/1423956.jpg',
            'description' => 'After the Whisperer attack leaves several people dead, Michonne, Daryl and the other survivors are determined to get revenge. Can they count on Negan\'s help?',
            'year' => 2019,
            'actors' => [
                'Norman Reedus',
                'Melissa McBride',
                'Danai Gurira',
                'Lauren Cohan',
                'Josh McDermitt',
                'Christian Serratos',
                'Seth Gilliam',
                'Ross Marquand',
                'Khary Payton',
                'Ryan Hurst',
                'Samantha Morton',
                'Jeffrey Dean Morgan',
                'Callan McAuliffe',
                'Avi Nash',
                'Eleanor Matsuura',
                'Cooper Andrews',
                'Nadia Hilker',
                'Cailey Fleming',
                'Cassady McClincy',
                'Lauren Ridloff'
            ],
            'episodes' => [
                'episode 01' => [
                    'number' => 1,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 02' => [
                    'number' => 2,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 03' => [
                    'number' => 3,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 04' => [
                    'number' => 4,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 05' => [
                    'number' => 5,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 06' => [
                    'number' => 6,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ]
            ]
        ],
        'Season 11' => [
            'number' => 11,
            'poster' => 'https://fr.web.img6.acsta.net/c_225_300/pictures/22/01/28/15/06/5504384.jpg',
            'description' => 'Daryl and his friends had to go through a lot. And the latter are not yet at the end of their troubles. While as you might expect, the reunion between Maggie and Negan has been more than tense, a new threat is emerging. And this could well spell the end of the community of Alexandria, which has already struggled so much to recover from the Whisperers. The fight for their survival promises to be more intense than ever...',
            'year' => 2021,
            'actors' => [
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
            ],
            'episodes' => [
                'episode 01' => [
                    'number' => 1,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 02' => [
                    'number' => 2,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 03' => [
                    'number' => 3,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 04' => [
                    'number' => 4,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 05' => [
                    'number' => 5,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 06' => [
                    'number' => 6,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ]
            ]
        ]
    ];

    const GAME_OF_THRONES = [
        'Season 01' => [
            'number' => 1,
            'poster' => '',
            'description' => 'In Westeros, a chimerical continent, powerful families are fighting over the Iron Throne, symbol of absolute power over the kingdom of the Seven Kingdoms. Several years after the rebellion caused by the blind ambitions of Aerys II Targaryen, nicknamed the Mad King, Robert, of House Baratheon, sits on the coveted throne and reigns over the kingdom. When Jon Arryn, his first adviser and mentor, dies, Robert travels north to ask his childhood friend, Eddard Stark, Governor of the North and Lord of Winterfell, to become the new Hand of the King. For his part, Jon Snow, Eddard\'s bastard son, joins the Night\'s Watch, an old brotherhood whose mission is to defend the Wall, a huge ice fortress protecting the kingdom from mythical creatures. Meanwhile, on the continent of Essos, Viserys and Daenerys, the exiled children of the Targaryen family, plot to return to Westeros and reclaim the Iron Throne. Between plots, betrayals and power struggles, the Iron Throne will be the object of all desires.',
            'year' => 2011,
            'actors' => [
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
                'Jason Momoa'
            ],
            'episodes' => [
                'episode 01' => [
                    'number' => 1,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 02' => [
                    'number' => 2,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 03' => [
                    'number' => 3,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 04' => [
                    'number' => 4,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 05' => [
                    'number' => 5,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 06' => [
                    'number' => 6,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ]
            ]
        ],
        'Season 02' => [
            'number' => 2,
            'poster' => '',
            'description' => 'The Seven Kingdoms are at war, and each side seeks new alliances. Thanks to the support of the powerful House Lannister, Joffrey Baratheon, Robert\'s heir, now holds the Iron Throne. But the legitimacy of his rule is disputed as Stannis and Renly, the young king\'s uncles, also lay claim to the crown. For his part, Robb Stark continues his rebellion to avenge his father and free his sister Sensa held captive in Port-Réal. At the Wall, Commander Jeor Mormont, supported by Jon Snow, continues to lead the Night\'s Watch against the Wildlings. Meanwhile, Daenerys Targaryen arrives in the city of Qarth where she hopes to find new allies in order to reclaim the throne.',
            'year' => 2012,
            'actors' => [
                'Peter Dinklage',
                'Lena Headey',
                'Nikolaj Coster-Waldau',
                'Michelle Fairley',
                'Emilia Clarke',
                'Aidan Gillen',
                'Iain Glen',
                'Kit Harington',
                'Liam Cunningham',
                'Isaac Hempstead Wright',
                'Richard Madden',
                'Sophie Turner',
                'Maisie Williams',
                'Alfie Allen',
                'John Bradley (II)',
                'Charles Dance',
                'Jack Gleeson',
                'Rory McCann',
                'Stephen Dillane',
                'Carice van Houten',
                'James Cosmo',
                'Jerome Flynn',
                'Conleth Hill',
                'Sibel Kekilli',
                'Gordon Fulton'
            ],
            'episodes' => [
                'episode 01' => [
                    'number' => 1,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 02' => [
                    'number' => 2,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 03' => [
                    'number' => 3,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 04' => [
                    'number' => 4,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 05' => [
                    'number' => 5,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 06' => [
                    'number' => 6,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ]
            ]
        ],
        'Season 03' => [
            'number' => 3,
            'poster' => '',
            'description' => 'The fight for the Iron Throne continues. Joffrey Baratheon has won a precious victory and now finds himself at the head of the greatest army in the kingdom. On the island of Dragonstone, Melisandre proposes to Stannis Baratheon to use powerful magic to conquer the Iron Throne. At the same time, Robb Stark questions his strategy, and must decide on a course of action to achieve ultimate victory. As the Night\'s Watch faces the threat of the White Walkers, Jon Snow infiltrates the Wildlings to uncover Mance Rayder\'s plans. Daenerys, meanwhile, heads to the port city of Astapor to raise an army.',
            'year' => 2013,
            'actors' => [
                'Peter Dinklage',
                'Emilia Clarke',
                'Richard Madden',
                'Kit Harington',
                'Nikolaj Coster-Waldau',
                'Jack Gleeson',
                'Maisie Williams',
                'Lena Headey',
                'Iain Glen',
                'Alfie Allen',
                'Sophie Turner',
                'Isaac Hempstead Wright',
                'Rory McCann',
                'Michelle Fairley',
                'Aidan Gillen',
                'Natalie Dormer',
                'Stephen Dillane',
                'Carice van Houten',
                'Liam Cunningham',
                'Conleth Hill',
                'John Bradley (II)',
                'James Cosmo',
                'Jerome Flynn',
                'Charles Dance',
                'Rose Leslie',
                'Sibel Kekilli',
                'Oona Chaplin'
            ],
            'episodes' => [
                'episode 01' => [
                    'number' => 1,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 02' => [
                    'number' => 2,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 03' => [
                    'number' => 3,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 04' => [
                    'number' => 4,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 05' => [
                    'number' => 5,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 06' => [
                    'number' => 6,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ]
            ]
        ],
        'Season 04' => [
            'number' => 4,
            'poster' => '',
            'description' => 'After many victories, House Lannister is more powerful than ever and now holds absolute power over the Iron Throne. Prince Oberyn Martell arrives in Port-Réal to claim his place on the Restricted Council, and obtain justice for the assassination of his sister. As he continues to rebuild his army in Dragonstone, Stannis Baratheon comes to the aid of the Night\'s Watch to prevent the Wildlings from breaching the Wall. At the same time, Daenerys Targaryen and her army are heading towards the city of Meereen which could provide her with valuable assistance.',
            'year' => 2014,
            'actors' => [
                'Peter Dinklage',
                'Emilia Clarke',
                'Kit Harington',
                'Lena Headey',
                'Nikolaj Coster-Waldau',
                'Jack Gleeson',
                'Charles Dance',
                'Natalie Dormer',
                'Sophie Turner',
                'Maisie Williams',
                'John Bradley (II)',
                'Rose Leslie',
                'Kristofer Hivju',
                'Rory McCann',
                'Gwendoline Christie',
                'Jerome Flynn',
                'Sibel Kekilli',
                'Iain Glen',
                'Liam Cunningham',
                'Stephen Dillane',
                'Carice van Houten',
                'Alfie Allen',
                'Isaac Hempstead Wright',
                'Aidan Gillen',
                'Iwan Rheon',
                'Conleth Hill',
                'Hannah Murray'
            ],
            'episodes' => [
                'episode 01' => [
                    'number' => 1,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 02' => [
                    'number' => 2,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 03' => [
                    'number' => 3,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 04' => [
                    'number' => 4,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 05' => [
                    'number' => 5,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 06' => [
                    'number' => 6,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ]
            ]
        ],
        'Season 05' => [
            'number' => 5,
            'poster' => '',
            'description' => 'As war rages in Westeros, the Lannister family is weakened in King\'s Landing. Jealous of the growing influence of the Tyrell family, and in order to retain what power she has left, Cersei Lannister establishes the Faith Militant, a religious regime ruled by fanatics. At Châteaunoir, Jon Snow\'s decisions related to his new position within the Night\'s Watch could deeply divide the brotherhood. For his part, Stannis Baratheon sets out to conquer the north, while Tyrion, who fled Port-Réal, joins forces with another camp. Daenerys Targaryen must face multiple rebellion movements in Meereen.',
            'year' => 2015,
            'actors' => [
                'Peter Dinklage',
                'Nikolaj Coster-Waldau',
                'Lena Headey',
                'Emilia Clarke',
                'Kit Harington',
                'Aidan Gillen',
                'Natalie Dormer',
                'Stephen Dillane',
                'Liam Cunningham',
                'Carice van Houten',
                'John Bradley (II)',
                'Maisie Williams',
                'Sophie Turner',
                'Kristofer Hivju',
                'Hannah Murray',
                'Conleth Hill',
                'Gwendoline Christie',
                'Michiel Huisman',
                'Nathalie Emmanuel',
                'Dean-Charles Chapman',
                'Indira Varma',
                'Jerome Flynn',
                'Tom Wlaschiha',
                'Alfie Allen',
                'Michael McElhatton',
                'Iwan Rheon',
                'Iain Glen'
            ],
            'episodes' => [
                'episode 01' => [
                    'number' => 1,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 02' => [
                    'number' => 2,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 03' => [
                    'number' => 3,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 04' => [
                    'number' => 4,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 05' => [
                    'number' => 5,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 06' => [
                    'number' => 6,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ]
            ]
        ],
        'Season 06' => [
            'number' => 6,
            'poster' => '',
            'description' => 'After being publicly humiliated, Cersei Lannister seeks revenge on her enemies and regain power. While Sansa Stark and Theon Greyjoy are on the run, Arya Stark struggles to survive and continues her training to become a Faceless. In Meereen, Tyrion Lannister tries by all means to avoid a war in the absence of Daenerys. Meanwhile, in Castle Black, Alliser Thorne takes command of the Night\'s Watch, while Tormund works to free Jon Snow\'s remaining followers. For his part, Bran Stark continues to learn to master his powers with the Three-Eyed Crow, but his visions of the past could have serious consequences on both the present and the future.',
            'year' => 2016,
            'actors' => [
                'Emilia Clarke',
                'Peter Dinklage',
                'Nikolaj Coster-Waldau',
                'Lena Headey',
                'Kit Harington',
                'Aidan Gillen',
                'Liam Cunningham',
                'Carice van Houten',
                'Natalie Dormer',
                'Indira Varma',
                'Sophie Turner',
                'Nathalie Emmanuel',
                'Maisie Williams',
                'Conleth Hill',
                'Kristofer Hivju',
                'Isaac Hempstead Wright',
                'Gwendoline Christie',
                'Jonathan Pryce',
                'Alfie Allen',
                'Michiel Huisman',
                'Tom Wlaschiha',
                'Michael McElhatton',
                'Iwan Rheon',
                'Iain Glen',
                'Dean-Charles Chapman',
                'John Bradley (II)',
                'Hannah Murray',
                'Rory McCann',
                'Jerome Flynn'
            ],
            'episodes' => [
                'episode 01' => [
                    'number' => 1,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 02' => [
                    'number' => 2,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 03' => [
                    'number' => 3,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 04' => [
                    'number' => 4,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 05' => [
                    'number' => 5,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 06' => [
                    'number' => 6,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ]
            ]
        ],
        'Season 07' => [
            'number' => 7,
            'poster' => '',
            'description' => 'After a summer that lasted almost ten years, winter has arrived. Daenerys Targaryen, accompanied by her army and her dragons, heads to Westeros in search of new allies. For his part, Jon Snow seeks to unify the northern houses as well as the Wildlings to face the approaching army of White Walkers. In King\'s Landing, Cersei Lannister, more isolated than ever, has taken over the Iron Throne and strives to retain power. To oppose the threat of the army of the dead led by the Night King, unexpected alliances will be necessary.',
            'year' => 2017,
            'actors' => [
                'Emilia Clarke',
                'Kit Harington',
                'Lena Headey',
                'Nikolaj Coster-Waldau',
                'Peter Dinklage',
                'Sophie Turner',
                'Maisie Williams',
                'Aidan Gillen',
                'Liam Cunningham',
                'Carice van Houten',
                'Nathalie Emmanuel',
                'Conleth Hill',
                'Kristofer Hivju',
                'Isaac Hempstead Wright',
                'Gwendoline Christie',
                'Alfie Allen',
                'Indira Varma',
                'Iain Glen',
                'John Bradley (II)',
                'Rory McCann',
                'Jerome Flynn',
                'Joe Dempsie'
            ],
            'episodes' => [
                'episode 01' => [
                    'number' => 1,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 02' => [
                    'number' => 2,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 03' => [
                    'number' => 3,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 04' => [
                    'number' => 4,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 05' => [
                    'number' => 5,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 06' => [
                    'number' => 6,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ]
            ]
        ],
        'Season 08' => [
            'number' => 8,
            'poster' => '',
            'description' => 'The fight for the Iron Throne is coming to an end as the White Walkers have breached the wall and entered Westeros. Who will end up on the Iron Throne and rule the Kingdom of the Seven Kingdoms?',
            'year' => 2019,
            'actors' => [
                'Kit Harington',
                'Emilia Clarke',
                'Lena Headey',
                'Peter Dinklage',
                'Nikolaj Coster-Waldau',
                'Sophie Turner',
                'Maisie Williams',
                'Liam Cunningham',
                'Nathalie Emmanuel',
                'Conleth Hill',
                'Kristofer Hivju',
                'Isaac Hempstead Wright',
                'Gwendoline Christie',
                'Alfie Allen',
                'Iain Glen',
                'John Bradley (II)',
                'Rory McCann',
                'Jerome Flynn',
                'Joe Dempsie',
                'Jacob Anderson'
            ],
            'episodes' => [
                'episode 01' => [
                    'number' => 1,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 02' => [
                    'number' => 2,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 03' => [
                    'number' => 3,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 04' => [
                    'number' => 4,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 05' => [
                    'number' => 5,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 06' => [
                    'number' => 6,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ]
            ]
        ]
    ];

    const BREAKING_BAD = [
        'Season 01' => [
            'number' => 1,
            'poster' => '',
            'description' => 'Walter White, 50 years old, is a high school chemistry teacher in New Mexico. His daily life is turned upside down when he learns that he has incurable lung cancer. He has only one solution left to quickly protect his family from want: to manufacture and sell a synthetic drug. Then begins a long descent into hell.',
            'year' => 2008,
            'actors' => [
                'Bryan Cranston',
                'Anna Gunn',
                'Aaron Paul',
                'Dean Norris',
                'Betsy Brandt',
                'RJ Mitte'
            ]
        ],
        'Season 02' => [
            'number' => 2,
            'poster' => '',
            'description' => 'After the misadventures encountered with Krazy-8 and Tuco Salamanca, Walter and Jesse decide to set up their own business. But as Heisenberg\'s empire expands further and further, a deal goes awry and trouble begins. On the advice of Saul Goodman, his crooked lawyer, Walter contacts the owner of a restaurant chain who could help him sell off his drug stocks. Meanwhile, Skyler begins to have doubts about her husband as Jesse slowly descends into heroin.',
            'year' => 2009,
            'actors' => [
                'Bryan Cranston',
                'Anna Gunn',
                'Aaron Paul',
                'Dean Norris',
                'Betsy Brandt',
                'RJ Mitte'
            ],
            'episodes' => [
                'episode 01' => [
                    'number' => 1,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 02' => [
                    'number' => 2,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 03' => [
                    'number' => 3,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 04' => [
                    'number' => 4,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 05' => [
                    'number' => 5,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 06' => [
                    'number' => 6,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ]
            ]
        ],
        'Season 03' => [
            'number' => 3,
            'poster' => '',
            'description' => 'Two weeks after the two planes collided, the entire city of Albuquerque is in mourning. While his wife has filed for divorce, Walter refuses to continue working in crime. But, at the risk of provoking a war between the Mexican and American barons, Gus hatches a plan to get him back into drug production. For his part, Hank is looking for a way to put the traffickers in prison, and devotes himself entirely to the Heisenberg case, which he could solve by finding the trace of the motorhome. Meanwhile, two killers from the Juárez Cartel arrive in Albuquerque to avenge the death of their cousin Tuco Salamanca.',
            'year' => 2010,
            'actors' => [
                'Aaron Paul',
                'Anna Gunn',
                'Bryan Cranston',
                'Dean Norris',
                'Betsy Brandt',
                'RJ Mitte'
            ],
            'episodes' => [
                'episode 01' => [
                    'number' => 1,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 02' => [
                    'number' => 2,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 03' => [
                    'number' => 3,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 04' => [
                    'number' => 4,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 05' => [
                    'number' => 5,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 06' => [
                    'number' => 6,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ]
            ]
        ],
        'Season 04' => [
            'number' => 4,
            'poster' => '',
            'description' => 'As Walter regains some professional stability, Jesse distances himself and is manipulated by Gus. But the latter\'s pressures and low blows could well lead Jesse and Walter to team up to get rid of him. For his part, Hank is in great danger when he decides to investigate the restaurant : Los Pollos Harmanos.',
            'year' => 2011,
            'actors' => [
                'Bryan Cranston',
                'Anna Gunn',
                'Aaron Paul',
                'Dean Norris',
                'Betsy Brandt',
                'RJ Mitte',
                'Bob Odenkirk',
                'Giancarlo Esposito',
                'Jonathan Banks'
            ],
            'episodes' => [
                'episode 01' => [
                    'number' => 1,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 02' => [
                    'number' => 2,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 03' => [
                    'number' => 3,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 04' => [
                    'number' => 4,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 05' => [
                    'number' => 5,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 06' => [
                    'number' => 6,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ]
            ]
        ],
        'Season 05' => [
            'number' => 5,
            'poster' => '',
            'description' => 'Following the death of Gus Fring, Walter decides to create his own drug empire. In partnership with Jesse and Mike, the latter makes a fortune, but his plans are thwarted by his brother-in-law Hank, now head of the Albuquerque Narcotics, who is still obsessed with the mysterious Heisenberg.',
            'year' => 2012,
            'actors' => [
                'Bryan Cranston',
                'Aaron Paul',
                'Anna Gunn',
                'Dean Norris',
                'Betsy Brandt',
                'RJ Mitte',
                'Bob Odenkirk',
                'Jonathan Banks'
            ],
            'episodes' => [
                'episode 01' => [
                    'number' => 1,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 02' => [
                    'number' => 2,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 03' => [
                    'number' => 3,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 04' => [
                    'number' => 4,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 05' => [
                    'number' => 5,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 06' => [
                    'number' => 6,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ]
            ]
        ]
    ];

    const ATTACK_ON_TITAN = [
        'Season 01' => [
            'number' => 1,
            'poster' => '',
            'description' => 'In a world ravaged for more than a century by man-eating titans, the few survivors of humanity have no choice but to barricade themselves in a fortress city. Young Eren, witness of the death of his mother devoured by a titan, has only one dream: to join the elite corps responsible for discovering the origin of the titans and annihilating them to the last.',
            'year' => 2013,
            'actors' => [
                'Romi Pak',
                'Yui Ishikawa',
                'Yûki Kaji',
                'Marina Inoue',
                'Hiroshi Kamiya',
                'Yû Kobayashi',
                'Daisuke Ono'
            ],
            'episodes' => [
                'episode 01' => [
                    'number' => 1,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 02' => [
                    'number' => 2,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 03' => [
                    'number' => 3,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 04' => [
                    'number' => 4,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 05' => [
                    'number' => 5,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 06' => [
                    'number' => 6,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ]
            ]
        ],
        'Season 02' => [
            'number' => 2,
            'poster' => '',
            'description' => 'The arrival of the Colossal Titan completely changed Eren Jäger\'s life. After enlisting in the army to fight him and his congeners, Eren discovers that he can transform himself into what he hates the most. But he quickly understands that his new powers can be used to repel his attackers. While granted a little respite after his narrow victory against the Female Titan, he must now face a horde of titans dangerously approaching Wall Rose. New mysteries are coming to light, and a talking titan seems to be pulling the strings for this new wave of hungry, oversized attackers. For their part, the members of the cult of the wall seem to be hiding vital information for the survival of humanity. The pressure on Eren and the Survey Corps is greater than ever.',
            'year' => 2017,
            'actors' => [
                'Yui Ishikawa',
                'Marina Inoue',
                'Daisuke Ono',
                'Hiroshi Kamiya',
                'Yûki Kaji',
                'Yû Kobayashi',
                'Yoshimasa Hosoya',
                'Kenjiro Tsuda'
            ],
            'episodes' => [
                'episode 01' => [
                    'number' => 1,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 02' => [
                    'number' => 2,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 03' => [
                    'number' => 3,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 04' => [
                    'number' => 4,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 05' => [
                    'number' => 5,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 06' => [
                    'number' => 6,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ]
            ]
        ],
        'Season 03' => [
            'number' => 3,
            'poster' => '',
            'description' => 'Kidnapped by Bertholdt and Reiner, Eren was able to escape with the help of the Survey Corps. But the losses are heavy, especially since Ymir has decided to join the enemy. As the king gives the order to capture Christa and Eren, a spirit of rebellion gradually creeps into the ranks of the battalion.',
            'year' => 2018,
            'actors' => [
                'Yui Ishikawa',
                'Yûki Kaji',
                'Marina Inoue',
                'Hiroshi Kamiya',
                'Kazuhiro Yamaji',
                'Ayane Sakura',
                'Hiroshi Tsuchida'
            ],
            'episodes' => [
                'episode 01' => [
                    'number' => 1,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 02' => [
                    'number' => 2,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 03' => [
                    'number' => 3,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 04' => [
                    'number' => 4,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 05' => [
                    'number' => 5,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 06' => [
                    'number' => 6,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ]
            ]
        ],
        'Season 04' => [
            'number' => 4,
            'poster' => '',
            'description' => 'Four years after his departure from Paradis, Reiner imposes himself as an elite soldier alongside the future receptacles of the promordial titans. But his past still haunts him and the threat of revenge from Eren and his comrades looms.',
            'year' => 2020,
            'actors' => [
                'Yûki Kaji',
                'Yui Ishikawa',
                'Marina Inoue',
                'Hiroshi Kamiya'
            ],
            'episodes' => [
                'episode 01' => [
                    'number' => 1,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 02' => [
                    'number' => 2,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 03' => [
                    'number' => 3,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 04' => [
                    'number' => 4,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 05' => [
                    'number' => 5,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 06' => [
                    'number' => 6,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ]
            ]
        ]
    ];

    const THE_MANDALORIAN = [
        'Season 01' => [
            'number' => 1,
            'poster' => '',
            'description' => 'After the adventures of Jango and Boba Fett, a new hero emerges in the Star Wars universe. The plot, set between the fall of the Empire and the rise of the First Order, follows the travels of a lone bounty hunter to the furthest reaches of the Galaxy, far from the authority of the New Republic.',
            'year' => 2019,
            'actors' => [
                'Pedro Pascal',
                'Troy Kotsur'
            ],
            'episodes' => [
                'episode 01' => [
                    'number' => 1,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 02' => [
                    'number' => 2,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 03' => [
                    'number' => 3,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 04' => [
                    'number' => 4,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 05' => [
                    'number' => 5,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 06' => [
                    'number' => 6,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ]
            ]
        ],
        'Season 02' => [
            'number' => 2,
            'poster' => '',
            'description' => 'The Mandalorian and the Child continue their journey, facing many enemies and rejoining their allies. They fight their way through a dangerous galaxy, in the tumultuous period that followed the fall of the Empire.',
            'year' => 2020,
            'actors' => [
                'Pedro Pascal'
            ],
            'episodes' => [
                'episode 01' => [
                    'number' => 1,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 02' => [
                    'number' => 2,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 03' => [
                    'number' => 3,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 04' => [
                    'number' => 4,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 05' => [
                    'number' => 5,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 06' => [
                    'number' => 6,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ]
            ]
        ],
        'Season 03' => [
            'number' => 3,
            'poster' => '',
            'description' => 'À VENIR',
            'year' => 2022,
            'actors' => [
                'Pedro Pascal',
                'Katee Sackhoff',
                'Christopher Lloyd',
                'Giancarlo Esposito',
                'Carl Weathers'
            ],
            'episodes' => [
                'episode 01' => [
                    'number' => 1,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 02' => [
                    'number' => 2,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 03' => [
                    'number' => 3,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 04' => [
                    'number' => 4,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 05' => [
                    'number' => 5,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 06' => [
                    'number' => 6,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ]
            ]
        ]
    ];
}
