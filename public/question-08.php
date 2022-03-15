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
            On a typical day, how many of your meals or snacks contain vegetables?
        </div>

        <form action="question-09.php" method="post">
            <button type="submit" class="btn btn-primary">Next</button>
        </form>
    </main>

    <footer>
        <?php require "inc/footer.inc.php" ?>
    </footer>
</body>
</html>


