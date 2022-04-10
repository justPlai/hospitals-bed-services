<?php
class hospital
{
    public $hospital_id;
    public $hospital_name;
    public $hospital_location;
    public $hospital_phonenumber;
    public function __construct($hospital_id, $hospital_name, $hospital_location, $hospital_phonenumber)
    {
        $this->hospital_id = $hospital_id;
        $this->hospital_name = $hospital_name;
        $this->hospital_location = $hospital_location;
        $this->hospital_phonenumber = $hospital_phonenumber;
    }

    public static function getAll()
    {
        $hospitalList = [];
        $result = hospital_api::getAll();
        foreach ($result as $item) {
            $hospital_id = $item["hospitalId"];
            $hospital_name = $item["hospitalName"];
            $hospital_location = $item["hospitalLocation"];
            $hospital_phonenumber = $item["hospitalPhonenumber"];
            $hospitalList[] = new hospital($hospital_id, $hospital_name, $hospital_location, $hospital_phonenumber);
        }
    
        return $hospitalList;
    }

    public static function getById($id)
    {
        $result = hospital_api::getById($id);
        $item = $result;
        $hospital_id = $item["hospitalId"];
        $hospital_name = $item["hospitalName"];
        $hospital_location = $item["hospitalLocation"];
        $hospital_phonenumber = $item["hospitalPhonenumber"];

        return new hospital($hospital_id, $hospital_name, $hospital_location, $hospital_phonenumber);
    }

    public static function getByName($key)
    {
        $hospitalList = [];
        $result = hospital_api::getAll();
        foreach ($result as $item) {
            if($key===$item["hospitalName"])
            {
                $hospital_id = $item["hospitalId"];
                $hospital_name = $item["hospitalName"];
                $hospital_location = $item["hospitalLocation"];
                $hospital_phonenumber = $item["hospitalPhonenumber"];
                $hospitalList[] = new hospital($hospital_id, $hospital_name, $hospital_location, $hospital_phonenumber);
            }
        }
        return $hospitalList;
    }
    public static function update($hospital_id, $hospital_name, $hospital_location, $hospital_phonenumber)
    {
        $result = hospital_api::update($hospital_id, $hospital_name, $hospital_location, $hospital_phonenumber);
        return "update success $result row";
    }

    public static function add($hospital_name, $hospital_location, $hospital_phonenumber)
    {
        $result = hospital_api::create($hospital_name, $hospital_location, $hospital_phonenumber);
        return "Add success $result row";
    }
}
