<!-- Početak izbornik -->
<div class="title-bar" data-responsive-toggle="example-animated-menu" data-hide-for="medium">
<button class="menu-icon" type="button" data-toggle></button>
<div class="title-bar-title"><?=$nazivAPP?></div>
</div>

<div class="top-bar" id="example-animated-menu" data-animate="hinge-in-from-top spin-out">
<div class="top-bar-left">
    <ul class="dropdown menu" data-dropdown-menu>
    <li class="menu-text show-for-large"><?php echo $nazivAPP ?></li>
    <li><a href="index.php">Klikni, moraš!</a></li>
  
    <li>
        <a href="#">Zimski zadaci</a>
        <ul class="menu vertical">
        <li><a href="prvavjezba.php">Prva vježba</a></li>
        <li><a href="drugavjezba.php">Druga vježba</a></li>
        <li><a href="trecavjezba.php">Treća vježba</a></li>
        <li><a href="cetvrtavjezba.php">Četvrta vježba</a></li>
        <li><a href="petavjezba.php">Peta vježba</a></li>
        
        </ul>
    </li>
    <li>
    
        <a href="#">Neke vježbe</a>
        <ul class="menu vertical">
            <li><a href="tekstzadatka.php">Tekst zadatka</a></li>
            <li><a href="problem1.php">Prvi problem</a></li>
            <li><a href="problem2.php">Drugi problem</a></li>
            <li><a href="zadatakFor.php">Zadatak for</a></li>
            <li><a href="zadatakzavjezbu1.php">Zadatak za vježbu koji unosi 24 broja</a></li>
        </ul>
        
    </li>
    </ul>
</div>
</div>
<!-- Kraj izbornik -->