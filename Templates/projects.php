<!DOCTYPE html>
<html lang="en">
<?php
include_once('defaults/head.php');
?>
<body>
  <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <ul class="navbar-nav">
      <li class="nav-item">
         <a class="nav-link" href="home.html">Home <span class="sr-only"></span></a>
      </li>
       <li class="nav-item active">
           <a class="nav-link" href="Projects.html">Projects <span class="sr-only">(current)</span></a>
       </li>
       <li class="nav-item">
          <a class="nav-link" href="contact.html">Contact <span class="sr-only"></span></a>
       </li>
       <li class="nav-item">
           <a class="nav-link" href="tool.html">Math Tool <span class="sr-only"></span></a>
       </li>
       <li class="nav-item">
        <a class="nav-link" href="Boterkaaseiren.html">TicTacToe<span class="sr-only"></span></a>
        </li>
      <li class="nav-item">
           <button class="nav-link button theme">Dark Mode</button>
       </li>
    </ul>
</nav>
<br>
<br>
<section>
    <article>
        <img class="Logo" src="img/C-sharp.PNG" alt="Picture of C# Code">
            <h5 class="card-title">C# Opdracht</h5>
            <p class="card-text">We moesten een hoger lager game maken en die presenteren.</p>
    </article>
    <article>
        <img class="Logo" src="img/Bootstrap.PNG" alt="Picture of bootstrap assignment">
            <h5 class="card-title">bootstrap Opdracht</h5>
            <p class="card-text">Bij deze opdracht hadden we voor het eerst bootstrap toegepast.</p>
            <p class="card-text">We moesten voor deze opdracht een grid maken met bootstrap en css</p>
    </article>
    <article>
        <img class="Logo" src="img/Interaction design.PNG" alt="Interaction design assignment">
        <h5 class="card-title">Interaction Design</h5>
        <p class="card-text">Bij deze opdracht moesten we met de user story's een app/pagina designen</p>
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
<script type="module" src="./Js/main.js"></script>
</body>
</html>