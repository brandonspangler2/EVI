<?php
    require("user_info.php");
    $rso_index = $_POST['inputbox'];
    $rso_name = $rso_names[$rso_index];
    $_SESSION['current_rso'] = $rso_name;

    header("Location: admin_rso.php");
?>