<?php

namespace application\models;

use application\core\Model;

class Admin extends Model {

    public function getAll() {
        $result = $this->db->row('SELECT users.id, users.name, users.email, countries.country FROM users LEFT OUTER JOIN countries ON users.country_id = countries.id');
        return $result;
    }
    public function dropUser($var_id) {
        $result = $this->db->row('DELETE FROM `users` WHERE id='.$var_id);
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
        $result = $this->db->row($string);
    }
    public function editUser($values) {

        $string = "UPDATE `users` SET `id` = '".$values["id"]."',`country_id` = '".$values["country"]."',`email` = '".$values["email"]."',`name`='".$values["name"]."' WHERE id = ".$values["id"].";";
        $result = $this->db->row($string);
    }
}
