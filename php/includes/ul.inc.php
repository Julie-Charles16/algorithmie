<ul class="nav flex-column">
        <li class="list-group">
            <a href="index.php?debugging" class="list-group-item list-group-item-action <?php if(isset($_GET['debugging'])){echo'active';}?> ">Débogage </a>
            <a href="index.php?concatenation" class="list-group-item list-group-item-action <?php if(isset($_GET['concatenation'])){echo'active';}?> ">Concaténation</a>
            <a href="index.php?loop" class="list-group-item list-group-item-action <?php if(isset($_GET['loop'])){echo'active';}?> ">Boucle</a>
            <a href="index.php?function" class="list-group-item list-group-item-action <?php if(isset($_GET['function'])){echo'active';}?> ">Fonction</a>
            <a href="index.php?del" class="list-group-item list-group-item-action <?php if(isset($_GET['del'])){echo'active';}?> ">Supprimer</a>
        </li>
    </ul>