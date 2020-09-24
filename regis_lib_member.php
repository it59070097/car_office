<?php
// $firstName = $_POST['firstname'];
// $lastName = $_POST['lastname'];
// $citizen = $_POST['citizen'];
// $email = $_POST['email'];






// //database connection
// $conn = new mysqli('localhost' , 'root', '', 'mydatabase');
// if ($conn->connect_error){
//     die('Connection Failed :' .$conn->connect_error);
// }else {
//     $stmt = $conn->prepare("insert into registration(firstName, lastName, citizen, email) value(?,?,?,?)");
//     $stmt->bind_param("ssss", $firstName, $lastName, $citizen, $email);
//     $stmt-> execute();
//     echo("registration Successfully..");
//     $stmt->close();
//     $conn->close();

// }
// echo '<pre>';
// print_r($_FILES);
// echo '<pre>';
if (isset($_POST['submit'])) {
    $check = getimagesize($_FILES["upload_file_certificate"]['tmp_name']);
    if ($check) {
        $dir = "uploads/";
        $fileImage = $dir . basename($_FILES["upload_file_certificate"]["name"]);

        if (move_uploaded_file($_FILES["upload_file_certificate"]["tmp_name"], $fileImage)) {
            echo "ไฟล์" . basename($_FILES["upload_file_certificate"]["name"]) . "อัพโหลดสำเร็จเเล้ว";
        } else {
            echo "เกิดข้อผิดพลาดในการอัพไฟล์ของคุณ";
        }
    } else {
        echo "<script> alert('ไม่ใช่ไฟล์รูปภาพกรุณาอัพโหลดไฟล์ของคุณอีกครั้ง')</script>";
        header("Refresh:0; url=regis_library-member.html");
    }
} else {
    header("location: regis_library-member.html");
}
