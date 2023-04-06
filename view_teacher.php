<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view teacher</title>
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
    <main>
        <div class="container">
            <table>
                <tr>

                    <th width="180px">Teacher ID</br>
                        <hr>
                    </th>
                    <th width="180px">Teacher Name</br>
                        <hr>
                    </th>
                    <th width="180px">Contact Number</br>
                        <hr>
                    </th>
                    <th width="180px">Email</br>
                        <hr>
                    </th>
                    <th width="180px">Salary</br>
                        <hr>
                    </th>
                </tr>

                <?php

                $link = mysqli_connect("localhost", "root", "", "amrit");

                $sql = mysqli_query($link, "SELECT Teacher_id, Tname, Tnumber, Temail, Tsalary FROM teacher");
                while ($row = $sql->fetch_assoc()) {
                    echo "
        <tr>
				<td>{$row['Teacher_id']}</td>
				<td>{$row['Tname']}</td>
				<td>{$row['Tnumber']}</td>
				<td>{$row['Temail']}</td>
				<td>{$row['Tsalary']}</td>
        </tr>";
                }



                ?>
            </table>
        </div>
    </main>
    <footer>
        <div class="container">
            <p>&copy; 2023 Riston Academy. All rights reserved.</p>
        </div>
    </footer>
    <!-- Bootstrap JS -->