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

    $_SESSION["answer-01"] = $_POST["answer-01"];

    print_r($_SERVER);
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
            Do you take nutritional supplements?
        </div>

        <form action="question-03.php" method="post">
            <div class="form-check">
                <input class="form-check-input" type="radio" value="yes" name="answer-02" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">Yes</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" value="no" name="answer-02" id="flexRadioDefault2" checked>
                <label class="form-check-label" for="flexRadioDefault2">No</label>
            </div>
            <button type="submit" class="btn btn-primary">Next</button>
        </form>
    </main>

    <footer>
        <?php require "inc/footer.inc.php" ?>
    </footer>
</body>

</html>
