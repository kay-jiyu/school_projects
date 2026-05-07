<?php
require('connexion.inc.php');
$req = "SELECT * FROM contact";
$result = mysqli_query($conn, $req);
?>

<style>
    :root {
        --primary-color: #00ffcc;
        --bg-dark: #0a0a0a;
        --card-bg: #161616;
        --text-color: #e0e0e0;
    }
    body {
    background-color: var(--bg-dark); /* Fond principal */
    color: var(--text-color);         /* Couleur du texte */
    font-family: 'Segoe UI', sans-serif; /* Police */
    margin: 0;                        /* Supprime marges par défaut */
    padding: 0;                       /* Supprime padding par défaut */
}

/* ================================
   🧭 NAVBAR (MENU PRINCIPAL)
================================ */
.nav {
    background: rgba(0, 0, 0, 0.95); /* Fond noir semi-transparent */
    backdrop-filter: blur(8px);      /* Effet flou (glassmorphism) */
    position: sticky;                /* Fixe en haut au scroll */
    top: 0;
    z-index: 1000;                   /* Passe au-dessus des autres éléments */

    width: 100%;                     /* Prend toute la largeur */
    display: flex;
    justify-content: center;         /* Centre le contenu interne (ul) */
    border-bottom: 1px solid var(--primary-color); /* Ligne néon en bas */
}

/* Liste du menu */
.nav ul {
    display: flex;
    justify-content: center; /* centre le groupe */
    gap: 10px; /* espace léger entre boutons */
    padding: 10px 0;
}

.nav ul li {
    flex: none; /* empêche l'étirement */
}

.nav a {
    display: inline-block; /* taille selon contenu */
    padding: 10px 20px; /* bouton compact */
    border: 1px solid transparent;
}

/* Effet hover sur menu */
.nav a:hover {
    color: var(--primary-color); /* Texte devient vert */
    background: rgba(0, 255, 204, 0.08); /* Fond léger */
    text-shadow: 0 0 5px var(--primary-color); /* Glow néon */
}
    /* CONTENU PRINCIPAL */
    .main-content {
        width: 100%;
        max-width: 900px;
        padding: 40px 20px;
    }

    table {
        width: 100%;
        border-collapse: separate;
        border-spacing: 0 10px;
    }

    td {
        background: var(--card-bg);
        padding: 20px;
        border: 1px solid #333;
        transition: border-color 0.3s;
    }

    tr td:first-child { border-radius: 15px 0 0 15px; }
    tr td:last-child { border-radius: 0 15px 15px 0; }
    tr:hover td { border-color: var(--primary-color); }
</style>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Email</th>
            <th>Message</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($lign = $result->fetch_assoc()): ?>
            <tr>
                <td><?= $lign['id'] ?></td>
                <td><?= htmlspecialchars($lign['nom']) ?></td>
                <td><?= htmlspecialchars($lign['email']) ?></td>
                <td><?= nl2br(htmlspecialchars($lign['message'])) ?></td>
            </tr>
        <?php endwhile; ?>
    </tbody>
</table>