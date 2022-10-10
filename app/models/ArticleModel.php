<?php

namespace models;

class ArticleModel
{
    /**
     * @var \mysqli
     */
    protected $db;
    public $table = 'articles';
    /**
     * ArticleModel constructor
     */
    public function __construct(){
        $this->db = new \mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        if ($this->db->connect_error != 0){
            die($this->db->connect_error);//TODO добавить исключения.
        }
    }

    public function add(array $article){
        $sql = "INSERT INTO {$this->table} (title, text) VALUES ('{$article['title']}', '{$article['text']}')";
        return $this->db->query($sql);
    }
}