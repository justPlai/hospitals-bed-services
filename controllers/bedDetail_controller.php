<?php
class BedDetailController
{
    public function index()
    {
        $id = $_GET['id'];
        $bedDetailList = bedDetail::getByHospitalId($id);
        require_once('views/detailbed/index_Detailbed.php');
    }
    public function updatePage()
    {
        $id = $_GET['id'];
        $patientList = patientModel::getAll();
        $doctorList = doctorModel::getAll();
        $bedList = bed::getAll();
        $bedDetail = bedDetail::get($id);
        require_once('views/detailbed/updateDetailbed.php');
    }

    public function update()
    {
        $bedDetail_id = $_GET['bedDetail_id'];
        $patient_id = $_GET['patient_id'];
        $bed_id = $_GET['bed_id'];
        $doctor_id = $_GET['doctor_id'];
        echo "$bedDetail_id, $patient_id, $bed_id, $doctor_id";
        bedDetail::update($bedDetail_id, $patient_id, $bed_id, $doctor_id);

        $id = $_GET['hospital_id'];
        BedDetailController::index();
    }
}
