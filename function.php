<?php
class Log_Reg_system
{
    public $conn;

    public function __construct()
    {
        $db_host = "localhost";
        $db_user = "root";
        $db_pass = "";
        $db_name = "registration_login";

        $this->conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

        if (!$this->conn) {
            die("<script>alert('connection unsuccessful.')</script>");
        }
    }

    public function add_registration_info($data)
    {
        $username = $data["username"];
        $email = $data["email"];
        $password = md5($data["password"]);
        $cpassword = md5($data["cpassword"]);
        if ($password == $cpassword) {
            $reg_add_query = "INSERT INTO reg_info (username, email, pass, cpass) VALUE('$username', '$email', '$password', '$cpassword')";

            if (mysqli_query($this->conn, $reg_add_query)) {
                echo "<script>alert('Registration Done.')</script>";
            }
        } else {
            echo "<script>alert('Password doesn't Match')</script>";
        }
    }

    public function admin_login($data)
    {
        $rsv_email = $data["email"];
        $rsv_pass  = md5($data["password"]);

        $query = "SELECT * FROM reg_info WHERE email = '$rsv_email' AND pass = '$rsv_pass'";


        if (mysqli_query($this->conn, $query)) {
            $admin_info = mysqli_query($this->conn, $query);

            if ($admin_info) {
                // header("location:registration.php");
                $fatch_admin_data = mysqli_fetch_assoc($admin_info);

                if ($rsv_email == $fatch_admin_data["email"] && $rsv_pass == $fatch_admin_data["pass"]) {
                    header("location: dashboard.php");
                    session_start();
                    $_SESSION["id"] = $fatch_admin_data["id"];
                    $_SESSION["username"] = $fatch_admin_data["username"];
                }
            }
        }
    }

    // public function logout()
    // {
    //     unset($_SESSION["id"]);
    //     unset($_SESSION["username"]);

    //     header("location : index.php");
    // }
}

class Form extends Log_Reg_system
{
    public function add_info_form($data)
    {
        $f_name = $data["firstname"];
        $l_name = $data["lastname"];
        $phone = $data["phonenumber"];
        $email = $data["email"];
        $bio = $data["bio"];
        $datebirth = $data["datebirth"];
        $gender = $data["gender"];
        $address = $data["address"];
        $address2 = $data["address2"];
        $city = $data["city"];
        $state = $data["state"];
        $zip = $data["zip"];
        $com_edu = $data["com_edu"];
        $current_status = $data["current_status"];
        $id_no = $data["id_no"];
        $nid_no = $data["nid_no"];
        $img = $_FILES["img"]["name"];
        $tmp_img = $_FILES["img"]["tmp_name"];

        $query = "INSERT INTO form(first_name, last_name, phone, email, bio, date, gender, address, address2, city, state, zip_code, com_edu, current_status, acdm_id, nid, img)
                    VALUE('$f_name','$l_name',$phone,'$email','$bio','$datebirth','$gender','$address','$address2','$city','$state',$zip,'$com_edu','$current_status',$id_no,$nid_no,'$img')";

        $get_form_data = mysqli_query($this->conn, $query);

        if ($get_form_data) {
            move_uploaded_file($tmp_img, 'upload/' . $img);
            header("location: dashboard.php");
        } else {
            echo "<script>alert('Unsuccessful');</script>";
        }
    }

    public function fatch_data()
    {
        $query = "SELECT * FROM form";

        if (mysqli_query($this->conn, $query)) {
            $get_data = mysqli_query($this->conn, $query);

            return $get_data;
        }
    }

    public function display_data_by_id($id)
    {
        $display_query = "SELECT * FROM form WHERE id = $id";

        if (mysqli_query($this->conn, $display_query)) {
            $get_data = mysqli_query($this->conn, $display_query);

            $fatch_data = mysqli_fetch_assoc($get_data);

            return $fatch_data;
        }
    }
}
