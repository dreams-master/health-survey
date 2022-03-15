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
    function previousPage() {

        $current = $_SERVER["SCRIPT_NAME"];

        if (str_contains($current, "question-01")) {
            return "index.php";
        } elseif (str_contains($current, "question-02")) {
            return "question-01.php";
        } elseif (str_contains($current, "question-03")) {
            return "question-02.php";
        } elseif (str_contains($current, "question-04")) {
            return "question-03.php";
        } elseif (str_contains($current, "question-05")) {
            return "question-04.php";
        } elseif (str_contains($current, "question-06")) {
            return "question-05.php";
        } elseif (str_contains($current, "question-07")) {
            return "question-06.php";
        } elseif (str_contains($current, "question-08")) {
            return "question-07.php";
        } elseif (str_contains($current, "question-09")) {
            return "question-08.php";
        } elseif (str_contains($current, "question-10")) {
            return "question-09.php";
        } elseif (str_contains($current, "evaluation")) {
            return "question-10.php";
        } else {
            return "index.php";
        }
    }
?>

    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Health Survey</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarID"
                aria-controls="navbarID" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarID">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link" aria-current="page" href="index.php">Home</a>
                    <a class="nav-link" aria-current="page" href="<?=previousPage();?>">Back</a>
                </div>
            </div>
        </div>
    </nav>
