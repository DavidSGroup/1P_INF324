<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Persona_model extends CI_Model {

    public function save($data){
        $this->db->query("ALTER TABLE user AUTO_INCREMENT 1");
        $this->db->insert("persona",$data);
    }

    public function getUsers(){
        $this->db->select("*");
        $this->db->from("persona");
        $results=$this->db->get();
        return $results->result();
    }

    public function getUser($carnet){
        $this->db->select("p.carnet, p.nconpleto, p.fechanac, p.telefono, p.departamento");
        $this->db->from("persona p");
        $this->db->where("p.carnet",$carnet);
        $result=$this->db->get();
        return $result->row();
    }

    public function update($data,$carnet){
        $this->db->where("carnet",$carnet);
        $this->db->update("persona",$data);
    }

    public function delete($carnet){
        $this->db->where("carnet",$carnet);
        $this->db->delete("persona");
    }
    
}
