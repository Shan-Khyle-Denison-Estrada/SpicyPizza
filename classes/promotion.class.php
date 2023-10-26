<?php

require_once 'database.php';

Class Staff{
    //attributes

    public $id;
    public $voucherName;
    public $discountType;
    public $amount;
    public $minimumSpend;
    public $slot;
    public $duration;
    public $createdAt;
    public $updatedAt;

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

    // function edit(){
    //     $sql = "UPDATE staff SET firstname=:firstname, lastname=:lastname, role=:role, email=:email, password=:password, status=:status WHERE id = :id;";

    //     $query=$this->db->connect()->prepare($sql);
    //     $query->bindParam(':firstname', $this->firstname);
    //     $query->bindParam(':lastname', $this->lastname);
    //     $query->bindParam(':role', $this->role);
    //     $query->bindParam(':email', $this->email);
    //     // Hash the password securely using password_hash
    //     $hashedPassword = password_hash($this->password, PASSWORD_DEFAULT);
    //     $query->bindParam(':password', $hashedPassword);
    //     $query->bindParam(':status', $this->status);
    //     $query->bindParam(':id', $this->id);
        
    //     if($query->execute()){
    //         return true;
    //     }
    //     else{
    //         return false;
    //     }	
    // }

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