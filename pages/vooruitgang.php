<?php
if (!isset($_SESSION["id"])) {
    header("Location: ./index.php?content=message&alert=auth-error");
}
?>
</div><img src="./img/dio.gif" class="centeredimage">