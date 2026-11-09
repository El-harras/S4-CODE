<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Presentation</title>
    <link rel="stylesheet" href="CSS/Presentation-style.css">
</head>

<body>

    <header>
        <div class="logo">
            <img src="images/LOGO.png" alt="logo LifeFlow">
            <h2>LifeFlow</h2>
        </div>
        <div class="compte">
            <a href="../Gestion_modules/modules.html" class="connecter">Se connecter</a>
            <a href="" class="creer">creer un compte</a>
        </div>
    </header>

    <section>

        <div class="resume">
            <p class="Soutien">Une vie plus sereine</p>
            <h1>Tout ce qui compte,<br>dans un seul flux.</h1>
            <p>LifeFlow réunit votre budget, votre maison, votre Vehicule, votre Sante, vos<br>
                Taches et vos rendez-vous dans un espace personnel. Chaque matin, vous<br>
                voyez ce qui demande votre attention.
            </p>
            <a href="" class="creer">creer un compte</a>
            <a href="" class="connecter">J'ai deja un compte</a>
            <div class="propietes">
                <p><ion-icon name="play-outline"></ion-icon>Données visibles par vous seul</p>
                <p><ion-icon name="play-outline"></ion-icon>Téléphone et ordinateur</p>
                <p><ion-icon name="play-outline"></ion-icon>العربية · Français · English</p>
            </div>
        </div>
        <div class="example">
            <img src="images/image.png" alt="">
        </div>

    </section>

    <main>
        <div>
            <h2>Cinq espaces pour le quotidien</h2>
            <p class="text">Activez ceux dont vous avez besoin. Les autres restent cachés sans rien perdre.</p>
            <!--php-->
            <div class="cinq">
                <?php foreach ($options as $option): ?>
                    <div class="<?= htmlspecialchars($option['choise']) ?>">
                        <ion-icon name="<?= htmlspecialchars($option['icon']) ?>"></ion-icon>
                        <h4><?= htmlspecialchars($option['type']) ?></h4>
                        <p><?= htmlspecialchars(mb_substr($option['travail'], 0, 200)) ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <div>
            <h2>Prêt en trois étapes</h2>
            <P class="text">Moins de deux minutes entre l'inscription et votre première journée.</P>
            <div class="pret">
                <?php foreach ($etapes as $etape): ?>
                    <div class="etapes">
                        <h4><?= htmlspecialchars($etape['option']) ?></h4>
                        <p><?= htmlspecialchars(mb_substr($etape['action'], 0, 200)) ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

    </main>

    <footer>
        <h2>
            Une meilleure organisation <br>
            pour une vie plus sereine.
        </h2>
        <a href="">creer mon compte</a>
    </footer>










    <script type="module" src="https://unpkg.com/ionicons@8.0.13/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@8.0.13/dist/ionicons/ionicons.js"></script>
</body>

</html>