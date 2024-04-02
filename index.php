<!DOCTYPE html>
<html lang="en">
<title>About Us</title>
<head>
    <meta charset="UTF-8"/>
    <title>Hello, world!</title>
    <meta name="viewport" content="width=device-width,initial-scale=1"/>

    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

</head>
<body>
<h1 id="head">About Our Hacking Team</h1>
<?php
echo "<script>console.log('use PHP.not JS')</script>"
?>
<?php
$people = ["<code>Ruhan/Cody</code>", "Sheheran", "Holdain"];
?>
<br>there are 3 people in our team:</br>
<ul>
    <?php
    foreach ($people as $person) {
        echo "<li>$person</li>";
    }
    ?>
</ul>
<iframe width="560" height="315" src="https://www.youtube.com/embed/wJnBTPUQS5A?si=NOomuKi5QnQwSWet"
        title="YouTube video player" frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

<button class="press-me-btn">clear the console</button>
<img src="includes">
<?php
echo "<script>console.log('JS on')</script>";
?></br>
<?php
echo "<p>More</p>"
?>
<p>Jupyter: <a _blank
               href="https://colab.research.google.com/drive/1_bEFULUWgLc7AZbuiFX-zxQAzGzRR9if#scrollTo=8Cm6A4F3F61k">Jupyter
        Notebook</a></p>
<p>Wolfram: <a _blank href="https://www.wolframcloud.com/">Wolfram</a></p>


<?php
echo "<script type='text/jsx'>$('.press-me-btn').on('click', function () {(console.clear());$(this).addClass('button-bg-red');});</script>";
?>
</body>

</html>