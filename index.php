<?php
function randomArtefact() : void
{
    $artefacts = [
        0 => "Épée de l'Aube",
        1 => "Amulette du Sorcier",
        2 => "Bouclier du Gardien",
        3 => "Couronne du Roi des Elfes",
        4 => "Arc-en-Ciel de l'Enchanteur",
        5 => "Potion d'Invisibilité",
        6 => "Étoile du Matin Maudite",
        7 => "Grimoire des Ombres",
        8 => "Lance du Paladin",
        9 => "Bâton du Mage",
        10 => "Cape de l'Assassin",
        11 => "Bague de Puissance",
        12 => "Hache du Barbare",
        13 => "Flèche d'Argent",
        14 => "Anneau de Résurrection",
        15 => "Dague du Voleur",
        16 => "Bouclier de la Tortue",
        17 => "Hache de Guerre des Nains",
        18 => "Boussole du Navigateur",
        19 => "Épée de Cristal",
        20 => "Grimoire des Sortilèges",
        21 => "Bâton de la Forêt Enchantée",
        22 => "Écaille du Dragon",
        23 => "Heaume du Chevalier",
        24 => "Bague de l'Empereur",
        25 => "Lance de la Lumière Divine",
        26 => "Sceptre de l'Archimage",
        27 => "Anneau de l'Invisibilité",
        28 => "Gantelet du Géant",
        29 => "Cape du Vagabond",
        30 => "Pierre de Téléportation",
        31 => "Arc d'Émeraude",
        32 => "Talisman de la Sagesse",
        33 => "Lame du Templier",
        34 => "Potion de Guérison",
        35 => "Bouclier du Phénix",
        36 => "Sceptre du Nécromancien",
        37 => "Flèche de Feu",
        38 => "Épée du Roi",
        39 => "Heaume de la Bravoure",
        40 => "Bâton de l'Oracle",
        41 => "Bouclier d'Orion",
        42 => "Livre des Secrets",
        43 => "Bague de l'Éternité",
        44 => "Cape de l'Aventurier",
        45 => "Lame de l'Éclipse",
        46 => "Dague de Vengeance",
        47 => "Épée du Dragon",
        48 => "Amulette du Sage",
        49 => "Lance de la Justice",
        50 => "Anneau de l'Évasion",
        51 => "Bâton de l'Alchimiste",
        52 => "Griffe du Loup-Garou",
        53 => "Bouclier du Chevalier Noir",
        54 => "Lame de la Tempête",
        55 => "Potion de Force",
        56 => "Cape de l'Ombre",
        57 => "Glaive de Glace",
        58 => "Heaume du Dragon",
        59 => "Talisman de la Fortune",
        60 => "Sceptre du Temps",
        61 => "Bague de la Foudre",
        62 => "Arc du Chasseur",
        63 => "Bouclier de la Lune",
        64 => "Épée du Guerrier",
        65 => "Dague de l'Assassin",
        66 => "Livre des Runes",
        67 => "Bâton de l'Enchanteur",
        68 => "Couronne des Rois",
        69 => "Amulette de l'Étoile du Soir",
        70 => "Lance du Temps",
        71 => "Anneau du Magicien",
        72 => "Heaume du Minotaure",
        73 => "Grimoire des Maléfices",
        74 => "Cape du Voyageur",
        75 => "Épée de la Destinée",
        76 => "Lance de la Fureur",
        77 => "Bouclier de la Foi",
        78 => "Bague du Rêveur",
        79 => "Flèche de la Vengeance",
        80 => "Lame de l'Éternité",
        81 => "Sceptre de la Connaissance",
        82 => "Bâton de la Sorcière",
        83 => "Potion de Transformation",
        84 => "Amulette du Dragon Rouge",
        85 => "Heaume du Léviathan",
        86 => "Talisman de l'Éclipse",
        87 => "Épée du Phoenix",
        88 => "Livre des Sortilèges",
        89 => "Dague du Voleur d'Âmes",+
        90 => "Bague du Crépuscule",
        91 => "Cape de la Nuit",
        92 => "Bouclier du Griffon",
        93 => "Lame de la Légende",
        94 => "Arc du Chasseur de Dragons",
        95 => "Sceptre du Magus",
        96 => "Heaume du Géant de Pierre",
        97 => "Anneau de l'Immortalité",
        98 => "Grimoire de l'Ombre",
        99 => "Lance de la Vérité",
    ];
    $randNum =rand(0,99);

    $artefact=$artefacts[$randNum];

}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>test_lootbox</title>
    <script src="script/script.js"></script>
</head>
<body>
<input type="button" value="Ouvrir votre lootbox" onclick="randomArtefact();">
<label for="reward">Votre récompense :</label>
<input type="text" id="reward"></input>
</body>
</html>


