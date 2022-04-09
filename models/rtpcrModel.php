<?php
class rtpcrModel
{
    public $_id;
    public $patient;
    public $officerID;
    public $result;
    public $detail;
    public $createDate;

    public function __construct($_id, $patient, $officerID, $result, $detail, $createDate)
    {
        $this->_id = $_id;
        $this->patient = $patient;
        $this->officerID = $officerID;
        $this->result = $result;
        $this->detail = $detail;
        $this->createDate = $createDate;
    }

    public static function getAll()
    {
        $rtpcrList = null;
        $itemList = rtpcr_api::getAll();
        foreach ($itemList as $item) {
            $_id = $item['_id'];
            $patientID = $item['patientID'];
            $patient = patient_api::getById($patientID);
            $officerID = $item['officerID'];
            $result = $item['result'];
            $detail = $item['detail'];
            $createDate = $item['createDate'];
            $rtpcrList = new rtpcrModel($_id, $patient, $officerID, $result, $detail, $createDate);
        }

        return $rtpcrList;
    }

    public static function get($id)
    {
        $item = doctor_api::getById($id);
        $_id = $item['_id'];
        $patientID = $item['patientID'];
        $patient = patient_api::getById($patientID);
        $officerID = $item['officerID'];
        $result = $item['result'];
        $detail = $item['detail'];
        $createDate = $item['createDate'];

        return new rtpcrModel($_id, $patient, $officerID, $result, $detail, $createDate);
    }
}
