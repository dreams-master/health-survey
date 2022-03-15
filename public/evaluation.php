<?php
// Copyright (C) 2022 health-survey
//
// This program is free software: you can redistribute it and/or modify
// it under the terms of the GNU Affero General Public License as
// published by the Free Software Foundation, either version 3 of the
// License, or (at your option) any later version.
//
// This program is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU Affero General Public License for more details.
//
// You should have received a copy of the GNU Affero General Public License
// along with this program.  If not, see <http://www.gnu.org/licenses/>.
?>

<?php
    session_start();

    $_SESSION["answer-10"] = $_POST["answer-10"];

    print_r($_SESSION);

    function isHealty() {
        $healthy = true;

        if ($_SESSION["answer-03"] >= 3 &&
            $_SESSION["answer-04"] >= 1 &&
            $_SESSION["answer-06"] >= 2 &&
            $_SESSION["answer-07"] >= 2 &&
            $_SESSION["answer-08"] >= 1 &&
            $_SESSION["answer-09"] >= 1
        ) {
            return true;
        }
        return false;
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php require "inc/head.inc.php" ?>
</head>

<body>
    <header>
        <?php require "inc/header.inc.php" ?>
    </header>

    <main>
        <?php
            if (isHealty()) {
                echo '<div>Great! You live healthy.</div>';
            } else {
                echo '<div>Ouch! You could do more for your health.</div>';
            }
        ?>
    </main>

    <footer>
        <?php require "inc/footer.inc.php" ?>
    </footer>
</body>

</html>
