<?php
// Lớp này để tạo truy vấn liên quan tới database
abstract class Database {
    public function __construct(){

    }

    abstract public function create();
    abstract public function update();
    abstract public function delete();
    abstract public function getAll();
    abstract public function getSingle();

}