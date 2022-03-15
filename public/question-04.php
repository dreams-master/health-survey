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

    $_SESSION["answer-03"] = $_POST["answer-03"];
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
        <div class="question">
            What additional physical activity do you do most?
        </div>

        <form action="question-05.php" method="post">
            <?php
                function printCheckbox($index, $label) {
                    echo '<div class="form-check">';
                    echo '<input class="form-check-input" type="checkbox" value="" name="answer-04-' . $index . '" id="cb-' . $index . '">';
                    echo '<label class="form-check-label" for="cb-' . $index . '">';
                    echo "$label";
                    echo '</label>';
                    echo '</div>';
                }

                printCheckbox(1, "Lifting weights");
                printCheckbox(2, "Walking");
                printCheckbox(3, "Jogging");
                printCheckbox(4, "Running");
                printCheckbox(5, "Swimming");
                printCheckbox(6, "Dancing");
                printCheckbox(7, "Aerobics");
                printCheckbox(8, "Pilates");
                printCheckbox(9, "Team Sports");
                printCheckbox(10, "Other");
            ?>
            <button type="submit" class="btn btn-primary">Next</button>
        </form>
    </main>

    <footer>
        <?php require "inc/footer.inc.php" ?>
    </footer>
</body>

</html>
