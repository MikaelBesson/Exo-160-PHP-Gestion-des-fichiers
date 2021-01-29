<?php

/**
 * 1. Créez une variable contenant une chaîne de caractères contenant du texte lorem ( 1 seule ligne suffit )
 * 2. Ajouter le contenu de cette variable dans un fichier avec la méthode de votre choix.
 * --> Attention à bien fermer votre fichier si vous utilisez fopen()
 */
// TODO Votre code ici.
$lorem = "Lorem ipsum dolor sit amet, consectetur adipisicing elit.";
file_put_contents("monNouveauxFichier.txt", $lorem);

/**
 * 3. Créez un tableau contenant au moins 10 chaînes de caractère au choix.
 * 4. Faites en sorte d'ajouter chaque chaîne de caractère de ce tableau au fichier créé dans la première partie ( point 2 )
 * --> N'oubliez pas de fermer vos fichiers.
 * --> Attention: les chaînes de caractères doivent s'ajouter à la suite du contenu déjà existant, pas d'écrasement.
 */
// TODO Votre code ici
$tableau = [
    1 => "Ab eligendi, numquam.",
    2 => "A natus nihil odit pariatur quod vero.",
    3 => "Itaque labore odio rem voluptatem!",
    4 => "Aliquid aperiam earum nam nobis reprehenderit.",
    5 => "Architecto!",
    6 => "Accusantium,",
    7 => "architecto assumenda deleniti dolore iure,",
    8 => "minus modi provident quam,",
    9 => "quidem ratione sed sit tenetur unde velit voluptatum.",
    10 => "Amet ea et explicabo inventore natus placeat quae quidem soluta tempore voluptatum!",
];

foreach($tableau as $ligne){
    $lorem = fopen("monNouveauxFichier.txt","a+b");
     fwrite($lorem,"$ligne\n");
}
fclose($lorem);


/**
 * 5. Trouvez une solution pour afficher à l'aide d'un simple echo l'extension du fichier index.php
 */
// TODO Votre code ici
$result = file_get_contents("monNouveauxFichier.txt");
echo $result;
echo "<br><br>";

/**
 * 6. Testez si le fichier 'toto' existe, sil n'existe pas, afficher un texte distant que ce fichier n'existe pas !
 */
// TODO Votre code ici.
if(file_exists("toto")){
    echo file_get_contents("toto");
}
else{
    echo "le fichier 'toto' n'existe pas !!";
}
echo "<br><br>";
/**
 * Super bonus.
 * Parcourrez votre fichier, à chaque fois que vous rencontrez le caractère 'a', remplacez le par le caractère '@'
 * Attention, il y a un piège avec les pointeurs, et une manière très simple de procéder... réfléchissez...
 */
// TODO Votre code ici si vous faites le bonus.

$file1 = fopen("monNouveauxFichier.txt","rb");
while($char = fgetc($file1)){
    if($char === " a "){
         $char = "@";
         echo $file1;
    }
}
fclose($file1);
