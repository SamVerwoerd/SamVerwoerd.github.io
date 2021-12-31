<!DOCTYPE html>
<html lang="en">
<?php
include_once('defaults/head.php');
?>
<body>
<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <ul class="navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="./home.php">Home <span class="sr-only"></span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="./projects.php">Projects <span class="sr-only"></span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="./contact.php">Contact <span class="sr-only"></span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="./bte.php">TicTacToe<span class="sr-only">(current)</span></a>
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