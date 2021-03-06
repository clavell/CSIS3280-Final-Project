<?php 
//  CREATE TABLE Medicine(
//     MedicineID INT(11) NOT NULL,
//     MedicineName VARCHAR(50),
//     Treatment VARCHAR(500),
//     Description VARCHAR(500),
//     PRIMARY KEY(MedicineID)
// );

class Medicine{
    private $MedicineID;
    private $MedicineName;
    private $Treatment;
    private $Description;
    

    // getter
    public function getMedicineID(){
        return $this->MedicineID;
    }
    public function getMedicineName() {
        return $this->MedicineName;
    }
    public function getTreatment() {
        return $this->Treatment;
    }
    public function getDescription() {
        return $this->Description;
    }

    // setter
    public function setMedicineID(int $mID) {
        $this->MedicineID = $mID;
    }
    public function setMedicineName(string $mName) {
        $this->MedicineName = $mName;
    }
    public function setTreatment(string $treat) {
        $this->Treatment = $treat;
    }
    public function setDescription(string $desc) {
        $this->Description = $desc;
    }
    public function jsonSerialize() {
 
        //using this method here because there is no sensitive data recorded
        // $obj = get_object_vars($this);
        // return $obj;

        $medicinejs = new stdClass;
        $medicinejs->MedicineID = $this->MedicineID;
        $medicinejs->MedicineName = $this->MedicineName;
        $medicinejs->Treatment = $this->Treatment;
        $medicinejs->Description = $this->Description;
       
        return $medicinejs;
    }

}

?>
