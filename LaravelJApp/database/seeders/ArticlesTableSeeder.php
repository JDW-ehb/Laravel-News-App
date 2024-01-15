<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    $articles = [
        [
            'user_id' => 2, // User ID of the author, change as needed
            'title' => 'Halo: Revolutionizing the Sci-Fi Shooter Genre',
            'cover_image' => 'storage/news_images/Halo.jpg', // Image file path
            'summary' => 'This review explores the groundbreaking game "Halo: Combat Evolved," delving into its innovative design, engaging storyline, and its lasting impact on the first-person shooter genre. Highlighting its advanced graphics, AI, and multiplayer features, the review explains how Halo set a new standard for sci-fi gaming experiences.',
            'content' => '
        Since its debut in 2001, "Halo: Combat Evolved" has become a cornerstone of the sci-fi shooter genre, captivating gamers with its rich storytelling, advanced gameplay mechanics, and its profound impact on the gaming community. Developed by Bungie and published by Microsoft Game Studios, Halo is not just a game; it\'s a phenomenon that redefined what it means to engage in virtual combat.

        **Innovative Gameplay and Design**
        One of the most remarkable aspects of Halo is its gameplay. The game introduced players to a seamless blend of on-foot and vehicular combat, a feature not commonly seen in first-person shooters of its time. Players take on the role of Master Chief, a super-soldier known as a Spartan, and engage in battles against the alien Covenant forces. The game\'s AI was groundbreaking, with enemies that adapt to player strategies, making each encounter challenging and unique.

        **Engaging Storyline and Universe**
        Halo\'s narrative is equally impressive, offering a rich and immersive universe. The story unfolds on a mysterious ringworld, known as Halo, filled with ancient secrets and a diverse range of environments. The storyline is not just about the fight against the Covenant; it delves into deeper themes like the nature of war, sacrifice, and the mystery of the Halo ring itself.

        **Graphic and Audio Prowess**
        Graphically, Halo was ahead of its time. Its detailed environments, character models, and special effects set a new standard for visual fidelity in video games. Coupled with an iconic soundtrack that perfectly captures the epic scope of the game\'s story, Halo delivers an audio-visual experience that is both mesmerizing and immersive.

        **Impact on Multiplayer Gaming**
        Perhaps the most enduring legacy of Halo is its influence on multiplayer gaming. The game\'s multiplayer modes, from deathmatch to capture the flag, became instant classics. The introduction of Xbox Live further revolutionized how players engage with Halo, turning it into a social phenomenon and laying the groundwork for future online multiplayer games.

        **Conclusion**
        Halo\'s blend of innovative gameplay, an engaging story, and groundbreaking multiplayer modes not only established it as a legendary title but also set the bar for future first-person shooters. Its impact on the gaming industry and culture is undeniable, making it not just a successful game, but a pivotal moment in gaming history. As a trailblazer in the genre, "Halo: Combat Evolved" remains a masterpiece, continuing to influence and inspire games and gamers alike.',
            'publishing_date' => now()->format('d-m-y'),
        ],
        [
            'user_id' => 3, // User ID of the author, change as needed
            'title' => 'Elden Ring: A New Epoch in Open-World Gaming',
            'cover_image' => 'storage/news_images/EldenRing.jpg', // Image file path
            'summary' => 'Elden Ring sets a new standard for open-world gaming with its intricate storytelling, vast landscapes, and challenging gameplay.',
            'content' => 'Elden Ring has been one of the most anticipated games in recent years, coming from the developers of the Souls series and George R.R. Martin. The narrative, set in the Lands Between, is deep and filled with intrigue. Gameplay is challenging, requiring skill and strategy, and the open-world design fosters exploration and creativity. The visuals are breathtaking, featuring diverse landscapes and imaginative enemy designs. Sound and music enhance the immersive experience with detailed audio and an evocative soundtrack. In conclusion, Elden Ring is a journey into a meticulously crafted world, redefining open-world gaming. Rating: 9.5/10 – A masterpiece in the gaming industry.',
            'publishing_date' => now()->format('d-m-y'),
        ],
        
        [
            'user_id' => 4, // User ID of the author, change as needed
            'title' => 'Embracing the Abyss: A Deep Dive into Dark Souls 3',
            'cover_image' => 'storage/news_images/dark-souls-3.jpg', // Image file path
            'summary' => 'In this review, we explore "Dark Souls 3," analyzing its gameplay, storytelling, and world design.',
            'content' => 'In the realm of action role-playing games, few have etched their mark as deeply as "Dark Souls 3." This review sheds light on what makes "Dark Souls 3" a transcendent experience. The game is known for its difficulty, serving as a canvas for memorable moments. The world is rich in lore, presented through environmental storytelling and cryptic dialogue. Boss battles are the heart of the game, each a unique character. The game’s graphics and soundtrack create a haunting atmosphere, while its multiplayer aspect adds depth, albeit with some potential frustration. "Dark Souls 3" stands as a testament to the art of game design, a journey that demands the best from players and leaves a lasting impression.',
            'publishing_date' => now()->format('d-m-y'), // Placeholder for the current date in d-m-y format
        ],        
        [
            'user_id' => 5, // User ID of the author, change as needed
            'title' => 'Revisiting a Classic: A Comprehensive Review of Baldur\'s Gate 2',
            'cover_image' => 'storage/news_images/BG2.jpg', // Image file path, change as needed
            'summary' => 'This review delves into the immersive world of "Baldur\'s Gate 2," exploring its storytelling, characters, and gameplay.',
            'content' => 'In the pantheon of role-playing games, few shine as brightly as "Baldur\'s Gate 2." Released in 2000, this game has become a touchstone for RPG enthusiasts, setting a benchmark for narrative depth, character development, and gameplay intricacy. **The World of Amn: A Rich Tapestry of Storytelling** At the heart of "Baldur\'s Gate 2" lies its narrative. Set in the Dungeons & Dragons universe, the game takes players on an epic journey through the kingdom of Amn. The story picks up from where its predecessor left off, with the protagonist and their companions embarking on a quest filled with moral dilemmas, complex characters, and unforeseen twists. The narrative\'s strength lies in its ability to weave personal stories with larger, world-altering events. **Characters: More Than Just Pixels** What sets "Baldur\'s Gate 2" apart is its deep character development. Each companion the player encounters has a unique backstory, personality, and set of motivations. This level of detail creates a sense of realism and emotional investment, making every decision and interaction meaningful. The dialogue, written with care and wit, adds layers to these digital companions, making them memorable long after the game is over. **Gameplay: Innovating the RPG Formula** In terms of gameplay, "Baldur\'s Gate 2" was a pioneer. Its real-time combat system, combined with a pause feature, allowed for strategic depth unseen in previous RPGs. This system challenged players to think tactically, balancing spellcasting, combat, and character positioning. Moreover, the game\'s quest structure and world design encouraged exploration and rewarded curiosity. **Legacy: Setting the Standard for Future RPGs** The influence of "Baldur\'s Gate 2" on the RPG genre cannot be overstated. It pushed the boundaries of storytelling and gameplay, inspiring a generation of game designers. Titles like "Dragon Age" and "The Witcher" owe a debt to the groundwork laid by this game. Even years after its release, its impact is felt in the way modern RPGs are crafted. **Conclusion: A Timeless Classic** "Baldur\'s Gate 2" stands the test of time as a masterpiece. Its combination of story, character, and gameplay set a high watermark for the genre. Whether you\'re a long-time fan or a newcomer to the series, this game offers a rich, immersive experience that remains unparalleled. In the world of RPGs, "Baldur\'s Gate 2" is not just a game; it\'s a legend.',
            'publishing_date' => now()->format('d-m-y'),
        ],
        [
            'user_id' => 6, // User ID of the author, change as needed
            'title' => 'Rediscovering the Wasteland: A Comprehensive Review of "Fallout: New Vegas"',
            'cover_image' => 'storage/news_images/FNV.jpg', // Image file path
            'summary' => 'In this review, we delve into the post-apocalyptic world of "Fallout: New Vegas." Exploring its expansive narrative, intricate gameplay mechanics, and unique atmosphere, we understand why this game remains a beloved classic in the RPG genre.',
            'content' => 'In the realm of role-playing games, few have managed to capture the essence of survival and moral ambiguity as effectively as "Fallout: New Vegas." Developed by Obsidian Entertainment, this installment in the Fallout series takes players into the heart of a post-apocalyptic Nevada, where every choice has consequences, and the line between right and wrong is as blurred as the desert horizon. The narrative and setting begin with a simple premise: you\'re a courier, left for dead in the Mojave Desert, embroiled in a conflict bigger than any package delivery. The story unfolds in the shadow of New Vegas, a neon-lit oasis governed by factions vying for control. The narrative is a high point, offering a complex web of quests and characters, each with their own motivations and moral compasses. The writing is sharp, filled with dark humor and poignant moments that make the wasteland feel alive. Gameplay and mechanics build upon the foundation laid by its predecessors, with added depth and flexibility. The V.A.T.S. (Vault-Tec Assisted Targeting System) returns, allowing players to pause the action and target specific enemy limbs, but it\'s the introduction of features like weapon modifications and a more nuanced reputation system that stand out. Players must navigate not only the physical dangers of the wasteland but also its political landscape, as their actions affect their standing with the game\'s various factions. Graphically, "New Vegas" captures the desolation and eerie beauty of a nuclear-ravaged Nevada. The game\'s soundtrack and sound design further enhance this atmosphere, blending period-appropriate music with the haunting sounds of the desert. While celebrated for its open-world exploration and narrative depth, "New Vegas" was initially notorious for bugs and technical issues, though patches have addressed many of these problems. The sheer scale and branching paths of the game ensure high replayability. In conclusion, "Fallout: New Vegas" is a testament to the power of storytelling in video games, a world where choices carry weight, set against the backdrop of a beautifully realized post-apocalyptic landscape. For RPG fans, it\'s an experience that resonates long after the credits roll.',
            'publishing_date' => now()->format('d-m-y'),
        ],      
        [
            'user_id' => 7, // User ID of the author, change as needed
            'title' => 'Skyrim: A Decade of Adventure in Tamriels Frostbitten Wilderness',
            'cover_image' => 'storage/news_images/skyrim.jpg', // Image file path for Skyrim article
            'summary' => 'A comprehensive review of "Skyrim," exploring its storytelling, gameplay, graphics, and lasting impact over a decade since its release.',
            'content' => 'The Elder Scrolls V: Skyrim, released in 2011 by Bethesda Game Studios, is more than just a game; it\'s a sprawling fantasy epic set in the Nordic-inspired land of Skyrim. This review covers its narrative, gameplay mechanics, visual artistry, sound design, and the profound impact it has had on the gaming community. From its richly detailed world and personalized gameplay experience to its influential legacy, Skyrim continues to be a benchmark in video game history, offering an adventure as vast as it is unforgettable.',
            'publishing_date' => now()->format('d-m-y'),
        ],
        
        [
            'user_id' => 8, // User ID of the author, change as needed
            'title' => 'Revolutionary Gaming: A Deep Dive into Assassins Creed Unity',
            'cover_image' => 'storage/news_images/ACU.jpg', // Image file path
            'summary' => 'Exploring "Assassins Creed Unity" - its gameplay evolution, rich historical accuracy, and intricate narrative set in the French Revolution.',
            'content' => 'Set in 18th century France, "Assassins Creed Unity" follows Arno Dorian in a blend of history and fiction. The game innovates with enhanced parkour and combat, boasts stunning graphics, and offers multiplayer co-op missions. Despite initial technical issues, Unity shines with its detailed portrayal of Paris and its commitment to historical authenticity, making it a beloved title in the series.',
            'publishing_date' => now()->format('d-m-y'),
        ],
        
        [
            'user_id' => 9, // User ID of the author, change as needed
            'title' => 'Exploring the Galaxy: A Comprehensive Review of Mass Effect',
            'cover_image' => 'storage/news_images/ME.jpg', // Image file path
            'summary' => 'A deep dive into "Mass Effect", exploring its storyline, gameplay, and impact on gaming.',
            'content' => '"Mass Effect," developed by BioWare, blends storytelling and gameplay in an RPG setting. The player, as Commander Shepard, faces a galactic threat. Choices impact the narrative, offering a personalized journey. Gameplay combines shooter elements with RPG mechanics. Deep character customization and planetary exploration enhance the experience. The game’s universe is rich in lore, encouraging exploration. Its influence on the gaming industry is notable, with a focus on storytelling and player choice. "Mass Effect" is a journey of wonder, danger, and adventure, earning its place as a classic in gaming.',
            'publishing_date' => now()->format('d-m-y'),
        ],
        
        [
            'user_id' => 10, // User ID of the author, change as needed
            'title' => 'A Masterpiece of Storytelling: A Review of The Witcher 3: Wild Hunt',
            'cover_image' => 'storage/news_images/TW3.jpg', // Image file path
            'summary' => 'An in-depth review of The Witcher 3: Wild Hunt, exploring its narrative, gameplay, visuals, and impact on modern gaming.',
            'content' => 'The Witcher 3: Wild Hunt by CD Projekt Red, based on Andrzej Sapkowski\'s books, is a storytelling marvel in the gaming world. Following Geralt of Rivia\'s quest, the game excels in deep, branching narratives and morally complex choices, with side quests seamlessly weaving into the main plot. Its gameplay blends action, adventure, and RPG elements with customizable character skills. The vast open world, from Velen to Skellige, is rich in detail and activities, bolstered by stunning visuals and a captivating soundtrack. Concluding, The Witcher 3 sets a high bar for RPGs with its immersive world and narrative, making it a landmark in gaming history.',
            'publishing_date' => now()->format('d-m-y'),
        ],
        
        [
            'user_id' => 11, // User ID of the author, change as needed
            'title' => 'Days Gone Game Review',
            'cover_image' => 'storage/news_images/DaysGone.jpg', // Image file path
            'summary' => 'Days Gone is an open-world action-adventure game set in a post-apocalyptic world. It has received mixed reviews, with praise for its open-world design but criticism for repetitive missions and bugs.',
            'content' => 'Days Gone, developed by Bend Studio, immerses players in the shoes of Deacon St. John, a bounty hunter navigating a world ravaged by a global pandemic. The game offers an expansive open world, where players must navigate not only the threats of Freakers (zombie-like creatures) but also hostile human factions. One of the standout features of Days Gone is its open-world design, offering players a vast and detailed post-apocalyptic landscape to explore. To survive in this harsh world, players must scavenge for resources, craft weapons, and manage their motorcycle, which serves as both a means of transportation and a crucial tool for survival. Emotional storytelling and character development are strong points of Days Gone. However, the game suffers from a repetitive mission structure and technical issues, including bugs and performance problems. Some players have also noted pacing issues in the game\'s story. In conclusion, Days Gone combines elements of action, survival, and storytelling, making it worth considering if you enjoy the post-apocalyptic genre.',
            'publishing_date' => now()->format('d-m-y'),
        ],
        
        [
            'user_id' => 12, // User ID of the author, change as needed
            'title' => 'Exploring the Boundless World of Minecraft: A Comprehensive Review',
            'cover_image' => 'storage/news_images/Minecraft.jpg', // Image file path
            'summary' => 'A deep dive into "Minecraft," exploring its gameplay, graphics, and impact on both gaming and educational fronts.',
            'content' => 'Minecraft, a Mojang Studios creation, has reshaped gaming with its unique blocky graphics and open-ended gameplay. It offers two main modes: Survival and Creative, encouraging resource management and creativity. Players can build anything from simple structures to complex mechanisms, fostering a robust educational angle. The game’s signature graphics and tranquil soundtrack add to its charm. Its multiplayer aspect and strong community support have been pivotal in its influence on gaming and education. Overall, Minecraft is not just a game; it’s a cultural phenomenon, continuously evolving and inspiring.',
            'publishing_date' => now()->format('d-m-y'),
        ],
        
        [
            'user_id' => 13, // User ID of the author, change as needed
            'title' => 'Revisiting the Frontline: A Comprehensive Review of Battlefield 4',
            'cover_image' => 'storage/news_images/BF4.jpg', // Image file path
            'summary' => 'An in-depth review of "Battlefield 4," exploring its gameplay mechanics, graphical fidelity, multiplayer modes, and lasting impact.',
            'content' => 'Since its release, "Battlefield 4" has set a high bar in tactical shooters. With its realistic gameplay, environmental destruction, and large-scale battles, it encourages teamwork and strategy. The game’s “Levolution” feature adds real-time dynamic events, enhancing unpredictability and excitement. The graphical fidelity, powered by the Frostbite engine, offers stunning visuals and audio design that immerse players in a war-torn world. "Battlefield 4’s" multiplayer is a standout, supporting large player counts and various modes like Conquest and Rush. Its dedicated player base, regular updates, and expansions have kept it relevant. Despite some technical glitches and a forgettable single-player campaign, "Battlefield 4" is a benchmark for first-person shooters, offering an exhilarating and rewarding experience.',
            'publishing_date' => now()->format('d-m-y'),
        ],
        
        [
            'user_id' => 14, // User ID of the author, change as needed
            'title' => 'Surviving the Nightmare: A Comprehensive Review of "The Evil Within"',
            'cover_image' => 'storage/news_images/TEW.jpg', // Image file path
            'summary' => 'A detailed review of "The Evil Within", analyzing gameplay, story, graphics, and impact in the survival horror genre.',
            'content' => 'Introduction: "The Evil Within," developed by Shinji Mikami, blends survival horror and modern design. Gameplay: Emphasizes resource scarcity, stealth, and strategic decisions. Story: A complex narrative involving Detective Castellanos in a nightmarish world. Visuals: Hauntingly beautiful environments and creature designs. Sound: Evocative soundtrack and immersive sound effects. Challenges: Notable difficulty adding to the game’s terror. Conclusion: A significant survival horror game with intricate design and engrossing narrative.',
            'publishing_date' => now()->format('d-m-y'),
        ],
        
        [
            'user_id' => 15, // User ID of the author, change as needed
            'title' => 'Magical Bricks: A Review of LEGO Harry Potter: The Game',
            'cover_image' => 'storage/news_images/LHP.jpg', // Image file path
            'summary' => 'This review explores "LEGO Harry Potter: The Game," highlighting its key features, storyline, character customization, and the innovative use of LEGO elements in gameplay, while assessing its appeal to Harry Potter fans and LEGO enthusiasts.',
            'content' => 'In the realm of video games, the fusion of popular franchises often leads to exciting adventures and unforgettable experiences. "LEGO Harry Potter: The Game" is a shining example of this, merging the whimsical charm of the Harry Potter universe with the imaginative fun of LEGO. This review aims to explore the different facets of the game, evaluating its appeal to fans of both series. **The Enchanting World Reimagined** At its core, "LEGO Harry Potter: The Game" is a journey through the well-loved Harry Potter story, but with a LEGO twist. Players can explore iconic locations like Hogwarts, Diagon Alley, and the Forbidden Forest, all rendered in delightful LEGO aesthetics. The game spans the entire Harry Potter series, allowing players to experience key moments from the books and films in a new light. **Gameplay Mechanics and Features** The gameplay is a seamless blend of puzzle-solving, exploration, and combat. Players use various spells to interact with their environment, build LEGO structures, and battle foes. Each character possesses unique abilities, encouraging players to switch between characters to solve different challenges. One of the standout features of the game is its character customization. Players can unlock a vast array of characters from the Harry Potter universe, each with their unique abilities and traits. This not only adds depth to the gameplay but also provides a nostalgic trip for fans of the series. **Graphics and Sound** "LEGO Harry Potter: The Game" boasts charming graphics that stay true to both the LEGO and Harry Potter aesthetics. The environments are vibrant and detailed, immersing players in a LEGO world full of magic and mystery. The sound design, including the soundtrack and voice acting, complements the visual experience, enhancing the magical ambiance of the game. **Accessibility and Entertainment Value** The game strikes a balance between being accessible to younger players and challenging enough for older gamers. The puzzles are thought-provoking without being overly complex, and the combat system is engaging yet straightforward. This accessibility, combined with the games humorous undertones and faithful representation of the Harry Potter story, makes it a highly entertaining experience for a wide range of players. **Conclusion** "LEGO Harry Potter: The Game" is a delightful blend of two beloved worlds. It offers hours of engaging gameplay filled with magic, puzzles, and the unique charm of LEGO. Whether youre a die-hard Harry Potter fan, a LEGO enthusiast, or just looking for a fun gaming experience, this game is sure to enchant and entertain. With its appealing graphics, captivating gameplay, and nostalgic value, "LEGO Harry Potter: The Game" is a magical adventure not to be missed.',
            'publishing_date' => now()->format('d-m-y'),
        ],
        
        
        [
            'user_id' => 16, // User ID of the author, change as needed
            'title' => 'Galactic Warfare Redefined: A Deep Dive into Battlefront 2',
            'cover_image' => 'storage/news_images/BF2.jpg', // Image file path
            'summary' => 'Battlefront 2 emerges as a landmark in the realm of sci-fi shooters, offering a compelling blend of immersive storytelling, expansive multiplayer battles, and stunning visuals. This review explores the games intricate mechanics, diverse character roster, and the ambitious updates that have significantly improved its initial reception.',
            'content' => 'In the universe of video games where fantasy and reality often collide, Battlefront 2 stands out as a stellar example of how a game can evolve and adapt to its audience. Initially marred by controversy, the game has undergone a transformation that not only redeems its reputation but sets a new standard for interactive storytelling and multiplayer engagement in the sci-fi genre. A Story Across the Stars: The single-player campaign of Battlefront 2 is a journey through familiar and new territories of the iconic universe. Players traverse various planets, each meticulously crafted with attention to detail that brings the lore to life. The narrative, while weaving through known events, offers fresh perspectives, adding depth to the overarching saga. Multiplayer Mayhem and Mastery: However, its in the multiplayer realm where Battlefront 2 truly shines. The game boasts a wide array of modes, from large-scale battles to more intimate skirmishes. Each mode offers a different strategic challenge, ensuring that both casual and hardcore gamers find their niche. The character roster is diverse, allowing players to step into the shoes of their favorite heroes and villains. This diversity isnt just cosmetic; each character comes with unique abilities that can turn the tide of battle, making player choice and team composition crucial for victory. Visuals and Sound: A Cinematic Experience: Battlefront 2 is a visual masterpiece. Whether its the icy landscapes of Hoth or the lush forests of Endor, every environment is rendered with incredible detail. This graphical fidelity, combined with an iconic soundtrack and authentic sound effects, creates an immersive experience that feels like stepping into a movie. The Road to Redemption: Its crucial to address the games initial shortcomings, particularly regarding its progression system and microtransactions. The outcry from the gaming community was loud and clear, and, commendably, the developers listened. Overhauls to the progression system and the removal of pay-to-win elements have transformed the game into a fairer and more enjoyable experience. Conclusion: A Testament to Evolution: Battlefront',
            'publishing_date' => now()->format('d-m-y'),
        ],
        [
            'user_id' => 17, // User ID of the author, change as needed
            'title' => 'Neon Dreams and Digital Nightmares: A Deep Dive into Cyberpunk',
            'cover_image' => 'storage/news_images/cyberpunk.jpg', // Image file path
            'summary' => 'In this review, we explore the immersive world of Cyberpunk, a game that melds futuristic technology with a gritty, dystopian society. We look at its gameplay mechanics, storytelling, and how it pushes the boundaries of the open-world genre.',
            'content' => 'In the realm of video games, few titles have sparked as much anticipation and controversy as Cyberpunk. This ambitious project from the creators of the acclaimed Witcher series promised an unparalleled experience in a sprawling, neon-lit metropolis. Now, after spending considerable time in the game, it\'s time to dissect what Cyberpunk offers to the gaming world. Cyberpunk\'s setting, Night City, is a character in its own right. The city\'s towering skyscrapers, neon advertisements, and bustling streets create an atmosphere that feels alive and pulsating. Each district offers a unique flavor, from the corporate cleanliness of City Center to the anarchic alleys of Pacifica. The game\'s attention to detail in world-building is, without a doubt, its strongest suit. At its core, Cyberpunk is an action RPG. Players assume the role of V, a mercenary navigating the treacherous social ladders of Night City. The game offers a plethora of customization options, both in terms of character appearance and skill sets. The combat is a blend of gunplay, stealth, and hacking, allowing players to approach situations in multiple ways. However, the gameplay sometimes feels clunky, especially during high-intensity combat scenes. Storytelling has always been a strong point for the developers, and Cyberpunk is no exception. The main storyline is engaging, filled with moral dilemmas and memorable characters. Side quests are not mere fillers; they are well-crafted stories that often outshine the main narrative. The voice acting and dialogue writing are top-notch, providing a cinematic experience. It\'s impossible to review Cyberpunk without addressing its technical performance. At launch, the game was plagued with bugs and performance issues, especially on last-gen consoles. While subsequent updates have fixed many of these issues, they marred the initial experience for many players. Cyberpunk is a game of contrasts. Its world-building and storytelling are exemplary, offering an immersive experience into a dystopian future. However, technical issues and sometimes unpolished gameplay mechanics detract from its brilliance. It\'s a game that reaches for the stars but is occasionally bogged down by its own ambition. For those willing to overlook its flaws, Cyberpunk offers a rich, engaging world that\'s worth exploring.',
            'publishing_date' => now()->format('d-m-y'),
        ],        
        [
            'user_id' => 18, // User ID of the author, change as needed
            'title' => 'Counter-Strike: A Timeless Classic in the World of First-Person Shooters',
            'cover_image' => 'storage/news_images/CSGO.jpg', // Image file path
            'summary' => 'Counter-Strike, often abbreviated as CS, is a legendary first-person shooter (FPS) that has stood the test of time.',
            'content' => 'When it comes to classic video games that have left an indelible mark on the gaming industry, Counter-Strike unquestionably ranks among the top contenders. Developed by Minh "Gooseman" Le and Jess "Cliffe" Cliffe, Counter-Strike emerged from humble beginnings as a mod for Valve\'s Half-Life. Little did the gaming community know that this mod would evolve into one of the most iconic and influential first-person shooters in history. In 1999, Counter-Strike made its debut, and it was an instant hit. The game\'s premise was simple yet engaging: players were divided into teams of terrorists and counter-terrorists, each with distinct objectives. Whether it was defusing a bomb, rescuing hostages, or simply eliminating the opposing team, the gameplay was intense and strategic. What set Counter-Strike apart was its emphasis on teamwork, precision, and tactical gameplay. There was no regenerating health or fancy gadgets—just you, your skills, and your team. Counter-Strike played a pivotal role in shaping the competitive gaming scene. It became a staple at LAN parties and cybercafes, where friends and strangers alike would gather to engage in heated battles. The game\'s emphasis on skill and strategy made it a natural fit for esports, and it laid the foundation for what would become a multimillion-dollar industry. In 2000, the first Counter-Strike tournament, the Cyberathlete Professional League (CPL), took place, offering cash prizes to the best players. This marked the beginning of a new era in gaming, where professional players could make a living doing what they loved. Counter-Strike tournaments continued to grow in scale and popularity, eventually leading to the formation of renowned leagues like the ESL Pro League and the FACEIT Major. Over the years, Counter-Strike has seen numerous iterations, including Counter-Strike: Condition Zero, Counter-Strike: Source, and the highly acclaimed Counter-Strike: Global Offensive (CS: GO). Each new version brought improvements in graphics, gameplay, and mechanics, while still maintaining the core essence that made the original so beloved. One of the secrets to Counter-Strike\'s longevity is its modding community. Modders have created countless custom maps, game modes, and skins, keeping the game fresh and engaging. Valve\'s continuous support and updates have also played a crucial role in maintaining the game\'s relevance. Today, Counter-Strike: Global Offensive boasts a massive player base, with millions of players worldwide. It continues to be a mainstay in the esports scene, attracting both casual and professional players. Its legacy is evident in the countless YouTube channels, Twitch streams, and esports organizations dedicated to Counter-Strike. In conclusion, Counter-Strike is more than just a game; it\'s a cultural phenomenon. Its enduring appeal, competitive nature, and emphasis on skill have made it a timeless classic in the world of first-person shooters. As we look to the future of gaming, we can be certain that Counter-Strike will continue to inspire new generations of gamers and remain a symbol of excellence in the industry.',
            'publishing_date' => now()->format('d-m-y'),
        ],
        [
            'user_id' => 19, // User ID of the author, change as needed
            'title' => 'Terraria Review: A World of Adventure and Creativity',
            'cover_image' => 'storage/news_images/T.jpg', // Image file path
            'summary' => 'Terraria, a 2D sandbox game, offers a world filled with exploration, crafting, and survival. This review explores the game\'s features, controls, multiplayer options, and the sense of discovery that makes Terraria an engrossing experience.',
            'content' => 'Terraria is a 2D sandbox game that immerses players in a pixelated world brimming with possibilities. Released in 2011, this game has been compared to Minecraft due to its open-ended nature and creative potential. In this review, we delve into the enchanting world of Terraria, examining its features and gameplay. One of the standout aspects of Terraria is its emphasis on exploration. The game drops players into a randomly generated world with minimal instructions, encouraging them to venture into the unknown. Whether you\'re digging deep underground, building towering structures, or engaging in combat with monsters, Terraria offers an abundance of opportunities. It\'s a game that allows you to play at your own pace and according to your preferences. Crafting is a central element of Terraria\'s gameplay. Resources obtained from mining, chopping down trees, and battling creatures can be used to create a wide range of items. From crafting armor and tools to constructing shelter and decorative items, the crafting system adds depth and creativity to the game. However, it\'s worth noting that newcomers may benefit from having a guide or experienced friend to navigate the intricacies of crafting. Terraria offers both single-player and multiplayer modes. Playing with friends, either locally in split-screen mode or online with up to eight players, enhances the experience. However, the availability of online multiplayer can be limited by the need for friends to own the game. The game\'s controls vary depending on the platform. While PC players have the advantage of precise mouse and keyboard controls, console players enjoy the convenience of controller-based actions. For activities like digging and grappling, the controller offers a more comfortable experience. Terraria\'s controls may take some getting used to, but they adapt well to the chosen platform. Terraria\'s sense of discovery is what truly captivates players. Unearthing new materials and experimenting with crafting options keeps the gameplay engaging. The game rewards players with a constant sense of progress, making even cosmetic rewards feel worthwhile. In addition to the core gameplay, Terraria\'s console version includes exclusive content such as new armor variations, enemies, and bosses. While these additions are welcome, they may not be as thrilling as the existing content. The inclusion of an auto-drawing map aids newcomers but slightly diminishes the game\'s DIY nature. In conclusion, Terraria is a captivating game that offers a wealth of content and creativity. Your choice of platform depends on your preferred style of play, whether it\'s building monumental structures or embarking on adventures with friends. Terraria\'s ability to immerse players in a world of exploration, crafting, and discovery makes it a must-play for fans of sandbox games.',
            'publishing_date' => now()->format('d-m-y'),
        ]
        
      
        // Add more articles as needed
    ];

    // Insert the articles into the 'news' table
    foreach ($articles as $article) {
        DB::table('news')->insert($article);
    }
}

}
