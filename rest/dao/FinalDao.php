<?php
require_once "BaseDao.php";

class FinalDao extends BaseDao {

    public function __construct(){
        parent::__construct();
    }

    /** TODO
    * Implement DAO method used login user
    */
    public function login(){
        $query = "SELECT * FROM users WHERE email = :email";
        $stmt = $this->get_connection()->prepare($query);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    /** TODO
    * Implement DAO method used add new investor to investor table and cap-table
    */
    public function investor(){
        $query = "SELECT * FROM investors";
        $stmt = $this->get_connection()->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    /** TODO
    * Implement DAO method to return list of all share classes from share_classes table
    */
    public function share_classes(){
        $query = "SELECT * FROM share_classes WHERE id = :share_class_id";
      $stmt = $this->conn->prepare($query);
      $stmt->execute(['share_class_id' => $share_class_id]);
      $result = $stmt->fetch(PDO::FETCH_ASSOC);
      return $result;
    }

    /** TODO
    * Implement DAO method to return list of all share class categories from share_class_categories table
    */
    public function share_class_categories(){
        $query = "SELECT * FROM share_class_categories WHERE id = :share_class_category_id";
        $stmt = $this->conn->prepare($query);
        $stmt->execute(['share_class_category_id' => $share_class_category_id]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
}
?>
