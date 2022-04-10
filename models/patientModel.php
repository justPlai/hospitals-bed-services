<?php
class patientModel
{
    public $_id;
    public $firstName;
    public $lastName;
    public $BOD;
    public $IDCard;
    public $createDate;

    public function __construct($_id, $firstName, $lastName, $BOD, $IDCard, $createDate)
    {
        $this->_id = $_id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->BOD = $BOD;
        $this->IDCard = $IDCard;
        $this->createDate = $createDate;
    }

    public static function getAll()
    {
        $doctorList = [];
        $itemList = doctor_api::getAll();
        foreach ($itemList as $item) {
            $_id = $item['_id'];
            $firstName = $item['firstName'];
            $lastName = $item['lastName'];
            $BOD = $item['BOD'];
            $IDCard = $item['IDCard'];
            $createDate = $item['createDate'];

            $doctorList = new patientModel($_id, $firstName, $lastName, $BOD, $IDCard, $createDate);
        }

        return $doctorList;
    }

    public static function get($id)
    {
        $item = patient_api::getById($id);
        $_id = $item['_id'];
        $firstName = $item['firstName'];
        $lastName = $item['lastName'];
        // echo "------";
        // echo $firstName;
        // echo "------";
        // echo $lastName;
        // echo "------";
        $BOD = $item['BOD'];
        $IDCard = $item['IDCard'];
        $createDate = $item['createDate'];
        // echo $IDCard;
        // echo "------";
        // echo $createDate;
        return new patientModel($_id, $firstName, $lastName, $BOD, $IDCard, $createDate);
    }
}
