<?php
if (isset($_POST["BeliNovel"]) && isset($_POST["BeliBuku"])) {
    setcookie("BeliNovel", $_POST["BeliNovel"]);
    setcookie("BeliBuku", $_POST["BeliBuku"]);
    header("location:keranjang_belanja.php");
}
?>