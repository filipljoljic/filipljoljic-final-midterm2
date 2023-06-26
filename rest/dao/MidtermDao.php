<?php
require_once "BaseDao.php";

class MidtermDao extends BaseDao {

    public function __construct(){
        parent::__construct();
    }

    /** TODO
    * Implement DAO method used add new investor to investor table and cap-table
    */
    public function investor(){
    // $query = "SELECT * FROM investors WHERE id = :investor_id";
    $query = "SELECT * FROM investors";
    $stmt = $this->conn->prepare($query);
    $stmt->execute(['investor_id' => $investor_id]);

    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    return $result;
    }

    /** TODO
    * Implement DAO method to validate email format and check if email exists
    */
    public function investor_email($email){
        $query = "SELECT first_name, last_name FROM investors WHERE email = :email";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        return $result;
    }

    /** TODO
    * Implement DAO method to return list of investors according to instruction in MidtermRoutes.php
    */
    public function investors(){

    }

}
?>
