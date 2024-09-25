<?php

 define('DB_SERVER','localhost');
 define('DB_USER','root');
 define('DB_PASS','');
 define('DB_NAME','db_projct');

    class DB_con {

        function __construct() {
        $conn = mysqli_connect (DB_SERVER, DB_USER, DB_PASS, DB_NAME);
        $this->dbcon = $conn;

        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL : " . mysqli_connect_erro();
            }
        }

        public function insert($firstname, $lastname, $email, $phonenumber, $username, $password, $image) {
            // กำหนดเส้นทางสำหรับบันทึกรูปภาพ
            $target_dir = "uploads/";
            $target_file = $target_dir . basename($image["name"]);
            
            // ตรวจสอบประเภทไฟล์
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
            $allowed_types = ['jpg', 'png', 'jpeg', 'gif'];
            
            if (in_array($imageFileType, $allowed_types)) {
                // อัปโหลดไฟล์
                if (move_uploaded_file($image["tmp_name"], $target_file)) {
                    // บันทึกข้อมูลในฐานข้อมูล
                    $result = mysqli_query($this->dbcon, "INSERT INTO tblusers (firstname, lastname, email, phonenumber, username, password, image) VALUES ('$firstname', '$lastname', '$email', '$phonenumber', '$username', '$password', '$target_file')");
                    return $result;
                } else {
                    return false; // อัปโหลดไฟล์ไม่สำเร็จ
                }
            } else {
                return false; // ประเภทไฟล์ไม่อนุญาต
            }
        }        
        

        public function fetchdata(){
            $result = mysqli_query($this->dbcon, "SELECT * FROM tblusers");
            return $result;
        }

        public function fetchonerecord($userid) {
            $result = mysqli_query($this->dbcon, "SELECT * FROM tblusers WHERE id = '$userid' ");
            return $result;
        }

        public function update($firstname, $lastname, $email, $phonenumber, $userid, $username, $password, $image) {
            if ($image) {
                $result = mysqli_query($this->dbcon, "UPDATE tblusers SET 
                firstname = '$firstname', 
                lastname = '$lastname',
                email = '$email',
                phonenumber = '$phonenumber',
                username = '$username',
                password = '$password',
                image = '$image'    
                WHERE id = '$userid'");
            } else {
                $result = mysqli_query($this->dbcon, "UPDATE tblusers SET 
                firstname = '$firstname', 
                lastname = '$lastname',
                email = '$email',
                phonenumber = '$phonenumber',
                username = '$username',
                password = '$password'    
                WHERE id = '$userid'");
            }
            return $result; 
        }        

        public function delete($userid) {
            $deleterecord = mysqli_query($this->dbcon, "DELETE FROM tblusers  WHERE id = '$userid'");
            return $deleterecord;
        }

        
    }   

?>