<?php
session_start();

include("connection.php");
include("functions.php");

$user_data=check_login($con);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rotten Potatoes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <script src="https://kit.fontawesome.com/b486dd5239.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
<?php 
    $IPATH=$_SERVER["DOCUMENT_ROOT"]."/project/rotten-potatoes-main/assets/";
    include($IPATH."header.php");
    ?>
    <main>
        <div class="container critics">
            <div class="text-center pt-3">
                <h1>Top Rated Anime</h1>
            </div>
            <hr/>
            <div class="box">
                <div class="row py-5 px-5">
                    <h3 class="mb-4">1) Fullmetal Alchemist: Brotherhood</h3>
                    <div class="col-md-4">
                        <img src="./posters/FMAB.jpg" alt="" class="card-img critics-img">
                    </div>
                    <div class="col-md-8">
                        <br/><br/>
                        <h4>Genre : Shonen</h4>
                        <br/>
                        <h4>Manga Authour : Hiromu Arakawa</h4>
                        <br/>
                        <h4>English Dub : Vic Mignogna, Travis Willingham</h4>
                    </div>
                    <div class="col-lg-12 mt-4">
                        <p>"In order for something to be obtained, something of equal value must be lost."

                            Alchemy is bound by this Law of Equivalent Exchange—something the young brothers
                            Edward and Alphonse Elric only realize after attempting human transmutation: the one forbidden act of alchemy. 
                            They pay a terrible price for their transgression—Edward loses his left leg, Alphonse his physical body.
                            It is only by the desperate sacrifice of Edward's right arm that he is able to affix Alphonse's soul to a suit of armor.
                            Devastated and alone, it is the hope that they would both eventually return to their original bodies that gives 
                            Edward the inspiration to obtain metal limbs called "automail" and become a state alchemist, the Fullmetal Alchemist.
                            
                            Three years of searching later, the brothers seek the Philosopher's Stone, a mythical relic that allows an alchemist to overcome the Law of Equivalent Exchange.
                            Even with military allies Colonel Roy Mustang, Lieutenant Riza Hawkeye, and Lieutenant Colonel Maes Hughes on their side, 
                            the brothers find themselves caught up in a nationwide conspiracy that leads them not only to the true nature of the elusive Philosopher's Stone, 
                            but their country's murky history as well. 
                            In between finding a serial killer and racing against time, Edward and Alphonse must ask themselves 
                            if what they are doing will make them human again... or take away their humanity. </p>                  
                    </div>
                </div>
            </div>
            <hr/>
            <div class="box">
                <div class="row py-5 px-5">
                    <h3 class="mb-4">2) Shingeki no Kyojin</h3>
                    <div class="col-md-4">
                        <img src="./posters/aotvertical2.jpg" alt="" class="card-img critics-img">
                    </div>
                    <div class="col-md-8">
                        <br/><br/>
                        <h4>Genre : Dark Shonen</h4>
                        <br/>
                        <h4>Manga Authour : Hajime Isayama</h4>
                        <br/>
                        <h4>Enlish Dub : Bryace Papenbrook, Trina Nishimura, Josh Grelle</h4>
                    </div>
                    <div class="col-lg-12 mt-4">
                        <p>
                            Centuries ago, mankind was slaughtered to near extinction by monstrous humanoid creatures called titans,
                            forcing humans to hide in fear behind enormous concentric walls. What makes these giants truly terrifying is that their taste 
                            for human flesh is not born out of hunger but what appears to be out of pleasure.
                            To ensure their survival, the remnants of humanity began living within defensive barriers, resulting in one hundred years without a single titan encounter.
                            However, that fragile calm is soon shattered when a colossal titan manages to breach the supposedly impregnable outer wall, 
                            reigniting the fight for survival against the man-eating abominations.
                            
                            After witnessing a horrific personal loss at the hands of the invading creatures, Eren Yeager dedicates his life to their eradication by enlisting into the 
                            Survey Corps, an elite military unit that combats the merciless humanoids outside the protection of the walls. 
                            Based on Hajime Isayama's award-winning manga, Shingeki no Kyojin follows Eren, along with his adopted sister Mikasa Ackerman and his childhood friend Armin Arlert, 
                            as they join the brutal war against the titans and race to discover a way of defeating them before the last walls are breached.
                            </p>
                    </div>
                </div>
            </div>
            <hr/>
            <div class="box">
                <div class="row py-5 px-5">
                    <h3 class="mb-4">3) Steins;Gate</h3>
                    <div class="col-md-4">
                        <img src="./posters/SG.jpg" alt="" class="card-img critics-img">
                    </div>
                    <div class="col-md-8">
                        <br/><br/><br/>
                        <h4>Genre : Seinen</h4>
                        <br/>
                        <h4>Visual Novel Writer : Chiyomaru Shikura</h4>
                        <br/>
                        <h4>English Dub : J Michael Tatum, Cherami Leigh</h4>
                    </div>
                    <div class="col-lg-12 mt-4">
                        <p>The self-proclaimed mad scientist Rintarou Okabe rents out a room in a rickety old building in Akihabara, 
                            where he indulges himself in his hobby of inventing prospective "future gadgets" with fellow lab members: Mayuri Shiina, 
                            his air-headed childhood friend, and Hashida Itaru, a perverted hacker nicknamed "Daru."
                            The three pass the time by tinkering with their most promising contraption yet, a machine dubbed the "Phone Microwave," 
                            which performs the strange function of morphing bananas into piles of green gel.
                            
                            Though miraculous in itself, the phenomenon doesn't provide anything concrete in Okabe's search for a scientific breakthrough; that is, 
                            until the lab members are spurred into action by a string of mysterious happenings before stumbling upon an unexpected success—the Phone Microwave 
                            can send emails to the past, altering the flow of history.
                            
                            Adapted from the critically acclaimed visual novel by 5pb. and Nitroplus, Steins;Gate takes Okabe through the depths of scientific theory and practicality. 
                            Forced across the diverging threads of past and present, Okabe must shoulder the burdens that come with holding the key to the realm of time.
                            </p>
                    </div>
                </div>
            </div>
            <hr/>
            <div class="box">
                <div class="row py-5 px-5">
                    <h3 class="mb-4">4) Hunter X Hunter</h3>
                    <div class="col-md-4">
                        <img src="./posters/HxH.jpg" alt="" class="card-img critics-img">
                    </div>
                    <div class="col-md-8">
                        <br/>
                        <br/><br/>
                        <h4>Genre : Shonen</h4>
                        <br/>
                        <h4>Manga author : Yoshihiro Togashi</h4>
                        <br/>
                        <h4>English Dub : Erica Mendez, Megumi Han</h4>
                    </div>
                    <div class="col-lg-12 mt-4">
                        <p>Hunter x Hunter is set in a world where Hunters exist to perform all manner of dangerous tasks like capturing criminals 
                            and bravely searching for lost treasures in uncharted territories. Twelve-year-old Gon Freecss is determined to become the best Hunter possible 
                            in hopes of finding his father, who was a Hunter himself and had long ago abandoned his young son. 
                            However, Gon soon realizes the path to achieving his goals is far more challenging than he could have ever imagined.
                            
                            Along the way to becoming an official Hunter, Gon befriends the lively doctor-in-training Leorio, vengeful Kurapika, and rebellious ex-assassin Killua. 
                            To attain their own goals and desires, together the four of them take the Hunter Exam, notorious for its low success rate and high probability of death. 
                            Throughout their journey, Gon and his friends embark on an adventure that puts them through many hardships and struggles. 
                            They will meet a plethora of monsters, creatures, and characters—all while learning what being a Hunter truly means.
                            </p>
                    </div>
                </div>
            </div>
            <hr/>
            <div class="box">
                <div class="row py-5 px-5">
                    <h3 class="mb-4">5) Gintama</h3>
                    <div class="col-md-4">
                        <img src="./posters/Gintama.jpg" alt="" class="card-img critics-img">
                    </div>
                    <div class="col-md-8">
                    <br/><br/><br/>
                        <h4>Genre : Comedy</h4>
                        <br/>
                        <h4>Manga Authour : Sorachi Hideaki</h4>
                        <br/>
                        <h4>English Dub : Cole Howard, Jocelyne Loewen</h4>
                    </div>
                    <div class="col-lg-12 mt-4">
                        <p>The Amanto, aliens from outer space, have invaded Earth and taken over feudal Japan. 
                            As a result, a prohibition on swords has been established, and the samurai of Japan are treated with disregard as a consequence.
                            
                            However one man, Gintoki Sakata, still possesses the heart of the samurai, although from his love of sweets and work as a yorozuya, one might not expect it. 
                            Accompanying him in his jack-of-all-trades line of work are Shinpachi Shimura, a boy with glasses and a strong heart, 
                            Kagura with her umbrella and seemingly bottomless stomach, as well as Sadaharu, their oversized pet dog. 
                            Of course, these odd jobs are not always simple, as they frequently have run-ins with the police, ragtag rebels, and assassins, 
                            oftentimes leading to humorous but unfortunate consequences.
                            
                            Who said life as an errand boy was easy?</p>
                    </div>
                </div>
            </div>
            <hr/>
            <div class="box">
                <div class="row py-5 px-5">
                    <h3 class="mb-4">6) Code Geass</h3>
                    <div class="col-md-4">
                        <img src="./posters/CG.jpg" alt="" class="card-img critics-img">
                    </div>
                    <div class="col-md-8">
                        <br/><br/>
                        <h4>Genre : Mecha</h4>
                        <br/>
                        <h4>Anime Writer : Gorou Taniguchi</h4>
                        <br/>
                        <h4>English Dub : Bosch Johnny Yong, Michelle Ruff</h4>
                    </div>
                    <div class="col-lg-12 mt-4">
                        <p>Code Geass: Hangyaku no Lelouch is an original anime series by Sunrise animation studio with original character designs by the all-female Japanese manga artist group Clamp. Manga and light novels based off the show have been published by Kadokawa Shoten. The show has sold millions of DVDs and Blu-ray volumes and is extremely popular in both Japan and North America. The show is known for its multi-genre appeal and for its diverse cast of characters who face many moral dilemmas over the course of the series.</p>
                    </div>
                </div>
            </div>
            <hr/>
            <div class="box">
                <div class="row py-5 px-5">
                    <h3 class="mb-4">7) Death Note</h3>
                    <div class="col-md-4">
                        <img src="./posters/deathnote.jpg" alt="" class="card-img critics-img">
                    </div>
                    <div class="col-md-8">
                        <br/><br/>
                        <h4>Genre : Shonen Thriller</h4>
                        <br/>
                        <h4>Manga Authour : Tsugumi Ohba</h4>
                        <br/>
                        <h4>English Dub : Alessandro Juliani, Brian Drummond</h4>
                    </div>
                    <div class="col-lg-12 mt-4">
                        <p>A shinigami, as a god of death, can kill any person—provided they see their victim's face and write their victim's name in a notebook called a Death Note. One day, Ryuk, bored by the shinigami lifestyle and interested in seeing how a human would use a Death Note, drops one into the human realm.

                            High school student and prodigy Light Yagami stumbles upon the Death Note and—since he deplores the state of the world—tests the deadly notebook by writing a criminal's name in it. When the criminal dies immediately following his experiment with the Death Note, Light is greatly surprised and quickly recognizes how devastating the power that has fallen into his hands could be.
                            
                            With this divine capability, Light decides to extinguish all criminals in order to build a new world where crime does not exist and people worship him as a god. Police, however, quickly discover that a serial killer is targeting criminals and, consequently, try to apprehend the culprit. To do this, the Japanese investigators count on the assistance of the best detective in the world: a young and eccentric man known only by the name of L.</p>
                    </div>
                </div>
            </div>
            <hr/>
            <div class="box">
                <div class="row py-5 px-5">
                    <h3 class="mb-4">8) One Punch Man</h3>
                    <div class="col-md-4">
                        <img src="./posters/opm.jpg" alt="" class="card-img critics-img">
                    </div>
                    <div class="col-md-8">
                        <br/><br/>
                        <h4>Genre : Shonen Comedy</h4>
                        <br/>
                        <h4>Manga Authour: ONE</h4>
                        <br/>
                        <h4>English Dub : Max Mittleman, Zach Aguilar</h4>
                    </div>
                    <div class="col-lg-12 mt-4">
                        <p>The seemingly ordinary and unimpressive Saitama has a rather unique hobby: being a hero. In order to pursue his childhood dream, he trained relentlessly for three years—and lost all of his hair in the process. Now, Saitama is incredibly powerful, so much so that no enemy is able to defeat him in battle. In fact, all it takes to defeat evildoers with just one punch has led to an unexpected problem—he is no longer able to enjoy the thrill of battling and has become quite bored.

                            This all changes with the arrival of Genos, a 19-year-old cyborg, who wishes to be Saitama's disciple after seeing what he is capable of. Genos proposes that the two join the Hero Association in order to become certified heroes that will be recognized for their positive contributions to society, and Saitama, shocked that no one knows who he is, quickly agrees. And thus begins the story of One Punch Man, an action-comedy that follows an eccentric individual who longs to fight strong enemies that can hopefully give him the excitement he once felt and just maybe, he'll become popular in the process.</p>
                    </div>
                </div>
            </div>
            <hr/>
            <div class="box">
                <div class="row py-5 px-5">
                    <h3 class="mb-4">9) Haikyuu!!</h3>
                    <div class="col-md-4">
                        <img src="./posters/haikyuu.jpg" alt="" class="card-img critics-img">
                    </div>
                    <div class="col-md-8">
                    <br/>
                        <br/><br/>
                        <h4>Genre : Sports</h4>
                        <br/>
                        <h4>Manga Authour : Haruichi Furudate</h4>
                        <br/>
                        <h4>English Dub : Bryson Baugus, Scott Gibbs</h4>
                    </div>
                    <div class="col-lg-12 mt-4">
                        <p>Inspired after watching a volleyball ace nicknamed "Little Giant" in action, small-statured Shouyou Hinata revives the volleyball club at his middle school. The newly-formed team even makes it to a tournament; however, their first match turns out to be their last when they are brutally squashed by the "King of the Court," Tobio Kageyama. Hinata vows to surpass Kageyama, and so after graduating from middle school, he joins Karasuno High School's volleyball team—only to find that his sworn rival, Kageyama, is now his teammate.

                            Thanks to his short height, Hinata struggles to find his role on the team, even with his superior jumping power. Surprisingly, Kageyama has his own problems that only Hinata can help with, and learning to work together appears to be the only way for the team to be successful. Based on Haruichi Furudate's popular shounen manga of the same name, Haikyuu!! is an exhilarating and emotional sports comedy following two determined athletes as they attempt to patch a heated rivalry in order to make their high school volleyball team the best in Japan.</p>
                    </div>
                </div>
            </div>
            <hr/>
            <div class="box">
                <div class="row py-5 px-5">
                    <h3 class="mb-4">10) Naruto</h3>
                    <div class="col-md-4">
                        <img src="./posters/naruto.jpg" alt="" class="card-img critics-img">
                    </div>
                    <div class="col-md-8">
                    <br/>
                        <br/><br/>
                        <h4>Genre : Shonen</h4>
                        <br/>
                        <h4>Manga author : Masashi Kishimoto</h4>
                        <br/>
                        <h4>English Dub : Erica Mendez, Megumi Han</h4>
                    </div>
                    <div class="col-lg-12 mt-4">
                        <p>Moments prior to Naruto Uzumaki's birth, a huge demon known as the Kyuubi, the Nine-Tailed Fox, attacked Konohagakure, the Hidden Leaf Village, and wreaked havoc. In order to put an end to the Kyuubi's rampage, the leader of the village, the Fourth Hokage, sacrificed his life and sealed the monstrous beast inside the newborn Naruto.

                            Now, Naruto is a hyperactive and knuckle-headed ninja still living in Konohagakure. Shunned because of the Kyuubi inside him, Naruto struggles to find his place in the village, while his burning desire to become the Hokage of Konohagakure leads him not only to some great new friends, but also some deadly foes.
                            </p>
                    </div>
                </div>
            </div>
            <hr/>
            
            
        </div>
    </main>
    <?php 
    $IPATH=$_SERVER["DOCUMENT_ROOT"]."/project/rotten-potatoes-main/assets/";
    include($IPATH."footer.html");
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
        crossorigin="anonymous"></script>
</body>

</html>
