<?php
include("./function.php");

$obj = new Form();

session_start();
$username = $_SESSION["username"];
$id = $_SESSION["id"];
if ($id == null) {
    header("location: index.php");
}

$read = $obj->fatch_data();

// if (isset($_GET["logout"])) {
//     if ($_GET["logout"] == "logout") {
//         $obj->logout();
//     }
// }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/dashboard.css">
    <title>Document</title>
</head>

<body>
    <div class="container my-5 p-5 shadow">
        <h1 class="text-center">Welcome To the DashBoard</h1><br>
        <h4 class="text-center"><?php echo $_SESSION["username"]; ?></h4>
        <a class="btn btn-primary btn-form" href="form.php">Form</a>
        <a class="btn btn-danger btn-logout" href="logout.php">Logout</a>
        <hr>
        <table class="table table-responsive">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php while ($datas = mysqli_fetch_assoc($read)) { ?>
                    <tr>
                        <td><?php echo $datas["id"] ?></td>
                        <td><?php echo $datas["first_name"] ?></td>
                        <td><?php echo $datas["last_name"] ?></td>
                        <td><?php echo $datas["phone"] ?></td>
                        <td><?php echo $datas["email"] ?></td>
                        <td><a href="profile.php?status=view&&id=<?php echo $datas["id"] ?>" target="_blank" type="submit" class="btn btn-primary">Profile</a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>

</html>