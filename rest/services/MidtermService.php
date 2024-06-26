<?php
require_once __DIR__."/../dao/MidtermDao.php";

class MidtermService {
    protected $dao;

    public function __construct(){
        $this->dao = new MidtermDao();
    }

    /** TODO
    * Implement service method to add new investor to investor table and cap-table
    */
    public function investor(){
        return $this->dao->investor();
    }

    /** TODO
    * Implement service method to validate email format and check if email exists
    */
    public function investor_email($email){
        return $this->dao->investor_email($email);
    }

    /** TODO
    * Implement service method to return list of investors according to instruction in MidtermRoutes.php
    */
    public function investors(){
        return $this->dao->investors();
    }
}
?>
