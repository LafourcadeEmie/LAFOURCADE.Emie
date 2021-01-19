<?php         
if ($_POST['lang']=="en") 
    include("en.php");

else 
    include("fr.php");
?>

<!DOCTYPE html>
<html id="all">

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="./css/style.css" />

    <title>Lafourcade Emie</title>
</head>

<body>


    <header>
        <nav>
            <ul id="menuDeroulant">
                <li><button id="boutonMenu"> <img src="./images/menu.png" /></button>
                    <ul id="menu">
                        <li>
                            <a href="#informations">
                                Informations
                            </a>
                        </li>
                        <li>
                            <a href="#etudes">
                               <?php echo $etudes ?>
                            </a>
                        </li>
                        <li>
                            <a href="#experiences">Experiences

                            </a>
                        </li>
                        <li>
                            <a href="#competences">
                               <?php echo $competences ?>
                            </a>
                        </li>
                        <li>
                            <a href="#hobbies">hobbies

                            </a>
                        </li>
                        <li>
                            <a href="#projets">
                            <?php echo $projets ?>
                            </a>
                        </li>
                        <li>
                            <a href="#contact">Contact

                            </a>
                        </li>
                        <li>
                        <form method="POST">
    <button type="submit" name="lang" value="fr"></button>
    <button type="submit" name="lang" value="en"></div></button>
</form>
                            <!-- <a onclick="myFunction()">Langue
                            </a> -->
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="intro">
            <h1 class="nom">
                Emie Lafourcade
            </h1>
            <!-- <p>Bienvenu sur mon CV. Merci d'avoir pris le temps de le consulter. <Br />
                Je suis à la recherche d'un stage de 10 à 12 semaines pour valider ma licence en informatique. <Br />
                L'année prochaine je souhaite réaliser un master en intelligence artificielle.<Br /> </p>
            <p>CV au format <a href="./images/LAFOURCADE_Emie_CVpdf" target="blank">PDF</a></p> -->

            <p><?php echo $intro ?></p>

        </div>
    </header>

    <section id="informations">
        <div class="divInformations">
            <h1>Informations</h1>

            <div class="image">
                <img src="./images/profil.png  " class="imgProfil" />
            </div>
            <p><?php echo $presentation?>
                <!-- Bonjour ! <Br />
                Je m'appelle Emie Lafourcade, <Br />
                j'ai 20 ans, <Br />
                j'ai le permis B, <Br />
                et j'habite à Villeurbanne. <Br /><Br />
                Je suis une jeune programmeuse très motivée, qui a envie d'apprendre.
                Sociable et curieuse, je n'hésite pas à poser des questions pour toujours m'améliorer.
                Je reste cependant indépendante dans mon travail mais aime aussi travailler en groupe. -->

            </p>
        </div>
    </section>

    <section id="etudes">
        <div class="fade">
            <h1><?php echo $etudes ?></h1>
            <ul>
                <li>
                    <p><strong>Licence informatique</strong> <b>- 3eme année</b><Br />
                        Université Claude Bernard, Lyon 69<Br />
                        <b>2018-2021</b>
                    </p>
                </li>

                <li>
                    <p><strong>Baccalauréat S Sciences de l’ingénieur spé mathématiques</strong><b> - mention
                            bien</b><Br />
                        Lycée Saint Exupéry, Bellegarde-Sur-Valserine 01<Br />
                        <b>2015-2018</b>
                    </p>
                </li>

                <li>
                    <p> <strong>Brevet des collèges</strong> <b>- mention très bien</b><Br />
                        Collège de Péron, Péron 01<Br />
                        <b>2012-2015</b>
                    </p>
                </li>
            </ul>
        </div>
    </section>

    <section id="experiences">
        <div class="fade">
            <h1>Experiences</h1>
            <ul>
                <li>
                    <p><strong>Contrôle qualité de connecteurs</strong><Br />
                        Fischer Connectors, Saint-Prex, Suisse<Br />
                        <b>Eté 2019</b>
                    </p>
                </li>

                <li>
                    <p><strong>Montage de connecteurs en usine d'assemblage</strong><Br />
                        Fischer Connectors, Saint-Prex, Suisse<Br />
                        <b>Eté 2017, été 2018</b>
                    </p>
                </li>
            </ul>
        </div>
    </section>

    <section id="competences">
        <div class="fade">
            <h1><?php echo $competences ?></h1>
            <h3><b>Langages de programmation</b></h3>
            <ul class="LP">
                <div class="comPart">
                    <li>
                        <!-- <b> -->
                        C++ <br />
                        <!-- </b> -->
                    </li>
                    <div class="progress" id="progressComp">
                        <div class="progress-bar" role="progressbar" aria-valuemax="100" style="width: 80%;">
                        </div>
                    </div>
                </div>
                <div class="comPart">
                    <li>
                        <!-- <b> -->
                        HTML/CSS <br />
                        <!-- </b> -->
                    </li>
                    <div class="progress" id="progressComp">
                        <div class="progress-bar" role="progressbar" aria-valuemax="100" style="width: 80%;">
                        </div>
                    </div>
                </div>

                <div class="comPart">
                    <li>
                        <!-- <b> -->
                        JavaScript <br />
                        <!-- </b> -->
                    </li>
                    <div class="progress" id="progressComp">
                        <div class="progress-bar" role="progressbar" aria-valuemax="100" style="width: 50%;">
                        </div>
                    </div>
                </div>

                <div class="comPart">
                    <li>
                        <!-- <b> -->
                        PHP <br />
                        <!-- </b> -->
                    </li>
                    <div class="progress" id="progressComp">
                        <div class="progress-bar" role="progressbar" aria-valuemax="100" style="width: 60%;">
                        </div>
                    </div>
                </div>

                <div class="comPart">
                    <li>
                        <!-- <b> -->
                        SQL
                        <!-- </b> -->
                    </li>
                    <div class="progress" id="progressComp">
                        <div class="progress-bar" role="progressbar" aria-valuemax="100" style="width: 60%;">
                        </div>
                    </div>
                </div>
            </ul>
            <h3><b>Autre</b></h3>
            <ul class="autre">

                <div class="comPart">
                    <li>
                        <!-- <b> -->
                        Linux <br />
                        <!-- </b> -->
                    </li>
                    <div class="progress" id="progressComp">
                        <div class="progress-bar" role="progressbar" aria-valuemax="100" style="width: 60%;">
                        </div>
                    </div>
                </div>

                <div class="comPart">
                    <li>
                        <!-- <b> -->
                        Git
                        <!-- </b> -->
                    </li>
                    <div class="progress" id="progressComp">
                        <div class="progress-bar" role="progressbar" aria-valuemax="100" style="width: 60%;">
                        </div>
                    </div>
                </div>
                <!--    <div class="comPart">
                        Travail en groupe
                </li>
                    <div class="progress" id="progressComp">
                        <div class="progress-bar" role="progressbar" aria-valuemax="100" style="width: 100%;">
                        </div>
                    </div>
                </div>
                    <div class="comPart">
                            Autonomie
                    </li>
                        <div class="progress" id="progressComp">
                            <div class="progress-bar" role="progressbar" aria-valuemax="100" style="width: 80%;">
                            </div>
                        </div>
                    </div>
                </ul>

                 <div class="comPart">
                        Microsoft office
                </li>
                    <div class="progress" id="progressComp">
                        <div class="progress-bar" role="progressbar" aria-valuemax="100" style="width: 70%;">
                        </div>
                    </div>
                </div> -->
            </ul>
            <h3><b>Langues</b></h3>
            <ul class="langues">
                <div class="comPart">
                    <li>
                        <!-- <b> -->
                        Francais <br />
                        <!-- </b> -->
                    </li>
                    <div class="progress" id="progressComp">
                        <div class="progress-bar" role="progressbar" aria-valuemax="100" style="width: 100%;">
                        </div>
                    </div>
                </div>

                <div class="comPart">
                    <li>
                        <!-- <b> -->
                        Anglais <br />
                        <!-- </b> -->
                    </li>
                    <div class="progress" id="progressComp">
                        <div class="progress-bar" role="progressbar" aria-valuemax="100" style="width: 80%;">
                        </div>
                    </div>
                </div>

                <div class="comPart">
                    <li>
                        <!-- <b> -->
                        Allemand
                        <!-- </b> -->
                    </li>
                    <div class="progress" id="progressComp">
                        <div class="progress-bar" role="progressbar" aria-valuemax="100" style="width: 30%;">
                        </div>
                    </div>
                </div>
            </ul>
        </div>
    </section>

    <section id="hobbies">
        <div class="fade">
            <h1>
                Hobbies</h1>
            <p>J'aime profiter de mon temps libre pour jouer du piano ou de la guitare, faire de la
                patisserie ou jouer
                aux jeux
                vidéos.
            </p>
        </div>
    </section>
    <section id="projets">
        <div class="fade">
            <h1>
            <?php echo $projets ?></h1>
            <ul>
                <li>
                    <p class="nomProjet"> <strong>Mille bornes</strong> <b> - C++</b> </br> Projet réalisé en groupe
                        pour la
                        matière «Algorithme et programmation» - licence 2</p>
                    <div></div><img src="./images/mb.png" class="imgprojet" />
        </div>
        </li>
        <li>
            <p class="nomProjet"> <strong>Environnement 3D animé</strong> <b> - C++</b> </br>Projet réalisé pour la
                matière
                «Introduction à l’informatique graphique» - licence 2.</p>
            <div><img src="./images/graphique.gif" class="imgprojet" /></div>

        </li>
        <li>
            <p class="nomProjet"> <strong>Pinterest like</strong> <b> - SQL, PHP, HTML, CSS</b> </br> Projet réalisé en
                groupe pour la
                matière «Base de données» - licence 2.</p>

            <div><img src="./images/pinterest.png" class="imgprojet" /></div>

        </li>
        <li>
            <p class="nomProjet"> <a
                    href="https://www.societe-informatique-de-france.fr/2019/09/octet-video-concours-video-2020/"
                    target="blank">
                    <strong id="lien">Concours Octet Video </strong> </a> </br>Vidéo réalisée en groupe pour la matière
                «Interactions Homme/machines» - licence 2.<br />
                Nous avons obtenu le prix du jury au concours "Octet vidéo" organisé en 2020 par la Société Informatique
                de France.</p>

            <div class="imgprojet">
                <div class="video-container ">
                    <iframe src="https://www.youtube.com/embed/-6ShnRe78N8" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen class="vidprojet" scrolling="no" frameborder="0" ;></iframe>
                </div>
            </div>
        </li>
        </ul>
        </div>
    </section>

    <footer id="contact">
        <h2>Contact</h2>
        <div id="logoContact">

            <a href="https://www.linkedin.com/in/emie-lafourcade" target="_blank">
                <img src="./images/li.png" height="70" /></a>

            <a href="mailto:emie.lafourcade@gmail.com" target="_blank">
                <img src="./images/mail.png" height="70" /></a>
        </div>

        <div class="progress-container">
            <div class="progress-bar" id="myBar"></div>
        </div>

    </footer>

    <script type="text/javascript" src="./js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="./js/script.js"></script>
</body>

</html>