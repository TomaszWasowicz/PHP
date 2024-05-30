<!doctype html>

<html lang="eng">

<head>

    <meta charset="UTF-8">
    <title>ćwiczenie tablice</title>

</head>

<body>

    <?php

//associative array

    $books = [
        [
            'name' =>'Do Androids Dream of Electric Sheep',
            'author' => 'Philip K. Dick',
            'website' =>'htttp://example.com'

        ],
        [
            'name' => 'The Langoliers',
            'author' =>'Andy Weir',
            'website' => 'http://webway.com'

        ],
        [
            'name' => 'Project Hail Mary',
            'author' =>'Thomas Jefferson',
            'website' =>'http://emarket.com'
        ]

    ];

    ?>

    <ul>   //wypunktowanie

    <?php foreach ($books as $book): ?>

            <li>

                <a href="#">
                    <?= $book['name'] ?>
                </a>

            </li>

    <?php endforeach; ?>

    </ul>

    <p>
        <?= $books[2]['name'] ?>
    </p>


</body>

</html>

