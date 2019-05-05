<?php

namespace application\models;

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use application\core\Model;

class Admin extends Model {
    public  function log($var_id){
        require_once(__DIR__.'/vendor/autoload.php');
        $logger = new Logger('channel-name');
        $logger->pushHandler(new StreamHandler(__DIR__.'/logs/logs.log', Logger::DEBUG));
        $logger->info($var_id);
    }

    public function getAll() {
        $result = $this->db->row('SELECT users.id, users.name, users.email, countries.country FROM users LEFT OUTER JOIN countries ON users.country_id = countries.id');
        return $result;
    }
    public function dropUser($var_id) {
        $result = $this->db->row('DELETE FROM `users` WHERE id='.$var_id);
        $this->log('Deleted user with id=: '.$var_id);
        return $result;
    }
    public function getUser($var_id) {
        $result = $this->db->row('SELECT * FROM `users` where id='.$var_id);
        return $result;
    }
    public function getCountry() {
        $result = $this->db->row('SELECT * FROM `countries`');
        return $result;
    }
    public function addUser($values) {
        $string = "INSERT INTO  `users` (`id`,`name`,`email`,`country_id`) VALUES (NULL,'".$values["name"]."','".$values["email"]."','".$values["country"]."');";
        $this->log('Added user with name =: '.$values["name"]." and @mail= ".$values["email"]);
        $result = $this->db->row($string);
    }
    public function editUser($values) {

        $string = "UPDATE `users` SET `id` = '".$values["id"]."',`country_id` = '".$values["country"]."',`email` = '".$values["email"]."',`name`='".$values["name"]."' WHERE id = ".$values["id"].";";
        $this->log('Edited user with id=: '.$values["id"]);
        $result = $this->db->row($string);
    }
}
