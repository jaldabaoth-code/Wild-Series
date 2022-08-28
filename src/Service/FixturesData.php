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
                    'poster' => 'https://fr.web.img5.acsta.net/c_400_200/medias/nmedia/18/78/35/82/20303913.jpg',
                    'description' => 'After months on the run, the group take refuge in a federal prison, while elsewhere, Andrea\'s health starts to deteriorate.'
                ],
                'episode 02' => [
                    'number' => 2,
                    'title' => 'Sick',
                    'poster' => 'https://fr.web.img6.acsta.net/c_400_200/medias/nmedia/18/78/35/82/20311957.jpg',
                    'description' => 'As Hershel\'s condition worsens, Rick, Daryl and T-Dog deal with a group of prisoners.'
                ],
                'episode 03' => [
                    'number' => 3,
                    'title' => 'Walk with Me',
                    'poster' => 'https://fr.web.img3.acsta.net/c_400_200/medias/nmedia/18/78/35/82/20303926.jpg',
                    'description' => 'Andrea and Michonne are brought to a walled community run by a man called The Governor.'
                ],
                'episode 04' => [
                    'number' => 4,
                    'title' => 'Killer Within',
                    'poster' => 'https://fr.web.img6.acsta.net/c_400_200/medias/nmedia/18/78/35/82/20330780.jpg',
                    'description' => 'Lori goes into labour when the prison comes under attack. Michonne tries to convince Andrea to leave Woodbury.'
                ],
                'episode 05' => [
                    'number' => 5,
                    'title' => 'Say the Word',
                    'poster' => 'https://fr.web.img3.acsta.net/c_400_200/medias/nmedia/18/78/35/82/20343157.jpg',
                    'description' => 'Rick struggles to cope. Andrea and Michonne part ways. Daryl and Maggie head out to find food and clothes for the baby.'
                ],
                'episode 06' => [
                    'number' => 6,
                    'title' => 'Hounded',
                    'poster' => 'https://fr.web.img2.acsta.net/c_400_200/pictures/18/10/29/20/00/3976031.jpg',
                    'description' => 'Rick receives a mysterious phone call. Andrea grows closer to The Governor. Merle tries to hunt down Michonne.'
                ],
                'episode 07' => [
                    'number' => 7,
                    'title' => 'When the Dead Come Knocking',
                    'poster' => 'https://fr.web.img3.acsta.net/c_400_200/medias/nmedia/18/78/35/82/20364004.jpg',
                    'description' => 'Michonne leads Rick, Daryl and Oscar to Woodbury to rescue Glenn and Maggie. Merle tries to force information out of Glenn.'
                ],
                'episode 08' => [
                    'number' => 8,
                    'title' => 'Made to Suffer',
                    'poster' => 'https://fr.web.img5.acsta.net/c_400_200/medias/nmedia/18/78/35/82/20373516.jpg',
                    'description' => 'Rick, Daryl, Michonne and Oscar enter Woodbury in search of Glenn and Maggie. Meanwhile, a new group of survivors encounter the prison.'
                ],
                'episode 09' => [
                    'number' => 9,
                    'title' => 'The Suicide King',
                    'poster' => 'https://fr.web.img4.acsta.net/c_400_200/medias/nmedia/18/78/35/82/20467694.jpg',
                    'description' => 'Woodbury is left in disarray following the attack by Rick\'s group. Merle\'s presence in the group causes conflict.'
                ],
                'episode 10' => [
                    'number' => 10,
                    'title' => 'Home',
                    'poster' => 'https://fr.web.img6.acsta.net/c_400_200/medias/nmedia/18/78/35/82/20472527.jpg',
                    'description' => 'Rick continues to see visions of Lori. The Governor plans an assault on the prison. Daryl and Merle fend for themselves out in the forest.'
                ],
                'episode 11' => [
                    'number' => 11,
                    'title' => 'I Ain\'t a Judas',
                    'poster' => 'https://fr.web.img2.acsta.net/c_400_200/medias/nmedia/18/78/35/82/20481579.jpg',
                    'description' => 'As Rick and the group debate their next course of action, Andrea tries to negotiate with them. Meanwhile, The Governor prepares Woodbury for battle.'
                ],
                'episode 12' => [
                    'number' => 12,
                    'title' => 'Clear',
                    'poster' => 'https://fr.web.img5.acsta.net/c_400_200/medias/nmedia/18/78/35/82/20488209.jpg',
                    'description' => 'Rick runs into a familiar face when he, Carl and Michonne head back to Rick\'s hometown for more guns to fortify themselves against The Governor.'
                ],
                'episode 13' => [
                    'number' => 13,
                    'title' => 'Arrow on the Doorpost',
                    'poster' => 'https://fr.web.img6.acsta.net/c_400_200/medias/nmedia/18/78/35/82/20491133.jpg',
                    'description' => 'Rick and The Governor meet face-to-face, ostensibly to make a peaceful resolution to prevent further bloodshed. Back at the prison, tensions arise between Merle and the rest of the group.'
                ],
                'episode 14' => [
                    'number' => 14,
                    'title' => 'Prey',
                    'poster' => 'https://fr.web.img5.acsta.net/c_400_200/medias/nmedia/18/78/35/82/20500284.jpg',
                    'description' => 'The Governor hunts down Andrea when she flees Woodbury. Meanwhile, tensions arise within Tyreese\'s group, and The Governor\'s plan for Rick\'s group is sabotaged.'
                ],
                'episode 15' => [
                    'number' => 15,
                    'title' => 'This Sorrowful Life',
                    'poster' => 'https://fr.web.img2.acsta.net/c_400_200/medias/nmedia/18/78/35/82/20515821.jpg',
                    'description' => 'While Rick decides the fate of Michonne, Merle takes matters into his own hand.'
                ],
                'episode 16' => [
                    'number' => 16,
                    'title' => 'Welcome to the Tombs',
                    'poster' => 'https://fr.web.img6.acsta.net/c_400_200/medias/nmedia/18/78/35/82/20515859.jpg',
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
                    'title' => '30 Days Without an Accident',
                    'poster' => '',
                    'description' => 'Several months have passed and Rick and the expanded group are living a more peaceful life at the prison. Problems surface when Rick encounters a new survivor, and a supply run ends in disaster.'
                ],
                'episode 02' => [
                    'number' => 2,
                    'title' => 'Infected',
                    'poster' => '',
                    'description' => 'Rick is forced to abandon his quiet lifestyle when a mysterious virus puts the lives of everyone at the prison at risk.'
                ],
                'episode 03' => [
                    'number' => 3,
                    'title' => 'Isolation',
                    'poster' => '',
                    'description' => 'As the sick are quarantined, Daryl, Tyreese, Michonne and Bob leave the prison in search of medical supplies. Rick makes a shocking discovery.'
                ],
                'episode 04' => [
                    'number' => 4,
                    'title' => 'Indifference',
                    'poster' => '',
                    'description' => 'Daryl, Tyreese, Michonne and Bob continue to the veterinary college on foot in search of medicine. Rick and Carol go on a run to a nearby town where they find two uninfected stragglers.'
                ],
                'episode 05' => [
                    'number' => 5,
                    'title' => 'Internment',
                    'poster' => '',
                    'description' => 'Hershel struggles to care for the sick as the situation in the cell block escalates. Meanwhile, Rick and Carl defend the prison as the fences give way.'
                ],
                'episode 06' => [
                    'number' => 6,
                    'title' => 'Live Bait',
                    'poster' => '',
                    'description' => 'The Governor bonds with a small family following the downfall of Woodbury.'
                ],
                'episode 07' => [
                    'number' => 7,
                    'title' => 'Dead Weight',
                    'poster' => '',
                    'description' => 'The Governor plans his next move as he, Lilly, Tara and Meghan adjust to new surroundings.'
                ],
                'episode 08' => [
                    'number' => 8,
                    'title' => 'Too Far Gone',
                    'poster' => '',
                    'description' => 'Rick and the group face imminent danger as The Governor tries to take the prison.'
                ],
                'episode 09' => [
                    'number' => 9,
                    'title' => 'After',
                    'poster' => '',
                    'description' => 'With the prison overrun, Rick and Carl find themselves on the road looking for shelter. Meanwhile, Michonne is haunted by memories of the past.'
                ],
                'episode 10' => [
                    'number' => 10,
                    'title' => 'Inmates',
                    'poster' => '',
                    'description' => 'Beth tries to remain hopeful. Tyreese, Lizzie and Mika run into a familiar face. Glenn and Maggie struggle to cope without each other.'
                ],
                'episode 11' => [
                    'number' => 11,
                    'title' => 'Claimed',
                    'poster' => '',
                    'description' => 'While Carl and Michonne look for supplies, Rick is faced against a gang of marauders. Meanwhile, Glenn and Tara are brought together with three strangers on an important mission.'
                ],
                'episode 12' => [
                    'number' => 12,
                    'title' => 'Still',
                    'poster' => '',
                    'description' => 'Daryl and Beth seek refuge in the woods, where conflict emerges between the pair.'
                ],
                'episode 13' => [
                    'number' => 13,
                    'title' => 'Alone',
                    'poster' => '',
                    'description' => 'Maggie, Sasha and Bob clash over whether they should head to Terminus. Daryl and Beth take shelter in a seemingly abandoned funeral home.'
                ],
                'episode 14' => [
                    'number' => 14,
                    'title' => 'The Grove',
                    'poster' => '',
                    'description' => 'Carol has to cope with old secrets and Lizzie\'s psychotic behavior when she, Tyreese and the girls take refuge in a vacant house on the way to Terminus.'
                ],
                'episode 15' => [
                    'number' => 15,
                    'title' => 'Us',
                    'poster' => '',
                    'description' => 'Glenn and Tara are set on the way to Terminus, but Abraham is reluctant. Daryl struggles to adjust to the Claimers\' rules.'
                ],
                'episode 16' => [
                    'number' => 16,
                    'title' => 'A',
                    'poster' => '',
                    'description' => 'Rick, Carl and Michonne cross paths with the Claimers once again on the way to Terminus, as the so-called sanctuary begins to reveal its true face'
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
                    'title' => 'No Sanctuary',
                    'poster' => '',
                    'description' => 'Carol takes drastic action to rescue Rick and the group from the cannibals of Terminus as she and Tyreese reach the compound. A familiar face makes a return.'
                ],
                'episode 02' => [
                    'number' => 2,
                    'title' => 'Strangers',
                    'poster' => '',
                    'description' => 'Rick and the group cross paths with a mysterious priest and take shelter in his church, soon realizing that they\'re being hunted. Meanwhile, Daryl and Carol follow a lead to the whereabouts of Beth.'
                ],
                'episode 03' => [
                    'number' => 3,
                    'title' => 'Four Walls and a Roof',
                    'poster' => '',
                    'description' => 'With Bob\'s life hanging in the balance, the group prepares to fight back against Gareth and his group of cannibals.'
                ],
                'episode 04' => [
                    'number' => 4,
                    'title' => 'Slabtown',
                    'poster' => '',
                    'description' => 'After being separated from Daryl, Beth finds herself in Grady Memorial Hospital in Atlanta, now controlled by what\'s left of the police force.'
                ],
                'episode 05' => [
                    'number' => 5,
                    'title' => 'Self Help',
                    'poster' => '',
                    'description' => 'As Glenn, Maggie, Abraham and co. head to D.C., a new revelation threatens to bring the whole journey to a halt.'
                ],
                'episode 06' => [
                    'number' => 6,
                    'title' => 'Consumed',
                    'poster' => '',
                    'description' => 'Daryl and Carol chase the white-crossed car to a desolated Atlanta with hopes of finding Beth and her kidnappers.'
                ],
                'episode 07' => [
                    'number' => 7,
                    'title' => 'Crossed',
                    'poster' => '',
                    'description' => 'While Carl, Michonne and Gabriel hold the church, Rick takes a rescue mission to Atlanta, as Abraham\'s group deal with the fallout from Eugene\'s revelation.'
                ],
                'episode 08' => [
                    'number' => 8,
                    'title' => 'Coda',
                    'poster' => '',
                    'description' => 'Rick and the group go face-to-face against Dawn and her officers in an attempt to save both Beth and Carol without any more bloodshed.'
                ],
                'episode 09' => [
                    'number' => 9,
                    'title' => 'What Happened and What\'s Going On',
                    'poster' => '',
                    'description' => 'Rick, Glenn, Michonne and Tyreese take Noah to his home in Shirewilt Estates with hopes of finding sanctuary, but what they encounter is something else entirely.'
                ],
                'episode 10' => [
                    'number' => 10,
                    'title' => 'Them',
                    'poster' => '',
                    'description' => 'Grieving from the deaths of Beth and Tyreese in different ways and with dwindling supplies, the group face the harsh road to Washington D.C.'
                ],
                'episode 11' => [
                    'number' => 11,
                    'title' => 'The Distance',
                    'poster' => '',
                    'description' => 'Recovering from a devastating storm, Rick and the group find themselves mistrustful of a new survivor who promises them safety in a walled-off community.'
                ],
                'episode 12' => [
                    'number' => 12,
                    'title' => 'Remember',
                    'poster' => '',
                    'description' => 'Scarred from their experiences in the outside world, the group struggles to adapt to the normality of the Alexandria Safe-Zone.'
                ],
                'episode 13' => [
                    'number' => 13,
                    'title' => 'Forget',
                    'poster' => '',
                    'description' => 'As Deanna throws a party for the new arrivals, Carol comes up with a plan to get the group\'s weapons back. Meanwhile, Daryl bonds with Aaron, and Sasha struggles to cope.'
                ],
                'episode 14' => [
                    'number' => 14,
                    'title' => 'Spend',
                    'poster' => '',
                    'description' => 'Eugene is forced to step up when a run led by Glenn goes awry. Back at Alexandria, Carol uncovers a secret.'
                ],
                'episode 15' => [
                    'number' => 15,
                    'title' => 'Try',
                    'poster' => '',
                    'description' => 'While out recruiting, Daryl and Aaron find troubling signs of human activity. Back at Alexandria, Carl bonds with Enid, and the tension between Rick and Pete comes to a head.'
                ],
                'episode 16' => [
                    'number' => 16,
                    'title' => 'Conquer',
                    'poster' => '',
                    'description' => 'Daryl and Aaron cross paths with Morgan. Back at the safe-zone, the people of Alexandria decide what to do with Rick, as a new danger emerges.'
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
                    'title' => 'First Time Again',
                    'poster' => '',
                    'description' => 'Rick and the group come up with a plan to lure a massive herd of walkers away from Alexandria, while flashbacks show the events following Pete\'s death, including Rick\'s reunion with Morgan.'
                ],
                'episode 02' => [
                    'number' => 2,
                    'title' => 'JSS',
                    'poster' => '',
                    'description' => 'While Rick and his group lure the herd away, Carol and Morgan lead a line of defense against the Wolves when Alexandria comes under attack.'
                ],
                'episode 03' => [
                    'number' => 3,
                    'title' => 'Thank You',
                    'poster' => '',
                    'description' => 'With half of the herd out of control, Glenn and Michonne lead Nicholas and their group back to Alexandria, as Rick crosses paths with the surviving members of the Wolves.'
                ],
                'episode 04' => [
                    'number' => 4,
                    'title' => 'Here\'s Not Here',
                    'poster' => '',
                    'description' => 'Morgan tells the captured wolf about his journey from King County to Alexandria, where he met a lone survivor with a code.'
                ],
                'episode 05' => [
                    'number' => 5,
                    'title' => 'Now',
                    'poster' => '',
                    'description' => 'Deanna begins to question her leadership. Meanwhile, Maggie shares a secret with Aaron while searching for Glenn, as the herd approaches the safe-zone.'
                ],
                'episode 06' => [
                    'number' => 6,
                    'title' => 'Always Accountable',
                    'poster' => '',
                    'description' => 'Wounded after being separated from Abraham and Sasha, Daryl finds himself captive of three survivors on the run.'
                ],
                'episode 07' => [
                    'number' => 7,
                    'title' => 'Heads Up',
                    'poster' => '',
                    'description' => 'Glenn and Enid make their way back to Alexandria. Meanwhile, Spencer puts his life at risk, as the herd finds its way inside the safe-zone.'
                ],
                'episode 08' => [
                    'number' => 8,
                    'title' => 'Start to Finish',
                    'poster' => '',
                    'description' => 'With the walls down, Alexandria finds itself swarmed by walkers. Meanwhile, Daryl, Abraham and Sasha come face-to-face with a new danger.'
                ],
                'episode 09' => [
                    'number' => 9,
                    'title' => 'No Way Out',
                    'poster' => '',
                    'description' => 'Daryl, Abraham and Sasha face-off against the Saviors. Back at Alexandria, Rick and his group make their way through the herd.'
                ],
                'episode 10' => [
                    'number' => 10,
                    'title' => 'The Next World',
                    'poster' => '',
                    'description' => 'Weeks after the walker invasion, Rick and Daryl cross paths with Jesus, a mysterious man with many secrets. Meanwhile, Michonne helps Spencer find closure, as Carl recovers from his injury.'
                ],
                'episode 11' => [
                    'number' => 11,
                    'title' => 'Knots Untie',
                    'poster' => '',
                    'description' => 'Jesus takes Rick and the group to the Hilltop Colony, a peaceful community overshadowed by the power of the Saviors.'
                ],
                'episode 12' => [
                    'number' => 12,
                    'title' => 'Not Tomorrow Yet',
                    'poster' => '',
                    'description' => 'Rick leads a surprise attack against the Saviors with the joint forces of Alexandria and the Hilltop. As two group members end up captured, Tara and Heath leave on a two-week supply run.'
                ],
                'episode 13' => [
                    'number' => 13,
                    'title' => 'The Same Boat',
                    'poster' => '',
                    'description' => 'Carol and Maggie must fight for their lives after being taken by a group of Saviors.'
                ],
                'episode 14' => [
                    'number' => 14,
                    'title' => 'Twice as Far',
                    'poster' => '',
                    'description' => 'With medicine running low, Denise goes on a supply with Daryl and Rosita. Meanwhile, Eugene tries to prove himself to Abraham.'
                ],
                'episode 15' => [
                    'number' => 15,
                    'title' => 'East',
                    'poster' => '',
                    'description' => 'Rick and Morgan set out in the search for Carol. Meanwhile, Daryl and Rosita track down Dwight, as Glenn and Michonne fall into a trap.'
                ],
                'episode 16' => [
                    'number' => 16,
                    'title' => 'Last Day on Earth',
                    'poster' => '',
                    'description' => 'Morgan continues his search for Carol. Meanwhile, Rick and the group travel to the Hilltop with an ailing Maggie, leading to a daunting and life-changing confrontation.'
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
                    'title' => 'The Day Will Come When You Won\'t Be',
                    'poster' => '',
                    'description' => 'Having been brutally overpowered by Negan and his Saviors, Rick and the group kneel helplessly as they suffer heavy losses that will haunt them forever.'
                ],
                'episode 02' => [
                    'number' => 2,
                    'title' => 'The Well',
                    'poster' => '',
                    'description' => 'Carol and Morgan are brought to a community called the Kingdom, led by the eccentric King Ezekiel.'
                ],
                'episode 03' => [
                    'number' => 3,
                    'title' => 'The Cell',
                    'poster' => '',
                    'description' => 'Daryl is taken by Negan to the Sanctuary, home of the Saviors. Meanwhile, Dwight is sent on a mission to bring back a runaway member of his group.'
                ],
                'episode 04' => [
                    'number' => 4,
                    'title' => 'Service',
                    'poster' => '',
                    'description' => 'Still mourning from the recent tragic losses, Rick and the people of Alexandria receive a sobering visit from Negan and his Saviors.'
                ],
                'episode 05' => [
                    'number' => 5,
                    'title' => 'Go Getters',
                    'poster' => '',
                    'description' => 'Maggie and Sasha recover from their grief at the Hilltop. Meanwhile, Carl and Enid journey to the community, as the Saviors arrive to get their tribute.'
                ],
                'episode 06' => [
                    'number' => 6,
                    'title' => 'Swear',
                    'poster' => '',
                    'description' => 'Tara encounters a group of female survivors living near the coast after being separated from Heath during their two-week supply run.'
                ],
                'episode 07' => [
                    'number' => 7,
                    'title' => 'Sing Me a Song',
                    'poster' => '',
                    'description' => 'As Eugene and Rosita head to the bullet factory, Rick and Aaron search for supplies for Negan. Meanwhile, Carl and Jesus find themselves on their way to the Sanctuary.'
                ],
                'episode 08' => [
                    'number' => 8,
                    'title' => 'Hearts Still Beating',
                    'poster' => '',
                    'description' => 'Negan\'s unwelcome visit to Alexandria continues as other members scavenge for supplies, things quickly spin out of control.'
                ],
                'episode 09' => [
                    'number' => 9,
                    'title' => 'Rock in the Road',
                    'poster' => '',
                    'description' => 'Jesus leads Rick and the group to the Kingdom, to convince King Ezekiel in joining Alexandria and the Hilltop in the incoming fight against Negan.'
                ],
                'episode 10' => [
                    'number' => 10,
                    'title' => 'New Best Friends',
                    'poster' => '',
                    'description' => 'While searching for Father Gabriel, the group comes across a mysterious new collective of survivors. Back at the Kingdom, Carol and Daryl have an emotional reunion.'
                ],
                'episode 11' => [
                    'number' => 11,
                    'title' => 'Hostiles and Calamities',
                    'poster' => '',
                    'description' => 'Eugene unwillingly begins to work for Negan and the Saviors at the Sanctuary. Meanwhile, Dwight pays a visit to a place from his past.'
                ],
                'episode 12' => [
                    'number' => 12,
                    'title' => 'Say Yes',
                    'poster' => '',
                    'description' => 'The group scavenge for supplies. Back in Alexandria, Tara must make a morally challenging decision.'
                ],
                'episode 13' => [
                    'number' => 13,
                    'title' => 'Bury Me Here',
                    'poster' => '',
                    'description' => 'Things don\'t go as planned, when a group of Kingdommers delivers goods to the Saviors during a routine supply drop-off.'
                ],
                'episode 14' => [
                    'number' => 14,
                    'title' => 'The Other Side',
                    'poster' => '',
                    'description' => 'The Saviors visit the Hilltop unexpectedly, surprising everyone, with plans of taking more than supplies.'
                ],
                'episode 15' => [
                    'number' => 15,
                    'title' => 'Something They Need',
                    'poster' => '',
                    'description' => 'A group of Alexandrians embark on a journey; One member of the group must make a heartbreaking decision.'
                ],
                'episode 16' => [
                    'number' => 16,
                    'title' => 'The First Day of the Rest of Your Life',
                    'poster' => '',
                    'description' => 'The stakes continue to grow higher as paths cross; The group enacts an intricate plan as the saviors arrive in Alexandria.'
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
                    'title' => 'Mercy',
                    'poster' => '',
                    'description' => 'Rick and his group, along with the Kingdom and Hilltop, band together to bring the fight to Negan and the Saviors.'
                ],
                'episode 02' => [
                    'number' => 2,
                    'title' => 'The Damned',
                    'poster' => '',
                    'description' => 'The plan involving Alexandrians, Kingdommers and Hilltoppers unfolds; As Rick continues to fight, he encounters a familiar face.'
                ],
                'episode 03' => [
                    'number' => 3,
                    'title' => 'Monsters',
                    'poster' => '',
                    'description' => 'Conflict with the Saviors leads to unintended consequences for the Hilltop, the Kingdom, and Alexandria.'
                ],
                'episode 04' => [
                    'number' => 4,
                    'title' => 'Some Guy',
                    'poster' => '',
                    'description' => 'A new weapon in the Savior arsenal proves to be a giant hurdle as fighting continues between Rick\'s forces and those of the Saviors.'
                ],
                'episode 05' => [
                    'number' => 5,
                    'title' => 'The Big Scary U',
                    'poster' => '',
                    'description' => 'A close look at Negan and the lives of the Saviors during the conflict through a familiar set of eyes.'
                ],
                'episode 06' => [
                    'number' => 6,
                    'title' => 'The King, the Widow and Rick',
                    'poster' => '',
                    'description' => 'With things looking up for Rick and the group, an argument breaks out at the Hilltop, where the consequences of the decision are life versus death.'
                ],
                'episode 07' => [
                    'number' => 7,
                    'title' => 'Time for After',
                    'poster' => '',
                    'description' => 'Negan has to enlist the help of his lieutenants in solving a huge issue facing The Sanctuary; Rick and the group continue to enact the plan.'
                ],
                'episode 08' => [
                    'number' => 8,
                    'title' => 'How It\'s Gotta Be',
                    'poster' => '',
                    'description' => 'Every story and battle comes crashing together as everything Rick and his group have done will be put to the test.'
                ],
                'episode 09' => [
                    'number' => 9,
                    'title' => 'Honor',
                    'poster' => '',
                    'description' => 'Rick faces new difficulties after a battle. Meanwhile, the fight continues in other communities as core members face hard decisions.'
                ],
                'episode 10' => [
                    'number' => 10,
                    'title' => 'The Lost and the Plunderers',
                    'poster' => '',
                    'description' => 'Groups unite their forces and converge on the Hilltop; Aaron and Enid search for allies; Simon takes matters into his own hands.'
                ],
                'episode 11' => [
                    'number' => 11,
                    'title' => 'Dead or Alive Or',
                    'poster' => '',
                    'description' => 'Daryl finds himself in bad company as his group heads to the Hilltop; Gabriel\'s faith gets tested.'
                ],
                'episode 12' => [
                    'number' => 12,
                    'title' => 'The Key',
                    'poster' => '',
                    'description' => 'Hilltop\'s leadership faces a difficult dilemma after the arrival of unexpected visitors; Rick comes face to face with an adversary.'
                ],
                'episode 13' => [
                    'number' => 13,
                    'title' => 'Do Not Send Us Astray',
                    'poster' => '',
                    'description' => 'Trouble arises when unexpected visitors arrive at the Hilltop and the community is thrust into action; heartbreaking discoveries are made.'
                ],
                'episode 14' => [
                    'number' => 14,
                    'title' => 'Still Gotta Mean Something',
                    'poster' => '',
                    'description' => 'A Heaps prisoner makes a discovery; Carol searches for someone in the nearby forest; Rick and Morgan find themselves in the company of strangers.'
                ],
                'episode 15' => [
                    'number' => 15,
                    'title' => 'Worth',
                    'poster' => '',
                    'description' => 'With the threat of the Saviors still looming, Aaron continues searching for allies; Daryl and Rosita take action and confront an old friend.'
                ],
                'episode 16' => [
                    'number' => 16,
                    'title' => 'Wrath',
                    'poster' => '',
                    'description' => 'The communities join forces in the last stand against the Saviors as all-out war unfolds.'
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
                    'title' => 'A New Beginning',
                    'poster' => '',
                    'description' => 'Rick and his group make a risky run into Washington, D.C. to search for artifacts they will need to build the civilization he and Carl envisioned.'
                ],
                'episode 02' => [
                    'number' => 2,
                    'title' => 'The Bridge',
                    'poster' => '',
                    'description' => 'The communities join forces to restore a bridge that will facilitate communication and trade; someone is gravely injured at the construction site.'
                ],
                'episode 03' => [
                    'number' => 3,
                    'title' => 'Warning Signs',
                    'poster' => '',
                    'description' => 'A mysterious disappearance from the work camp threatens Rick\'s vision for the future.'
                ],
                'episode 04' => [
                    'number' => 4,
                    'title' => 'The Obliged',
                    'poster' => '',
                    'description' => 'Rick\'s vision of a civilized future is threatened by a sudden reckoning with past sins that remain unavenged and unforgiven.'
                ],
                'episode 05' => [
                    'number' => 5,
                    'title' => 'What Comes After',
                    'poster' => '',
                    'description' => 'Rick is forced to face the past as he struggles to maintain the safety of the communities and protect the future he and Carl envisioned.'
                ],
                'episode 06' => [
                    'number' => 6,
                    'title' => 'Who Are You Now?',
                    'poster' => '',
                    'description' => 'The Survivors encounter unfamiliar faces outside the safety of their community\'s walls and must decide whether or not this new group can be trusted.'
                ],
                'episode 07' => [
                    'number' => 7,
                    'title' => 'Stradivarius',
                    'poster' => '',
                    'description' => 'Carol seeks out an old friend living alone in a wilderness teeming with walkers; survivors make the perilous trek to a new home.'
                ],
                'episode 08' => [
                    'number' => 8,
                    'title' => 'Evolution',
                    'poster' => '',
                    'description' => 'A small rescue mission braves a dangerous herd in their hunt for a missing comrade, only to discover a surprising threat that could doom them all.'
                ],
                'episode 09' => [
                    'number' => 9,
                    'title' => 'Adaptation',
                    'poster' => '',
                    'description' => 'The group unmasks a disturbing and dangerous new threat. An escaped captive revisits his past.'
                ],
                'episode 10' => [
                    'number' => 10,
                    'title' => 'Omega',
                    'poster' => '',
                    'description' => 'Another arrival at the Hilltop Colony reveals information about the leader of a hostile new group of savages. A party searches for Alden and Luke.'
                ],
                'episode 11' => [
                    'number' => 11,
                    'title' => 'Bounty',
                    'poster' => '',
                    'description' => 'The Whisperers, led by Alpha, confront the Hilltop in a harrowing attempt to retrieve her daughter; a supply run for the Kingdom turns into a dangerous quest.'
                ],
                'episode 12' => [
                    'number' => 12,
                    'title' => 'Guardians',
                    'poster' => '',
                    'description' => 'While one community struggles to ease tensions that threaten to divide from within, the true nature of another group comes into focus; a mission to rescue a friend has potentially deadly consequences.'
                ],
                'episode 13' => [
                    'number' => 13,
                    'title' => 'Chokepoint',
                    'poster' => '',
                    'description' => 'Daryl\'s daring rescue mission forces Alpha to unleash a group of her own to retrieve what belongs to her, even if the price is paid in blood, the Kingdom\'s plans to reunite the communities are put in jeopardy.'
                ],
                'episode 14' => [
                    'number' => 14,
                    'title' => 'Scars',
                    'poster' => '',
                    'description' => 'An outsider\'s arrival forces Alexandria to rehash devastating old wounds; eye-opening secrets from the past are revealed.'
                ],
                'episode 15' => [
                    'number' => 15,
                    'title' => 'The Calm Before',
                    'poster' => '',
                    'description' => 'The four communities come together in celebration at the Kingdom\'s fair, but while some pacts are renewed, others come at a much steeper price.'
                ],
                'episode 16' => [
                    'number' => 16,
                    'title' => 'The Storm',
                    'poster' => '',
                    'description' => 'In the aftermath of an overwhelming loss, the communities must brave a ferocious blizzard; as one group deals with an enemy from within, another is forced to make a life or death decision.'
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
                    'title' => 'Lines We Cross',
                    'poster' => '',
                    'description' => 'The group in Oceanside continues to train in case the Whisperers return; tensions are high as the heroes struggle to hold onto their concept of civilization.'
                ],
                'episode 02' => [
                    'number' => 2,
                    'title' => 'We Are the End of the World',
                    'poster' => '',
                    'description' => 'The origins of Alpha and Beta are revealed; Alpha attempts to toughen up Lydia as they prepare to walk with the dead; the Whisperers create their herds.'
                ],
                'episode 03' => [
                    'number' => 3,
                    'title' => 'Ghosts',
                    'poster' => '',
                    'description' => 'The threat of the Whisperers return leads to paranoia sweeping over Alexandria; in the meantime, Carol battles with the need for revenge.'
                ],
                'episode 04' => [
                    'number' => 4,
                    'title' => 'Silence the Whisperers',
                    'poster' => '',
                    'description' => 'The outcast Lydia is badly treated by three Alexandrians. When Negan saves her from an attack, the life changes in Alexandria. Meanwhile Michonne and a group of Alexandrians head to Hilltop to save survivors of a collapsed wall.'
                ],
                'episode 05' => [
                    'number' => 5,
                    'title' => 'What It Always Is',
                    'poster' => '',
                    'description' => 'Supplies go missing from Hilltop; Negan is idolized by Brandon; Ezekiel holds a secret.'
                ],
                'episode 06' => [
                    'number' => 6,
                    'title' => 'Bonds',
                    'poster' => '',
                    'description' => 'Carol and Daryl go on a mission together; Siddiq struggles to solve a mystery.'
                ],
                'episode 07' => [
                    'number' => 7,
                    'title' => 'Open Your Eyes',
                    'poster' => '',
                    'description' => 'Carol pushes boundaries that make Daryl uneasy; Alpha and Beta have reservations about someone.'
                ],
                'episode 08' => [
                    'number' => 8,
                    'title' => 'The World Before',
                    'poster' => '',
                    'description' => 'A fight causes tensions in Oceanside; The Alexandrians set out on a high-stakes mission.'
                ],
                'episode 09' => [
                    'number' => 9,
                    'title' => 'Squeeze',
                    'poster' => '',
                    'description' => 'The collected communities are reluctantly respecting the new borderlines being imposed on them.'
                ],
                'episode 10' => [
                    'number' => 10,
                    'title' => 'Stalker',
                    'poster' => '',
                    'description' => 'The group must defend Alexandria from a threatening outside force.'
                ],
                'episode 11' => [
                    'number' => 11,
                    'title' => 'Morning Star',
                    'poster' => '',
                    'description' => 'The Whisperers are coming for Hilltop, after Daryl and Lydia\'s encounter with Alpha, the communities must decide whether to run or fight; Eugene\'s communication with Stephanie gets complicated.'
                ],
                'episode 12' => [
                    'number' => 12,
                    'title' => 'Walk with Us',
                    'poster' => '',
                    'description' => 'The survivors try to escape from the Whisperer\'s walkers horde after the battle of Hilltop.'
                ],
                'episode 13' => [
                    'number' => 13,
                    'title' => 'What We Become',
                    'poster' => '',
                    'description' => 'Michonne takes Virgil back to his mysterious island to reunite with his family; in exchange, Virgil promises weapons that could change the tide of the Whisperer War.'
                ],
                'episode 14' => [
                    'number' => 14,
                    'title' => 'Look at the Flowers',
                    'poster' => '',
                    'description' => 'Heroes and villains reckon with the aftermath of the Hilltop fire; Eugene takes a group on a journey to meet Stephanie, with the hopes of befriending another civilization.'
                ],
                'episode 15' => [
                    'number' => 15,
                    'title' => 'The Tower',
                    'poster' => '',
                    'description' => 'The communities prepare for the final battle of the Whisperer War; meanwhile, Eugene\'s group encounters Princess.'
                ],
                'episode 16' => [
                    'number' => 16,
                    'title' => 'A Certain Doom',
                    'poster' => '',
                    'description' => 'Beta engages the final battle of the Whisperer War.'
                ],
                'episode 17' => [
                    'number' => 17,
                    'title' => 'Home Sweet Home',
                    'poster' => '',
                    'description' => 'Maggie returns, to the dismay of Negan; the trials she endured since leaving have made her harder in order for her and her son to survive; Daryl and Maggie unexpectedly fight an unseen and unknown threat.'
                ],
                'episode 18' => [
                    'number' => 18,
                    'title' => 'Find Me',
                    'poster' => '',
                    'description' => 'Daryl and Carol find an old cabin that takes Daryl back to his years away from the group after Rick disappeared; he relives the painful memory of meeting a reticent survivor and the toxic events that amplified his relationship with Dog.'
                ],
                'episode 19' => [
                    'number' => 19,
                    'title' => 'One More',
                    'poster' => '',
                    'description' => 'With Maggie\'s map, Gabriel and Aaron search for food and supplies to bring back to Alexandria, checking out one more location, they chance upon a stash; faith is broken and optimism is fragmented when they are put to the ultimate test.'
                ],
                'episode 20' => [
                    'number' => 20,
                    'title' => 'Splinter',
                    'poster' => '',
                    'description' => 'Eugene, Ezekiel, Yumiko, and Princess are captured and separated. Princess struggles with memories of her traumatic past and tries to escape one way or another with the help of Ezekiel.'
                ],
                'episode 21' => [
                    'number' => 21,
                    'title' => 'Diverged',
                    'poster' => '',
                    'description' => 'Daryl and Carol come to a fork in the road and head their separate ways. Each going into their own type of survival mode, the easiest of challenges become much harder.'
                ],
                'episode 22' => [
                    'number' => 22,
                    'title' => 'Here\'s Negan',
                    'poster' => '',
                    'description' => 'Carol takes Negan on a journey, hoping to minimize the increasing tension. Negan reflects on the events that led him to this point and comes to a conclusion about his future.'
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
                    'title' => 'Acheron: Part I',
                    'poster' => '',
                    'description' => 'Daryl leads a team to scavenge the military base he discovered; Maggie tells her story, prompting a new mission for survival that only Negan can lead; Eugene and his group go through assessment by the Commonwealth\'s paramilitary police.'
                ],
                'episode 02' => [
                    'number' => 2,
                    'title' => 'Acheron: Part II',
                    'poster' => '',
                    'description' => 'Maggie\'s mission takes the team through a subway tunnel, challenged by a recalcitrant Negan and lurking walkers, with Eugene\'s group, Yumiko searches for answers about her brother and challenges the processes at the Commonwealth outpost.'
                ],
                'episode 03' => [
                    'number' => 3,
                    'title' => 'Hunted',
                    'poster' => '',
                    'description' => 'Maggie\'s mission team gets separated and hunted by the Reapers, Carol, Rosita, Magna and Kelly attempt to catch horses for Alexandria; Judith, RJ, Hershel and Gracie cope with their parents going away.'
                ],
                'episode 04' => [
                    'number' => 4,
                    'title' => 'Rendition',
                    'poster' => '',
                    'description' => 'Daryl and Dog get captured by the Reapers; they are taken to the Meridian and reconnect with a familiar figure from their past.'
                ],
                'episode 05' => [
                    'number' => 5,
                    'title' => 'Out of the Ashes',
                    'poster' => '',
                    'description' => 'Aaron, Carol, Lydia, and Jerry go to the Hilltop ruins for blacksmith tools and nearby game, Eugene\'s group goes through orientation at the Commonwealth; Maggie and Negan trudge through the woods; Judith and the kids clash with teenagers.'
                ],
                'episode 06' => [
                    'number' => 6,
                    'title' => 'On the Inside',
                    'poster' => '',
                    'description' => 'Escaping from walkers, Connie and Virgil hide in a house occupied by mysterious creatures; Pope tests Daryl\'s loyalty to the Reapers with a conflicting mission; Kelly leaves Alexandria in search of Connie.'
                ],
                'episode 07' => [
                    'number' => 7,
                    'title' => 'Promises Broken',
                    'poster' => '',
                    'description' => 'Maggie and Elijah learn a new survival tactic from Negan; Eugene\'s group clears walkers to pay their fines, Yumiko interviews for an upper-class job, Daryl learns more about Leah and the Reapers; Gabriel encounters a man of God.'
                ],
                'episode 08' => [
                    'number' => 8,
                    'title' => 'For Blood',
                    'poster' => '',
                    'description' => 'The Reapers defend Meridian from an incoming herd; Pope suspects Maggie is behind the attack, while Daryl treads carefully; Alexandrians scramble to protect themselves when a violent storm leaves them vulnerable to walkers.'
                ],
                'episode 09' => [
                    'number' => 9,
                    'title' => 'No Other Way',
                    'poster' => '',
                    'description' => 'Hellfire rains down on those at Meridian as every fight with the Reapers proves to be a brutal battle. At home in Alexandria, the violent rainstorm rages on as walkers continue to pour in, threatening everyone\'s safety.'
                ],
                'episode 10' => [
                    'number' => 10,
                    'title' => 'New Haunts',
                    'poster' => '',
                    'description' => 'The heroes experience Halloween in the Commonwealth; Daryl and Rosita undergo military training led by Mercer; Carol investigates Ezekiel\'s medical condition.'
                ],
                'episode 11' => [
                    'number' => 11,
                    'title' => 'Rogue Element',
                    'poster' => '',
                    'description' => 'Eugene looks for Stephanie after she mysteriously goes missing. Connie investigates a story on Trooper Davis. Carol helps Hornsby with a labor dispute at a drug farm.'
                ],
                'episode 12' => [
                    'number' => 12,
                    'title' => 'The Lucky Ones',
                    'poster' => '',
                    'description' => 'Aaron and Maggie meet Gov. Pamela Milton as she tours Alexandria, Oceanside and Hilltop; Ezekiel finds himself lucky during a routine checkup; Eugene processes Max\'s story.'
                ],
                'episode 13' => [
                    'number' => 13,
                    'title' => 'Warlords',
                    'poster' => '',
                    'description' => 'Maggie, Lydia, and Elijah help a stranger from another community called Riverbend. They run into Aaron, who tells them about a mission he embarked on with Gabriel as emissaries for the Commonwealth.'
                ],
                'episode 14' => [
                    'number' => 14,
                    'title' => 'The Rotten Core',
                    'poster' => '',
                    'description' => 'Maggie, Lydia and Elijah help Aaron and Gabriel on a rescue mission; in the chaos, Negan finds himself watching over Hershel; Sebastian coerces Daryl and Rosita into pulling a heist.'
                ],
                'episode 15' => [
                    'number' => 15,
                    'title' => 'Trust',
                    'poster' => '',
                    'description' => 'Hornsby marches Daryl and troops to confront Maggie at Hilltop, after a harrowing heist, Rosita gets Connie, Kelly, Eugene, and Max to investigate the Miltons; Ezekiel helps hospital patients in need.'
                ],
                'episode 16' => [
                    'number' => 16,
                    'title' => 'Acts of God',
                    'poster' => '',
                    'description' => 'Maggie prepares to defend Hilltop and the people of Riverbend against Hornsby.'
                ],
                'episode 17' => [
                    'number' => 17,
                    'title' => '11.17',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 18' => [
                    'number' => 18,
                    'title' => '11.18',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 19' => [
                    'number' => 19,
                    'title' => '11.19',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 20' => [
                    'number' => 20,
                    'title' => '11.20',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 21' => [
                    'number' => 21,
                    'title' => '11.21',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 22' => [
                    'number' => 22,
                    'title' => '11.22',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 23' => [
                    'number' => 23,
                    'title' => '11.23',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 24' => [
                    'number' => 24,
                    'title' => '11.24',
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
                    'title' => 'Winter Is Coming',
                    'poster' => '',
                    'description' => 'Eddard Stark is torn between his family and an old friend when asked to serve at the side of King Robert Baratheon, Viserys plans to wed his sister to a nomadic warlord in exchange for an army.'
                ],
                'episode 02' => [
                    'number' => 2,
                    'title' => 'The Kingsroad',
                    'poster' => '',
                    'description' => 'While Bran recovers from his fall, Ned takes only his daughters to King\'s Landing. Jon Snow goes with his uncle Benjen to the Wall. Tyrion joins them.'
                ],
                'episode 03' => [
                    'number' => 3,
                    'title' => 'Lord Snow',
                    'poster' => '',
                    'description' => 'Jon begins his training with the Night\'s Watch; Ned confronts his past and future at King\'s Landing, Daenerys finds herself at odds with Viserys.'
                ],
                'episode 04' => [
                    'number' => 4,
                    'title' => 'Cripples, Bastards, and Broken Things',
                    'poster' => '',
                    'description' => 'Eddard investigates Jon Arryn\'s murder. Jon befriends Samwell Tarly, a coward who has come to join the Night\'s Watch.'
                ],
                'episode 05' => [
                    'number' => 5,
                    'title' => 'The Wolf and the Lion',
                    'poster' => '',
                    'description' => 'Catelyn has captured Tyrion and plans to bring him to her sister, Lysa Arryn, at the Vale, to be tried for his, supposed, crimes against Bran. Robert plans to have Daenerys killed, but Eddard refuses to be a part of it and quits.'
                ],
                'episode 06' => [
                    'number' => 6,
                    'title' => 'A Golden Crown',
                    'poster' => '',
                    'description' => 'While recovering from his battle with Jaime, Eddard is forced to run the kingdom while Robert goes hunting. Tyrion demands a trial by combat for his freedom. Viserys is losing his patience with Drogo.'
                ],
                'episode 07' => [
                    'number' => 7,
                    'title' => 'You Win or You Die',
                    'poster' => '',
                    'description' => 'Robert has been injured while hunting and is dying. Jon and the others finally take their vows to the Night\'s Watch. A man, sent by Robert, is captured for trying to poison Daenerys. Furious, Drogo vows to attack the Seven Kingdoms.'
                ],
                'episode 08' => [
                    'number' => 8,
                    'title' => 'The Pointy End',
                    'poster' => '',
                    'description' => 'The Lannisters press their advantage over the Starks; Robb rallies his father\'s northern allies and heads south to war; The White Walkers attack the Wall; Tyrion returns to his father with some new friends.'
                ],
                'episode 09' => [
                    'number' => 9,
                    'title' => 'Baelor',
                    'poster' => '',
                    'description' => 'Robb goes to war against the Lannisters. Jon finds himself struggling on deciding if his place is with Robb or the Night\'s Watch. Drogo has fallen ill from a fresh battle wound. Daenerys is desperate to save him.'
                ],
                'episode 10' => [
                    'number' => 10,
                    'title' => 'Fire and Blood',
                    'poster' => '',
                    'description' => 'Robb vows to get revenge on the Lannisters. Jon must officially decide if his place is with Robb or the Night\'s Watch. Daenerys says her final goodbye to Drogo.'
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
                    'title' => 'The North Remembers',
                    'poster' => '',
                    'description' => 'Tyrion arrives at King\'s Landing to take his father\'s place as Hand of the King. Stannis Baratheon plans to take the Iron Throne for his own. Robb tries to decide his next move in the war. The Night\'s Watch arrive at the house of Craster.'
                ],
                'episode 02' => [
                    'number' => 2,
                    'title' => 'The Night Lands',
                    'poster' => '',
                    'description' => 'Arya makes friends with Gendry. Tyrion tries to take control of the Small Council. Theon arrives at his home, Pyke, in order to persuade his father into helping Robb with the war. Jon tries to investigate Craster\'s secret.'
                ],
                'episode 03' => [
                    'number' => 3,
                    'title' => 'What Is Dead May Never Die',
                    'poster' => '',
                    'description' => 'Tyrion tries to see who he can trust in the Small Council. Catelyn visits Renly to try and persuade him to join Robb in the war. Theon must decide if his loyalties lie with his own family or with Robb.'
                ],
                'episode 04' => [
                    'number' => 4,
                    'title' => 'Garden of Bones',
                    'poster' => '',
                    'description' => 'Lord Baelish arrives at Renly\'s camp just before he faces off against Stannis. Daenerys and her company are welcomed into the city of Qarth. Arya, Gendry, and Hot Pie find themselves imprisoned at Harrenhal.'
                ],
                'episode 05' => [
                    'number' => 5,
                    'title' => 'The Ghost of Harrenhal',
                    'poster' => '',
                    'description' => 'Tyrion investigates a secret weapon that King Joffrey plans to use against Stannis. Meanwhile, as a token for saving his life, Jaqen H\'ghar offers to kill three people that Arya chooses.'
                ],
                'episode 06' => [
                    'number' => 6,
                    'title' => 'The Old Gods and the New',
                    'poster' => '',
                    'description' => 'Theon seizes control of Winterfell. Jon captures a wildling, named Ygritte. The people of King\'s Landing begin to turn against King Joffrey. Daenerys looks to buy ships to sail for the Seven Kingdoms.'
                ],
                'episode 07' => [
                    'number' => 7,
                    'title' => 'A Man Without Honor',
                    'poster' => '',
                    'description' => 'Bran and Rickon have escaped Winterfell. Theon tries to hunt them down. Daenerys\' dragons have been stolen. Jon travels through the wilderness with Ygritte as his prisoner. Sansa has bled and is now ready to have Joffrey\'s children.'
                ],
                'episode 08' => [
                    'number' => 8,
                    'title' => 'The Prince of Winterfell',
                    'poster' => '',
                    'description' => 'Stannis is just days from King\'s Landing. Tyrion prepares for his arrival. Jon and Qhorin are taken prisoner by the wildlings. Catelyn is arrested for releasing Jaime. Arya, Gendry, and Hot Pie plan to escape from Harrenhal.'
                ],
                'episode 09' => [
                    'number' => 9,
                    'title' => 'Blackwater',
                    'poster' => '',
                    'description' => 'Stannis Baratheon\'s fleet and army arrive at King\'s Landing and the battle for the city begins. Cersei plans for her and her children\'s future.'
                ],
                'episode 10' => [
                    'number' => 10,
                    'title' => 'Valar Morghulis',
                    'poster' => '',
                    'description' => 'Joffrey puts Sansa aside for Margaery Tyrell. Robb marries Talisa Maegyr. Jon prepares to meet Mance Rayder. Arya says farewell to Jaqen H\'ghar. Daenerys tries to rescue her dragons.'
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
                    'title' => 'Valar Dohaeris',
                    'poster' => '',
                    'description' => 'Jon is brought before Mance Rayder, the King Beyond the Wall, while the Night\'s Watch survivors retreat south. In King\'s Landing, Tyrion asks for his reward. Littlefinger offers Sansa a way out.'
                ],
                'episode 02' => [
                    'number' => 2,
                    'title' => 'Dark Wings, Dark Words',
                    'poster' => '',
                    'description' => 'Bran and company meet Jojen and Meera Reed. Arya, Gendry, and Hot Pie meet the Brotherhood. Jaime travels through the wilderness with Brienne. Sansa confesses her true feelings about Joffery to Margaery.'
                ],
                'episode 03' => [
                    'number' => 3,
                    'title' => 'Walk of Punishment',
                    'poster' => '',
                    'description' => 'Robb and Catelyn arrive at Riverrun for Lord Hoster Tully\'s funeral. Tywin names Tyrion the new Master of Coin. Arya says goodbye to Hot Pie. The Night\'s Watch returns to Craster\'s. Brienne and Jaime are taken prisoner.'
                ],
                'episode 04' => [
                    'number' => 4,
                    'title' => 'And Now His Watch Is Ended',
                    'poster' => '',
                    'description' => 'Jaime mopes over his lost hand. Cersei is growing uncomfortable with the Tyrells. The Night\'s Watch is growing impatient with Craster. Daenerys buys the Unsullied.'
                ],
                'episode 05' => [
                    'number' => 5,
                    'title' => 'Kissed by Fire',
                    'poster' => '',
                    'description' => 'Robb\'s army is falling apart. Jaime reveals a story, to Brienne, that he has never told anyone. Jon breaks his vows. The Hound is granted his freedom. The Lannisters hatch a new plan.'
                ],
                'episode 06' => [
                    'number' => 6,
                    'title' => 'The Climb',
                    'poster' => '',
                    'description' => 'Jon and the wildlings scale the Wall. The Brotherhood sells Gendry to Melisandre. Robb does what he can to win back the Freys. Tyrion tells Sansa about their engagement.'
                ],
                'episode 07' => [
                    'number' => 7,
                    'title' => 'The Bear and the Maiden Fair',
                    'poster' => '',
                    'description' => 'Jon and the wildlings travel south of the Wall. Talisa tells Robb that she\'s pregnant. Arya runs away from the Brotherhood. Daenerys arrives at Yunkai. Jaime leaves Brienne behind at Harrenhal.'
                ],
                'episode 08' => [
                    'number' => 8,
                    'title' => 'Second Sons',
                    'poster' => '',
                    'description' => 'Daenerys tries to persuade the Second Sons to join her against Yunkai. Stannis releases Davos from the dungeons. Sam and Gilly are attacked by a White Walker. Sansa and Tyrion wed.'
                ],
                'episode 09' => [
                    'number' => 9,
                    'title' => 'The Rains of Castamere',
                    'poster' => '',
                    'description' => 'Robb and Catelyn arrive at the Twins for the wedding. Jon is put to the test to see where his loyalties truly lie. Bran\'s group decides to split up. Daenerys plans an invasion of Yunkai.'
                ],
                'episode 10' => [
                    'number' => 10,
                    'title' => 'Mhysa',
                    'poster' => '',
                    'description' => 'Bran and company travel beyond the Wall. Sam returns to Castle Black. Jon says goodbye to Ygritte. Jaime returns to King\'s Landing. The Night\'s Watch asks for help from Stannis.'
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
                    'title' => 'Two Swords',
                    'poster' => '',
                    'description' => 'Tyrion welcomes a guest to King\'s Landing. At Castle Black, Jon stands trial. Daenerys is pointed to Meereen, the mother of all slave cities. Arya runs into an old enemy.'
                ],
                'episode 02' => [
                    'number' => 2,
                    'title' => 'The Lion and the Rose',
                    'poster' => '',
                    'description' => 'Joffrey and Margaery\'s wedding has come. Tyrion breaks up with Shae. Ramsay tries to prove his worth to his father. Bran and company find a Weirwood tree.'
                ],
                'episode 03' => [
                    'number' => 3,
                    'title' => 'Breaker of Chains',
                    'poster' => '',
                    'description' => 'Tyrion is arrested for the murder of Joffrey and awaits trial. Sansa escapes King\'s Landing. Sam sends Gilly to Mole\'s Town as the Night\'s Watch finds itself in a tight spot. Meereen challenges Daenerys.'
                ],
                'episode 04' => [
                    'number' => 4,
                    'title' => 'Oathkeeper',
                    'poster' => '',
                    'description' => 'Jaime entrusts a task to Brienne. Daenerys frees Meereen. Jon is given permission to lead a group of Night\'s Watchmen to Craster\'s Keep. Bran and company are taken hostage.'
                ],
                'episode 05' => [
                    'number' => 5,
                    'title' => 'First of His Name',
                    'poster' => '',
                    'description' => 'Tommen is crowned King of the Seven Kingdoms. Cersei builds her case against Tyrion. Sansa and Lord Baelish arrive at the Eyrie. The Night\'s Watch attacks Craster\'s Keep.'
                ],
                'episode 06' => [
                    'number' => 6,
                    'title' => 'The Laws of Gods and Men',
                    'poster' => '',
                    'description' => 'Tyrion\'s trial has come. Yara and her troops storm the Dreadfort to free Theon. Daenerys meets Hizdar zo Loraq. Stannis makes a deal with the Iron Bank of Braavos.'
                ],
                'episode 07' => [
                    'number' => 7,
                    'title' => 'Mockingbird',
                    'poster' => '',
                    'description' => 'Tyrion tries to find a champion. Daenerys sleeps with Daario. The Hound becomes wounded. Jon\'s advice is ignored at Castle Black. Brienne and Podrick receive a tip on Arya\'s whereabouts.'
                ],
                'episode 08' => [
                    'number' => 8,
                    'title' => 'The Mountain and the Viper',
                    'poster' => '',
                    'description' => 'Theon helps Ramsay seize Moat Cailin. The wildlings attack Mole\'s Town. Sansa comes up with a story to protect Lord Baelish. Daenerys finds out a secret about Jorah Mormont. Oberyn Martell faces Gregor Clegane, the Mountain.'
                ],
                'episode 09' => [
                    'number' => 9,
                    'title' => 'The Watchers on the Wall',
                    'poster' => '',
                    'description' => 'The battle between the Night\'s Watch and the wildlings has come.'
                ],
                'episode 10' => [
                    'number' => 10,
                    'title' => 'The Children',
                    'poster' => '',
                    'description' => 'Jon makes an important decision. Daenerys experiences new consequences. Brienne and Podrick have an unexpected encounter. Bran achieves a goal, while Tyrion makes an important discovery.'
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
                    'title' => 'The Wars to Come',
                    'poster' => '',
                    'description' => 'Cersei and Jaime adjust to a world without Tywin. Tyrion and Varys arrive at Pentos. In Meereen, a new enemy emerges. Jon is caught between two kings.'
                ],
                'episode 02' => [
                    'number' => 2,
                    'title' => 'The House of Black and White',
                    'poster' => '',
                    'description' => 'Arya arrives in Braavos. Jaime takes on a secret mission. Ellaria Sand seeks revenge for Oberyn\'s death. Stannis makes Jon a generous offer as the Night\'s Watch elects a new Lord Commander. Daenerys is faced with a difficult decision.'
                ],
                'episode 03' => [
                    'number' => 3,
                    'title' => 'High Sparrow',
                    'poster' => '',
                    'description' => 'Tommen and Margaery wed. Arya has trouble adapting to her new life. Littlefinger reveals his plans to Sansa. Jon gives his first orders as Lord Commander. Tyrion and Varys arrive in Volantis.'
                ],
                'episode 04' => [
                    'number' => 4,
                    'title' => 'Sons of the Harpy',
                    'poster' => '',
                    'description' => 'Jorah Mormont sets sail alongside his prisoner, Tyrion. Cersei makes a move against the Tyrells. Jaime and Bronn sneak into Dorne. Ellaria and the Sand Snakes make their plans. Melisandre tempts Jon. The Harpies attack.'
                ],
                'episode 05' => [
                    'number' => 5,
                    'title' => 'Kill the Boy',
                    'poster' => '',
                    'description' => 'Daenerys arrests the heads of Meereen\'s great families. Jon makes a difficult decision. Theon is forced to face Sansa. Stannis rides south. Tyrion and Jorah enter the ruins of Old Valyria.'
                ],
                'episode 06' => [
                    'number' => 6,
                    'title' => 'Unbowed, Unbent, Unbroken',
                    'poster' => '',
                    'description' => 'Arya is put to the test. Tyrion and Jorah are captured by slavers. Loras Tyrell is judged by the Sparrows. Jaime and Bronn face the Sand Snakes. Sansa marries Ramsay Bolton.'
                ],
                'episode 07' => [
                    'number' => 7,
                    'title' => 'The Gift',
                    'poster' => '',
                    'description' => 'Jon heads east as trouble begins to stir for Sam and Gilly at Castle Black. Sansa asks Theon for help. Tyrion and Jorah are sold as slaves. Cersei savors her triumph over the Tyrells as new plots are developed in the shadows.'
                ],
                'episode 08' => [
                    'number' => 8,
                    'title' => 'Hardhome',
                    'poster' => '',
                    'description' => 'Tyrion advises Daenerys. Sansa forces Theon to tell her a secret. Cersei remains stubborn. Arya meets her first target. Jon and Tormund meet with the wildling elders.'
                ],
                'episode 09' => [
                    'number' => 9,
                    'title' => 'The Dance of Dragons',
                    'poster' => '',
                    'description' => 'Jon and the wildlings return to Castle Black. Jaime meets with Doran Martell. Stannis makes a hard choice. Arya runs into Meryn Trant. Daenerys attends the grand reopening of the fighting pits.'
                ],
                'episode 10' => [
                    'number' => 10,
                    'title' => 'Mother\'s Mercy',
                    'poster' => '',
                    'description' => 'Stannis arrives at Winterfell. Tyrion runs Meereen as Daario and Jorah go after Daenerys. Jaime and Myrcella leave Dorne. Jon sends Sam and Gilly to Oldtown. Arya challenges the Many-Faced God. Cersei confesses her sins.'
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
                    'title' => 'The Red Woman',
                    'poster' => '',
                    'description' => 'The fate of Jon Snow is revealed. Daenerys is brought before Khal Moro. Tyrion gets used to living in Meereen. Ramsay sends his dogs after Theon and Sansa. Ellaria and the Sand Snakes make their move. Cersei mourns for Myrcella.'
                ],
                'episode 02' => [
                    'number' => 2,
                    'title' => 'Home',
                    'poster' => '',
                    'description' => 'Bran trains with the Three-Eyed Raven. Tommen meets with Cersei. Tyrion makes a bold move. Theon leaves while at Pyke new issues arise. Ramsay\'s brother is born. Davos asks Melisandre for a miracle.'
                ],
                'episode 03' => [
                    'number' => 3,
                    'title' => 'Oathbreaker',
                    'poster' => '',
                    'description' => 'Daenerys arrives at Vaes Dothrak. Sam and Gilly sail for Horn Hill. Arya trains as No One. Varys finds information on the Sons of the Harpy. Ramsay receives a gift. Tommen meets with the High Sparrow. At Castle Black, a miracle occurs.'
                ],
                'episode 04' => [
                    'number' => 4,
                    'title' => 'Book of the Stranger',
                    'poster' => '',
                    'description' => 'Sansa arrives at Castle Black. Tyrion makes a deal with the slave masters. Jorah and Daario sneak into Vaes Dothrak. Ramsay sends a letter to Jon. Theon arrives at Pyke. Cersei and Olenna Tyrell plot against the High Sparrow.'
                ],
                'episode 05' => [
                    'number' => 5,
                    'title' => 'The Door',
                    'poster' => '',
                    'description' => 'Sansa and Jon make plans. Arya is given another chance to prove herself. Jorah confesses a secret to Daenerys. Tyrion meets with a red priestess. Yara finds her rule tested. Bran discovers the origin of the White Walkers.'
                ],
                'episode 06' => [
                    'number' => 6,
                    'title' => 'Blood of My Blood',
                    'poster' => '',
                    'description' => 'Bran and Meera find a new ally. Gilly meets Sam\'s family. Arya makes a difficult choice. The Lannisters and Tyrells march against the High Sparrow.'
                ],
                'episode 07' => [
                    'number' => 7,
                    'title' => 'The Broken Man',
                    'poster' => '',
                    'description' => 'Jon and Sansa gather troops. Jaime arrives at Riverrun. Olenna Tyrell plans to leave King\'s Landing. Theon and Yara plan a destination. Arya makes plans to leave.'
                ],
                'episode 08' => [
                    'number' => 8,
                    'title' => 'No One',
                    'poster' => '',
                    'description' => 'Brienne arrives at Riverrun. Arya seeks shelter. Jaime meets with Edmure Tully. Cersei challenges the Faith. Sandor Clegane hunts for revenge. Tyrion faces the consequences of earlier decisions.'
                ],
                'episode 09' => [
                    'number' => 9,
                    'title' => 'Battle of the Bastards',
                    'poster' => '',
                    'description' => 'Jon and Sansa face Ramsay Bolton on the fields of Winterfell. Daenerys strikes back at her enemies. Theon and Yara arrive in Meereen.'
                ],
                'episode 10' => [
                    'number' => 10,
                    'title' => 'The Winds of Winter',
                    'poster' => '',
                    'description' => 'Cersei and Loras Tyrell stand trial by the gods. Daenerys prepares to set sail for Westeros. Davos confronts Melisandre. Sam and Gilly arrive in the Citadel. Bran discovers a long-kept secret. Lord Frey has an uninvited guest.'
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
                    'title' => 'Dragonstone',
                    'poster' => '',
                    'description' => 'Jon organizes the North\'s defenses. Cersei tries to even the odds. Daenerys comes home. Arya reminds the Freys the North remembers. Sam adapts to life in Oldtown. The Night King makes his way south.'
                ],
                'episode 02' => [
                    'number' => 2,
                    'title' => 'Stormborn',
                    'poster' => '',
                    'description' => 'Daenerys receives an unexpected visitor. Jon faces resistance. Tyrion plans the conquest of Westeros. Cersei gathers her allies. Arya has a reunion with old friends. Sam risks his career and life.'
                ],
                'episode 03' => [
                    'number' => 3,
                    'title' => 'The Queen\'s Justice',
                    'poster' => '',
                    'description' => 'Jon and Daenerys finally meet. Cersei gains a new ally. Sansa receives an unexpected visitor. Sam is confronted for his actions.'
                ],
                'episode 04' => [
                    'number' => 4,
                    'title' => 'The Spoils of War',
                    'poster' => '',
                    'description' => 'Daenerys takes matters into her own hands. Arya reaches her destination. Jaime and Bronn collect the spoils from the war with the Tyrells.'
                ],
                'episode 05' => [
                    'number' => 5,
                    'title' => 'Eastwatch',
                    'poster' => '',
                    'description' => 'Daenerys demands loyalty from the surviving Lannister soldiers; Jon heeds Bran\'s warning about White Walkers on the move; Cersei vows to vanquish anyone or anything that stands in her way.'
                ],
                'episode 06' => [
                    'number' => 6,
                    'title' => 'Beyond the Wall',
                    'poster' => '',
                    'description' => 'Jon and his team go beyond the wall to capture a wight. Daenerys has to make a tough decision.'
                ],
                'episode 07' => [
                    'number' => 7,
                    'title' => 'The Dragon and the Wolf',
                    'poster' => '',
                    'description' => 'Everyone meets in King\'s Landing to discuss the fate of the realm. In Winterfell, Sansa confronts Arya. Sam reaches Winterfell, where he and Bran discover a shocking secret about Jon Snow.'
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
                    'title' => 'Winterfell',
                    'poster' => '',
                    'description' => 'Jon and Daenerys arrive in Winterfell and are met with skepticism. Sam learns about the fate of his family. Cersei gives Euron the reward he aims for. Theon follows his heart.'
                ],
                'episode 02' => [
                    'number' => 2,
                    'title' => 'A Knight of the Seven Kingdoms',
                    'poster' => '',
                    'description' => 'Jaime faces judgment and Winterfell prepares for the battle to come.'
                ],
                'episode 03' => [
                    'number' => 3,
                    'title' => 'The Long Night',
                    'poster' => '',
                    'description' => 'The Night King and his army have arrived at Winterfell and the great battle begins.'
                ],
                'episode 04' => [
                    'number' => 4,
                    'title' => 'The Last of the Starks',
                    'poster' => '',
                    'description' => 'The Battle of Winterfell is over and a new chapter for Westeros begins.'
                ],
                'episode 05' => [
                    'number' => 5,
                    'title' => 'The Bells',
                    'poster' => '',
                    'description' => 'Forces have arrived at King\'s Landing for the final battle.'
                ],
                'episode 06' => [
                    'number' => 6,
                    'title' => 'The Iron Throne',
                    'poster' => '',
                    'description' => 'In the aftermath of the devastating attack on King\'s Landing, Daenerys must face the survivors.'
                ],
                'episode 07' => [
                    'number' => 7,
                    'title' => 'The Iron Throne',
                    'poster' => '',
                    'description' => 'In the aftermath of the devastating attack on King\'s Landing, Daenerys must face the survivors.'
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
            ],
            'episodes' => [
                'episode 01' => [
                    'number' => 1,
                    'title' => 'Pilot',
                    'poster' => '',
                    'description' => 'Diagnosed with terminal lung cancer, chemistry teacher Walter White teams up with former student Jesse Pinkman to cook and sell crystal meth.'
                ],
                'episode 02' => [
                    'number' => 2,
                    'title' => 'Cat\'s in the Bag...',
                    'poster' => '',
                    'description' => 'After their first drug deal goes terribly wrong, Walt and Jesse are forced to deal with a corpse and a prisoner. Meanwhile, Skyler grows suspicious of Walt\'s activities.'
                ],
                'episode 03' => [
                    'number' => 3,
                    'title' => '...And the Bag\'s in the River',
                    'poster' => '',
                    'description' => 'Walt and Jesse clean up after the bathtub incident before Walt decides what course of action to take with their prisoner Krazy-8.'
                ],
                'episode 04' => [
                    'number' => 4,
                    'title' => 'Cancer Man',
                    'poster' => '',
                    'description' => 'Walt tells the rest of his family about his cancer. Jesse tries to make amends with his own parents.'
                ],
                'episode 05' => [
                    'number' => 5,
                    'title' => 'Gray Matter',
                    'poster' => '',
                    'description' => 'Walt rejects everyone who tries to help him with the cancer. Jesse tries his best to create Walt\'s meth, with the help of an old friend.'
                ],
                'episode 06' => [
                    'number' => 6,
                    'title' => 'Crazy Handful of Nothin\'',
                    'poster' => '',
                    'description' => 'With the side effects and cost of his treatment mounting, Walt demands that Jesse finds a wholesaler to buy their drugs - which lands him in trouble.'
                ],
                'episode 07' => [
                    'number' => 7,
                    'title' => 'A No-Rough-Stuff-Type Deal',
                    'poster' => '',
                    'description' => 'Walt and Jesse try to up their game by making more of the crystal every week for Tuco. Unfortunately, some of the ingredients they need are not easy to find. Meanwhile, Skyler realizes that her sister is a shoplifter.'
                ]
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
                    'title' => 'Seven Thirty-Seven',
                    'poster' => '',
                    'description' => 'Walt and Jesse realize how dire their situation is. They must come up with a plan to kill Tuco before Tuco kills them first.'
                ],
                'episode 02' => [
                    'number' => 2,
                    'title' => 'Grilled',
                    'poster' => '',
                    'description' => 'Walt\'s disappearance is met with investigation by both his wife and Hank, as Tuco Salamanca intends to leave town with his kidnapped cooks.'
                ],
                'episode 03' => [
                    'number' => 3,
                    'title' => 'Bit by a Dead Bee',
                    'poster' => '',
                    'description' => 'Walt and Jesse try to come up with alibis for their disappearances.'
                ],
                'episode 04' => [
                    'number' => 4,
                    'title' => 'Down',
                    'poster' => '',
                    'description' => 'Skyler keeps mysteriously leaving without talking to Walt. Jesse\'s parents throw him out of his own house.'
                ],
                'episode 05' => [
                    'number' => 5,
                    'title' => 'Breakage',
                    'poster' => '',
                    'description' => 'Walt and Jesse decide to start their own little empire with the help of Jesse\'s friends: Skinny Pete, Combo, and Badger. Meanwhile, Hank tries to pull himself together after his encounter with Tuco.'
                ],
                'episode 06' => [
                    'number' => 6,
                    'title' => 'Peekaboo',
                    'poster' => '',
                    'description' => 'After Skinny Pete gets ripped off, Walt makes Jesse go get the money. Meanwhile, Walt\'s cover story on how Elliott and Gretchen are paying for his medical treatment is on the verge of collapsing.'
                ],
                'episode 07' => [
                    'number' => 7,
                    'title' => 'Negro y Azul',
                    'poster' => '',
                    'description' => 'Rumor is spreading that Jesse killed the man that ripped Skinny Pete off. Walt uses this to his advantage on expanding their territory. Meanwhile, Hank has been promoted to the El Paso office. But it\'s not all he hoped it would be.'
                ],
                'episode 08' => [
                    'number' => 8,
                    'title' => 'Better Call Saul',
                    'poster' => '',
                    'description' => 'Badger is caught by the DEA. Walt and Jesse hire the best criminal lawyer in town, Saul Goodman.'
                ],
                'episode 09' => [
                    'number' => 9,
                    'title' => '4 Days Out',
                    'poster' => '',
                    'description' => 'Walt and Jesse become stranded out in the middle of the desert after cooking more crystal.'
                ],
                'episode 10' => [
                    'number' => 10,
                    'title' => 'Over',
                    'poster' => '',
                    'description' => 'Walt\'s cancer has greatly improved. Time to celebrate. Meanwhile Jesse tries to meet his new girlfriend\'s father.'
                ],
                'episode 11' => [
                    'number' => 11,
                    'title' => 'Mandala',
                    'poster' => '',
                    'description' => 'Walt and Jesse\'s little empire begins to crumble. Saul tries to set them up with a mysterious distributor.'
                ],
                'episode 12' => [
                    'number' => 12,
                    'title' => 'Phoenix',
                    'poster' => '',
                    'description' => 'Walt and Skyler have a baby girl. Now that Jesse is hooked on heroin, Walt refuses to give him his money until he gets clean. Meanwhile, as an excuse for his money, Walt decides to donate the money to himself through his son\'s new website.'
                ],
                'episode 13' => [
                    'number' => 13,
                    'title' => 'ABQ',
                    'poster' => '',
                    'description' => 'Walt\'s lies have pushed Skyler to her limit. She leaves with the kids. Meanwhile, Jesse blames himself for Jane\'s death and goes into rehab.'
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
                    'title' => 'No Más',
                    'poster' => '',
                    'description' => 'Skyler goes through with her plans to divorce Walt. Jesse finishes rehab.'
                ],
                'episode 02' => [
                    'number' => 2,
                    'title' => 'Caballo sin Nombre',
                    'poster' => '',
                    'description' => 'Walter, Jr. is having a rough time accepting his parents\' separation. Jesse buys his old house from his parents. Meanwhile, two mysterious men have come into town looking for Walt.'
                ],
                'episode 03' => [
                    'number' => 3,
                    'title' => 'I.F.T.',
                    'poster' => '',
                    'description' => 'Walt has moved back into the house without Skyler\'s consent. Now she can\'t get him out. Meanwhile, Jesse continues to cope with Jane\'s death.'
                ],
                'episode 04' => [
                    'number' => 4,
                    'title' => 'Green Light',
                    'poster' => '',
                    'description' => 'Walt\'s world crumbles even more after finding out that Skyler is cheating on him. Jesse tries to set up a meeting with Gus to try and sell his own version of the blue meth. Meanwhile, Hank is growing obsessed with finding Heisenberg.'
                ],
                'episode 05' => [
                    'number' => 5,
                    'title' => 'Más',
                    'poster' => '',
                    'description' => 'Gus tries to get Walt back in the business by offering him three million dollars and a brand new lab. Jesse is furious that Walt received half of the money for his blue meth. Hank tries to track down the RV meth lab.'
                ],
                'episode 06' => [
                    'number' => 6,
                    'title' => 'Sunset',
                    'poster' => '',
                    'description' => 'Heisenberg\'s organized and practical assistant Gale greatly aids his work in Gus\'s lab. Hank finally tracks the RV back to Jesse, as a concerned Walt finds any way to erase the evidence.'
                ],
                'episode 07' => [
                    'number' => 7,
                    'title' => 'One Minute',
                    'poster' => '',
                    'description' => 'Jesse ends up in the hospital after getting beaten up by Hank. Now he is threatening to press charges against the DEA. To stop him, Walt decides to bring Jesse on as his partner, once again.'
                ],
                'episode 08' => [
                    'number' => 8,
                    'title' => 'I See You',
                    'poster' => '',
                    'description' => 'Hank ends up in the hospital after being attacked by Tuco\'s cousins. Walt spends too much time by his family\'s side when he should be cooking meth.'
                ],
                'episode 09' => [
                    'number' => 9,
                    'title' => 'Kafkaesque',
                    'poster' => '',
                    'description' => 'Skyler hatches a plan as Hank\'s hospital bills stack up. Meanwhile, Walt and Gus come to a better understanding as Jesse, looking for more independence, pursues a new opportunity.'
                ],
                'episode 10' => [
                    'number' => 10,
                    'title' => 'Fly',
                    'poster' => '',
                    'description' => 'There is a fly loose in the lab. Walt and Jesse must do whatever they can to kill it before it contaminates the meth.'
                ],
                'episode 11' => [
                    'number' => 11,
                    'title' => 'Abiquiu',
                    'poster' => '',
                    'description' => 'Skyler gets more involved in Walt\'s business, much to his chagrin, as Hank struggles with his recovery. Meanwhile, Jesse takes an active role in his new enterprise, leading him to a startling discovery.'
                ],
                'episode 12' => [
                    'number' => 12,
                    'title' => 'Half Measures',
                    'poster' => '',
                    'description' => 'Against Walt\'s advice, Jesse lashes out. Fearing for Jesse\'s safety, Walt takes drastic action to intervene. Meanwhile a tragic event leads to a shocking confrontation.'
                ],
                'episode 13' => [
                    'number' => 13,
                    'title' => 'Full Measure',
                    'poster' => '',
                    'description' => 'Jesse has disappeared and Walt is in big trouble with Gus. So Gus rehires Gale to learn from Walt\'s cooking so that they can dispose of Walt once and for all.'
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
                    'title' => 'Box Cutter',
                    'poster' => '',
                    'description' => 'Walt and Jesse are held captive for Gus, after Gale\'s death. Meanwhile, Skyler tries to find out what happened to Walt.'
                ],
                'episode 02' => [
                    'number' => 2,
                    'title' => 'Thirty-Eight Snub',
                    'poster' => '',
                    'description' => 'Walt attempts to form a new alliance as he plans his next move. Meanwhile Skyler pushes Walt towards a business opportunity, in hopes of protecting the family.'
                ],
                'episode 03' => [
                    'number' => 3,
                    'title' => 'Open House',
                    'poster' => '',
                    'description' => 'While Walt worries about Gus\'s interference and Jesse\'s increasingly fragile state of mind, Skyler steps up the pressure to get what she wants.'
                ],
                'episode 04' => [
                    'number' => 4,
                    'title' => 'Bullet Points',
                    'poster' => '',
                    'description' => 'As Skyler concocts an elaborate story to explain the Whites\' finances, a worried Walt discovers that Hank has begun a new investigation.'
                ],
                'episode 05' => [
                    'number' => 5,
                    'title' => 'Shotgun',
                    'poster' => '',
                    'description' => 'Jesse rides shotgun with Mike on a perilous run of pickups, prompting Walt to worry that his partner is about to be killed.'
                ],
                'episode 06' => [
                    'number' => 6,
                    'title' => 'Cornered',
                    'poster' => '',
                    'description' => 'Skyler adopts an aloof approach when she suspects that Walt isn\'t telling her the truth. Meanwhile, Jesse proves his worth to Mike and Gus.'
                ],
                'episode 07' => [
                    'number' => 7,
                    'title' => 'Problem Dog',
                    'poster' => '',
                    'description' => 'Skyler looks to continue her family\'s trend of appearing poverty-stricken by forcing Walt to return the car he bought. A concerned Walt chauffeurs Hank to Los Pollos Hermanos, and the articulate yet immobile DEA agent collects prints.'
                ],
                'episode 08' => [
                    'number' => 8,
                    'title' => 'Hermanos',
                    'poster' => '',
                    'description' => 'When Hank produces evidence that Gus is Albuquerque\'s crystal meth kingpin, Walt worries that he and Jesse will be killed to protect their boss.'
                ],
                'episode 09' => [
                    'number' => 9,
                    'title' => 'Bug',
                    'poster' => '',
                    'description' => 'While Walt tries to subvert Hank\'s probe into the Albuquerque meth scene, a deadly warning forces Gus to consider a deal with the cartel.'
                ],
                'episode 10' => [
                    'number' => 10,
                    'title' => 'Salud',
                    'poster' => '',
                    'description' => 'Jesse, Gus, and Mike fly down to Mexico, and Jesse cooks the blue meth for the cartel. Walt misses his son\'s 16th birthday after his fight with Jesse.'
                ],
                'episode 11' => [
                    'number' => 11,
                    'title' => 'Crawl Space',
                    'poster' => '',
                    'description' => 'Hank asks Walt to drive him to the laundry where the meth lab is hidden. Ted still won\'t pay the IRS so Skyler asks Saul for help, and Saul sends in his A-Team. Gus and Jesse return from Mexico, and Walt fears he is in trouble with Gus.'
                ],
                'episode 12' => [
                    'number' => 12,
                    'title' => 'End Times',
                    'poster' => '',
                    'description' => 'The DEA is putting Hank and his family in protective custody; however, Walt refuses and awaits his fate in his house. Meanwhile, Brock has fallen terribly ill and Jesse suspects Walt may be behind it.'
                ],
                'episode 13' => [
                    'number' => 13,
                    'title' => 'Face Off',
                    'poster' => '',
                    'description' => 'Jesse is brought to the FBI for questioning on his knowledge of ricin. In a last effort to kill Gus, Walt must ask for help from an old enemy.'
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
                    'title' => 'Live Free or Die',
                    'poster' => '',
                    'description' => 'Now that Gus is dead, Walt, Jesse, and Mike work to cover their tracks. Skyler panics when Ted Beneke wakes up.'
                ],
                'episode 02' => [
                    'number' => 2,
                    'title' => 'Madrigal',
                    'poster' => '',
                    'description' => 'Walt and Jesse seek out an unlikely partner for a new business venture. The DEA follows up new leads in its investigation.'
                ],
                'episode 03' => [
                    'number' => 3,
                    'title' => 'Hazard Pay',
                    'poster' => '',
                    'description' => 'The guys put a business plan into action; Walt confesses to Marie.'
                ],
                'episode 04' => [
                    'number' => 4,
                    'title' => 'Fifty-One',
                    'poster' => '',
                    'description' => 'It\'s Walt\'s 51st birthday. His return to the drug business causes Skyler to go into depression.'
                ],
                'episode 05' => [
                    'number' => 5,
                    'title' => 'Dead Freight',
                    'poster' => '',
                    'description' => 'Walter White\'s domestic life continues to deteriorate; at the same time, his growing business venture aims to steal a train car chock full of methylamine.'
                ],
                'episode 06' => [
                    'number' => 6,
                    'title' => 'Buyout',
                    'poster' => '',
                    'description' => 'In the aftermath of the train heist, Jesse and Mike decide to quit the business, leaving Walt to handle things on his own. Mike is being followed by the DEA.'
                ],
                'episode 07' => [
                    'number' => 7,
                    'title' => 'Say My Name',
                    'poster' => '',
                    'description' => 'Mike and Jesse are out. Now Walt has to handle things on his own. Hank finally finds a rat in Mike\'s gang.'
                ],
                'episode 08' => [
                    'number' => 8,
                    'title' => 'Gliding Over All',
                    'poster' => '',
                    'description' => 'Walt expands his business overseas, and the money is pouring in.'
                ],
                'episode 09' => [
                    'number' => 9,
                    'title' => 'Blood Money',
                    'poster' => '',
                    'description' => 'Walt is out of the meth business and trying to move on with his life. Jesse tries to get rid of his money. Hank now knows that Walt is the famous Heisenberg.'
                ],
                'episode 10' => [
                    'number' => 10,
                    'title' => 'Buried',
                    'poster' => '',
                    'description' => 'Hank is determined to bring down Walt. Walt scrambles to hide evidence before Hank gets to it, and Skyler tries to stop Hank and Marie from taking away the kids.'
                ],
                'episode 11' => [
                    'number' => 11,
                    'title' => 'Confessions',
                    'poster' => '',
                    'description' => 'Walt makes his next move against Hank, putting Hank in a tough position. Hank confronts Jesse and attempts to turn him against Walt, and Jesse decides it\'s time to move on. Meanwhile, Todd has taken over the business.'
                ],
                'episode 12' => [
                    'number' => 12,
                    'title' => 'Rabid Dog',
                    'poster' => '',
                    'description' => 'Walt discovers Jesse broke into his house and attempted to burn it down. Walt wants to protect his family so he moves them into a hotel for a few nights. Jesse makes plans to take down Walt.'
                ],
                'episode 13' => [
                    'number' => 13,
                    'title' => 'To\'hajiilee',
                    'poster' => '',
                    'description' => 'Jesse and Hank come up with an idea to take Walt down. Walt hires Todd\'s uncle to kill Jesse.'
                ],
                'episode 14' => [
                    'number' => 14,
                    'title' => 'Ozymandias',
                    'poster' => '',
                    'description' => 'Walt goes on the run. Jesse is taken hostage. Marie convinces Skyler to tell Walter, Jr. the truth.'
                ],
                'episode 15' => [
                    'number' => 15,
                    'title' => 'Granite State',
                    'poster' => '',
                    'description' => 'Walt struggles as he adapts to aspects of his new identity. Jesse plans an escape against Jack and his crew.'
                ],
                'episode 16' => [
                    'number' => 16,
                    'title' => 'Felina',
                    'poster' => '',
                    'description' => 'Walter White makes one last attempt to secure his family\'s future, while also visiting some old enemies, during his final return to Albuquerque.'
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
                    'title' => 'To You, in 2000 Years: The Fall of Shiganshina, Part 1',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 02' => [
                    'number' => 2,
                    'title' => 'That Day: The Fall of Shiganshina, Part 2',
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
                ],
                'episode 07' => [
                    'number' => 7,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 08' => [
                    'number' => 8,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 09' => [
                    'number' => 9,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 10' => [
                    'number' => 10,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 11' => [
                    'number' => 11,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 12' => [
                    'number' => 12,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 13' => [
                    'number' => 13,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 14' => [
                    'number' => 14,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 15' => [
                    'number' => 15,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 16' => [
                    'number' => 16,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 17' => [
                    'number' => 17,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 18' => [
                    'number' => 18,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 19' => [
                    'number' => 19,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 20' => [
                    'number' => 20,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 21' => [
                    'number' => 21,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 22' => [
                    'number' => 22,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 23' => [
                    'number' => 23,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 24' => [
                    'number' => 24,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 25' => [
                    'number' => 25,
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
                ],
                'episode 07' => [
                    'number' => 7,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 08' => [
                    'number' => 8,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 09' => [
                    'number' => 9,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 10' => [
                    'number' => 10,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 11' => [
                    'number' => 11,
                    'title' => '',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 12' => [
                    'number' => 11,
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
