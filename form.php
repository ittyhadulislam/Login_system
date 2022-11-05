<?php

include("./function.php");

$obj = new Form();

if (isset($_POST["sub_btn"])) {
    $obj->add_info_form($_POST);
}

session_start();
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
    <link rel="stylesheet" href="./css/formstyle.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Form</title>
</head>

<body>
    <div class="container my-5 p-5 shadow">
        <div>
            <img src="./icon.png" class="image_logo" alt="" srcset=""><br>
        </div>
        <form action="" method="POST" class="form_inner" enctype="multipart/form-data">
            <div class="container">
                <div class="row">
                    <div>
                        <h1>Personal Information</h1>
                        <hr>
                    </div>
                    <div class="col-6 input_group">
                        <label for="first-name">First Name</label>
                        <input class="form-control mb-2" type="text" name="firstname" placeholder="Enter First Name" required>
                    </div>
                    <div class="col-6 input_group">
                        <label for="last-name">Last Name</label>
                        <input class="form-control mb-2" type="text" name="lastname" placeholder="Enter Last Name" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 input_group">
                        <label for="phone-number">Phone Name</label>
                        <input class="form-control mb-2" type="phone" name="phonenumber" placeholder="Enter Phone Number" required>
                    </div>
                    <div class="col-6 input_group">
                        <label for="email">Email</label>
                        <input class="form-control mb-2" type="email" name="email" placeholder="Enter Your Email" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 input_group">
                        <label for="bio">Enter Your Bio</label>
                        <textarea name="bio" class="form-control" id="" cols="30" rows="10" placeholder="Enter Your Email" required></textarea><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 input_group">
                        <label for="date-birth">Enter Your Birth Date</label>
                        <input class="form-control mb-2" type="date" name="datebirth" required>
                    </div>
                    <div class="col-6 input_group">
                        <label for="gender">Select Gender</label><br>
                        <input type="radio" id="male" name="gender" value="1">
                        <label for="male">Male</label><br>
                        <input type="radio" id="female" name="gender" value="2">
                        <label for="female">Female</label><br>
                        <input type="radio" id="other" name="gender" value="3">
                        <label for="female">Other</label><br><br><br>
                    </div>
                </div>
                <div class="row">
                    <div>
                        <h1>Address Information</h1>
                        <hr>
                    </div>
                    <div class="col-12 input_group">
                        <label for="bio">Enter Your Address</label>
                        <input name="address" type="text" class="form-control mb-2" placeholder="Enter Your Address" required>
                    </div>
                    <div class="col-12 input_group">
                        <label for="bio">Enter Your Address 2</label>
                        <input name="address2" type="text" class="form-control mb-2" placeholder="Enter Your address 2 (optional)">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 input_group">
                        <label for="city">City</label>
                        <input class="form-control mb-2" type="text" name="city" placeholder="Enter City Name" required>
                    </div>
                    <div class="col-6 input_group">
                        <label for="state">State</label>
                        <!-- <input class="form-control mb-2" type="text" name="state" placeholder="Enter State Name" required> -->
                        <select class="form-control mb-2" name="state">
                            <i class="fa fa-caret-down"></i>
                            <option value="0">Select Country</option>
                            <option value="1">Bangladesh</option>
                            <option value="2">Canada</option>
                            <option value="3">USA</option>
                        </select>

                    </div>
                </div>
                <div class="row">
                    <div class="col-12 input_group">
                        <label for="city">Zip/Postal Code</label>
                        <input class="form-control mb-2" type="number" name="zip" placeholder="Enter Zip/Postal Code" required><br><br>
                    </div>
                </div>
                <div class="row">
                    <div>
                        <h1>Other Information</h1>
                        <hr>
                    </div>
                    <div class="col-6 input_group">
                        <label for="com_edu">Company Name Or Academy Name</label>
                        <input class="form-control mb-2" type="text" name="com_edu" placeholder="Enter Company Name Or Academy Name" required>
                    </div>
                    <div class="col-6 input_group">
                        <label for="currentstatus">Current status</label>
                        <!-- <input class="form-control mb-2" type="text" name="state" placeholder="Enter State Name" required> -->
                        <select class="form-control mb-2" name="current_status">
                            <option value="0">Select Current status</option>
                            <option value="1">Student</option>
                            <option value="2">Worker</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 input_group">
                        <label for="id_no">Academic Id Number</label>
                        <input class="form-control mb-2" type="number" name="id_no" placeholder="Enter Your Academic ID number" required>
                    </div>
                    <div class="col-6 input_group">
                        <label for="nid_no">NId Number</label>
                        <input class="form-control mb-2" type="number" name="nid_no" placeholder="Enter Your NID number" required><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 input_group">
                        <label for="img">Upload Photo</label>
                        <input class="form-control mb-2" type="file" name="img" required><br><br>
                    </div>
                </div>
                <input type="submit" value="Submit" name="sub_btn" class="btn btn_submit">
            </div>
        </form>
    </div>


</body>

</html>