<!DOCTYPE html>
<html lang="en">
<?php
include_once('defaults/head.php');
?>
<body>
<?php
include_once('defaults/nav.php');
?>
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