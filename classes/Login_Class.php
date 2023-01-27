<?php 
	include_once "singleton#1.php";


class Login 
{

    public $user_form = "user_form";
    protected $db;
    public function __construct()
    {
        $this->db = DatabaseConnection::getInstance();
    }


    public function check_login($email, $auto_password, $user_type)
    {
        // $query = "SELECT * from  $this->user_form  WHERE email='$email' and auto_password='$auto_password' and user_type = '$user_type'";
        $stmt = $this->db->prepare("SELECT * from  $this->user_form  WHERE email='$email' and auto_password='$auto_password' and user_type = '$user_type'");
        $stmt->execute();
        // $result = $this->db->query($query) or die($this->db->error);

        $row =  $stmt->fetch(PDO::FETCH_BOTH);
        if (empty($row["user_type"])) {
            $nameErr = "Name is required";
        } else {
            if ($row['user_type'] == 'Adminstrator') {
                $_SESSION['login_admin'] = 'admin'; // this login var will use for the session thing
                $_SESSION['id'] = $row['id'];
                header('location:Admin_Index.php');
            }
        }
        if (empty($row["user_type"])) {
            $nameErr = "Name is required";
        } else {
            if ($row['user_type'] == 'User') {
                $_SESSION['login_user'] = 'user'; // this login var will use for the session thing
                $_SESSION['id'] = $row['id'];
                header('location:User_dashboard/User_Index.php');
            }
        }
    }
    public function get_session_admin($id)
    {
        $stmt = $this->db->prepare("SELECT user_type from  $this->user_form  WHERE id='$id'");
        $stmt->execute();
        $result = $stmt->fetchAll();
        foreach($result as $value){
            if($value['user_type'] != 'Adminstrator')
            return header("location:Admin_Iogin.php");
        }
    }
    public function get_session_user($id)
    {
        $stmt = $this->db->prepare("SELECT user_type from  $this->user_form  WHERE id='$id'");
        $stmt->execute();
        $result = $stmt->fetchAll();
        foreach($result as $value){
            if($value['user_type'] != 'User')
            return header("location:../Admin_Iogin.php");
        }
    }

    public function get_session_name($id)
    {
        $stmt = $this->db->prepare("SELECT user_type from  $this->user_form  WHERE id='$id'");
        $stmt->execute();
        $result = $stmt->fetchAll();
        foreach($result as $value){
            return$value['user_type'];
        }
    }

    public function get_userType($id)
    {
        // $query = "SELECT first_name FROM user_form WHERE id = $id";
        $stmt = $this->db->prepare("SELECT user_type FROM user_form WHERE id = $id");
        $stmt->execute();
        // $result = $this->db->query($query) or die($this->db->error);

        $result = $stmt->fetchAll();
        foreach($result as $user_data ){
        return $user_data['user_type'];
    }
}



    public function get_fullname($id)
    {
        // $query = "SELECT first_name FROM user_form WHERE id = $id";
        $stmt = $this->db->prepare("SELECT first_name FROM user_form WHERE id = $id");
        $stmt->execute();
        // $result = $this->db->query($query) or die($this->db->error);

        $result = $stmt->fetchAll();
        foreach($result as $user_data ){
        return $user_data['first_name'];
    }

    }

    public function get_email($id)
    {
        // $query = "SELECT email FROM user_form WHERE id = $id";
        $stmt = $this->db->prepare("SELECT email FROM user_form WHERE id = $id");
        $stmt->execute();
        // $result = $this->db->query($query) or die($this->db->error);

        $result =$stmt->fetchAll();
        foreach($result as $user_data ){
        return $user_data['email'];
    }

    }

    public function get_userImage($id)
    {
        // $query = "SELECT photo FROM user_form WHERE id = $id";
        $stmt = $this->db->prepare("SELECT photo FROM user_form WHERE id = $id");
        $stmt->execute();
        // $result = $this->db->query($query) or die($this->db->error);

        $user_data = $stmt->fetch(PDO::FETCH_ASSOC);
        echo $user_data['photo'];

    }



}
    
    
