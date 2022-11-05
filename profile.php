<?php
include("./function.php");

$obj = new Form();
$obj_log = new Log_Reg_system();

if (isset($_GET["status"])) {
    if ($_GET["status"] == "view") {
        $id = $_GET["id"];
        $return = $obj->display_data_by_id($id);
    }
}

session_start();
$username = $_SESSION["username"];
$id = $_SESSION["id"];
if ($id == null) {
    header("location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
    <link rel="stylesheet" href="./css/profile.css">
</head>

<body>
    <div class="container my-5 p-5 shadow">
        <h1 class="text-center profile-title">Your Profile</h1>
        <hr>
        <div class="container about_info">
            <div class="row">
                <div class="col-6">
                    <h1><?php echo $return["first_name"] ?></h1>
                    <p><?php echo $return["bio"] ?></p>
                </div>
                <div class="col-6">
                    <img src="./upload/<?php echo $return["img"] ?>" alt="" srcset="">
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <h1>Personal Info</h1>
                    <hr>
                    <h5>Gender :
                        <?php
                        if ($return["gender"] == 1) {
                            echo "Male";
                        } elseif ($return["gender"] == 2) {
                            echo "Female";
                        } elseif ($return["gender"] == 3) {
                            echo "Other";
                        }
                        ?>
                    </h5>
                    <!-- <h5>Gender :<?php echo $return["gender"] ?></h5> -->
                    <h5>Email : <?php echo $return["email"] ?></h5>
                    <h5>Phone : <?php echo $return["phone"] ?></h5>
                    <h5>Address : <?php echo $return["address"] ?></h5>
                    <h5>NID : <?php echo $return["nid"] ?></h5>
                </div>
                <div class="col-6">
                    <h1>Others Info</h1>
                    <hr>
                    <h5>Conpany or Academy Name : <?php echo $return["com_edu"] ?></h5>
                    <h5>Conpany or Academy ID : <?php echo $return["acdm_id"] ?></h5>
                </div>
            </div>
            <br><br>
        </div>
    </div>
    </div>

</body>

</html>