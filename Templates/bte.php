<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boter Kaas eieren</title>
    <link rel="stylesheet" href="../public/css/TicTacToeBoard.css">
    <link rel="stylesheet" type="text/css" href="../public/css/Style.css" media="screen"/>
    <link rel="stylesheet" href="../public/css/Theming.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

</head>
<body>
<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <ul class="navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="home.html">Home <span class="sr-only"></span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="Projects.html">Projects <span class="sr-only"></span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="contact.html">Contact <span class="sr-only"></span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="tool.html">Math Tool<span class="sr-only"></span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../Boterkaaseiren.html">TicTacToe<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <button class="nav-link button theme">Dark Mode</button>
        </li>
    </ul>
</nav>
<br>
<br>
<main>
    <section>
        <div class="playerOne">
            <p>Player 1</p>
            <p>Symbol: X</p>
        </div>
        <div class="playerTwo">
            <p>player 2</p>
            <p>Symbol: O</p>
        </div>
    </section>
    <section>
        <grid class="board">
            <div class="field"></div>
            <div class="field"></div>
            <div class="field"></div>
            <div class="field"></div>
            <div class="field"></div>
            <div class="field"></div>
            <div class="field"></div>
            <div class="field"></div>
            <div class="field"></div>
        </grid>
    </section>
</main>
<br>
<section>
    <button class="reset-btn">Reset</button>
</section>
<script type="module" src="../public/js/TicTacToe.js"></script>
<script type="module" src="../public/js/main.js"></script>
</body>
</html>