<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Mon premier site web" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="main.css">
    <link rel="shortcut icon" href="images/logo.ico" />
    <script src="https://kit.fontawesome.com/a65610437f.js" crossorigin="anonymous"></script>
    <script src="index.js"></script>
    <title>My Website</title>
</head>

<body>

    <section id="hero">

        <nav class="navbar">
            <a href="index.html" class="logo">
                <img src="images/logo.png" width="50" />
            </a>
            <div class="nav-links">
                <ul>
                    <li class="pages"><a href="https://github.com/Natixoo" target="_blank">Mon Github</a></li>
                    <li class="pages"><a href="./actus.html">Actus</a></li>
                    <li class="pages"><a href="./404.html">Boutique</a></li>
                    <li><a><i class="fa-solid fa-bars fa-2x" id="menuBtn"></i></a></li>
                </ul>
            </div>
        </nav>

        <div id="band">
            <div id="content">
                <img src="./images/logo.png" alt="Logo" width="150" />

                <h1>My Website</h1>
                <h2>Voici mon premier site web</h2>
                <h3>Vous pourrez retrouver mes jeux ici</h3>
                <br /><br />
                <a href="#downloads">Accéder aux téléchargements</a>
            </div>
        </div>

    </section>

    <section id="downloads">

    <h3 id="download_txt">----- Téléchargements -----</h3>
    <br />

    <div id="downloads_btn">

        <a href="https://drive.google.com/uc?export=download&id=140boZhEXJ42BPuQ43dsG8LxUHOWeM2dd" target="_blank">Télécharger (Windows)</a>
        <br /><br /><br /><a href="./404.html">Télécharger (MacOS) [INDISPONIBLE]</a>
        <br /><br /><br /><a href="./404.html">Télécharger (Linux) [INDISPONIBLE]</a>
        <br /><br />

    </div>

    </section>

    <section id="contact">
        <h3 id="contact_txt">----- Contact -----</h3>
        <br />
        <form method="post" id="contact_form">
            <label>Votre email</label>
            <input type="email" name="email" required><br>
            <label>Message</label>
            <textarea name="message" required></textarea><br>
            <input type="submit">
        </form>
        <?php
        if (isset($_POST['message'])) {
            $retour = mail('destinataire@free.fr', 'Envoi depuis la page Contact', $_POST['message'], 'From: webmaster@monsite.fr' . "\r\n" . 'Reply-to: ' . $_POST['email']);
            if($retour)
                echo '<p>Votre message a bien été envoyé.</p>';
        }
        ?>
    </section>
</body>

</html>