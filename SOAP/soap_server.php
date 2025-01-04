<?php
// Menyertakan file koneksi database
include_once('db_config.php');

// Mendefinisikan class untuk operasi CRUD
class UserService {
    // Fungsi untuk menambah user
    public function createUser($name, $email, $phone) {
        global $conn;
        $stmt = $conn->prepare("INSERT INTO users (name, email, phone) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $name, $email, $phone);
        if ($stmt->execute()) {
            return "User created successfully!";
        } else {
            return "Error: " . $stmt->error;
        }
    }

    // Fungsi untuk mendapatkan semua user
    public function getUsers() {
        global $conn;
        $result = $conn->query("SELECT * FROM users");
        $users = [];
        while ($row = $result->fetch_assoc()) {
            $users[] = $row;
        }
        return $users;
    }

    // Fungsi untuk mendapatkan user berdasarkan ID
    public function getUser($id) {
        global $conn;
        $stmt = $conn->prepare("SELECT * FROM users WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }

    // Fungsi untuk update user
    public function updateUser($id, $name, $email, $phone) {
        global $conn;
        $stmt = $conn->prepare("UPDATE users SET name = ?, email = ?, phone = ? WHERE id = ?");
        $stmt->bind_param("sssi", $name, $email, $phone, $id);
        if ($stmt->execute()) {
            return "User updated successfully!";
        } else {
            return "Error: " . $stmt->error;
        }
    }

    // Fungsi untuk menghapus user
    public function deleteUser($id) {
        global $conn;
        $stmt = $conn->prepare("DELETE FROM users WHERE id = ?");
        $stmt->bind_param("i", $id);
        if ($stmt->execute()) {
            return "User deleted successfully!";
        } else {
            return "Error: " . $stmt->error;
        }
    }
}

// Membuat SOAP server
$server = new SoapServer(null, array('uri' => 'http://localhost/soap_service'));
$server->setClass('UserService');
$server->handle();
?>
