<?php
//  error_reporting(E_ALL);
//ini_set("display_errors","yes");

$user_type = $_SESSION['user_type'];
$user_id = $_SESSION['user_id'];
// echo "here...";
$treecontrol = getTreeControl($user_id);

// print_r($treecontrol);
//   echo $user_type;
// die();
?>
<nav class="main-menu">
    <ul>

        <?php for ($i = 0; $i < count($treecontrol); $i++) { ?>

            <li>
                <a href="<?= $treecontrol[$i]['link'] ?>">
                    <i class="<?= $treecontrol[$i]['class'] ?>"></i>
                    <span class="nav-text">
                        <?= $treecontrol[$i]['name'] ?>
                    </span>
                </a>
            </li>

        <?php
        }
        ?>
        <ul class="logout">
            <li>
                <a href="logout.php">
                    <i class="fa fa-power-off fa-2x"></i>
                    <span class="nav-text">
                        Logout
                    </span>
                </a>
            </li>
        </ul>
</nav>