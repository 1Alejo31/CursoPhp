<?php

$apiUrl = 'https://whenisthenextmcufilm.com/api';
$ch = curl_init($apiUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
curl_close($ch);
$data = json_decode($result, true);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La próxima película de Marvel</title>
    <link rel="stylesheet" href="css/pico.min.css">
    <style>
        :root {
            color-scheme: light dark;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        main {
            text-align: center;
        }

        img {
            margin: 0 auto;
            display: block;
        }
    </style>
</head>

<body>
    <main>
        <section>
            <img src="<?=$data['poster_url']?>" alt="Poster de <?=$data['title']?>" srcset="" width="300" style="border-radius: 16px">
        </section>
        <hgroup>
            <h2><?=$data['title']?> se estrana en <?=$data['days_until']?> días</h2>
            <p>Fecha de estreno: <?=$data['release_date']?></p>
        </hgroup>
    </main>
</body>

</html>