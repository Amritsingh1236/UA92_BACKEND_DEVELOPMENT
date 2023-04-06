<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add parents</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
</head>

<body>


    <header>
        <nav class="navbar navbar-expand-md navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="#">Riston Academy</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="add_student.php">Add Student</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="view_student.php">View Student</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="add_parents.php">Add Parent</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="view_parents.php">View Parent</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="add_class.php">Add Class</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="view_class.php">View Class</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="add_teacher.php">Add Teacher</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="view_teacher.php">View Teacher</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <?php


    $link = mysqli_connect("localhost", "root", "", "amrit");

    if ($link == false) {
        die("Connection Failed: ");
    }


    if (isset($_POST['submit'])) {
        $Pname = $_POST['Pname'];
        $Pnumber = $_POST['Pnumber'];
        $Pemail = $_POST['Pemail'];
        $Poccupation = $_POST['Poccupation'];



        $sql = "INSERT INTO parents (Pname, Pnumber, Pemail, Poccupation)
         VALUES ('$Pname', '$Pnumber', '$Pemail', '$Poccupation')";

        if (mysqli_query($link, $sql)) {
            echo "<b>The parents added Successfully</b> ";
        } else {
            echo "<b>Error! In Adding New Record.</b>";
        }
    }



    ?>

    <main>
        <div class="container">
            <form action="add_parents.php" method="post">

                <div class="mb-3">
                    <label for="parent-name" class="form-label">Name</label>
                    <input type="text" name="Pname" class="form-control" id="parent-name">
                </div>

                <div class="mb-3">
                    <label for="parent-contact" class="form-label">Contact Number</label>
                    <input type="tel" name="Pnumber" class="form-control" id="parent-contact">
                </div>

                <div class="mb-3">
                    <label for="parent-email" class="form-label">Email</label>
                    <input type="email" name="Pemail" class="form-control" id="parent-email">
                </div>

                <div class="mb-3">
                    <label for="Parents-occupation" class="form-label">Occupation</label>
                    <input type="text" name="Poccupation" class="form-control" id="Parents-occupation">
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </main>
    <footer>
        <div class="container">
            <p>&copy; 2023 Riston Academy. All rights reserved.</p>
        </div>
    </footer>
    <!-- Bootstrap JS -->