<?php

function navbar()
{
?>
    <header>
    <a class="logo" href="index.php">
      <img src="img/Logo.png" alt="Logo">
    </a>

    <div class="navbarCenter">
          <button><a href="projects.php">Mijn Projecten</a></button>
          <button><a href="aboutUs.php">About us</a></button>
    </div>

    <div class="navbarMobile">
      <details class="navDetails">
        <summary class="navSummary">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" class="dropdownIcon">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
          </svg>
        </summary>

        <div class="navButtons">
          <button><a href="projects.php">Mijn Projecten</a></button>
          <button><a href="aboutUs.php">About us</a></button>
        </div>
      </details>
    </div>
  </header>
<?php
}

?>