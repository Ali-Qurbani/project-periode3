<?php
if (!isset($_SESSION["id"])) {
    header("Location: ./index.php?content=message&alert=auth-error");
} elseif ( !in_array($_SESSION["userrole"], ["admin", "root"])) {
    header("Location: ./index.php?content=message&alert=auth-error-user");
}

?>
<div class="container" id="box"><font color="#FFFFFF">
<div class="container-fluid">
<p><h1>Account | Bipolaire Stoornis</h1></p>
    <div id="wrapper">
    <div><p>Welkom gebruiker, </p><p>op deze pagina ziet u uw account, helaas kunt u nog niets wijzigen, we doen ons best om snel meer functies toe te voegen</p></div>
    <div id="first">
                    <div class="card bg-dark" style="width: 15rem;">
                <img class="card-img-top" src="./img/account.png" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Session id: <?php echo $_SESSION["id"]; ?></h5>
                    <p class="card-text">Dit is uw account</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item bg-info">Role: <?php echo $_SESSION["userrole"]; ?></li>
                </ul
                <div class="card-body">
                <a href="index.php?content=logout"><button type="button" class="btn btn-danger">Logout</button></a>
                </div>
                </div>  
    </div>
    <div id="second"><p></p></div>

</div>
</div>
</div>