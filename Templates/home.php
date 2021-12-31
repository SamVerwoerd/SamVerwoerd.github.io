<!DOCTYPE html>
<html lang="en">
<?php
include_once('defaults/head.php');
?>
<body>
<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <ul class="navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="home.html">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../Projects.html">Projects <span class="sr-only"></span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../contact.html">Contact <span class="sr-only"></span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../tool.html">Math Tool<span class="sr-only"></span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../Boterkaaseiren.html">TicTacToe<span class="sr-only"></span></a>
        </li>
        <li class="nav-item">
            <button class="nav-link button theme">Dark Mode</button>
        </li>
    </ul>
</nav>
<br>
<br>
<H1 class="first">Welcome to my page!</H1>
<hr>
<section>
    <article>
        <img class="Logo" src="../public/img/Avatar.png" alt="Picture of a random Avatar">
        <h5 class="card-title">Kort over mezelf</h5>
        <p class="card-text">Mijn naam is Sam ik ben 17 jaar oud mijn, meestal speel ik games of zit ik series te kijken.</p>
    </article>
    <article>
        <img class ="Logo" src="../public/img/Roc.png" alt="Picture of ROC Mondriaan">
        <h5 class="card-title">School</h5>
        <p class="card-text">Ik zit op het Roc Mondriaan(Tinwerf). Ik doe daar de opleiding Software Developer,</p>
        <p class="card-text">ik zit er in me eerste jaar, op dit moment ken ik de programmeer talen: C#, Html, js, css.</p>
    </article>
    <article>
        <H5 class="card-title">Games I play</H5>
        <img class="Logo" src="../public/img/wt_lo.png" alt="War Thunder Logo">
        <img class="Logo" src="../public/img/Overwatch_text_logo.svg.png" alt="Overwatch Logo">
    </article>
</section>
<div class="container-fluid">
    <div id="footer">
        <div class="row">
            <div class="col-12 text-dark text-center">
                @2021 Sam Verwoerd
            </div>
        </div>
    </div>
</div>
<script type="module" src="../public/js/main.js"></script>
</body>
</html>