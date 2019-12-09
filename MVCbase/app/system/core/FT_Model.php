<!-- model chinh, cac model trong ung dung se ke thua  -->
<?php
defined('PATH_SYSTEM') or die('Bad requested');


require_once(PATH_SYSTEM.'/config/config.php');

 class FT_Model
 {
     private $conn = null;
     function __construct()
     {
         $this->conn = mysqli_connect('localhost','root','','app');
     }
    //  public function set_Connection($db_host=null, $user=null, $password=null,$dbname=null)
    //  {
    //      $db_host = $db_host or DB_HOST;
    //      $user = $user or DB_USER;
    //      $password = $password or DB_PASSWORD;
    //      $dbname = $dbname or DB_NAME; 

    //      if(!empty($db_host) && !empty($user) && !empty($password) && !empty($dbname)){
    //         $this->conn = mysqli_connect($db_host,$user,$password,$dbname);
    //      }
    //  }
     public function get_Connection()
     {
         return $this->conn;
     }
     public function query($query)
     {
         if($this->conn)
         {
             $result = mysqli_query($this->conn,$query);
             if($result)
             {
                 return true;
             }
         }
         return false;
     }
     public function num_Rows($query)
     {
         if($this->conn)
         {
            $result = mysqli_query($this->conn, $query);
            if($result)
            {
                return mysqli_num_rows($result);
            }
         }
         return;
     }
     public function fetch($query)
     {
         $data = [];
        if($this->conn)
        {
           $result = mysqli_query($this->conn, $query);
           if($result)
           {
               $row = mysqli_num_rows($result);
               if($row>0){
                   while($row = mysqli_fetch_assoc($result))
                   {
                       $data[] = $row;
                   }
                   return $data;
               }
           }
        }
        return;
     }
 }