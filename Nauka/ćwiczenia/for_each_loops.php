<!doctype html>

<html lang="eng">

<head>

<meta charset="UTF-8">
<title>ćwiczenie pętle</title>

</head>


<body>

<h1>

    <h1>

    Recommended books

    </h1>

    <?php

        $books = [
            "Hail Mary",
            "The Langoliers",
            "Hail Mary",
            "Animal Farm"
        ];

    ?>



    <ul>

        <?php foreach ($books as $book) : ?>

            <li><?= $book . " was picked by you"?></li>

        <?php endforeach; ?>

        <?php

        foreach ($books as $book) {
            echo "<li>Hello</li>";              //raz Hello
            echo "<li>" . $book . "</li>";      //raz tytuł
            echo "<li>{$book} trademark </li>";

        }

        ?>


    </ul>

    <?php

    $name = "Dark Matter";

    $read = false;

    if ($read){

        $message = "You have read $name";

    } else {
        $message = "You have not read $name";
    }




?>

</h1>

    <?= $message ?>
<body>

</html>


