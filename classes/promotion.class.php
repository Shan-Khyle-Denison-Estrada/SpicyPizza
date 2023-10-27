<?php

require_once 'database.php';

Class Promotion{
    //attributes

    public $id;
    public $voucherName;
    public $discountType;
    public $amount;
    public $minimumSpend;
    public $slot;
    public $duration;

    protected $db;

    function __construct()
    {
        $this->db = new Database();
    }

    //Methods

    function add(){
        $sql = "INSERT INTO promotion (voucherName, discountType, amount, minimumSpend, slot, duration) VALUES 
        (:voucherName, :discountType, :amount, :minimumSpend, :slot, :duration);";

        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':voucherName', $this->voucherName);
        $query->bindParam(':discountType', $this->discountType);
        $query->bindParam(':amount', $this->amount);
        $query->bindParam(':minimumSpend', $this->minimumSpend);
        $query->bindParam(':slot', $this->slot);
        $query->bindParam(':duration', $this->duration);
        
        if($query->execute()){
            return true;
        }
        else{
            return false;
        }	
    }

    function edit(){
        $sql = "UPDATE promotion SET voucherName=:voucherName, discountType=:discountType, amount=:amount, minimumSpend=:minimumSpend, slot=:slot, duration=:duration WHERE id = :id;";

        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':voucherName', $this->voucherName);
        $query->bindParam(':discountType', $this->discountType);
        $query->bindParam(':amount', $this->amount);
        $query->bindParam(':minimumSpend', $this->minimumSpend);
        $query->bindParam(':slot', $this->slot);
        $query->bindParam(':duration', $this->duration);
        $query->bindParam(':id', $this->id);
        
        if($query->execute()){
            return true;
        }
        else{
            return false;
        }	
    }

    function fetch($record_id){
        $sql = "SELECT * FROM promotion WHERE id = :id;";
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':id', $record_id);
        if($query->execute()){
            $data = $query->fetch();
        }
        return $data;
    }

    function show(){
        $sql = "SELECT * FROM promotion ORDER BY duration ASC, voucherName ASC;";
        $query=$this->db->connect()->prepare($sql);
        $data = null;
        if($query->execute()){
            $data = $query->fetchAll();
        }
        return $data;
    }
}

?>