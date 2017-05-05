<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome-4.6.3/css/font-awesome.min.css">
</head>
<body>

<?php
include 'headerAdmin.php';
?>


<form class="navbar-form navbar-middle" method="post" enctype="multipart/form-data" role="search" action="processAdvanceSearch.php">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Search something by name"
                   name="searchValue">
        </div>



    <div class="form-group">
        <label for="gender">Where to search : </label>
        <div class="radio form-group">
            <label>

                <input type="checkbox" name="employee"
                       title="employee name">
                Employee
            </label>

            <label>
                <input type="checkbox" name="freedomFighter">
                Freedom Fighter
            </label>


        </div>
        <input type="submit" class="btn btn-info" value="Submit"/>
</form>








<?php
include 'includes/footer.php';
?>
</body>
</html>