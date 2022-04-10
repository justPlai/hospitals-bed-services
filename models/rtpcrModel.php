<?php
class rtpcrModel
{
    public $_id;
    public $patientID;
    public $officerID;
    public $result;
    public $detail;
    public $createDate;

    public function __construct($_id, $patientID, $officerID, $result, $detail, $createDate)
    {
        $this->_id = $_id;
        $this->patientID = $patientID;
        $this->officerID = $officerID;
        $this->result = $result;
        $this->detail = $detail;
        $this->createDate = $createDate;
    }

    public static function getAll()
    {
        $rtpcrList = [];
        $itemList = rtpcr_api::getAll();
        foreach ($itemList as $item) {
            $_id = $item['_id'];
            $patientID = $item['patientID'];
            $officerID = $item['officerID'];
            $result = $item['result'];
            $detail = $item['detail'];
            $createDate = $item['createDate'];
            $rtpcrList[] = new rtpcrModel($_id, $patientID, $officerID, $result, $detail, $createDate);
        }
        return $rtpcrList;
    }

    public static function get($id)
    {
        $item = rtpcr_api::getById($id);
        $_id = $item['_id'];
        $patientID = $item['patientID'];
        $officerID = $item['officerID'];
        $result = $item['result'];
        $detail = $item['detail'];
        $createDate = $item['createDate'];

        return new rtpcrModel($_id, $patientID, $officerID, $result, $detail, $createDate);
    }
}
