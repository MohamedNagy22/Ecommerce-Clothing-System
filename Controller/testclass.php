<!-- <?php 
// include "../DB/DB_Connection.php" ;

// class run_prepare{


//     public function __construct(public $conn , public $query , public $parameter , public $type )
//     {
//         $this->conn = $conn;
//         $this->query = $query;
//         $this->parameter = $parameter;
//         $this->type = $type;
//     }

//     public function prepare(){
//         $stmt = mysqli_prepare($this->conn,$this->query);
//         if($stmt ===false){
//             return false;
//         }
//         if(isset($this->parameter) && !empty($this->parameter)){
//             $db = mysqli_stmt_bind_param($stmt , $this->type , ...$this->parameter);
//         }
//         mysqli_stmt_execute($stmt);
//         $result = mysqli_stmt_get_result($stmt);
//         $row = mysqli_fetch_all($result , MYSQLI_ASSOC) ;
//         return $row;
//     }
// }
// $id = '1';
// $type='s';
// $query = "SELECT * from users where id = ?";

// $obj = new run_prepare($conn ,$query,$id , $type );
// print_r($obj->prepare());
?> -->