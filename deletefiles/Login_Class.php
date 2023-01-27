<?php 
	include_once "Connection_Class.php";


class Login 
{

    public $user_form = "user_form";
    protected $db;
    public function __construct()
    {
        $this->db = db::getInstance();
    }


    public function check_login($email, $auto_password, $user_type)
    {
        $query = "SELECT * from  $this->user_form  WHERE email='$email' and auto_password='$auto_password' and user_type = '$user_type'";

        $result = $this->db->query($query) or die($this->db->error);

        $row = $row = mysqli_fetch_array($result);
        if (empty($row["user_type"])) {
            $nameErr = "Name is required";
        } else {
            if ($row['user_type'] == 'Adminstrator') {
                $_SESSION['login'] = true; // this login var will use for the session thing
                $_SESSION['id'] = $row['id'];
                header('location:Admin_Index.php');
            }
        }
        if (empty($row["user_type"])) {
            $nameErr = "Name is required";
        } else {
            if ($row['user_type'] == 'User') {
                $_SESSION['login'] = true; // this login var will use for the session thing
                $_SESSION['id'] = $row['id'];
                header('location:index_oop.php');
            }
        }
    }
    public function get_session()
    {
        return $_SESSION['login'];
    }

    public function get_fullname($id)
    {
        $query = "SELECT first_name FROM user_form WHERE id = $id";

        $result = $this->db->query($query) or die($this->db->error);

        $user_data = $result->fetch_array(MYSQLI_ASSOC);
        echo $user_data['first_name'];

    }

    public function get_email($id)
    {
        $query = "SELECT email FROM user_form WHERE id = $id";

        $result = $this->db->query($query) or die($this->db->error);

        $user_data = $result->fetch_array(MYSQLI_ASSOC);
        echo $user_data['email'];

    }

    public function get_userImage($id)
    {
        $query = "SELECT photo FROM user_form WHERE id = $id";

        $result = $this->db->query($query) or die($this->db->error);

        $user_data = $result->fetch_array(MYSQLI_ASSOC);
        echo $user_data['photo'];

    }

}
    
    
