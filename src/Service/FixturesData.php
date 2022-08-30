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
                    'poster' => 'https://fr.web.img3.acsta.net/c_400_200/pictures/210/448/21044893_20130927192352717.jpg',
                    'description' => 'Several months have passed and Rick and the expanded group are living a more peaceful life at the prison. Problems surface when Rick encounters a new survivor, and a supply run ends in disaster.'
                ],
                'episode 02' => [
                    'number' => 2,
                    'title' => 'Infected',
                    'poster' => 'https://fr.web.img2.acsta.net/c_400_200/pictures/210/466/21046630_20131003213702734.jpg',
                    'description' => 'Rick is forced to abandon his quiet lifestyle when a mysterious virus puts the lives of everyone at the prison at risk.'
                ],
                'episode 03' => [
                    'number' => 3,
                    'title' => 'Isolation',
                    'poster' => 'https://fr.web.img4.acsta.net/c_400_200/pictures/210/510/21051025_20131021105428591.jpg',
                    'description' => 'As the sick are quarantined, Daryl, Tyreese, Michonne and Bob leave the prison in search of medical supplies. Rick makes a shocking discovery.'
                ],
                'episode 04' => [
                    'number' => 4,
                    'title' => 'Indifference',
                    'poster' => 'https://fr.web.img2.acsta.net/c_400_200/pictures/210/535/21053575_20131029104842878.jpg',
                    'description' => 'Daryl, Tyreese, Michonne and Bob continue to the veterinary college on foot in search of medicine. Rick and Carol go on a run to a nearby town where they find two uninfected stragglers.'
                ],
                'episode 05' => [
                    'number' => 5,
                    'title' => 'Internment',
                    'poster' => 'https://fr.web.img2.acsta.net/c_400_200/pictures/210/549/21054996_2013110510324918.jpg',
                    'description' => 'Hershel struggles to care for the sick as the situation in the cell block escalates. Meanwhile, Rick and Carl defend the prison as the fences give way.'
                ],
                'episode 06' => [
                    'number' => 6,
                    'title' => 'Live Bait',
                    'poster' => 'https://fr.web.img2.acsta.net/c_400_200/pictures/210/569/21056941_20131112141704193.jpg',
                    'description' => 'The Governor bonds with a small family following the downfall of Woodbury.'
                ],
                'episode 07' => [
                    'number' => 7,
                    'title' => 'Dead Weight',
                    'poster' => 'https://fr.web.img3.acsta.net/c_400_200/pictures/210/590/21059069_2013111914565155.jpg',
                    'description' => 'The Governor plans his next move as he, Lilly, Tara and Meghan adjust to new surroundings.'
                ],
                'episode 08' => [
                    'number' => 8,
                    'title' => 'Too Far Gone',
                    'poster' => 'https://fr.web.img2.acsta.net/c_400_200/pictures/13/12/03/12/02/077443.jpg',
                    'description' => 'Rick and the group face imminent danger as The Governor tries to take the prison.'
                ],
                'episode 09' => [
                    'number' => 9,
                    'title' => 'After',
                    'poster' => 'https://fr.web.img6.acsta.net/c_400_200/pictures/14/01/27/10/33/203927.jpg',
                    'description' => 'With the prison overrun, Rick and Carl find themselves on the road looking for shelter. Meanwhile, Michonne is haunted by memories of the past.'
                ],
                'episode 10' => [
                    'number' => 10,
                    'title' => 'Inmates',
                    'poster' => 'https://fr.web.img5.acsta.net/c_400_200/pictures/14/02/10/12/15/470894.jpg',
                    'description' => 'Beth tries to remain hopeful. Tyreese, Lizzie and Mika run into a familiar face. Glenn and Maggie struggle to cope without each other.'
                ],
                'episode 11' => [
                    'number' => 11,
                    'title' => 'Claimed',
                    'poster' => 'https://fr.web.img4.acsta.net/c_400_200/pictures/14/02/25/12/36/551173.jpg',
                    'description' => 'While Carl and Michonne look for supplies, Rick is faced against a gang of marauders. Meanwhile, Glenn and Tara are brought together with three strangers on an important mission.'
                ],
                'episode 12' => [
                    'number' => 12,
                    'title' => 'Still',
                    'poster' => 'https://fr.web.img5.acsta.net/c_400_200/pictures/14/03/04/12/29/012107.jpg',
                    'description' => 'Daryl and Beth seek refuge in the woods, where conflict emerges between the pair.'
                ],
                'episode 13' => [
                    'number' => 13,
                    'title' => 'Alone',
                    'poster' => 'https://fr.web.img5.acsta.net/c_400_200/pictures/14/03/04/12/18/118162.jpg',
                    'description' => 'Maggie, Sasha and Bob clash over whether they should head to Terminus. Daryl and Beth take shelter in a seemingly abandoned funeral home.'
                ],
                'episode 14' => [
                    'number' => 14,
                    'title' => 'The Grove',
                    'poster' => 'https://fr.web.img4.acsta.net/c_400_200/pictures/14/03/11/12/46/112177.jpg',
                    'description' => 'Carol has to cope with old secrets and Lizzie\'s psychotic behavior when she, Tyreese and the girls take refuge in a vacant house on the way to Terminus.'
                ],
                'episode 15' => [
                    'number' => 15,
                    'title' => 'Us',
                    'poster' => 'https://fr.web.img6.acsta.net/c_400_200/pictures/14/03/19/09/43/105050.jpg',
                    'description' => 'Glenn and Tara are set on the way to Terminus, but Abraham is reluctant. Daryl struggles to adjust to the Claimers\' rules.'
                ],
                'episode 16' => [
                    'number' => 16,
                    'title' => 'A',
                    'poster' => 'https://fr.web.img5.acsta.net/c_400_200/pictures/14/03/25/10/58/146759.jpg',
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
                    'poster' => 'https://fr.web.img4.acsta.net/c_400_200/pictures/14/09/18/12/09/168172.jpg',
                    'description' => 'Carol takes drastic action to rescue Rick and the group from the cannibals of Terminus as she and Tyreese reach the compound. A familiar face makes a return.'
                ],
                'episode 02' => [
                    'number' => 2,
                    'title' => 'Strangers',
                    'poster' => 'https://fr.web.img2.acsta.net/c_400_200/pictures/14/09/19/12/18/563668.jpg',
                    'description' => 'Rick and the group cross paths with a mysterious priest and take shelter in his church, soon realizing that they\'re being hunted. Meanwhile, Daryl and Carol follow a lead to the whereabouts of Beth.'
                ],
                'episode 03' => [
                    'number' => 3,
                    'title' => 'Four Walls and a Roof',
                    'poster' => 'https://fr.web.img6.acsta.net/c_400_200/pictures/18/06/04/13/40/5477936.jpg',
                    'description' => 'With Bob\'s life hanging in the balance, the group prepares to fight back against Gareth and his group of cannibals.'
                ],
                'episode 04' => [
                    'number' => 4,
                    'title' => 'Slabtown',
                    'poster' => 'https://fr.web.img5.acsta.net/c_400_200/pictures/14/10/28/14/26/590042.jpg',
                    'description' => 'After being separated from Daryl, Beth finds herself in Grady Memorial Hospital in Atlanta, now controlled by what\'s left of the police force.'
                ],
                'episode 05' => [
                    'number' => 5,
                    'title' => 'Self Help',
                    'poster' => 'https://fr.web.img5.acsta.net/c_400_200/pictures/14/11/03/17/30/332011.jpg',
                    'description' => 'As Glenn, Maggie, Abraham and co. head to D.C., a new revelation threatens to bring the whole journey to a halt.'
                ],
                'episode 06' => [
                    'number' => 6,
                    'title' => 'Consumed',
                    'poster' => 'https://fr.web.img6.acsta.net/c_400_200/pictures/14/11/12/11/41/479652.jpg',
                    'description' => 'Daryl and Carol chase the white-crossed car to a desolated Atlanta with hopes of finding Beth and her kidnappers.'
                ],
                'episode 07' => [
                    'number' => 7,
                    'title' => 'Crossed',
                    'poster' => 'https://fr.web.img5.acsta.net/c_400_200/pictures/14/11/17/12/27/558172.jpg',
                    'description' => 'While Carl, Michonne and Gabriel hold the church, Rick takes a rescue mission to Atlanta, as Abraham\'s group deal with the fallout from Eugene\'s revelation.'
                ],
                'episode 08' => [
                    'number' => 8,
                    'title' => 'Coda',
                    'poster' => 'https://fr.web.img6.acsta.net/c_400_200/pictures/14/12/02/10/43/218366.jpg',
                    'description' => 'Rick and the group go face-to-face against Dawn and her officers in an attempt to save both Beth and Carol without any more bloodshed.'
                ],
                'episode 09' => [
                    'number' => 9,
                    'title' => 'What Happened and What\'s Going On',
                    'poster' => 'https://fr.web.img6.acsta.net/c_400_200/pictures/15/01/23/13/55/485671.jpg',
                    'description' => 'Rick, Glenn, Michonne and Tyreese take Noah to his home in Shirewilt Estates with hopes of finding sanctuary, but what they encounter is something else entirely.'
                ],
                'episode 10' => [
                    'number' => 10,
                    'title' => 'Them',
                    'poster' => 'https://fr.web.img4.acsta.net/c_400_200/pictures/15/02/10/12/29/111958.jpg',
                    'description' => 'Grieving from the deaths of Beth and Tyreese in different ways and with dwindling supplies, the group face the harsh road to Washington D.C.'
                ],
                'episode 11' => [
                    'number' => 11,
                    'title' => 'The Distance',
                    'poster' => 'https://fr.web.img3.acsta.net/c_400_200/pictures/15/02/16/16/45/301525.jpg',
                    'description' => 'Recovering from a devastating storm, Rick and the group find themselves mistrustful of a new survivor who promises them safety in a walled-off community.'
                ],
                'episode 12' => [
                    'number' => 12,
                    'title' => 'Remember',
                    'poster' => 'https://fr.web.img3.acsta.net/c_400_200/pictures/15/02/24/14/15/514000.jpg',
                    'description' => 'Scarred from their experiences in the outside world, the group struggles to adapt to the normality of the Alexandria Safe-Zone.'
                ],
                'episode 13' => [
                    'number' => 13,
                    'title' => 'Forget',
                    'poster' => 'https://fr.web.img2.acsta.net/c_400_200/pictures/15/03/03/14/10/234922.jpg',
                    'description' => 'As Deanna throws a party for the new arrivals, Carol comes up with a plan to get the group\'s weapons back. Meanwhile, Daryl bonds with Aaron, and Sasha struggles to cope.'
                ],
                'episode 14' => [
                    'number' => 14,
                    'title' => 'Spend',
                    'poster' => 'https://fr.web.img3.acsta.net/c_400_200/pictures/15/03/10/10/33/320904.jpg',
                    'description' => 'Eugene is forced to step up when a run led by Glenn goes awry. Back at Alexandria, Carol uncovers a secret.'
                ],
                'episode 15' => [
                    'number' => 15,
                    'title' => 'Try',
                    'poster' => 'https://fr.web.img6.acsta.net/c_400_200/pictures/15/03/25/10/07/006965.jpg',
                    'description' => 'While out recruiting, Daryl and Aaron find troubling signs of human activity. Back at Alexandria, Carl bonds with Enid, and the tension between Rick and Pete comes to a head.'
                ],
                'episode 16' => [
                    'number' => 16,
                    'title' => 'Conquer',
                    'poster' => 'https://fr.web.img6.acsta.net/c_400_200/pictures/15/03/25/10/11/208423.jpg',
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
                    'poster' => 'https://fr.web.img3.acsta.net/c_400_200/pictures/15/07/24/14/55/172768.jpg',
                    'description' => 'Rick and the group come up with a plan to lure a massive herd of walkers away from Alexandria, while flashbacks show the events following Pete\'s death, including Rick\'s reunion with Morgan.'
                ],
                'episode 02' => [
                    'number' => 2,
                    'title' => 'JSS',
                    'poster' => 'https://fr.web.img5.acsta.net/c_400_200/pictures/15/07/24/14/55/171987.jpg',
                    'description' => 'While Rick and his group lure the herd away, Carol and Morgan lead a line of defense against the Wolves when Alexandria comes under attack.'
                ],
                'episode 03' => [
                    'number' => 3,
                    'title' => 'Thank You',
                    'poster' => 'https://fr.web.img4.acsta.net/c_400_200/pictures/18/11/13/07/38/5860983.jpg',
                    'description' => 'With half of the herd out of control, Glenn and Michonne lead Nicholas and their group back to Alexandria, as Rick crosses paths with the surviving members of the Wolves.'
                ],
                'episode 04' => [
                    'number' => 4,
                    'title' => 'Here\'s Not Here',
                    'poster' => 'https://fr.web.img6.acsta.net/c_400_200/pictures/15/10/27/10/12/298327.jpg',
                    'description' => 'Morgan tells the captured wolf about his journey from King County to Alexandria, where he met a lone survivor with a code.'
                ],
                'episode 05' => [
                    'number' => 5,
                    'title' => 'Now',
                    'poster' => 'https://fr.web.img6.acsta.net/c_400_200/pictures/15/11/03/14/29/216528.jpg',
                    'description' => 'Deanna begins to question her leadership. Meanwhile, Maggie shares a secret with Aaron while searching for Glenn, as the herd approaches the safe-zone.'
                ],
                'episode 06' => [
                    'number' => 6,
                    'title' => 'Always Accountable',
                    'poster' => 'https://fr.web.img3.acsta.net/c_400_200/pictures/15/11/09/17/10/251580.jpg',
                    'description' => 'Wounded after being separated from Abraham and Sasha, Daryl finds himself captive of three survivors on the run.'
                ],
                'episode 07' => [
                    'number' => 7,
                    'title' => 'Heads Up',
                    'poster' => 'https://fr.web.img6.acsta.net/c_400_200/pictures/15/11/16/14/59/379439.jpg',
                    'description' => 'Glenn and Enid make their way back to Alexandria. Meanwhile, Spencer puts his life at risk, as the herd finds its way inside the safe-zone.'
                ],
                'episode 08' => [
                    'number' => 8,
                    'title' => 'Start to Finish',
                    'poster' => 'https://fr.web.img6.acsta.net/c_400_200/pictures/15/11/24/10/31/104696.jpg',
                    'description' => 'With the walls down, Alexandria finds itself swarmed by walkers. Meanwhile, Daryl, Abraham and Sasha come face-to-face with a new danger.'
                ],
                'episode 09' => [
                    'number' => 9,
                    'title' => 'No Way Out',
                    'poster' => 'https://fr.web.img6.acsta.net/c_400_200/pictures/16/02/16/10/46/481548.jpg',
                    'description' => 'Daryl, Abraham and Sasha face-off against the Saviors. Back at Alexandria, Rick and his group make their way through the herd.'
                ],
                'episode 10' => [
                    'number' => 10,
                    'title' => 'The Next World',
                    'poster' => 'https://fr.web.img6.acsta.net/c_400_200/pictures/16/02/16/10/58/424524.jpg',
                    'description' => 'Weeks after the walker invasion, Rick and Daryl cross paths with Jesus, a mysterious man with many secrets. Meanwhile, Michonne helps Spencer find closure, as Carl recovers from his injury.'
                ],
                'episode 11' => [
                    'number' => 11,
                    'title' => 'Knots Untie',
                    'poster' => 'https://fr.web.img2.acsta.net/c_400_200/pictures/16/02/24/14/24/288530.jpg',
                    'description' => 'Jesus takes Rick and the group to the Hilltop Colony, a peaceful community overshadowed by the power of the Saviors.'
                ],
                'episode 12' => [
                    'number' => 12,
                    'title' => 'Not Tomorrow Yet',
                    'poster' => 'https://fr.web.img2.acsta.net/c_400_200/pictures/16/02/29/15/29/320967.jpg',
                    'description' => 'Rick leads a surprise attack against the Saviors with the joint forces of Alexandria and the Hilltop. As two group members end up captured, Tara and Heath leave on a two-week supply run.'
                ],
                'episode 13' => [
                    'number' => 13,
                    'title' => 'The Same Boat',
                    'poster' => 'https://fr.web.img4.acsta.net/c_400_200/pictures/16/03/15/10/23/101462.jpg',
                    'description' => 'Carol and Maggie must fight for their lives after being taken by a group of Saviors.'
                ],
                'episode 14' => [
                    'number' => 14,
                    'title' => 'Twice as Far',
                    'poster' => 'https://fr.web.img4.acsta.net/c_400_200/pictures/18/06/04/13/40/5679501.jpg',
                    'description' => 'With medicine running low, Denise goes on a supply with Daryl and Rosita. Meanwhile, Eugene tries to prove himself to Abraham.'
                ],
                'episode 15' => [
                    'number' => 15,
                    'title' => 'East',
                    'poster' => 'https://fr.web.img6.acsta.net/c_400_200/pictures/16/03/22/12/01/214157.jpg',
                    'description' => 'Rick and Morgan set out in the search for Carol. Meanwhile, Daryl and Rosita track down Dwight, as Glenn and Michonne fall into a trap.'
                ],
                'episode 16' => [
                    'number' => 16,
                    'title' => 'Last Day on Earth',
                    'poster' => 'https://fr.web.img3.acsta.net/c_400_200/pictures/16/04/04/15/53/384960.jpg',
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
                    'poster' => 'https://fr.web.img4.acsta.net/c_400_200/pictures/16/10/26/12/34/474085.jpg',
                    'description' => 'Having been brutally overpowered by Negan and his Saviors, Rick and the group kneel helplessly as they suffer heavy losses that will haunt them forever.'
                ],
                'episode 02' => [
                    'number' => 2,
                    'title' => 'The Well',
                    'poster' => 'https://fr.web.img5.acsta.net/c_400_200/pictures/16/10/28/11/59/179172.jpg',
                    'description' => 'Carol and Morgan are brought to a community called the Kingdom, led by the eccentric King Ezekiel.'
                ],
                'episode 03' => [
                    'number' => 3,
                    'title' => 'The Cell',
                    'poster' => 'https://fr.web.img6.acsta.net/c_400_200/pictures/16/11/03/12/07/290705.jpg',
                    'description' => 'Daryl is taken by Negan to the Sanctuary, home of the Saviors. Meanwhile, Dwight is sent on a mission to bring back a runaway member of his group.'
                ],
                'episode 04' => [
                    'number' => 4,
                    'title' => 'Service',
                    'poster' => 'https://fr.web.img2.acsta.net/c_400_200/pictures/16/11/08/11/58/226871.jpg',
                    'description' => 'Still mourning from the recent tragic losses, Rick and the people of Alexandria receive a sobering visit from Negan and his Saviors.'
                ],
                'episode 05' => [
                    'number' => 5,
                    'title' => 'Go Getters',
                    'poster' => 'https://fr.web.img3.acsta.net/c_400_200/pictures/16/11/16/14/09/505775.jpg',
                    'description' => 'Maggie and Sasha recover from their grief at the Hilltop. Meanwhile, Carl and Enid journey to the community, as the Saviors arrive to get their tribute.'
                ],
                'episode 06' => [
                    'number' => 6,
                    'title' => 'Swear',
                    'poster' => 'https://fr.web.img4.acsta.net/c_400_200/pictures/18/10/29/22/09/0135647.jpg',
                    'description' => 'Tara encounters a group of female survivors living near the coast after being separated from Heath during their two-week supply run.'
                ],
                'episode 07' => [
                    'number' => 7,
                    'title' => 'Sing Me a Song',
                    'poster' => 'https://fr.web.img6.acsta.net/c_400_200/pictures/16/11/29/12/39/467959.jpg',
                    'description' => 'As Eugene and Rosita head to the bullet factory, Rick and Aaron search for supplies for Negan. Meanwhile, Carl and Jesus find themselves on their way to the Sanctuary.'
                ],
                'episode 08' => [
                    'number' => 8,
                    'title' => 'Hearts Still Beating',
                    'poster' => 'https://fr.web.img4.acsta.net/c_400_200/pictures/16/12/06/11/11/435055.jpg',
                    'description' => 'Negan\'s unwelcome visit to Alexandria continues as other members scavenge for supplies, things quickly spin out of control.'
                ],
                'episode 09' => [
                    'number' => 9,
                    'title' => 'Rock in the Road',
                    'poster' => 'https://fr.web.img3.acsta.net/c_400_200/pictures/17/01/11/11/14/500822.jpg',
                    'description' => 'Jesus leads Rick and the group to the Kingdom, to convince King Ezekiel in joining Alexandria and the Hilltop in the incoming fight against Negan.'
                ],
                'episode 10' => [
                    'number' => 10,
                    'title' => 'New Best Friends',
                    'poster' => 'https://fr.web.img5.acsta.net/c_400_200/pictures/17/02/14/14/57/147443.jpg',
                    'description' => 'While searching for Father Gabriel, the group comes across a mysterious new collective of survivors. Back at the Kingdom, Carol and Daryl have an emotional reunion.'
                ],
                'episode 11' => [
                    'number' => 11,
                    'title' => 'Hostiles and Calamities',
                    'poster' => 'https://fr.web.img6.acsta.net/c_400_200/pictures/17/02/20/16/09/552682.jpg',
                    'description' => 'Eugene unwillingly begins to work for Negan and the Saviors at the Sanctuary. Meanwhile, Dwight pays a visit to a place from his past.'
                ],
                'episode 12' => [
                    'number' => 12,
                    'title' => 'Say Yes',
                    'poster' => 'https://fr.web.img6.acsta.net/c_400_200/pictures/17/02/28/14/10/578353.jpg',
                    'description' => 'The group scavenge for supplies. Back in Alexandria, Tara must make a morally challenging decision.'
                ],
                'episode 13' => [
                    'number' => 13,
                    'title' => 'Bury Me Here',
                    'poster' => 'https://fr.web.img6.acsta.net/c_400_200/pictures/17/03/14/09/12/148691.jpg',
                    'description' => 'Things don\'t go as planned, when a group of Kingdommers delivers goods to the Saviors during a routine supply drop-off.'
                ],
                'episode 14' => [
                    'number' => 14,
                    'title' => 'The Other Side',
                    'poster' => 'https://fr.web.img2.acsta.net/c_400_200/pictures/17/03/14/17/06/303196.jpg',
                    'description' => 'The Saviors visit the Hilltop unexpectedly, surprising everyone, with plans of taking more than supplies.'
                ],
                'episode 15' => [
                    'number' => 15,
                    'title' => 'Something They Need',
                    'poster' => 'https://fr.web.img6.acsta.net/c_400_200/pictures/17/03/21/10/47/001038.jpg',
                    'description' => 'A group of Alexandrians embark on a journey; One member of the group must make a heartbreaking decision.'
                ],
                'episode 16' => [
                    'number' => 16,
                    'title' => 'The First Day of the Rest of Your Life',
                    'poster' => 'https://fr.web.img3.acsta.net/c_400_200/pictures/17/03/28/12/01/482068.jpg',
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
                    'poster' => 'https://fr.web.img2.acsta.net/c_400_200/pictures/17/08/10/10/11/262028.jpg',
                    'description' => 'Rick and his group, along with the Kingdom and Hilltop, band together to bring the fight to Negan and the Saviors.'
                ],
                'episode 02' => [
                    'number' => 2,
                    'title' => 'The Damned',
                    'poster' => 'https://fr.web.img3.acsta.net/c_400_200/pictures/17/10/23/17/32/3582572.jpg',
                    'description' => 'The plan involving Alexandrians, Kingdommers and Hilltoppers unfolds; As Rick continues to fight, he encounters a familiar face.'
                ],
                'episode 03' => [
                    'number' => 3,
                    'title' => 'Monsters',
                    'poster' => 'https://fr.web.img6.acsta.net/c_400_200/pictures/17/10/30/17/40/2631983.jpg',
                    'description' => 'Conflict with the Saviors leads to unintended consequences for the Hilltop, the Kingdom, and Alexandria.'
                ],
                'episode 04' => [
                    'number' => 4,
                    'title' => 'Some Guy',
                    'poster' => 'https://fr.web.img5.acsta.net/c_400_200/pictures/17/11/07/12/06/5025632.jpg',
                    'description' => 'A new weapon in the Savior arsenal proves to be a giant hurdle as fighting continues between Rick\'s forces and those of the Saviors.'
                ],
                'episode 05' => [
                    'number' => 5,
                    'title' => 'The Big Scary U',
                    'poster' => 'https://fr.web.img6.acsta.net/c_400_200/pictures/18/10/29/22/22/4403361.jpg',
                    'description' => 'A close look at Negan and the lives of the Saviors during the conflict through a familiar set of eyes.'
                ],
                'episode 06' => [
                    'number' => 6,
                    'title' => 'The King, the Widow and Rick',
                    'poster' => 'https://fr.web.img4.acsta.net/c_400_200/pictures/17/11/21/18/04/5442898.jpg',
                    'description' => 'With things looking up for Rick and the group, an argument breaks out at the Hilltop, where the consequences of the decision are life versus death.'
                ],
                'episode 07' => [
                    'number' => 7,
                    'title' => 'Time for After',
                    'poster' => 'https://fr.web.img6.acsta.net/c_400_200/pictures/17/11/28/15/28/5328474.jpg',
                    'description' => 'Negan has to enlist the help of his lieutenants in solving a huge issue facing The Sanctuary; Rick and the group continue to enact the plan.'
                ],
                'episode 08' => [
                    'number' => 8,
                    'title' => 'How It\'s Gotta Be',
                    'poster' => 'https://fr.web.img6.acsta.net/c_400_200/pictures/17/12/04/18/06/0716838.jpg',
                    'description' => 'Every story and battle comes crashing together as everything Rick and his group have done will be put to the test.'
                ],
                'episode 09' => [
                    'number' => 9,
                    'title' => 'Honor',
                    'poster' => 'https://fr.web.img4.acsta.net/c_400_200/pictures/18/02/14/12/32/3673056.jpg',
                    'description' => 'Rick faces new difficulties after a battle. Meanwhile, the fight continues in other communities as core members face hard decisions.'
                ],
                'episode 10' => [
                    'number' => 10,
                    'title' => 'The Lost and the Plunderers',
                    'poster' => 'https://fr.web.img4.acsta.net/c_400_200/pictures/18/02/27/16/45/1705119.jpg',
                    'description' => 'Groups unite their forces and converge on the Hilltop; Aaron and Enid search for allies; Simon takes matters into his own hands.'
                ],
                'episode 11' => [
                    'number' => 11,
                    'title' => 'Dead or Alive Or',
                    'poster' => 'https://fr.web.img2.acsta.net/c_400_200/pictures/18/03/06/16/42/0897948.jpg',
                    'description' => 'Daryl finds himself in bad company as his group heads to the Hilltop; Gabriel\'s faith gets tested.'
                ],
                'episode 12' => [
                    'number' => 12,
                    'title' => 'The Key',
                    'poster' => 'https://fr.web.img3.acsta.net/c_400_200/pictures/18/03/13/13/55/5422493.jpg',
                    'description' => 'Hilltop\'s leadership faces a difficult dilemma after the arrival of unexpected visitors; Rick comes face to face with an adversary.'
                ],
                'episode 13' => [
                    'number' => 13,
                    'title' => 'Do Not Send Us Astray',
                    'poster' => 'https://fr.web.img6.acsta.net/c_400_200/pictures/18/03/23/12/08/0175696.jpg',
                    'description' => 'Trouble arises when unexpected visitors arrive at the Hilltop and the community is thrust into action; heartbreaking discoveries are made.'
                ],
                'episode 14' => [
                    'number' => 14,
                    'title' => 'Still Gotta Mean Something',
                    'poster' => 'https://fr.web.img6.acsta.net/c_400_200/pictures/18/03/29/15/02/2552936.jpg',
                    'description' => 'A Heaps prisoner makes a discovery; Carol searches for someone in the nearby forest; Rick and Morgan find themselves in the company of strangers.'
                ],
                'episode 15' => [
                    'number' => 15,
                    'title' => 'Worth',
                    'poster' => 'https://fr.web.img3.acsta.net/c_400_200/pictures/18/04/03/14/41/4673832.jpg',
                    'description' => 'With the threat of the Saviors still looming, Aaron continues searching for allies; Daryl and Rosita take action and confront an old friend.'
                ],
                'episode 16' => [
                    'number' => 16,
                    'title' => 'Wrath',
                    'poster' => 'https://fr.web.img4.acsta.net/c_400_200/pictures/18/04/10/11/50/5100531.jpg',
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
                    'poster' => 'https://fr.web.img6.acsta.net/c_400_200/pictures/18/08/24/14/52/0449272.jpg',
                    'description' => 'Rick and his group make a risky run into Washington, D.C. to search for artifacts they will need to build the civilization he and Carl envisioned.'
                ],
                'episode 02' => [
                    'number' => 2,
                    'title' => 'The Bridge',
                    'poster' => 'https://fr.web.img3.acsta.net/c_400_200/pictures/18/10/09/11/25/2868751.jpg',
                    'description' => 'The communities join forces to restore a bridge that will facilitate communication and trade; someone is gravely injured at the construction site.'
                ],
                'episode 03' => [
                    'number' => 3,
                    'title' => 'Warning Signs',
                    'poster' => 'https://fr.web.img3.acsta.net/c_400_200/pictures/18/10/16/11/27/0136315.jpg',
                    'description' => 'A mysterious disappearance from the work camp threatens Rick\'s vision for the future.'
                ],
                'episode 04' => [
                    'number' => 4,
                    'title' => 'The Obliged',
                    'poster' => 'https://fr.web.img6.acsta.net/c_400_200/pictures/18/10/23/10/56/1101036.jpg',
                    'description' => 'Rick\'s vision of a civilized future is threatened by a sudden reckoning with past sins that remain unavenged and unforgiven.'
                ],
                'episode 05' => [
                    'number' => 5,
                    'title' => 'What Comes After',
                    'poster' => 'https://fr.web.img2.acsta.net/c_400_200/pictures/18/10/29/17/04/3184405.jpg',
                    'description' => 'Rick is forced to face the past as he struggles to maintain the safety of the communities and protect the future he and Carl envisioned.'
                ],
                'episode 06' => [
                    'number' => 6,
                    'title' => 'Who Are You Now?',
                    'poster' => 'https://fr.web.img4.acsta.net/c_400_200/pictures/18/11/05/17/19/5052851.jpg',
                    'description' => 'The Survivors encounter unfamiliar faces outside the safety of their community\'s walls and must decide whether or not this new group can be trusted.'
                ],
                'episode 07' => [
                    'number' => 7,
                    'title' => 'Stradivarius',
                    'poster' => 'https://fr.web.img3.acsta.net/c_400_200/pictures/18/11/12/18/03/1676391.jpg',
                    'description' => 'Carol seeks out an old friend living alone in a wilderness teeming with walkers; survivors make the perilous trek to a new home.'
                ],
                'episode 08' => [
                    'number' => 8,
                    'title' => 'Evolution',
                    'poster' => 'https://fr.web.img6.acsta.net/c_400_200/pictures/18/11/19/17/38/3194551.jpg',
                    'description' => 'A small rescue mission braves a dangerous herd in their hunt for a missing comrade, only to discover a surprising threat that could doom them all.'
                ],
                'episode 09' => [
                    'number' => 9,
                    'title' => 'Adaptation',
                    'poster' => 'https://fr.web.img5.acsta.net/c_400_200/pictures/19/01/31/09/39/3959515.jpg',
                    'description' => 'The group unmasks a disturbing and dangerous new threat. An escaped captive revisits his past.'
                ],
                'episode 10' => [
                    'number' => 10,
                    'title' => 'Omega',
                    'poster' => 'https://fr.web.img5.acsta.net/c_400_200/pictures/19/02/19/09/38/3452485.jpg',
                    'description' => 'Another arrival at the Hilltop Colony reveals information about the leader of a hostile new group of savages. A party searches for Alden and Luke.'
                ],
                'episode 11' => [
                    'number' => 11,
                    'title' => 'Bounty',
                    'poster' => 'https://fr.web.img4.acsta.net/c_400_200/pictures/19/02/05/11/34/4536790.jpg',
                    'description' => 'The Whisperers, led by Alpha, confront the Hilltop in a harrowing attempt to retrieve her daughter; a supply run for the Kingdom turns into a dangerous quest.'
                ],
                'episode 12' => [
                    'number' => 12,
                    'title' => 'Guardians',
                    'poster' => 'https://fr.web.img3.acsta.net/c_400_200/pictures/19/02/26/10/34/1190491.jpg',
                    'description' => 'While one community struggles to ease tensions that threaten to divide from within, the true nature of another group comes into focus; a mission to rescue a friend has potentially deadly consequences.'
                ],
                'episode 13' => [
                    'number' => 13,
                    'title' => 'Chokepoint',
                    'poster' => 'https://fr.web.img6.acsta.net/c_400_200/pictures/19/03/05/09/56/1270428.jpg',
                    'description' => 'Daryl\'s daring rescue mission forces Alpha to unleash a group of her own to retrieve what belongs to her, even if the price is paid in blood, the Kingdom\'s plans to reunite the communities are put in jeopardy.'
                ],
                'episode 14' => [
                    'number' => 14,
                    'title' => 'Scars',
                    'poster' => 'https://fr.web.img2.acsta.net/c_400_200/pictures/19/03/14/10/29/4987219.jpg',
                    'description' => 'An outsider\'s arrival forces Alexandria to rehash devastating old wounds; eye-opening secrets from the past are revealed.'
                ],
                'episode 15' => [
                    'number' => 15,
                    'title' => 'The Calm Before',
                    'poster' => 'https://fr.web.img6.acsta.net/c_400_200/pictures/19/03/19/14/45/1751507.jpg',
                    'description' => 'The four communities come together in celebration at the Kingdom\'s fair, but while some pacts are renewed, others come at a much steeper price.'
                ],
                'episode 16' => [
                    'number' => 16,
                    'title' => 'The Storm',
                    'poster' => 'https://fr.web.img2.acsta.net/c_400_200/pictures/19/03/25/17/09/3714903.jpg',
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
                    'poster' => 'https://fr.web.img2.acsta.net/c_400_200/pictures/19/09/18/10/44/1012203.jpg',
                    'description' => 'The group in Oceanside continues to train in case the Whisperers return; tensions are high as the heroes struggle to hold onto their concept of civilization.'
                ],
                'episode 02' => [
                    'number' => 2,
                    'title' => 'We Are the End of the World',
                    'poster' => 'https://fr.web.img6.acsta.net/c_400_200/pictures/19/10/08/09/37/1503361.jpg',
                    'description' => 'The origins of Alpha and Beta are revealed; Alpha attempts to toughen up Lydia as they prepare to walk with the dead; the Whisperers create their herds.'
                ],
                'episode 03' => [
                    'number' => 3,
                    'title' => 'Ghosts',
                    'poster' => 'https://fr.web.img3.acsta.net/c_400_200/pictures/19/10/15/15/11/0109381.jpg',
                    'description' => 'The threat of the Whisperers return leads to paranoia sweeping over Alexandria; in the meantime, Carol battles with the need for revenge.'
                ],
                'episode 04' => [
                    'number' => 4,
                    'title' => 'Silence the Whisperers',
                    'poster' => 'https://fr.web.img6.acsta.net/c_400_200/pictures/19/10/22/14/48/3717639.jpg',
                    'description' => 'The outcast Lydia is badly treated by three Alexandrians. When Negan saves her from an attack, the life changes in Alexandria. Meanwhile Michonne and a group of Alexandrians head to Hilltop to save survivors of a collapsed wall.'
                ],
                'episode 05' => [
                    'number' => 5,
                    'title' => 'What It Always Is',
                    'poster' => 'https://fr.web.img4.acsta.net/c_400_200/pictures/19/10/29/14/51/5751852.jpg',
                    'description' => 'Supplies go missing from Hilltop; Negan is idolized by Brandon; Ezekiel holds a secret.'
                ],
                'episode 06' => [
                    'number' => 6,
                    'title' => 'Bonds',
                    'poster' => 'https://fr.web.img6.acsta.net/c_400_200/pictures/19/11/05/14/45/3175540.jpg',
                    'description' => 'Carol and Daryl go on a mission together; Siddiq struggles to solve a mystery.'
                ],
                'episode 07' => [
                    'number' => 7,
                    'title' => 'Open Your Eyes',
                    'poster' => 'https://fr.web.img4.acsta.net/c_400_200/pictures/19/11/14/13/55/5614643.jpg',
                    'description' => 'Carol pushes boundaries that make Daryl uneasy; Alpha and Beta have reservations about someone.'
                ],
                'episode 08' => [
                    'number' => 8,
                    'title' => 'The World Before',
                    'poster' => 'https://fr.web.img6.acsta.net/c_400_200/pictures/19/11/20/17/19/0277252.jpg',
                    'description' => 'A fight causes tensions in Oceanside; The Alexandrians set out on a high-stakes mission.'
                ],
                'episode 09' => [
                    'number' => 9,
                    'title' => 'Squeeze',
                    'poster' => 'https://fr.web.img6.acsta.net/c_400_200/pictures/20/02/19/15/26/0603070.jpg',
                    'description' => 'The collected communities are reluctantly respecting the new borderlines being imposed on them.'
                ],
                'episode 10' => [
                    'number' => 10,
                    'title' => 'Stalker',
                    'poster' => 'https://fr.web.img5.acsta.net/c_400_200/pictures/20/02/25/10/54/3006724.jpg',
                    'description' => 'The group must defend Alexandria from a threatening outside force.'
                ],
                'episode 11' => [
                    'number' => 11,
                    'title' => 'Morning Star',
                    'poster' => 'https://fr.web.img2.acsta.net/c_400_200/pictures/20/03/02/17/04/1350873.jpg',
                    'description' => 'The Whisperers are coming for Hilltop, after Daryl and Lydia\'s encounter with Alpha, the communities must decide whether to run or fight; Eugene\'s communication with Stephanie gets complicated.'
                ],
                'episode 12' => [
                    'number' => 12,
                    'title' => 'Walk with Us',
                    'poster' => 'https://fr.web.img5.acsta.net/c_400_200/pictures/20/03/10/09/58/2527155.jpg',
                    'description' => 'The survivors try to escape from the Whisperer\'s walkers horde after the battle of Hilltop.'
                ],
                'episode 13' => [
                    'number' => 13,
                    'title' => 'What We Become',
                    'poster' => 'https://fr.web.img6.acsta.net/c_400_200/pictures/20/03/16/17/36/5247702.jpg',
                    'description' => 'Michonne takes Virgil back to his mysterious island to reunite with his family; in exchange, Virgil promises weapons that could change the tide of the Whisperer War.'
                ],
                'episode 14' => [
                    'number' => 14,
                    'title' => 'Look at the Flowers',
                    'poster' => 'https://fr.web.img6.acsta.net/c_400_200/pictures/20/03/24/09/24/5217460.jpg',
                    'description' => 'Heroes and villains reckon with the aftermath of the Hilltop fire; Eugene takes a group on a journey to meet Stephanie, with the hopes of befriending another civilization.'
                ],
                'episode 15' => [
                    'number' => 15,
                    'title' => 'The Tower',
                    'poster' => 'https://fr.web.img4.acsta.net/c_400_200/pictures/20/03/31/11/01/0141042.jpg',
                    'description' => 'The communities prepare for the final battle of the Whisperer War; meanwhile, Eugene\'s group encounters Princess.'
                ],
                'episode 16' => [
                    'number' => 16,
                    'title' => 'A Certain Doom',
                    'poster' => 'https://fr.web.img5.acsta.net/c_400_200/pictures/20/08/20/09/50/4767416.jpg',
                    'description' => 'Beta engages the final battle of the Whisperer War.'
                ],
                'episode 17' => [
                    'number' => 17,
                    'title' => 'Home Sweet Home',
                    'poster' => 'https://fr.web.img3.acsta.net/c_400_200/pictures/21/01/13/10/38/1141653.jpg',
                    'description' => 'Maggie returns, to the dismay of Negan; the trials she endured since leaving have made her harder in order for her and her son to survive; Daryl and Maggie unexpectedly fight an unseen and unknown threat.'
                ],
                'episode 18' => [
                    'number' => 18,
                    'title' => 'Find Me',
                    'poster' => 'https://fr.web.img4.acsta.net/c_400_200/pictures/21/03/08/13/41/2671063.jpg',
                    'description' => 'Daryl and Carol find an old cabin that takes Daryl back to his years away from the group after Rick disappeared; he relives the painful memory of meeting a reticent survivor and the toxic events that amplified his relationship with Dog.'
                ],
                'episode 19' => [
                    'number' => 19,
                    'title' => 'One More',
                    'poster' => 'https://fr.web.img6.acsta.net/c_400_200/pictures/21/03/08/13/42/3380051.jpg',
                    'description' => 'With Maggie\'s map, Gabriel and Aaron search for food and supplies to bring back to Alexandria, checking out one more location, they chance upon a stash; faith is broken and optimism is fragmented when they are put to the ultimate test.'
                ],
                'episode 20' => [
                    'number' => 20,
                    'title' => 'Splinter',
                    'poster' => 'https://fr.web.img4.acsta.net/c_400_200/pictures/21/03/22/11/44/5186923.jpg',
                    'description' => 'Eugene, Ezekiel, Yumiko, and Princess are captured and separated. Princess struggles with memories of her traumatic past and tries to escape one way or another with the help of Ezekiel.'
                ],
                'episode 21' => [
                    'number' => 21,
                    'title' => 'Diverged',
                    'poster' => 'https://fr.web.img6.acsta.net/c_400_200/pictures/21/03/29/12/52/3462489.jpg',
                    'description' => 'Daryl and Carol come to a fork in the road and head their separate ways. Each going into their own type of survival mode, the easiest of challenges become much harder.'
                ],
                'episode 22' => [
                    'number' => 22,
                    'title' => 'Here\'s Negan',
                    'poster' => 'https://fr.web.img6.acsta.net/c_400_200/pictures/21/04/01/23/47/5776749.jpg',
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
                    'poster' => 'https://fr.web.img3.acsta.net/c_400_200/pictures/21/08/17/17/44/5983353.jpg',
                    'description' => 'Daryl leads a team to scavenge the military base he discovered; Maggie tells her story, prompting a new mission for survival that only Negan can lead; Eugene and his group go through assessment by the Commonwealth\'s paramilitary police.'
                ],
                'episode 02' => [
                    'number' => 2,
                    'title' => 'Acheron: Part II',
                    'poster' => 'https://fr.web.img5.acsta.net/c_400_200/pictures/21/08/24/12/40/1389835.jpg',
                    'description' => 'Maggie\'s mission takes the team through a subway tunnel, challenged by a recalcitrant Negan and lurking walkers, with Eugene\'s group, Yumiko searches for answers about her brother and challenges the processes at the Commonwealth outpost.'
                ],
                'episode 03' => [
                    'number' => 3,
                    'title' => 'Hunted',
                    'poster' => 'https://fr.web.img4.acsta.net/c_400_200/pictures/21/09/01/15/07/4314040.jpg',
                    'description' => 'Maggie\'s mission team gets separated and hunted by the Reapers, Carol, Rosita, Magna and Kelly attempt to catch horses for Alexandria; Judith, RJ, Hershel and Gracie cope with their parents going away.'
                ],
                'episode 04' => [
                    'number' => 4,
                    'title' => 'Rendition',
                    'poster' => 'https://fr.web.img5.acsta.net/c_400_200/pictures/21/09/09/14/19/1230058.jpg',
                    'description' => 'Daryl and Dog get captured by the Reapers; they are taken to the Meridian and reconnect with a familiar figure from their past.'
                ],
                'episode 05' => [
                    'number' => 5,
                    'title' => 'Out of the Ashes',
                    'poster' => 'https://fr.web.img2.acsta.net/c_400_200/pictures/21/09/15/13/42/1134030.jpg',
                    'description' => 'Aaron, Carol, Lydia, and Jerry go to the Hilltop ruins for blacksmith tools and nearby game, Eugene\'s group goes through orientation at the Commonwealth; Maggie and Negan trudge through the woods; Judith and the kids clash with teenagers.'
                ],
                'episode 06' => [
                    'number' => 6,
                    'title' => 'On the Inside',
                    'poster' => 'https://fr.web.img5.acsta.net/c_400_200/pictures/21/09/21/14/38/2133771.jpg',
                    'description' => 'Escaping from walkers, Connie and Virgil hide in a house occupied by mysterious creatures; Pope tests Daryl\'s loyalty to the Reapers with a conflicting mission; Kelly leaves Alexandria in search of Connie.'
                ],
                'episode 07' => [
                    'number' => 7,
                    'title' => 'Promises Broken',
                    'poster' => 'https://fr.web.img2.acsta.net/c_400_200/pictures/21/09/28/14/57/1991638.jpg',
                    'description' => 'Maggie and Elijah learn a new survival tactic from Negan; Eugene\'s group clears walkers to pay their fines, Yumiko interviews for an upper-class job, Daryl learns more about Leah and the Reapers; Gabriel encounters a man of God.'
                ],
                'episode 08' => [
                    'number' => 8,
                    'title' => 'For Blood',
                    'poster' => 'https://fr.web.img3.acsta.net/c_400_200/pictures/21/10/06/16/13/4545965.jpg',
                    'description' => 'The Reapers defend Meridian from an incoming herd; Pope suspects Maggie is behind the attack, while Daryl treads carefully; Alexandrians scramble to protect themselves when a violent storm leaves them vulnerable to walkers.'
                ],
                'episode 09' => [
                    'number' => 9,
                    'title' => 'No Other Way',
                    'poster' => 'https://fr.web.img3.acsta.net/c_400_200/pictures/22/01/25/16/53/2406839.jpg',
                    'description' => 'Hellfire rains down on those at Meridian as every fight with the Reapers proves to be a brutal battle. At home in Alexandria, the violent rainstorm rages on as walkers continue to pour in, threatening everyone\'s safety.'
                ],
                'episode 10' => [
                    'number' => 10,
                    'title' => 'New Haunts',
                    'poster' => 'https://fr.web.img4.acsta.net/c_400_200/pictures/22/03/01/16/54/5259678.jpg',
                    'description' => 'The heroes experience Halloween in the Commonwealth; Daryl and Rosita undergo military training led by Mercer; Carol investigates Ezekiel\'s medical condition.'
                ],
                'episode 11' => [
                    'number' => 11,
                    'title' => 'Rogue Element',
                    'poster' => 'https://fr.web.img2.acsta.net/c_400_200/pictures/22/03/03/10/21/3294338.jpg',
                    'description' => 'Eugene looks for Stephanie after she mysteriously goes missing. Connie investigates a story on Trooper Davis. Carol helps Hornsby with a labor dispute at a drug farm.'
                ],
                'episode 12' => [
                    'number' => 12,
                    'title' => 'The Lucky Ones',
                    'poster' => 'https://fr.web.img4.acsta.net/c_400_200/pictures/22/03/09/15/55/0608758.jpg',
                    'description' => 'Aaron and Maggie meet Gov. Pamela Milton as she tours Alexandria, Oceanside and Hilltop; Ezekiel finds himself lucky during a routine checkup; Eugene processes Max\'s story.'
                ],
                'episode 13' => [
                    'number' => 13,
                    'title' => 'Warlords',
                    'poster' => 'https://fr.web.img5.acsta.net/c_400_200/pictures/22/03/15/15/28/5986949.jpg',
                    'description' => 'Maggie, Lydia, and Elijah help a stranger from another community called Riverbend. They run into Aaron, who tells them about a mission he embarked on with Gabriel as emissaries for the Commonwealth.'
                ],
                'episode 14' => [
                    'number' => 14,
                    'title' => 'The Rotten Core',
                    'poster' => 'https://fr.web.img6.acsta.net/c_400_200/pictures/22/03/28/17/07/4927710.jpg',
                    'description' => 'Maggie, Lydia and Elijah help Aaron and Gabriel on a rescue mission; in the chaos, Negan finds himself watching over Hershel; Sebastian coerces Daryl and Rosita into pulling a heist.'
                ],
                'episode 15' => [
                    'number' => 15,
                    'title' => 'Trust',
                    'poster' => 'https://fr.web.img4.acsta.net/c_400_200/pictures/22/03/30/11/25/0129269.jpg',
                    'description' => 'Hornsby marches Daryl and troops to confront Maggie at Hilltop, after a harrowing heist, Rosita gets Connie, Kelly, Eugene, and Max to investigate the Miltons; Ezekiel helps hospital patients in need.'
                ],
                'episode 16' => [
                    'number' => 16,
                    'title' => 'Acts of God',
                    'poster' => 'https://fr.web.img6.acsta.net/c_400_200/pictures/22/04/07/11/16/4245227.jpg',
                    'description' => 'Maggie prepares to defend Hilltop and the people of Riverbend against Hornsby.'
                ],
                'episode 17' => [
                    'number' => 17,
                    'title' => '11.17',
                    'poster' => 'https://fr.web.img3.acsta.net/c_400_200/pictures/21/04/19/14/51/5593951.jpg',
                    'description' => ''
                ],
                'episode 18' => [
                    'number' => 18,
                    'title' => '11.18',
                    'poster' => 'https://fr.web.img3.acsta.net/c_400_200/pictures/21/04/19/14/51/5593951.jpg',
                    'description' => ''
                ],
                'episode 19' => [
                    'number' => 19,
                    'title' => '11.19',
                    'poster' => 'https://fr.web.img3.acsta.net/c_400_200/pictures/21/04/19/14/51/5593951.jpg',
                    'description' => ''
                ],
                'episode 20' => [
                    'number' => 20,
                    'title' => '11.20',
                    'poster' => 'https://fr.web.img3.acsta.net/c_400_200/pictures/21/04/19/14/51/5593951.jpg',
                    'description' => ''
                ],
                'episode 21' => [
                    'number' => 21,
                    'title' => '11.21',
                    'poster' => 'https://fr.web.img3.acsta.net/c_400_200/pictures/21/04/19/14/51/5593951.jpg',
                    'description' => ''
                ],
                'episode 22' => [
                    'number' => 22,
                    'title' => '11.22',
                    'poster' => 'https://fr.web.img3.acsta.net/c_400_200/pictures/21/04/19/14/51/5593951.jpg',
                    'description' => ''
                ],
                'episode 23' => [
                    'number' => 23,
                    'title' => '11.23',
                    'poster' => 'https://fr.web.img3.acsta.net/c_400_200/pictures/21/04/19/14/51/5593951.jpg',
                    'description' => ''
                ],
                'episode 24' => [
                    'number' => 24,
                    'title' => '11.24',
                    'poster' => 'https://fr.web.img3.acsta.net/c_400_200/pictures/21/04/19/14/51/5593951.jpg',
                    'description' => ''
                ]
            ]
        ]
    ];

    const GAME_OF_THRONES = [
        'Season 01' => [
            'number' => 1,
            'poster' => 'https://fr.web.img6.acsta.net/c_225_300/pictures/19/03/21/17/05/1927893.jpg',
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
                    'poster' => 'https://fr.web.img5.acsta.net/c_400_200/pictures/18/06/27/06/02/2385641.jpg',
                    'description' => 'Eddard Stark is torn between his family and an old friend when asked to serve at the side of King Robert Baratheon, Viserys plans to wed his sister to a nomadic warlord in exchange for an army.'
                ],
                'episode 02' => [
                    'number' => 2,
                    'title' => 'The Kingsroad',
                    'poster' => 'https://fr.web.img3.acsta.net/c_400_200/pictures/18/06/27/06/04/0654457.jpg',
                    'description' => 'While Bran recovers from his fall, Ned takes only his daughters to King\'s Landing. Jon Snow goes with his uncle Benjen to the Wall. Tyrion joins them.'
                ],
                'episode 03' => [
                    'number' => 3,
                    'title' => 'Lord Snow',
                    'poster' => 'https://fr.web.img5.acsta.net/c_400_200/pictures/18/06/27/06/05/5365463.jpg',
                    'description' => 'Jon begins his training with the Night\'s Watch; Ned confronts his past and future at King\'s Landing, Daenerys finds herself at odds with Viserys.'
                ],
                'episode 04' => [
                    'number' => 4,
                    'title' => 'Cripples, Bastards, and Broken Things',
                    'poster' => 'https://fr.web.img5.acsta.net/c_400_200/pictures/18/06/27/06/07/5757729.jpg',
                    'description' => 'Eddard investigates Jon Arryn\'s murder. Jon befriends Samwell Tarly, a coward who has come to join the Night\'s Watch.'
                ],
                'episode 05' => [
                    'number' => 5,
                    'title' => 'The Wolf and the Lion',
                    'poster' => 'https://fr.web.img6.acsta.net/c_400_200/pictures/18/06/27/06/10/2417222.jpg',
                    'description' => 'Catelyn has captured Tyrion and plans to bring him to her sister, Lysa Arryn, at the Vale, to be tried for his, supposed, crimes against Bran. Robert plans to have Daenerys killed, but Eddard refuses to be a part of it and quits.'
                ],
                'episode 06' => [
                    'number' => 6,
                    'title' => 'A Golden Crown',
                    'poster' => 'https://fr.web.img2.acsta.net/c_400_200/pictures/18/06/27/06/13/0811053.jpg',
                    'description' => 'While recovering from his battle with Jaime, Eddard is forced to run the kingdom while Robert goes hunting. Tyrion demands a trial by combat for his freedom. Viserys is losing his patience with Drogo.'
                ],
                'episode 07' => [
                    'number' => 7,
                    'title' => 'You Win or You Die',
                    'poster' => 'https://fr.web.img3.acsta.net/c_400_200/pictures/18/06/27/06/15/3567398.jpg',
                    'description' => 'Robert has been injured while hunting and is dying. Jon and the others finally take their vows to the Night\'s Watch. A man, sent by Robert, is captured for trying to poison Daenerys. Furious, Drogo vows to attack the Seven Kingdoms.'
                ],
                'episode 08' => [
                    'number' => 8,
                    'title' => 'The Pointy End',
                    'poster' => 'https://fr.web.img6.acsta.net/c_400_200/pictures/18/06/27/06/17/5979990.jpg',
                    'description' => 'The Lannisters press their advantage over the Starks; Robb rallies his father\'s northern allies and heads south to war; The White Walkers attack the Wall; Tyrion returns to his father with some new friends.'
                ],
                'episode 09' => [
                    'number' => 9,
                    'title' => 'Baelor',
                    'poster' => 'https://fr.web.img6.acsta.net/c_400_200/pictures/18/06/27/06/20/0369132.jpg',
                    'description' => 'Robb goes to war against the Lannisters. Jon finds himself struggling on deciding if his place is with Robb or the Night\'s Watch. Drogo has fallen ill from a fresh battle wound. Daenerys is desperate to save him.'
                ],
                'episode 10' => [
                    'number' => 10,
                    'title' => 'Fire and Blood',
                    'poster' => 'https://fr.web.img4.acsta.net/c_400_200/pictures/18/06/27/06/22/3714566.jpg',
                    'description' => 'Robb vows to get revenge on the Lannisters. Jon must officially decide if his place is with Robb or the Night\'s Watch. Daenerys says her final goodbye to Drogo.'
                ]
            ]
        ],
        'Season 02' => [
            'number' => 2,
            'poster' => 'https://fr.web.img6.acsta.net/c_225_300/medias/nmedia/18/89/08/62/20043497.jpg',
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
                    'poster' => 'https://fr.web.img6.acsta.net/c_400_200/pictures/18/05/24/11/58/2659291.jpg',
                    'description' => 'Tyrion arrives at King\'s Landing to take his father\'s place as Hand of the King. Stannis Baratheon plans to take the Iron Throne for his own. Robb tries to decide his next move in the war. The Night\'s Watch arrive at the house of Craster.'
                ],
                'episode 02' => [
                    'number' => 2,
                    'title' => 'The Night Lands',
                    'poster' => 'https://fr.web.img4.acsta.net/c_400_200/pictures/18/05/24/11/58/2715541.jpg',
                    'description' => 'Arya makes friends with Gendry. Tyrion tries to take control of the Small Council. Theon arrives at his home, Pyke, in order to persuade his father into helping Robb with the war. Jon tries to investigate Craster\'s secret.'
                ],
                'episode 03' => [
                    'number' => 3,
                    'title' => 'What Is Dead May Never Die',
                    'poster' => 'https://fr.web.img6.acsta.net/c_400_200/pictures/18/05/24/11/58/2767104.jpg',
                    'description' => 'Tyrion tries to see who he can trust in the Small Council. Catelyn visits Renly to try and persuade him to join Robb in the war. Theon must decide if his loyalties lie with his own family or with Robb.'
                ],
                'episode 04' => [
                    'number' => 4,
                    'title' => 'Garden of Bones',
                    'poster' => 'https://fr.web.img2.acsta.net/c_400_200/pictures/18/05/24/11/58/2807729.jpg',
                    'description' => 'Lord Baelish arrives at Renly\'s camp just before he faces off against Stannis. Daenerys and her company are welcomed into the city of Qarth. Arya, Gendry, and Hot Pie find themselves imprisoned at Harrenhal.'
                ],
                'episode 05' => [
                    'number' => 5,
                    'title' => 'The Ghost of Harrenhal',
                    'poster' => 'https://fr.web.img2.acsta.net/c_400_200/pictures/18/05/24/11/58/2867105.jpg',
                    'description' => 'Tyrion investigates a secret weapon that King Joffrey plans to use against Stannis. Meanwhile, as a token for saving his life, Jaqen H\'ghar offers to kill three people that Arya chooses.'
                ],
                'episode 06' => [
                    'number' => 6,
                    'title' => 'The Old Gods and the New',
                    'poster' => 'https://fr.web.img2.acsta.net/c_400_200/pictures/18/05/24/11/58/2923355.jpg',
                    'description' => 'Theon seizes control of Winterfell. Jon captures a wildling, named Ygritte. The people of King\'s Landing begin to turn against King Joffrey. Daenerys looks to buy ships to sail for the Seven Kingdoms.'
                ],
                'episode 07' => [
                    'number' => 7,
                    'title' => 'A Man Without Honor',
                    'poster' => 'https://fr.web.img6.acsta.net/c_400_200/pictures/18/05/24/11/58/2979606.jpg',
                    'description' => 'Bran and Rickon have escaped Winterfell. Theon tries to hunt them down. Daenerys\' dragons have been stolen. Jon travels through the wilderness with Ygritte as his prisoner. Sansa has bled and is now ready to have Joffrey\'s children.'
                ],
                'episode 08' => [
                    'number' => 8,
                    'title' => 'The Prince of Winterfell',
                    'poster' => 'https://fr.web.img6.acsta.net/c_400_200/pictures/18/05/24/11/58/3031168.jpg',
                    'description' => 'Stannis is just days from King\'s Landing. Tyrion prepares for his arrival. Jon and Qhorin are taken prisoner by the wildlings. Catelyn is arrested for releasing Jaime. Arya, Gendry, and Hot Pie plan to escape from Harrenhal.'
                ],
                'episode 09' => [
                    'number' => 9,
                    'title' => 'Blackwater',
                    'poster' => 'https://fr.web.img4.acsta.net/c_400_200/pictures/18/05/24/11/58/3071794.jpg',
                    'description' => 'Stannis Baratheon\'s fleet and army arrive at King\'s Landing and the battle for the city begins. Cersei plans for her and her children\'s future.'
                ],
                'episode 10' => [
                    'number' => 10,
                    'title' => 'Valar Morghulis',
                    'poster' => 'https://fr.web.img3.acsta.net/c_400_200/pictures/18/05/24/11/58/3131169.jpg',
                    'description' => 'Joffrey puts Sansa aside for Margaery Tyrell. Robb marries Talisa Maegyr. Jon prepares to meet Mance Rayder. Arya says farewell to Jaqen H\'ghar. Daenerys tries to rescue her dragons.'
                ]
            ]
        ],
        'Season 03' => [
            'number' => 3,
            'poster' => 'https://fr.web.img6.acsta.net/c_225_300/medias/nmedia/18/89/08/62/20481643.jpg',
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
                    'poster' => 'https://fr.web.img6.acsta.net/c_400_200/pictures/18/06/27/06/52/2959979.jpg',
                    'description' => 'Jon is brought before Mance Rayder, the King Beyond the Wall, while the Night\'s Watch survivors retreat south. In King\'s Landing, Tyrion asks for his reward. Littlefinger offers Sansa a way out.'
                ],
                'episode 02' => [
                    'number' => 2,
                    'title' => 'Dark Wings, Dark Words',
                    'poster' => 'https://fr.web.img5.acsta.net/c_400_200/pictures/18/06/27/06/54/3400654.jpg',
                    'description' => 'Bran and company meet Jojen and Meera Reed. Arya, Gendry, and Hot Pie meet the Brotherhood. Jaime travels through the wilderness with Brienne. Sansa confesses her true feelings about Joffery to Margaery.'
                ],
                'episode 03' => [
                    'number' => 3,
                    'title' => 'Walk of Punishment',
                    'poster' => 'https://fr.web.img3.acsta.net/c_400_200/pictures/18/06/27/06/57/4222649.jpg',
                    'description' => 'Robb and Catelyn arrive at Riverrun for Lord Hoster Tully\'s funeral. Tywin names Tyrion the new Master of Coin. Arya says goodbye to Hot Pie. The Night\'s Watch returns to Craster\'s. Brienne and Jaime are taken prisoner.'
                ],
                'episode 04' => [
                    'number' => 4,
                    'title' => 'And Now His Watch Is Ended',
                    'poster' => 'https://fr.web.img6.acsta.net/c_400_200/pictures/18/06/27/06/59/5591191.jpg',
                    'description' => 'Jaime mopes over his lost hand. Cersei is growing uncomfortable with the Tyrells. The Night\'s Watch is growing impatient with Craster. Daenerys buys the Unsullied.'
                ],
                'episode 05' => [
                    'number' => 5,
                    'title' => 'Kissed by Fire',
                    'poster' => 'https://fr.web.img3.acsta.net/c_400_200/pictures/18/06/27/07/01/3955320.jpg',
                    'description' => 'Robb\'s army is falling apart. Jaime reveals a story, to Brienne, that he has never told anyone. Jon breaks his vows. The Hound is granted his freedom. The Lannisters hatch a new plan.'
                ],
                'episode 06' => [
                    'number' => 6,
                    'title' => 'The Climb',
                    'poster' => 'https://fr.web.img4.acsta.net/c_400_200/pictures/18/06/27/07/03/5169467.jpg',
                    'description' => 'Jon and the wildlings scale the Wall. The Brotherhood sells Gendry to Melisandre. Robb does what he can to win back the Freys. Tyrion tells Sansa about their engagement.'
                ],
                'episode 07' => [
                    'number' => 7,
                    'title' => 'The Bear and the Maiden Fair',
                    'poster' => 'https://fr.web.img5.acsta.net/c_400_200/pictures/18/06/27/07/05/4471102.jpg',
                    'description' => 'Jon and the wildlings travel south of the Wall. Talisa tells Robb that she\'s pregnant. Arya runs away from the Brotherhood. Daenerys arrives at Yunkai. Jaime leaves Brienne behind at Harrenhal.'
                ],
                'episode 08' => [
                    'number' => 8,
                    'title' => 'Second Sons',
                    'poster' => 'https://fr.web.img4.acsta.net/c_400_200/pictures/18/06/27/07/07/2475853.jpg',
                    'description' => 'Daenerys tries to persuade the Second Sons to join her against Yunkai. Stannis releases Davos from the dungeons. Sam and Gilly are attacked by a White Walker. Sansa and Tyrion wed.'
                ],
                'episode 09' => [
                    'number' => 9,
                    'title' => 'The Rains of Castamere',
                    'poster' => 'https://fr.web.img3.acsta.net/c_400_200/pictures/18/06/27/07/11/1966628.jpg',
                    'description' => 'Robb and Catelyn arrive at the Twins for the wedding. Jon is put to the test to see where his loyalties truly lie. Bran\'s group decides to split up. Daenerys plans an invasion of Yunkai.'
                ],
                'episode 10' => [
                    'number' => 10,
                    'title' => 'Mhysa',
                    'poster' => 'https://fr.web.img2.acsta.net/c_400_200/pictures/210/117/21011762_20130611111017986.jpg',
                    'description' => 'Bran and company travel beyond the Wall. Sam returns to Castle Black. Jon says goodbye to Ygritte. Jaime returns to King\'s Landing. The Night\'s Watch asks for help from Stannis.'
                ]
            ]
        ],
        'Season 04' => [
            'number' => 4,
            'poster' => 'https://fr.web.img4.acsta.net/c_225_300/pictures/14/02/28/00/50/120605.jpg',
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
                    'poster' => 'https://fr.web.img6.acsta.net/c_400_200/pictures/14/03/31/11/58/243956.jpg',
                    'description' => 'Tyrion welcomes a guest to King\'s Landing. At Castle Black, Jon stands trial. Daenerys is pointed to Meereen, the mother of all slave cities. Arya runs into an old enemy.'
                ],
                'episode 02' => [
                    'number' => 2,
                    'title' => 'The Lion and the Rose',
                    'poster' => 'https://fr.web.img6.acsta.net/c_400_200/pictures/14/04/10/10/57/560209.jpg',
                    'description' => 'Joffrey and Margaery\'s wedding has come. Tyrion breaks up with Shae. Ramsay tries to prove his worth to his father. Bran and company find a Weirwood tree.'
                ],
                'episode 03' => [
                    'number' => 3,
                    'title' => 'Breaker of Chains',
                    'poster' => 'https://fr.web.img3.acsta.net/c_400_200/pictures/14/04/11/11/11/431411.jpg',
                    'description' => 'Tyrion is arrested for the murder of Joffrey and awaits trial. Sansa escapes King\'s Landing. Sam sends Gilly to Mole\'s Town as the Night\'s Watch finds itself in a tight spot. Meereen challenges Daenerys.'
                ],
                'episode 04' => [
                    'number' => 4,
                    'title' => 'Oathkeeper',
                    'poster' => 'https://fr.web.img6.acsta.net/c_400_200/pictures/14/01/31/10/39/180057.jpg',
                    'description' => 'Jaime entrusts a task to Brienne. Daenerys frees Meereen. Jon is given permission to lead a group of Night\'s Watchmen to Craster\'s Keep. Bran and company are taken hostage.'
                ],
                'episode 05' => [
                    'number' => 5,
                    'title' => 'First of His Name',
                    'poster' => 'https://fr.web.img2.acsta.net/c_400_200/pictures/14/05/05/11/33/308480.jpg',
                    'description' => 'Tommen is crowned King of the Seven Kingdoms. Cersei builds her case against Tyrion. Sansa and Lord Baelish arrive at the Eyrie. The Night\'s Watch attacks Craster\'s Keep.'
                ],
                'episode 06' => [
                    'number' => 6,
                    'title' => 'The Laws of Gods and Men',
                    'poster' => 'https://fr.web.img4.acsta.net/c_400_200/pictures/14/05/16/14/13/117076.jpg',
                    'description' => 'Tyrion\'s trial has come. Yara and her troops storm the Dreadfort to free Theon. Daenerys meets Hizdar zo Loraq. Stannis makes a deal with the Iron Bank of Braavos.'
                ],
                'episode 07' => [
                    'number' => 7,
                    'title' => 'Mockingbird',
                    'poster' => 'https://fr.web.img2.acsta.net/c_400_200/pictures/18/06/27/07/21/1285758.jpg',
                    'description' => 'Tyrion tries to find a champion. Daenerys sleeps with Daario. The Hound becomes wounded. Jon\'s advice is ignored at Castle Black. Brienne and Podrick receive a tip on Arya\'s whereabouts.'
                ],
                'episode 08' => [
                    'number' => 8,
                    'title' => 'The Mountain and the Viper',
                    'poster' => 'https://fr.web.img2.acsta.net/c_400_200/pictures/14/05/28/11/20/314866.jpg',
                    'description' => 'Theon helps Ramsay seize Moat Cailin. The wildlings attack Mole\'s Town. Sansa comes up with a story to protect Lord Baelish. Daenerys finds out a secret about Jorah Mormont. Oberyn Martell faces Gregor Clegane, the Mountain.'
                ],
                'episode 09' => [
                    'number' => 9,
                    'title' => 'The Watchers on the Wall',
                    'poster' => 'https://fr.web.img2.acsta.net/c_400_200/pictures/18/06/27/07/24/3164304.jpg',
                    'description' => 'The battle between the Night\'s Watch and the wildlings has come.'
                ],
                'episode 10' => [
                    'number' => 10,
                    'title' => 'The Children',
                    'poster' => 'https://fr.web.img2.acsta.net/c_400_200/pictures/18/06/27/07/27/0010980.jpg',
                    'description' => 'Jon makes an important decision. Daenerys experiences new consequences. Brienne and Podrick have an unexpected encounter. Bran achieves a goal, while Tyrion makes an important discovery.'
                ]
            ]
        ],
        'Season 05' => [
            'number' => 5,
            'poster' => 'https://fr.web.img6.acsta.net/c_225_300/pictures/15/03/03/12/13/418016.jpg',
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
                    'poster' => 'https://fr.web.img6.acsta.net/c_400_200/pictures/15/04/10/10/58/087226.jpg',
                    'description' => 'Cersei and Jaime adjust to a world without Tywin. Tyrion and Varys arrive at Pentos. In Meereen, a new enemy emerges. Jon is caught between two kings.'
                ],
                'episode 02' => [
                    'number' => 2,
                    'title' => 'The House of Black and White',
                    'poster' => 'https://fr.web.img5.acsta.net/c_400_200/pictures/15/04/16/10/33/438316.jpg',
                    'description' => 'Arya arrives in Braavos. Jaime takes on a secret mission. Ellaria Sand seeks revenge for Oberyn\'s death. Stannis makes Jon a generous offer as the Night\'s Watch elects a new Lord Commander. Daenerys is faced with a difficult decision.'
                ],
                'episode 03' => [
                    'number' => 3,
                    'title' => 'High Sparrow',
                    'poster' => 'https://fr.web.img6.acsta.net/c_400_200/pictures/15/04/23/11/26/207349.jpg',
                    'description' => 'Tommen and Margaery wed. Arya has trouble adapting to her new life. Littlefinger reveals his plans to Sansa. Jon gives his first orders as Lord Commander. Tyrion and Varys arrive in Volantis.'
                ],
                'episode 04' => [
                    'number' => 4,
                    'title' => 'Sons of the Harpy',
                    'poster' => 'https://fr.web.img2.acsta.net/c_400_200/pictures/15/05/05/12/21/292320.jpg',
                    'description' => 'Jorah Mormont sets sail alongside his prisoner, Tyrion. Cersei makes a move against the Tyrells. Jaime and Bronn sneak into Dorne. Ellaria and the Sand Snakes make their plans. Melisandre tempts Jon. The Harpies attack.'
                ],
                'episode 05' => [
                    'number' => 5,
                    'title' => 'Kill the Boy',
                    'poster' => 'https://fr.web.img2.acsta.net/c_400_200/pictures/15/05/12/11/00/567882.jpg',
                    'description' => 'Daenerys arrests the heads of Meereen\'s great families. Jon makes a difficult decision. Theon is forced to face Sansa. Stannis rides south. Tyrion and Jorah enter the ruins of Old Valyria.'
                ],
                'episode 06' => [
                    'number' => 6,
                    'title' => 'Unbowed, Unbent, Unbroken',
                    'poster' => 'https://fr.web.img6.acsta.net/c_400_200/pictures/15/05/18/10/39/140928.jpg',
                    'description' => 'Arya is put to the test. Tyrion and Jorah are captured by slavers. Loras Tyrell is judged by the Sparrows. Jaime and Bronn face the Sand Snakes. Sansa marries Ramsay Bolton.'
                ],
                'episode 07' => [
                    'number' => 7,
                    'title' => 'The Gift',
                    'poster' => 'https://fr.web.img6.acsta.net/c_400_200/pictures/15/05/25/14/46/087233.jpg',
                    'description' => 'Jon heads east as trouble begins to stir for Sam and Gilly at Castle Black. Sansa asks Theon for help. Tyrion and Jorah are sold as slaves. Cersei savors her triumph over the Tyrells as new plots are developed in the shadows.'
                ],
                'episode 08' => [
                    'number' => 8,
                    'title' => 'Hardhome',
                    'poster' => 'https://fr.web.img6.acsta.net/c_400_200/pictures/15/05/29/10/40/277382.jpg',
                    'description' => 'Tyrion advises Daenerys. Sansa forces Theon to tell her a secret. Cersei remains stubborn. Arya meets her first target. Jon and Tormund meet with the wildling elders.'
                ],
                'episode 09' => [
                    'number' => 9,
                    'title' => 'The Dance of Dragons',
                    'poster' => 'https://fr.web.img5.acsta.net/c_400_200/pictures/15/06/05/12/19/323911.jpg',
                    'description' => 'Jon and the wildlings return to Castle Black. Jaime meets with Doran Martell. Stannis makes a hard choice. Arya runs into Meryn Trant. Daenerys attends the grand reopening of the fighting pits.'
                ],
                'episode 10' => [
                    'number' => 10,
                    'title' => 'Mother\'s Mercy',
                    'poster' => 'https://fr.web.img6.acsta.net/c_400_200/pictures/18/06/27/07/41/0888086.jpg',
                    'description' => 'Stannis arrives at Winterfell. Tyrion runs Meereen as Daario and Jorah go after Daenerys. Jaime and Myrcella leave Dorne. Jon sends Sam and Gilly to Oldtown. Arya challenges the Many-Faced God. Cersei confesses her sins.'
                ]
            ]
        ],
        'Season 06' => [
            'number' => 6,
            'poster' => 'https://fr.web.img6.acsta.net/c_225_300/pictures/16/02/25/10/45/157467.jpg',
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
                    'poster' => 'https://fr.web.img6.acsta.net/c_400_200/pictures/16/04/22/12/18/180815.jpg',
                    'description' => 'The fate of Jon Snow is revealed. Daenerys is brought before Khal Moro. Tyrion gets used to living in Meereen. Ramsay sends his dogs after Theon and Sansa. Ellaria and the Sand Snakes make their move. Cersei mourns for Myrcella.'
                ],
                'episode 02' => [
                    'number' => 2,
                    'title' => 'Home',
                    'poster' => 'https://fr.web.img4.acsta.net/c_400_200/pictures/16/04/28/11/07/300957.jpg',
                    'description' => 'Bran trains with the Three-Eyed Raven. Tommen meets with Cersei. Tyrion makes a bold move. Theon leaves while at Pyke new issues arise. Ramsay\'s brother is born. Davos asks Melisandre for a miracle.'
                ],
                'episode 03' => [
                    'number' => 3,
                    'title' => 'Oathbreaker',
                    'poster' => 'https://fr.web.img4.acsta.net/c_400_200/pictures/16/05/06/17/24/491224.jpg',
                    'description' => 'Daenerys arrives at Vaes Dothrak. Sam and Gilly sail for Horn Hill. Arya trains as No One. Varys finds information on the Sons of the Harpy. Ramsay receives a gift. Tommen meets with the High Sparrow. At Castle Black, a miracle occurs.'
                ],
                'episode 04' => [
                    'number' => 4,
                    'title' => 'Book of the Stranger',
                    'poster' => 'https://fr.web.img5.acsta.net/c_400_200/pictures/16/05/12/11/32/053649.jpg',
                    'description' => 'Sansa arrives at Castle Black. Tyrion makes a deal with the slave masters. Jorah and Daario sneak into Vaes Dothrak. Ramsay sends a letter to Jon. Theon arrives at Pyke. Cersei and Olenna Tyrell plot against the High Sparrow.'
                ],
                'episode 05' => [
                    'number' => 5,
                    'title' => 'The Door',
                    'poster' => 'https://fr.web.img2.acsta.net/c_400_200/pictures/16/05/19/14/07/215088.jpg',
                    'description' => 'Sansa and Jon make plans. Arya is given another chance to prove herself. Jorah confesses a secret to Daenerys. Tyrion meets with a red priestess. Yara finds her rule tested. Bran discovers the origin of the White Walkers.'
                ],
                'episode 06' => [
                    'number' => 6,
                    'title' => 'Blood of My Blood',
                    'poster' => 'https://fr.web.img2.acsta.net/c_400_200/pictures/16/05/26/09/37/299287.jpg',
                    'description' => 'Bran and Meera find a new ally. Gilly meets Sam\'s family. Arya makes a difficult choice. The Lannisters and Tyrells march against the High Sparrow.'
                ],
                'episode 07' => [
                    'number' => 7,
                    'title' => 'The Broken Man',
                    'poster' => 'https://fr.web.img6.acsta.net/c_400_200/pictures/16/06/02/11/13/208569.jpg',
                    'description' => 'Jon and Sansa gather troops. Jaime arrives at Riverrun. Olenna Tyrell plans to leave King\'s Landing. Theon and Yara plan a destination. Arya makes plans to leave.'
                ],
                'episode 08' => [
                    'number' => 8,
                    'title' => 'No One',
                    'poster' => 'https://fr.web.img4.acsta.net/c_400_200/pictures/16/06/09/11/14/528367.jpg',
                    'description' => 'Brienne arrives at Riverrun. Arya seeks shelter. Jaime meets with Edmure Tully. Cersei challenges the Faith. Sandor Clegane hunts for revenge. Tyrion faces the consequences of earlier decisions.'
                ],
                'episode 09' => [
                    'number' => 9,
                    'title' => 'Battle of the Bastards',
                    'poster' => 'https://fr.web.img6.acsta.net/c_400_200/pictures/16/06/16/14/39/152189.jpg',
                    'description' => 'Jon and Sansa face Ramsay Bolton on the fields of Winterfell. Daenerys strikes back at her enemies. Theon and Yara arrive in Meereen.'
                ],
                'episode 10' => [
                    'number' => 10,
                    'title' => 'The Winds of Winter',
                    'poster' => 'https://fr.web.img5.acsta.net/c_400_200/pictures/16/06/23/09/36/036958.jpg',
                    'description' => 'Cersei and Loras Tyrell stand trial by the gods. Daenerys prepares to set sail for Westeros. Davos confronts Melisandre. Sam and Gilly arrive in the Citadel. Bran discovers a long-kept secret. Lord Frey has an uninvited guest.'
                ]
            ]
        ],
        'Season 07' => [
            'number' => 7,
            'poster' => 'https://fr.web.img6.acsta.net/c_225_300/pictures/17/05/23/22/35/531401.jpg',
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
                    'poster' => 'https://fr.web.img6.acsta.net/c_400_200/pictures/17/07/13/10/24/354996.jpg',
                    'description' => 'Jon organizes the North\'s defenses. Cersei tries to even the odds. Daenerys comes home. Arya reminds the Freys the North remembers. Sam adapts to life in Oldtown. The Night King makes his way south.'
                ],
                'episode 02' => [
                    'number' => 2,
                    'title' => 'Stormborn',
                    'poster' => 'https://fr.web.img3.acsta.net/c_400_200/pictures/17/07/20/11/16/431571.jpg',
                    'description' => 'Daenerys receives an unexpected visitor. Jon faces resistance. Tyrion plans the conquest of Westeros. Cersei gathers her allies. Arya has a reunion with old friends. Sam risks his career and life.'
                ],
                'episode 03' => [
                    'number' => 3,
                    'title' => 'The Queen\'s Justice',
                    'poster' => 'https://fr.web.img4.acsta.net/c_400_200/pictures/17/07/27/10/39/115895.jpg',
                    'description' => 'Jon and Daenerys finally meet. Cersei gains a new ally. Sansa receives an unexpected visitor. Sam is confronted for his actions.'
                ],
                'episode 04' => [
                    'number' => 4,
                    'title' => 'The Spoils of War',
                    'poster' => 'https://fr.web.img3.acsta.net/c_400_200/pictures/17/08/03/10/15/245019.jpg',
                    'description' => 'Daenerys takes matters into her own hands. Arya reaches her destination. Jaime and Bronn collect the spoils from the war with the Tyrells.'
                ],
                'episode 05' => [
                    'number' => 5,
                    'title' => 'Eastwatch',
                    'poster' => 'https://fr.web.img4.acsta.net/c_400_200/pictures/17/08/10/10/00/249399.jpg',
                    'description' => 'Daenerys demands loyalty from the surviving Lannister soldiers; Jon heeds Bran\'s warning about White Walkers on the move; Cersei vows to vanquish anyone or anything that stands in her way.'
                ],
                'episode 06' => [
                    'number' => 6,
                    'title' => 'Beyond the Wall',
                    'poster' => 'https://fr.web.img2.acsta.net/c_400_200/pictures/17/08/17/09/56/412724.jpg',
                    'description' => 'Jon and his team go beyond the wall to capture a wight. Daenerys has to make a tough decision.'
                ],
                'episode 07' => [
                    'number' => 7,
                    'title' => 'The Dragon and the Wolf',
                    'poster' => 'https://fr.web.img6.acsta.net/c_400_200/pictures/17/09/04/13/44/292046.jpg',
                    'description' => 'Everyone meets in King\'s Landing to discuss the fate of the realm. In Winterfell, Sansa confronts Arya. Sam reaches Winterfell, where he and Bran discover a shocking secret about Jon Snow.'
                ]
            ]
        ],
        'Season 08' => [
            'number' => 8,
            'poster' => 'https://fr.web.img2.acsta.net/c_225_300/pictures/19/04/03/08/25/3808274.jpg',
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
                    'poster' => 'https://fr.web.img6.acsta.net/c_400_200/pictures/19/04/17/18/11/0432743.jpg',
                    'description' => 'Jon and Daenerys arrive in Winterfell and are met with skepticism. Sam learns about the fate of his family. Cersei gives Euron the reward he aims for. Theon follows his heart.'
                ],
                'episode 02' => [
                    'number' => 2,
                    'title' => 'A Knight of the Seven Kingdoms',
                    'poster' => 'https://fr.web.img6.acsta.net/c_400_200/pictures/19/04/18/10/02/1108671.jpg',
                    'description' => 'Jaime faces judgment and Winterfell prepares for the battle to come.'
                ],
                'episode 03' => [
                    'number' => 3,
                    'title' => 'The Long Night',
                    'poster' => 'https://fr.web.img4.acsta.net/c_400_200/pictures/19/04/25/09/11/4547536.jpg',
                    'description' => 'The Night King and his army have arrived at Winterfell and the great battle begins.'
                ],
                'episode 04' => [
                    'number' => 4,
                    'title' => 'The Last of the Starks',
                    'poster' => 'https://fr.web.img6.acsta.net/c_400_200/pictures/19/05/02/10/14/5461585.jpg',
                    'description' => 'The Battle of Winterfell is over and a new chapter for Westeros begins.'
                ],
                'episode 05' => [
                    'number' => 5,
                    'title' => 'The Bells',
                    'poster' => 'https://fr.web.img5.acsta.net/c_400_200/pictures/19/05/09/10/53/0083221.jpg',
                    'description' => 'Forces have arrived at King\'s Landing for the final battle.'
                ],
                'episode 06' => [
                    'number' => 6,
                    'title' => 'The Iron Throne',
                    'poster' => 'https://fr.web.img5.acsta.net/c_400_200/pictures/19/05/16/09/42/5774364.jpg',
                    'description' => 'In the aftermath of the devastating attack on King\'s Landing, Daenerys must face the survivors.'
                ]
            ]
        ]
    ];

    const BREAKING_BAD = [
        'Season 01' => [
            'number' => 1,
            'poster' => 'https://fr.web.img2.acsta.net/c_225_300/pictures/18/07/23/11/26/1237965.jpg',
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
                    'poster' => 'https://fr.web.img2.acsta.net/c_400_200/pictures/17/05/31/14/41/050383.jpg',
                    'description' => 'Diagnosed with terminal lung cancer, chemistry teacher Walter White teams up with former student Jesse Pinkman to cook and sell crystal meth.'
                ],
                'episode 02' => [
                    'number' => 2,
                    'title' => 'Cat\'s in the Bag...',
                    'poster' => 'https://fr.web.img6.acsta.net/c_400_200/pictures/17/05/31/14/41/066789.jpg',
                    'description' => 'After their first drug deal goes terribly wrong, Walt and Jesse are forced to deal with a corpse and a prisoner. Meanwhile, Skyler grows suspicious of Walt\'s activities.'
                ],
                'episode 03' => [
                    'number' => 3,
                    'title' => '...And the Bag\'s in the River',
                    'poster' => 'https://fr.web.img3.acsta.net/c_400_200/pictures/17/05/31/14/41/073820.jpg',
                    'description' => 'Walt and Jesse clean up after the bathtub incident before Walt decides what course of action to take with their prisoner Krazy-8.'
                ],
                'episode 04' => [
                    'number' => 4,
                    'title' => 'Cancer Man',
                    'poster' => 'https://fr.web.img3.acsta.net/c_400_200/pictures/17/05/31/14/41/084758.jpg',
                    'description' => 'Walt tells the rest of his family about his cancer. Jesse tries to make amends with his own parents.'
                ],
                'episode 05' => [
                    'number' => 5,
                    'title' => 'Gray Matter',
                    'poster' => 'https://fr.web.img3.acsta.net/c_400_200/pictures/17/05/31/14/41/108821.jpg',
                    'description' => 'Walt rejects everyone who tries to help him with the cancer. Jesse tries his best to create Walt\'s meth, with the help of an old friend.'
                ],
                'episode 06' => [
                    'number' => 6,
                    'title' => 'Crazy Handful of Nothin\'',
                    'poster' => 'https://fr.web.img2.acsta.net/c_400_200/pictures/17/05/31/14/41/117727.jpg',
                    'description' => 'With the side effects and cost of his treatment mounting, Walt demands that Jesse finds a wholesaler to buy their drugs - which lands him in trouble.'
                ],
                'episode 07' => [
                    'number' => 7,
                    'title' => 'A No-Rough-Stuff-Type Deal',
                    'poster' => 'https://fr.web.img6.acsta.net/c_400_200/pictures/17/05/31/14/41/120071.jpg',
                    'description' => 'Walt and Jesse try to up their game by making more of the crystal every week for Tuco. Unfortunately, some of the ingredients they need are not easy to find. Meanwhile, Skyler realizes that her sister is a shoplifter.'
                ]
            ]
        ],
        'Season 02' => [
            'number' => 2,
            'poster' => 'https://fr.web.img6.acsta.net/c_225_300/pictures/18/07/23/11/26/1597342.jpg',
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
                    'poster' => 'https://fr.web.img4.acsta.net/c_400_200/pictures/17/05/31/14/41/130227.jpg',
                    'description' => 'Walt and Jesse realize how dire their situation is. They must come up with a plan to kill Tuco before Tuco kills them first.'
                ],
                'episode 02' => [
                    'number' => 2,
                    'title' => 'Grilled',
                    'poster' => 'https://fr.web.img5.acsta.net/c_400_200/pictures/17/05/31/14/41/138196.jpg',
                    'description' => 'Walt\'s disappearance is met with investigation by both his wife and Hank, as Tuco Salamanca intends to leave town with his kidnapped cooks.'
                ],
                'episode 03' => [
                    'number' => 3,
                    'title' => 'Bit by a Dead Bee',
                    'poster' => 'https://fr.web.img5.acsta.net/c_400_200/pictures/17/05/31/14/41/147415.jpg',
                    'description' => 'Walt and Jesse try to come up with alibis for their disappearances.'
                ],
                'episode 04' => [
                    'number' => 4,
                    'title' => 'Down',
                    'poster' => 'https://fr.web.img5.acsta.net/c_400_200/pictures/17/05/31/14/41/157258.jpg',
                    'description' => 'Skyler keeps mysteriously leaving without talking to Walt. Jesse\'s parents throw him out of his own house.'
                ],
                'episode 05' => [
                    'number' => 5,
                    'title' => 'Breakage',
                    'poster' => 'https://fr.web.img3.acsta.net/c_400_200/pictures/17/05/31/14/41/166946.jpg',
                    'description' => 'Walt and Jesse decide to start their own little empire with the help of Jesse\'s friends: Skinny Pete, Combo, and Badger. Meanwhile, Hank tries to pull himself together after his encounter with Tuco.'
                ],
                'episode 06' => [
                    'number' => 6,
                    'title' => 'Peekaboo',
                    'poster' => 'https://fr.web.img2.acsta.net/c_400_200/pictures/17/05/31/14/41/172102.jpg',
                    'description' => 'After Skinny Pete gets ripped off, Walt makes Jesse go get the money. Meanwhile, Walt\'s cover story on how Elliott and Gretchen are paying for his medical treatment is on the verge of collapsing.'
                ],
                'episode 07' => [
                    'number' => 7,
                    'title' => 'Negro y Azul',
                    'poster' => 'https://fr.web.img6.acsta.net/c_400_200/pictures/17/05/31/14/41/182883.jpg',
                    'description' => 'Rumor is spreading that Jesse killed the man that ripped Skinny Pete off. Walt uses this to his advantage on expanding their territory. Meanwhile, Hank has been promoted to the El Paso office. But it\'s not all he hoped it would be.'
                ],
                'episode 08' => [
                    'number' => 8,
                    'title' => 'Better Call Saul',
                    'poster' => 'https://fr.web.img6.acsta.net/c_400_200/pictures/17/05/31/14/41/187884.jpg',
                    'description' => 'Badger is caught by the DEA. Walt and Jesse hire the best criminal lawyer in town, Saul Goodman.'
                ],
                'episode 09' => [
                    'number' => 9,
                    'title' => '4 Days Out',
                    'poster' => 'https://fr.web.img2.acsta.net/c_400_200/pictures/17/05/31/14/41/196009.jpg',
                    'description' => 'Walt and Jesse become stranded out in the middle of the desert after cooking more crystal.'
                ],
                'episode 10' => [
                    'number' => 10,
                    'title' => 'Over',
                    'poster' => 'https://fr.web.img4.acsta.net/c_400_200/pictures/17/05/31/14/41/201165.jpg',
                    'description' => 'Walt\'s cancer has greatly improved. Time to celebrate. Meanwhile Jesse tries to meet his new girlfriend\'s father.'
                ],
                'episode 11' => [
                    'number' => 11,
                    'title' => 'Mandala',
                    'poster' => 'https://fr.web.img3.acsta.net/c_400_200/pictures/17/05/31/14/41/209915.jpg',
                    'description' => 'Walt and Jesse\'s little empire begins to crumble. Saul tries to set them up with a mysterious distributor.'
                ],
                'episode 12' => [
                    'number' => 12,
                    'title' => 'Phoenix',
                    'poster' => 'https://fr.web.img2.acsta.net/c_400_200/pictures/17/05/31/14/41/216790.jpg',
                    'description' => 'Walt and Skyler have a baby girl. Now that Jesse is hooked on heroin, Walt refuses to give him his money until he gets clean. Meanwhile, as an excuse for his money, Walt decides to donate the money to himself through his son\'s new website.'
                ],
                'episode 13' => [
                    'number' => 13,
                    'title' => 'ABQ',
                    'poster' => 'https://fr.web.img4.acsta.net/c_400_200/pictures/17/05/31/14/41/229446.jpg',
                    'description' => 'Walt\'s lies have pushed Skyler to her limit. She leaves with the kids. Meanwhile, Jesse blames himself for Jane\'s death and goes into rehab.'
                ]
            ]
        ],
        'Season 03' => [
            'number' => 3,
            'poster' => 'https://fr.web.img4.acsta.net/c_225_300/pictures/18/07/23/11/26/2167658.jpg',
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
                    'poster' => 'https://fr.web.img2.acsta.net/c_400_200/pictures/17/05/31/14/41/231946.jpg',
                    'description' => 'Skyler goes through with her plans to divorce Walt. Jesse finishes rehab.'
                ],
                'episode 02' => [
                    'number' => 2,
                    'title' => 'Caballo sin Nombre',
                    'poster' => 'https://fr.web.img6.acsta.net/c_400_200/pictures/17/05/31/14/41/233196.jpg',
                    'description' => 'Walter, Jr. is having a rough time accepting his parents\' separation. Jesse buys his old house from his parents. Meanwhile, two mysterious men have come into town looking for Walt.'
                ],
                'episode 03' => [
                    'number' => 3,
                    'title' => 'I.F.T.',
                    'poster' => 'https://fr.web.img2.acsta.net/c_400_200/pictures/17/05/31/14/41/239290.jpg',
                    'description' => 'Walt has moved back into the house without Skyler\'s consent. Now she can\'t get him out. Meanwhile, Jesse continues to cope with Jane\'s death.'
                ],
                'episode 04' => [
                    'number' => 4,
                    'title' => 'Green Light',
                    'poster' => 'https://fr.web.img5.acsta.net/c_400_200/pictures/17/05/31/14/41/241009.jpg',
                    'description' => 'Walt\'s world crumbles even more after finding out that Skyler is cheating on him. Jesse tries to set up a meeting with Gus to try and sell his own version of the blue meth. Meanwhile, Hank is growing obsessed with finding Heisenberg.'
                ],
                'episode 05' => [
                    'number' => 5,
                    'title' => 'Más',
                    'poster' => 'https://fr.web.img2.acsta.net/c_400_200/pictures/17/05/31/14/41/242728.jpg',
                    'description' => 'Gus tries to get Walt back in the business by offering him three million dollars and a brand new lab. Jesse is furious that Walt received half of the money for his blue meth. Hank tries to track down the RV meth lab.'
                ],
                'episode 06' => [
                    'number' => 6,
                    'title' => 'Sunset',
                    'poster' => 'https://fr.web.img6.acsta.net/c_400_200/pictures/17/05/31/14/41/244446.jpg',
                    'description' => 'Heisenberg\'s organized and practical assistant Gale greatly aids his work in Gus\'s lab. Hank finally tracks the RV back to Jesse, as a concerned Walt finds any way to erase the evidence.'
                ],
                'episode 07' => [
                    'number' => 7,
                    'title' => 'One Minute',
                    'poster' => 'https://fr.web.img3.acsta.net/c_400_200/pictures/17/05/31/14/41/245696.jpg',
                    'description' => 'Jesse ends up in the hospital after getting beaten up by Hank. Now he is threatening to press charges against the DEA. To stop him, Walt decides to bring Jesse on as his partner, once again.'
                ],
                'episode 08' => [
                    'number' => 8,
                    'title' => 'I See You',
                    'poster' => 'https://fr.web.img6.acsta.net/c_400_200/pictures/17/05/31/14/41/247728.jpg',
                    'description' => 'Hank ends up in the hospital after being attacked by Tuco\'s cousins. Walt spends too much time by his family\'s side when he should be cooking meth.'
                ],
                'episode 09' => [
                    'number' => 9,
                    'title' => 'Kafkaesque',
                    'poster' => 'https://fr.web.img3.acsta.net/c_400_200/pictures/17/05/31/14/41/248978.jpg',
                    'description' => 'Skyler hatches a plan as Hank\'s hospital bills stack up. Meanwhile, Walt and Gus come to a better understanding as Jesse, looking for more independence, pursues a new opportunity.'
                ],
                'episode 10' => [
                    'number' => 10,
                    'title' => 'Fly',
                    'poster' => 'https://fr.web.img2.acsta.net/c_400_200/pictures/17/05/31/14/41/250228.jpg',
                    'description' => 'There is a fly loose in the lab. Walt and Jesse must do whatever they can to kill it before it contaminates the meth.'
                ],
                'episode 11' => [
                    'number' => 11,
                    'title' => 'Abiquiu',
                    'poster' => 'https://fr.web.img4.acsta.net/c_400_200/pictures/17/05/31/14/41/253821.jpg',
                    'description' => 'Skyler gets more involved in Walt\'s business, much to his chagrin, as Hank struggles with his recovery. Meanwhile, Jesse takes an active role in his new enterprise, leading him to a startling discovery.'
                ],
                'episode 12' => [
                    'number' => 12,
                    'title' => 'Half Measures',
                    'poster' => 'https://fr.web.img6.acsta.net/c_400_200/pictures/17/05/31/14/41/255228.jpg',
                    'description' => 'Against Walt\'s advice, Jesse lashes out. Fearing for Jesse\'s safety, Walt takes drastic action to intervene. Meanwhile a tragic event leads to a shocking confrontation.'
                ],
                'episode 13' => [
                    'number' => 13,
                    'title' => 'Full Measure',
                    'poster' => 'https://fr.web.img3.acsta.net/c_400_200/pictures/17/05/31/14/41/258821.jpg',
                    'description' => 'Jesse has disappeared and Walt is in big trouble with Gus. So Gus rehires Gale to learn from Walt\'s cooking so that they can dispose of Walt once and for all.'
                ]
            ]
        ],
        'Season 04' => [
            'number' => 4,
            'poster' => 'https://fr.web.img4.acsta.net/c_225_300/pictures/18/07/23/11/26/2778599.jpg',
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
                    'poster' => 'https://fr.web.img4.acsta.net/c_400_200/pictures/17/05/31/14/41/270228.jpg',
                    'description' => 'Walt and Jesse are held captive for Gus, after Gale\'s death. Meanwhile, Skyler tries to find out what happened to Walt.'
                ],
                'episode 02' => [
                    'number' => 2,
                    'title' => 'Thirty-Eight Snub',
                    'poster' => 'https://fr.web.img4.acsta.net/c_400_200/pictures/17/05/31/14/41/278040.jpg',
                    'description' => 'Walt attempts to form a new alliance as he plans his next move. Meanwhile Skyler pushes Walt towards a business opportunity, in hopes of protecting the family.'
                ],
                'episode 03' => [
                    'number' => 3,
                    'title' => 'Open House',
                    'poster' => 'https://fr.web.img4.acsta.net/c_400_200/pictures/17/05/31/14/41/279759.jpg',
                    'description' => 'While Walt worries about Gus\'s interference and Jesse\'s increasingly fragile state of mind, Skyler steps up the pressure to get what she wants.'
                ],
                'episode 04' => [
                    'number' => 4,
                    'title' => 'Bullet Points',
                    'poster' => 'https://fr.web.img3.acsta.net/c_400_200/pictures/17/05/31/14/41/290540.jpg',
                    'description' => 'As Skyler concocts an elaborate story to explain the Whites\' finances, a worried Walt discovers that Hank has begun a new investigation.'
                ],
                'episode 05' => [
                    'number' => 5,
                    'title' => 'Shotgun',
                    'poster' => 'https://fr.web.img3.acsta.net/c_400_200/pictures/17/05/31/14/41/474128.jpg',
                    'description' => 'Jesse rides shotgun with Mike on a perilous run of pickups, prompting Walt to worry that his partner is about to be killed.'
                ],
                'episode 06' => [
                    'number' => 6,
                    'title' => 'Cornered',
                    'poster' => 'https://fr.web.img6.acsta.net/c_400_200/pictures/17/05/31/14/41/480221.jpg',
                    'description' => 'Skyler adopts an aloof approach when she suspects that Walt isn\'t telling her the truth. Meanwhile, Jesse proves his worth to Mike and Gus.'
                ],
                'episode 07' => [
                    'number' => 7,
                    'title' => 'Problem Dog',
                    'poster' => 'https://fr.web.img5.acsta.net/c_400_200/pictures/17/05/31/14/41/481627.jpg',
                    'description' => 'Skyler looks to continue her family\'s trend of appearing poverty-stricken by forcing Walt to return the car he bought. A concerned Walt chauffeurs Hank to Los Pollos Hermanos, and the articulate yet immobile DEA agent collects prints.'
                ],
                'episode 08' => [
                    'number' => 8,
                    'title' => 'Hermanos',
                    'poster' => 'https://fr.web.img5.acsta.net/c_400_200/pictures/17/05/31/14/41/489751.jpg',
                    'description' => 'When Hank produces evidence that Gus is Albuquerque\'s crystal meth kingpin, Walt worries that he and Jesse will be killed to protect their boss.'
                ],
                'episode 09' => [
                    'number' => 9,
                    'title' => 'Bug',
                    'poster' => 'https://fr.web.img6.acsta.net/c_400_200/pictures/17/05/31/14/41/495218.jpg',
                    'description' => 'While Walt tries to subvert Hank\'s probe into the Albuquerque meth scene, a deadly warning forces Gus to consider a deal with the cartel.'
                ],
                'episode 10' => [
                    'number' => 10,
                    'title' => 'Salud',
                    'poster' => 'https://fr.web.img6.acsta.net/c_400_200/pictures/17/05/31/14/41/501467.jpg',
                    'description' => 'Jesse, Gus, and Mike fly down to Mexico, and Jesse cooks the blue meth for the cartel. Walt misses his son\'s 16th birthday after his fight with Jesse.'
                ],
                'episode 11' => [
                    'number' => 11,
                    'title' => 'Crawl Space',
                    'poster' => 'https://fr.web.img3.acsta.net/c_400_200/pictures/17/05/31/14/41/509435.jpg',
                    'description' => 'Hank asks Walt to drive him to the laundry where the meth lab is hidden. Ted still won\'t pay the IRS so Skyler asks Saul for help, and Saul sends in his A-Team. Gus and Jesse return from Mexico, and Walt fears he is in trouble with Gus.'
                ],
                'episode 12' => [
                    'number' => 12,
                    'title' => 'End Times',
                    'poster' => 'https://fr.web.img2.acsta.net/c_400_200/pictures/17/05/31/14/41/519433.jpg',
                    'description' => 'The DEA is putting Hank and his family in protective custody; however, Walt refuses and awaits his fate in his house. Meanwhile, Brock has fallen terribly ill and Jesse suspects Walt may be behind it.'
                ],
                'episode 13' => [
                    'number' => 13,
                    'title' => 'Face Off',
                    'poster' => 'https://fr.web.img2.acsta.net/c_400_200/pictures/17/05/31/14/41/529744.jpg',
                    'description' => 'Jesse is brought to the FBI for questioning on his knowledge of ricin. In a last effort to kill Gus, Walt must ask for help from an old enemy.'
                ]
            ]
        ],
        'Season 05' => [
            'number' => 5,
            'poster' => 'https://fr.web.img2.acsta.net/c_225_300/pictures/18/07/23/11/26/3445791.jpg',
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
                    'poster' => 'https://fr.web.img2.acsta.net/c_400_200/pictures/17/05/31/14/41/537868.jpg',
                    'description' => 'Now that Gus is dead, Walt, Jesse, and Mike work to cover their tracks. Skyler panics when Ted Beneke wakes up.'
                ],
                'episode 02' => [
                    'number' => 2,
                    'title' => 'Madrigal',
                    'poster' => 'https://fr.web.img5.acsta.net/c_400_200/pictures/17/05/31/14/41/544117.jpg',
                    'description' => 'Walt and Jesse seek out an unlikely partner for a new business venture. The DEA follows up new leads in its investigation.'
                ],
                'episode 03' => [
                    'number' => 3,
                    'title' => 'Hazard Pay',
                    'poster' => 'https://fr.web.img2.acsta.net/c_400_200/pictures/17/05/31/14/41/550210.jpg',
                    'description' => 'The guys put a business plan into action; Walt confesses to Marie.'
                ],
                'episode 04' => [
                    'number' => 4,
                    'title' => 'Fifty-One',
                    'poster' => 'https://fr.web.img4.acsta.net/c_400_200/pictures/17/05/31/14/41/557709.jpg',
                    'description' => 'It\'s Walt\'s 51st birthday. His return to the drug business causes Skyler to go into depression.'
                ],
                'episode 05' => [
                    'number' => 5,
                    'title' => 'Dead Freight',
                    'poster' => 'https://fr.web.img4.acsta.net/c_400_200/pictures/17/05/31/14/41/564114.jpg',
                    'description' => 'Walter White\'s domestic life continues to deteriorate; at the same time, his growing business venture aims to steal a train car chock full of methylamine.'
                ],
                'episode 06' => [
                    'number' => 6,
                    'title' => 'Buyout',
                    'poster' => 'https://fr.web.img4.acsta.net/c_400_200/pictures/17/05/31/14/41/570207.jpg',
                    'description' => 'In the aftermath of the train heist, Jesse and Mike decide to quit the business, leaving Walt to handle things on his own. Mike is being followed by the DEA.'
                ],
                'episode 07' => [
                    'number' => 7,
                    'title' => 'Say My Name',
                    'poster' => 'https://fr.web.img4.acsta.net/c_400_200/pictures/17/05/31/14/41/582705.jpg',
                    'description' => 'Mike and Jesse are out. Now Walt has to handle things on his own. Hank finally finds a rat in Mike\'s gang.'
                ],
                'episode 08' => [
                    'number' => 8,
                    'title' => 'Gliding Over All',
                    'poster' => 'https://fr.web.img2.acsta.net/c_400_200/pictures/17/05/31/14/41/589735.jpg',
                    'description' => 'Walt expands his business overseas, and the money is pouring in.'
                ],
                'episode 09' => [
                    'number' => 9,
                    'title' => 'Blood Money',
                    'poster' => 'https://fr.web.img2.acsta.net/c_400_200/pictures/17/05/31/14/41/595828.jpg',
                    'description' => 'Walt is out of the meth business and trying to move on with his life. Jesse tries to get rid of his money. Hank now knows that Walt is the famous Heisenberg.'
                ],
                'episode 10' => [
                    'number' => 10,
                    'title' => 'Buried',
                    'poster' => 'https://fr.web.img5.acsta.net/c_400_200/pictures/17/05/31/14/42/007545.jpg',
                    'description' => 'Hank is determined to bring down Walt. Walt scrambles to hide evidence before Hank gets to it, and Skyler tries to stop Hank and Marie from taking away the kids.'
                ],
                'episode 11' => [
                    'number' => 11,
                    'title' => 'Confessions',
                    'poster' => 'https://fr.web.img4.acsta.net/c_400_200/pictures/17/05/31/14/42/017231.jpg',
                    'description' => 'Walt makes his next move against Hank, putting Hank in a tough position. Hank confronts Jesse and attempts to turn him against Walt, and Jesse decides it\'s time to move on. Meanwhile, Todd has taken over the business.'
                ],
                'episode 12' => [
                    'number' => 12,
                    'title' => 'Rabid Dog',
                    'poster' => 'https://fr.web.img5.acsta.net/c_400_200/pictures/17/05/31/14/42/032697.jpg',
                    'description' => 'Walt discovers Jesse broke into his house and attempted to burn it down. Walt wants to protect his family so he moves them into a hotel for a few nights. Jesse makes plans to take down Walt.'
                ],
                'episode 13' => [
                    'number' => 13,
                    'title' => 'To\'hajiilee',
                    'poster' => 'https://fr.web.img6.acsta.net/c_400_200/pictures/17/05/31/14/42/052538.jpg',
                    'description' => 'Jesse and Hank come up with an idea to take Walt down. Walt hires Todd\'s uncle to kill Jesse.'
                ],
                'episode 14' => [
                    'number' => 14,
                    'title' => 'Ozymandias',
                    'poster' => 'https://fr.web.img3.acsta.net/c_400_200/pictures/17/05/31/14/42/060193.jpg',
                    'description' => 'Walt goes on the run. Jesse is taken hostage. Marie convinces Skyler to tell Walter, Jr. the truth.'
                ],
                'episode 15' => [
                    'number' => 15,
                    'title' => 'Granite State',
                    'poster' => 'https://fr.web.img5.acsta.net/c_400_200/pictures/17/05/31/14/42/069879.jpg',
                    'description' => 'Walt struggles as he adapts to aspects of his new identity. Jesse plans an escape against Jack and his crew.'
                ],
                'episode 16' => [
                    'number' => 16,
                    'title' => 'Felina',
                    'poster' => 'https://fr.web.img2.acsta.net/c_400_200/pictures/17/05/31/14/42/071910.jpg',
                    'description' => 'Walter White makes one last attempt to secure his family\'s future, while also visiting some old enemies, during his final return to Albuquerque.'
                ]
            ]
        ]
    ];

    const ATTACK_ON_TITAN = [
        'Season 01' => [
            'number' => 1,
            'poster' => 'https://fr.web.img4.acsta.net/c_225_300/pictures/18/10/31/18/23/3895256.jpg',
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
                    'description' => 'After 100 years of peace, humanity is suddenly reminded of the terror of being at the Titans\' mercy.'
                ],
                'episode 02' => [
                    'number' => 2,
                    'title' => 'That Day: The Fall of Shiganshina, Part 2',
                    'poster' => '',
                    'description' => 'After the Titans break through the wall, the citizens of Shiganshina must run for their lives. Those that do make it to safety find a harsh life waiting for them, however.'
                ],
                'episode 03' => [
                    'number' => 3,
                    'title' => 'A Dim Light Amid Despair: Humanity\'s Comeback, Part 1',
                    'poster' => '',
                    'description' => 'Eren begins his training with the Cadet Corps, but questions about his painful past overwhelm him. When he struggles with a maneuvering exercise, Berholt and Reiner offer kindly advice.'
                ],
                'episode 04' => [
                    'number' => 4,
                    'title' => 'The Night of the Closing Ceremony: Humanity\'s Comeback, Part 2',
                    'poster' => '',
                    'description' => 'Annie proves her skill in a sparring session, Jan dreams of serving alongside the King, and graduation day brings shocking revelations - along with a sudden outbreak of violence.'
                ],
                'episode 05' => [
                    'number' => 5,
                    'title' => 'First Battle: The Struggle for Trost, Part 1',
                    'poster' => '',
                    'description' => 'Eren faces off against the Colossal Titan after it appears out of nowhere and knocks a strategic hole in Wall Rose\'s gate. As Titans swarm the city, the newly graduated Cadets are called in to fight in a brutal battle.'
                ],
                'episode 06' => [
                    'number' => 6,
                    'title' => 'The World the Girl Saw: The Struggle for Trost, Part 2',
                    'poster' => '',
                    'description' => 'As Armin is left reeling from the death of his squad, Mikasa reflects on the day she met Eren.'
                ],
                'episode 07' => [
                    'number' => 7,
                    'title' => 'Small Blade: The Struggle for Trost, Part 3',
                    'poster' => '',
                    'description' => 'Cornered by the titans and out of gas, the desperation takes over the scouts. After hearing the news about Armin\'s squad, Mikasa encourages her mates in order to continue fighting at any cost.'
                ],
                'episode 08' => [
                    'number' => 8,
                    'title' => 'I Can Hear His Heartbeat: The Struggle for Trost, Part 4',
                    'poster' => '',
                    'description' => 'Armin comes up with a risky plan that pits Titan against Titan as the abandoned Cadets aim to take back their headquarters. Getting into the building may be possible, but getting out alive and refueled will mean facing more of the giants.'
                ],
                'episode 09' => [
                    'number' => 9,
                    'title' => 'Whereabouts of His Left Arm: The Struggle for Trost, Part 5',
                    'poster' => '',
                    'description' => 'A miraculous return is met with anger and fear. Cannons are fixed on Eren as he struggles to remember what happened to him inside the belly of a monster. One question is all that matters: is Eren human or Titan?'
                ],
                'episode 10' => [
                    'number' => 10,
                    'title' => 'Response: The Struggle for Trost, Part 6',
                    'poster' => '',
                    'description' => 'Cadets react to Eren\'s transformation with doubt and fear as he struggles to understand it himself. If Armin can\'t talk the commander into using Eren\'s newfound powers for the good of humanity, all hope of stopping the Titans may be lost.'
                ],
                'episode 11' => [
                    'number' => 11,
                    'title' => 'Idol: The Struggle for Trost, Part 7',
                    'poster' => '',
                    'description' => 'Plans are created to use Eren\'s Titan powers to seal the hole in the wall to reclaim Trost. But with the government\'s bloodstained history and vocal dissenters in the military ranks, the biggest threat to humankind may not be the Titans.'
                ],
                'episode 12' => [
                    'number' => 12,
                    'title' => 'Wound: The Struggle for Trost, Part 8',
                    'poster' => '',
                    'description' => 'The plan to reclaim Trost falls apart when Eren\'s newfound powers turn him into a mindless giant. As Titans continue to swarm the city, it\'s up to Armin and Mikasa to make sure the cadets massacred during the mission haven\'t died in vain.'
                ],
                'episode 13' => [
                    'number' => 13,
                    'title' => 'Primal Desire: The Struggle for Trost, Part 9',
                    'poster' => '',
                    'description' => 'Jean takes desperate measures to replace his broken maneuvering device. Meanwhile, Eren is able to plug the hole in the wall thanks to the help of his fellow cadets, but the cost of humanity\'s first victory against the Titans will be vast.'
                ],
                'episode 14' => [
                    'number' => 14,
                    'title' => 'Can\'t Look into His Eyes Yet: Eve of the Counterattack, Part 1',
                    'poster' => '',
                    'description' => 'A military tribunal will decide Eren\'s fate. The Military Police call for his execution, while the Scouts argue that he is a powerful resource for humankind. Mikasa is put on the spot when asked about the events of the Trost mission.'
                ],
                'episode 15' => [
                    'number' => 15,
                    'title' => 'Special Operations Squad: Eve of the Counterattack, Part 2',
                    'poster' => '',
                    'description' => 'The Scouts move Eren to an old, abandoned castle where his training will continue. Hange visits and reveals that she\'s been putting two captured Titans through a series of tests and trials--experiments that she wants Eren\'s help with.'
                ],
                'episode 16' => [
                    'number' => 16,
                    'title' => 'What Needs to Be Done Now: Eve of the Counterattack, Part 3',
                    'poster' => '',
                    'description' => 'Everyone is a suspect in the investigation to find out who killed the two test subject Titans. Meanwhile, the Cadets pick which corps they\'ll join, but after the tragic events of the Trost attack, many are uncertain which branch to choose.'
                ],
                'episode 17' => [
                    'number' => 17,
                    'title' => 'Female Titan: The 57th Expedition Beyond the Walls, Part 1',
                    'poster' => '',
                    'description' => 'As the Scout Regiment pushes toward Shiganshina, they encounter an intelligent Titan unlike any they\'ve seen before. When Armin hypothesizes that it\'s really a human that\'s been turned into a Titan, he, Jean, and Reiner attempt to stop it.'
                ],
                'episode 18' => [
                    'number' => 18,
                    'title' => 'Forest of Giant Trees: The 57th Expedition Beyond the Walls, Part 2',
                    'poster' => '',
                    'description' => 'As the Female Titan tears its way through the Scout Regiment, Levi makes a bold decision to split the ranks and send Eren and the supply wagons through a huge forest.'
                ],
                'episode 19' => [
                    'number' => 19,
                    'title' => 'Bite: The 57th Exterior Scouting Mission, Part 3',
                    'poster' => '',
                    'description' => 'A memory of Eren testing out his Titan powers sheds light on how his abilities work. As the Female Titan slaughters members of the Scout Regiment, Eren is faced with a difficult decision: does he trust his teammates or act out on his own?'
                ],
                'episode 20' => [
                    'number' => 20,
                    'title' => 'Erwin Smith: The 57th Expedition Beyond the Walls, Part 4',
                    'poster' => '',
                    'description' => 'The Female Titan has been captured. Erwin\'s goal is to find out who the human is lurking inside. Meanwhile, the Scouts realize the reason Levi told no one about their true mission outside the wall is because of a spy among their ranks.'
                ],
                'episode 21' => [
                    'number' => 21,
                    'title' => 'Crushing Blow: The 57th Exterior Scouting Mission, Part 5',
                    'poster' => '',
                    'description' => 'Managing to get out of Erwin\'s trap, the Female Titan transforms once more and chases after Levi\'s squad, who fight back in a deadly clash.'
                ],
                'episode 22' => [
                    'number' => 22,
                    'title' => 'The Defeated: The 57th Expedition Beyond the Walls, Part 6',
                    'poster' => '',
                    'description' => 'After watching Eren get swallowed by the Female Titan, Mikasa and Levi follow the monster in the hopes that he\'s still alive inside her. As the Scout Regiment tries to recover from the brutal losses of the operation, emotions run high.'
                ],
                'episode 23' => [
                    'number' => 23,
                    'title' => 'Smile: Raid on Stohess District, Part 1',
                    'poster' => '',
                    'description' => 'After the failed scouting expedition, Eren and his superiors are summoned to the capital. Annie sees just how deep corruption runs in the Military Police and agrees to join Armin in a plot to defy the government-but nothing is as it seems.'
                ],
                'episode 24' => [
                    'number' => 24,
                    'title' => 'Mercy: Raid on Stohess District, Part 2',
                    'poster' => '',
                    'description' => 'When the identity of the Female Titan is finally revealed, she goes on a rampage within Wall Sina. Eren is hesitant to fight her, but Armin and Mikasa throw themselves into the battle in a desperate attempt to stop the towering monster.'
                ],
                'episode 25' => [
                    'number' => 25,
                    'title' => 'Wall: Raid on Stohess District, Part 3',
                    'poster' => '',
                    'description' => 'Eren goes head-to-head with the Female Titan in a fight that demolishes Stohess District inside Wall Sina. As the number of casualties multiplies and Annie tries to escape over the wall, Erwin must deal with the consequences of his plan.'
                ]
            ]
        ],
        'Season 02' => [
            'number' => 2,
            'poster' => 'https://fr.web.img2.acsta.net/c_225_300/pictures/18/11/06/15/07/4301473.jpg',
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
                    'title' => 'Beast Titan',
                    'poster' => '',
                    'description' => 'Coupled with the military\'s cover-up of a previous incident, the shocking discovery inside the wall causes a stir. Elsewhere, while the new Scout recruits are held for observation, a surprising threat appears.'
                ],
                'episode 02' => [
                    'number' => 2,
                    'title' => 'I\'m Home',
                    'poster' => '',
                    'description' => 'With the appearance of Titans within Wall Rose, Sasha and Connie ride as messengers to warn their villages of the impending threat.'
                ],
                'episode 03' => [
                    'number' => 3,
                    'title' => 'Southwestward',
                    'poster' => '',
                    'description' => 'The Scouts search for a hole in the wall while Eren and others learn that someone close may be hiding all the answers.'
                ],
                'episode 04' => [
                    'number' => 4,
                    'title' => 'Soldier',
                    'poster' => '',
                    'description' => 'When the Scouts are overwhelmed by the Titan assault on the castle, the unarmed recruits\' hope for survival may lie in a promise and secret.'
                ],
                'episode 05' => [
                    'number' => 5,
                    'title' => 'Historia',
                    'poster' => '',
                    'description' => 'Utgard Castle comes crumbling down as Ymir desperately battles the Titans. Now, Christa must fulfill the promise they made long ago during winter training.'
                ],
                'episode 06' => [
                    'number' => 6,
                    'title' => 'Warrior',
                    'poster' => '',
                    'description' => 'The Scouts rest atop the wall, and in their departure, two of their own reveal an Earth-shattering secret to Eren.'
                ],
                'episode 07' => [
                    'number' => 7,
                    'title' => 'Close Combat',
                    'poster' => '',
                    'description' => 'With a new enemy revealed, Eren and the Scouts fight back using all the techniques at their disposal. However, the Armored and Colossal Titan have other plans in mind.'
                ],
                'episode 08' => [
                    'number' => 8,
                    'title' => 'The Hunters',
                    'poster' => '',
                    'description' => 'Without a way to pursue the Titans, the Scouts have no choice but to recuperate as they wait for reinforcements. But do they still have faith in Eren?'
                ],
                'episode 09' => [
                    'number' => 9,
                    'title' => 'Opening',
                    'poster' => '',
                    'description' => 'The Scouts rally and charge in pursuit, but Reiner is not quite himself while the group is trapped in the giant forest until nightfall.'
                ],
                'episode 10' => [
                    'number' => 10,
                    'title' => 'Children',
                    'poster' => '',
                    'description' => 'When the group finally flees, Ymir wonders whether she should lie or stay true to herself, even if it means ruining the lives and future of those she cares about.'
                ],
                'episode 11' => [
                    'number' => 11,
                    'title' => 'Totsugeki',
                    'poster' => '',
                    'description' => 'While the recruits attempt to reason with Bertholdt, Commander Erwin charges forth in a desperate strategy to topple the Armored Titan.'
                ],
                'episode 12' => [
                    'number' => 11,
                    'title' => 'Scream',
                    'poster' => '',
                    'description' => 'Eren\'s confrontation with a smiling Titan raises questions about his powers, but any answers will come at a cost.'
                ]
            ]
        ],
        'Season 03' => [
            'number' => 3,
            'poster' => 'https://fr.web.img6.acsta.net/c_225_300/pictures/19/04/25/17/17/2578934.jpg',
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
                    'title' => 'Smoke Signal',
                    'poster' => '',
                    'description' => 'After barely surviving Eren\'s recovery, a rising threat from the shadows puts everyone\'s lives in danger again.'
                ],
                'episode 02' => [
                    'number' => 2,
                    'title' => 'Pain',
                    'poster' => '',
                    'description' => 'The Scouts take a stand against a new enemy, but it\'s not just Titans they\'ll be fighting anymore.'
                ],
                'episode 03' => [
                    'number' => 3,
                    'title' => 'Old Story',
                    'poster' => '',
                    'description' => 'Historia and Erwin look back on their past, revealing shady actions taken by the government and a motivation for change.'
                ],
                'episode 04' => [
                    'number' => 4,
                    'title' => 'Trust',
                    'poster' => '',
                    'description' => 'On the run and running out of time, the Scouts must entrust their lives to others if they plan on surviving.'
                ],
                'episode 05' => [
                    'number' => 5,
                    'title' => 'Reply',
                    'poster' => '',
                    'description' => 'Erwin pleads his case for the Scouts to be spared, but an unforeseen announcement puts the fate of humanity at risk.'
                ],
                'episode 06' => [
                    'number' => 6,
                    'title' => 'Sin',
                    'poster' => '',
                    'description' => 'While sins of the past reveal new truths, both sides prepare for the upcoming showdown before they run out of time.'
                ],
                'episode 07' => [
                    'number' => 7,
                    'title' => 'Wish',
                    'poster' => '',
                    'description' => 'As battle breaks out to prevent the ritual, Historia makes a shocking decision which leads to catastrophe.'
                ],
                'episode 08' => [
                    'number' => 8,
                    'title' => 'Outside the Walls of Orvud District',
                    'poster' => '',
                    'description' => 'When everything falls apart, Eren must believe in himself to save his friends. But Eren alone may not be enough to stop the impending doom.'
                ],
                'episode 09' => [
                    'number' => 9,
                    'title' => 'Ruler of the Walls',
                    'poster' => '',
                    'description' => 'Desperate to stop the approaching monstrosity, the Scouts resort to unconventional tactics before it destroys everything it its path.'
                ],
                'episode 10' => [
                    'number' => 10,
                    'title' => 'Friends',
                    'poster' => '',
                    'description' => 'Kenny recalls the life which has brought him to death\'s door, but he gets to decide whether to live on or not.'
                ],
                'episode 11' => [
                    'number' => 11,
                    'title' => 'Bystander',
                    'poster' => '',
                    'description' => 'Having seen a glimpse of his father\'s memories, Eren attempts to track down a man hoping they might shed some light on his father\'s secrets.'
                ],
                'episode 12' => [
                    'number' => 12,
                    'title' => 'Night of the Battle to Retake the Wall',
                    'poster' => '',
                    'description' => 'The Scouts enjoy a feast before retaking Wall Maria. They\'ll soon uncover what\'s hidden within the basement, once and for all.'
                ],
                'episode 13' => [
                    'number' => 13,
                    'title' => 'The Town Where Everything Began',
                    'poster' => '',
                    'description' => 'The operation to retake Wall Maria commences in Shiganshina, the town where everything began. But when the Scouts arrive, something seems very wrong.'
                ],
                'episode 14' => [
                    'number' => 14,
                    'title' => 'Thunder Spears',
                    'poster' => '',
                    'description' => 'Against a rush of enemies, the Scouts scramble to defend their horses. But despite falling into a trap, they have their own surprise for the Armored Titan.'
                ],
                'episode 15' => [
                    'number' => 15,
                    'title' => 'Descent',
                    'poster' => '',
                    'description' => 'Though their Thunder Spears prove effective, the Scouts\' celebration is short-lived as disaster descends upon Shiganshina.'
                ],
                'episode 16' => [
                    'number' => 16,
                    'title' => 'Perfect Game',
                    'poster' => '',
                    'description' => 'While one front is rained on by flames, the other is battered by boulders. With no way out and limited options, the Scouts are forced to fight against the Titans with little hope left.'
                ],
                'episode 17' => [
                    'number' => 17,
                    'title' => 'Hero',
                    'poster' => '',
                    'description' => 'As Erwin\'s heroic charge buys Levi time to confront the Beast Titan, Armin comes up with a plan of his own that lays it all on the line.'
                ],
                'episode 18' => [
                    'number' => 18,
                    'title' => 'Midnight Sun',
                    'poster' => '',
                    'description' => 'While picking up the pieces from the costly battle, tensions rise when deciding which of the wounded Scouts to use the single syringe on.'
                ],
                'episode 19' => [
                    'number' => 19,
                    'title' => 'The Basement',
                    'poster' => '',
                    'description' => 'The secrets hidden in Grisha\'s basement await in the ruins of Shiganshina. There, the Scouts hope to find answers to the world worth more than the price they paid.'
                ],
                'episode 20' => [
                    'number' => 20,
                    'title' => 'That Day',
                    'poster' => '',
                    'description' => 'A look into Grisha\'s memories shows Eren the many secrets his father was hiding, including one which led to his mother\'s demise.'
                ],
                'episode 21' => [
                    'number' => 21,
                    'title' => 'Attack Titan',
                    'poster' => '',
                    'description' => 'Eren learns how all paths connect in the story that his father began. If Grisha is to pay for his sins, he must fight for freedom and take a stand.'
                ],
                'episode 22' => [
                    'number' => 22,
                    'title' => 'The Other Side of the Wall',
                    'poster' => '',
                    'description' => 'Though it\'s met with hope and despair, the truth is made public. The Scouts then venture beyond the walls to see if it\'s everything they dreamed of.'
                ]
            ]
        ],
        'Season 04' => [
            'number' => 4,
            'poster' => 'https://fr.web.img6.acsta.net/c_225_300/pictures/21/11/19/16/03/5515709.jpg',
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
                    'title' => 'The Other Side of the Sea',
                    'poster' => '',
                    'description' => 'As Marley battles the Mid-East Alliance to end a four-year war, a group of Warrior candidates on the front lines compete to be the successor of the Armored Titan.'
                ],
                'episode 02' => [
                    'number' => 2,
                    'title' => 'Midnight Train',
                    'poster' => '',
                    'description' => 'Though glad the war is over, Both the Eldian Warriors and Marley brass realize that neither have a future unless they finish the job of retaking the Founding Titan.'
                ],
                'episode 03' => [
                    'number' => 3,
                    'title' => 'The Door of Hope',
                    'poster' => '',
                    'description' => 'A flashback into Reiner\'s harsh and difficult life, and his own personal wish to become a Marleyan Warrior for his family honor.'
                ],
                'episode 04' => [
                    'number' => 4,
                    'title' => 'From One Hand to Another',
                    'poster' => '',
                    'description' => 'A sudden visit from the Tybur family shakes up the Marleyan military. Meanwhile, Falco smuggles letters for a friend and helps two old comrades reunite.'
                ],
                'episode 05' => [
                    'number' => 5,
                    'title' => 'Declaration of War',
                    'poster' => '',
                    'description' => 'Eren confronts Reiner, while Willy Tybur gives a speech to the entire world in which he aims to solve the endless cycle of hate directed towards Eldians.'
                ],
                'episode 06' => [
                    'number' => 6,
                    'title' => 'The War Hammer Titan',
                    'poster' => '',
                    'description' => 'As the Attack Titan rampages, several people are crushed to death. While all of this is going on, the War Hammer Titan appears to confront Eren.'
                ],
                'episode 07' => [
                    'number' => 7,
                    'title' => 'Assault',
                    'poster' => '',
                    'description' => 'As the battle between Eren and the warriors rages on, another party makes their move on Marley\'s Forces that pushes the tide of the battle into a more devastating climax.'
                ],
                'episode 08' => [
                    'number' => 8,
                    'title' => 'Assassin\'s Bullet',
                    'poster' => '',
                    'description' => 'Out of strength, the Armored Titan falls. Furious to have her hometown trampled, Gabi picks up a gun and takes off.'
                ],
                'episode 09' => [
                    'number' => 9,
                    'title' => 'Brave Volunteers',
                    'poster' => '',
                    'description' => 'As Paradis deals with the aftermath of the raid on Liberio, Armin looks back in the past to meeting the volunteer soldiers who reshaped their world.'
                ],
                'episode 10' => [
                    'number' => 10,
                    'title' => 'A Sound Argument',
                    'poster' => '',
                    'description' => 'Two years ago, Paradis welcomed their first visitor who was surprised to see one of their own. Obtaining their help will be critical in a three-part plan to protect Paradis.'
                ],
                'episode 11' => [
                    'number' => 11,
                    'title' => 'Deceiver',
                    'poster' => '',
                    'description' => 'Gabi and Falco escape from prison. Without a clue where they should go, they receive help from none other than the devils they despise. Meanwhile, Floch\'s mind is shifting gears.'
                ],
                'episode 12' => [
                    'number' => 12,
                    'title' => 'Guides',
                    'poster' => '',
                    'description' => 'A new turn of events rocks the Military Corps. In the midst of confusion, Eren begins enacting his plans for Paradis.'
                ],
                'episode 13' => [
                    'number' => 13,
                    'title' => 'Children of the Forest',
                    'poster' => '',
                    'description' => 'As Zeke\'s plans come to light and the Jaegerists move in, the two warrior fugitives have their identities uncovered.'
                ],
                'episode 14' => [
                    'number' => 14,
                    'title' => 'Savagery',
                    'poster' => '',
                    'description' => 'As the Jaegerists take over, Eren has a tense altercation with Armin and Mikasa, and Levi battles Zeke.'
                ],
                'episode 15' => [
                    'number' => 15,
                    'title' => 'Sole Salvation',
                    'poster' => '',
                    'description' => 'A look into Zeke\'s past shows his struggle to become a Warrior. His plans to end the suffering of all Eldians stem from a chance friendship made in his youth.'
                ],
                'episode 16' => [
                    'number' => 16,
                    'title' => 'Above and Below',
                    'poster' => '',
                    'description' => 'With the Jaegerists now in charge, Zeke\'s master plan is revealed. But before it is put in motion, Eren recruits help to flush out any invaders in their midst.'
                ],
                'episode 17' => [
                    'number' => 17,
                    'title' => 'Judgment',
                    'poster' => '',
                    'description' => 'The Marleyan military\'s air force invades Paradis, while Eren Yeager continues battling Porco Galliard, who is soon joined by Reiner Braun in his Armored Titan form.'
                ],
                'episode 18' => [
                    'number' => 18,
                    'title' => 'Sneak Attack',
                    'poster' => '',
                    'description' => 'The Beast Titan joins the fray, but General Magath is determined to take him down. Meanwhile, with the city in flames, Colt and Gabi rush to rescue Falco who\'s held captive by the Jaegerists.'
                ],
                'episode 19' => [
                    'number' => 19,
                    'title' => 'Two Brothers',
                    'poster' => '',
                    'description' => 'Colt pleads with Zeke to not use his scream and turn Falco into a Titan. All the while, soldiers and Titans clash in battle as Eren struggles to make contact with his brother.'
                ],
                'episode 20' => [
                    'number' => 20,
                    'title' => 'Memories of the Future',
                    'poster' => '',
                    'description' => 'Zeke takes Eren through Grisha\'s memories to show him how he\'s been brainwashed. But in doing so, Zeke discovers something about Eren that he never knew.'
                ],
                'episode 21' => [
                    'number' => 21,
                    'title' => 'From You, 2000 Years Ago',
                    'poster' => '',
                    'description' => 'Eren and Zeke with their contradicted ethics and shattered emotions, clash on the credibility of their ideals while Ymir, the founder, discloses her tragic past and deepest secrets within the walls.'
                ],
                'episode 22' => [
                    'number' => 22,
                    'title' => 'Thaw',
                    'poster' => '',
                    'description' => 'With no walls left on the island and Shiganshina full of Titans, the Scouts must battle their former comrades. In the midst of it all, Gabi is determined to find and rescue Falco at whatever cost.'
                ],
                'episode 23' => [
                    'number' => 23,
                    'title' => 'Sunset',
                    'poster' => '',
                    'description' => 'The Rumbling is set in motion once all hardening is undone, but this also sets Annie free. As the Jaegerists take control of the island, Connie races towards Ragako to feed Falco to his Titan mother.'
                ],
                'episode 24' => [
                    'number' => 24,
                    'title' => 'Pride',
                    'poster' => '',
                    'description' => 'Upon reaching Ragako, Connie hatches a plan to trick Falco into being eaten by his mother. Elsewhere, hero of the Eldian Empire, Jean, is set to execute Yelena and Onyankopon for their crimes against humanity.'
                ],
                'episode 25' => [
                    'number' => 25,
                    'title' => 'Night of the End',
                    'poster' => '',
                    'description' => 'Deep in the forest, an unlikely rabble of Marley stragglers and island fugitives attempt to set their hatred aside and talk around a campfire without killing each other.'
                ],
                'episode 26' => [
                    'number' => 26,
                    'title' => 'Traitor',
                    'poster' => '',
                    'description' => 'The Azumabito\'s flying boat is guarded by a port full of Jaegerists, but the Scouts are reluctant to kill their former friends. If they wish to avoid bloodshed, they can\'t afford their plan to go wrong.'
                ],
                'episode 27' => [
                    'number' => 27,
                    'title' => 'Retrospective',
                    'poster' => '',
                    'description' => 'For the flying boat to take off, the mechanics need half a day to service it. Knowing they\'ll never last that long with Jaegerist reinforcements on the way, the crew is forced to change their plans.'
                ],
                'episode 28' => [
                    'number' => 28,
                    'title' => 'The Dawn of Humanity',
                    'poster' => '',
                    'description' => 'Regardless of where it all began, Eren commits to his path of destruction during the Scouts\' first visit to the Marleyan mainland, leaving Mikasa to wonder if things could\'ve been different.'
                ],
                'episode 29' => [
                    'number' => 29,
                    'title' => '4.29',
                    'poster' => '',
                    'description' => 'Ramzi and Halil, two refugee children, flee the approaching Colossal Titans as they surround the crowds of refugees. One year prior, Eren reflects on his previous experiences, and his future actions.'
                ]
            ]
        ]
    ];

    const THE_MANDALORIAN = [
        'Season 01' => [
            'number' => 1,
            'poster' => 'https://fr.web.img2.acsta.net/c_225_300/pictures/19/10/29/09/01/2094959.jpg',
            'description' => 'After the adventures of Jango and Boba Fett, a new hero emerges in the Star Wars universe. The plot, set between the fall of the Empire and the rise of the First Order, follows the travels of a lone bounty hunter to the furthest reaches of the Galaxy, far from the authority of the New Republic.',
            'year' => 2019,
            'actors' => [
                'Pedro Pascal',
                'Troy Kotsur'
            ],
            'episodes' => [
                'episode 01' => [
                    'number' => 1,
                    'title' => 'Chapter 1: The Mandalorian',
                    'poster' => '',
                    'description' => 'A Mandalorian bounty hunter tracks a target for a well-paying, mysterious client.'
                ],
                'episode 02' => [
                    'number' => 2,
                    'title' => 'Chapter 2: The Child',
                    'poster' => '',
                    'description' => 'Target in hand, the Mandalorian must now contend with scavengers.'
                ],
                'episode 03' => [
                    'number' => 3,
                    'title' => 'Chapter 3: The Sin',
                    'poster' => '',
                    'description' => 'The battered Mandalorian returns to his client for his reward.'
                ],
                'episode 04' => [
                    'number' => 4,
                    'title' => 'Chapter 4: Sanctuary',
                    'poster' => '',
                    'description' => 'The Mandalorian teams up with an ex-soldier to protect a farming village from raiders.'
                ],
                'episode 05' => [
                    'number' => 5,
                    'title' => 'Chapter 5: The Gunslinger',
                    'poster' => '',
                    'description' => 'On a familiar desert planet, the Mandalorian helps a rookie bounty hunter who is in over his head.'
                ],
                'episode 06' => [
                    'number' => 6,
                    'title' => 'Chapter 6: The Prisoner',
                    'poster' => '',
                    'description' => 'The Mandalorian is part of a crew of mercenaries springing a convict from a prison ship.'
                ],
                'episode 07' => [
                    'number' => 7,
                    'title' => 'Chapter 7: The Reckoning',
                    'poster' => '',
                    'description' => 'An old contact extends an invitation for the Mandalorian to make peace with his enemies.'
                ],
                'episode 08' => [
                    'number' => 8,
                    'title' => 'Chapter 8: Redemption',
                    'poster' => '',
                    'description' => 'The Mandalorian and his allies come to know their true enemy, who already knows much about them.'
                ]
            ]
        ],
        'Season 02' => [
            'number' => 2,
            'poster' => 'https://fr.web.img4.acsta.net/c_225_300/pictures/20/09/15/17/53/0501597.jpg',
            'description' => 'The Mandalorian and the Child continue their journey, facing many enemies and rejoining their allies. They fight their way through a dangerous galaxy, in the tumultuous period that followed the fall of the Empire.',
            'year' => 2020,
            'actors' => [
                'Pedro Pascal'
            ],
            'episodes' => [
                'episode 01' => [
                    'number' => 1,
                    'title' => 'Chapter 9: The Marshal',
                    'poster' => '',
                    'description' => 'The Mandalorian is drawn to the Outer Rim in search of others of his kind.'
                ],
                'episode 02' => [
                    'number' => 2,
                    'title' => 'Chapter 10: The Passenger',
                    'poster' => '',
                    'description' => 'The Mandalorian must ferry a passenger with precious cargo on a risky journey.'
                ],
                'episode 03' => [
                    'number' => 3,
                    'title' => 'Chapter 11: The Heiress',
                    'poster' => '',
                    'description' => 'The Mandalorian braves high seas and meets unexpected allies.'
                ],
                'episode 04' => [
                    'number' => 4,
                    'title' => 'Chapter 12: The Siege',
                    'poster' => '',
                    'description' => 'The Mandalorian rejoins old allies for a new mission.'
                ],
                'episode 05' => [
                    'number' => 5,
                    'title' => 'Chapter 13: The Jedi',
                    'poster' => '',
                    'description' => 'The Mandalorian travels to a world ruled by a ruthless magistrate who has made a powerful enemy.'
                ],
                'episode 06' => [
                    'number' => 6,
                    'title' => 'Chapter 14: The Tragedy',
                    'poster' => '',
                    'description' => 'The Mandalorian and Child travel to an ancient site.'
                ],
                'episode 07' => [
                    'number' => 7,
                    'title' => 'Chapter 15: The Believer',
                    'poster' => '',
                    'description' => 'To move against the Empire, the Mandalorian needs the help of an old enemy.'
                ],
                'episode 08' => [
                    'number' => 8,
                    'title' => 'Chapter 16: The Rescue',
                    'poster' => '',
                    'description' => 'The Mandalorian and his allies attempt a daring rescue.'
                ]
            ]
        ],
        'Season 03' => [
            'number' => 3,
            'poster' => 'https://fr.web.img5.acsta.net/c_225_300/pictures/20/09/16/09/09/4156636.jpg',
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
                    'title' => '3.1',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 02' => [
                    'number' => 2,
                    'title' => '3.2',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 03' => [
                    'number' => 3,
                    'title' => '3.3',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 04' => [
                    'number' => 4,
                    'title' => '3.4',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 05' => [
                    'number' => 5,
                    'title' => '3.5',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 06' => [
                    'number' => 6,
                    'title' => '3.6',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 07' => [
                    'number' => 7,
                    'title' => '3.7',
                    'poster' => '',
                    'description' => ''
                ],
                'episode 08' => [
                    'number' => 8,
                    'title' => '3.8',
                    'poster' => '',
                    'description' => ''
                ]
            ]
        ]
    ];
}
