<?php
// Include file cấu hình
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy dữ liệu từ biểu mẫu chỉnh sửa
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $role = $_POST['role'];
    $status = $_POST['status'];
    $note = $_POST['note'];

    // Câu lệnh SQL cập nhật dữ liệu
    $sql = "UPDATE customer SET name='$name', address='$address', role='$role',status='$status',note='$note' WHERE phone='$phone'";

    if ($conn->query($sql) === TRUE) {
        echo ('Dữ liệu đã được cập nhật thành công');
    } else {
        echo "Lỗi: " . $sql . "<br>" . $conn->error;
    }
}

// Đóng kết nối
$conn->close();
?>