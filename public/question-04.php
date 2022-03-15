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
                function printCheckbox($label) {
                    echo '<div class="form-check">';
                    echo '<input class="form-check-input" type="checkbox" value="" name="answer-04" id="flexCheckDefault">';
                    echo '<label class="form-check-label" for="flexCheckDefault">';
                    echo 'Default checkbox';
                    echo '</label>';
                    echo '</div>';
                }
            ?>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="answer-04-01" id="flexCheckChecked">
                <label class="form-check-label" for="flexCheckChecked">
                    Lifting weights
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="answer-04-02" id="flexCheckChecked">
                <label class="form-check-label" for="flexCheckChecked">
                    Walking
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="answer-04-03" id="flexCheckChecked">
                <label class="form-check-label" for="flexCheckChecked">
                   Jogging
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="answer-04-04" id="flexCheckChecked">
                <label class="form-check-label" for="flexCheckChecked">
                    Running
                </label>
            </div>
            <button type="submit" class="btn btn-primary">Next</button>
        </form>
    </main>

    <footer>
        <?php require "inc/footer.inc.php" ?>
    </footer>
</body>

</html>
