<?php
// Sử dụng singleton design patten cho lớp kết nối database
class Connection {
    private static $instance; // Biến để lưu trữ duy nhất một instance của lớp Connection
    private $pdo; // Biến để lưu trữ kết nối PDO
    private $host = 'localhost';
    private $username = 'root';
    private $password = '12345678';
    private $database = 'banhang';
    // Hàm private constructor để ngăn tạo ra các instance khác
    public function __construct() {
        try {
            $dsn = "mysql:host={$this->host};dbname={$this->database}";
            $this->pdo = new PDO($dsn, $this->username, $this->password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Kết nối thành công";
        } catch (PDOException $e) {
            die("Lỗi kết nối đến cơ sở dữ liệu: " . $e->getMessage());
        }
    }
    // Phương thức để lấy instance duy nhất của lớp connection
    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new connection();
        }
        return self::$instance;
    }
    // Phương thức để lấy kết nối PDO đến cơ sở dữ liệu
    public function getConnection() {
        return $this->pdo;
    }
    // Phương thức để đóng kết nối PDO đến cơ sở dữ liệu
    public function closeConnection() {
        $this->pdo = null;
    }

}