<?php
require_once __DIR__."/../dao/FinalDao.php";

class FinalService {
    protected $dao;

    public function __construct(){
        $this->dao = new FinalDao();
    }

    /** TODO
    * Implement service method to login user
    */
    public function login(){
        return $this->dao->login($email);
    }

    /** TODO
    * Implement service method to add new investor to investor table and cap-table
    */
    public function investor(){
        return $this->dao->investor();
    }

    /** TODO
    * Implement service method to return list of all share classes from share_classes table
    */
    public function share_classes(){
        return $this->dao->share_classes();
    }

    /** TODO
    * Implement service method to return list of all share class categories from share_class_categories table
    */
    public function share_class_categories(){
        return $this->dao->share_classes_categories();
    }
}
?>
