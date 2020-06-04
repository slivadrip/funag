<?php
class Pessoa_model extends CI_Model{

    public function __construct(){
        $this->load->database();
    }

    public function criar_pessoa(){
        $data = array(
            'nome' => $this->input->post('nome'),
            'identidade' => $this->input->post('identidade'),
            'data_nasc' => $this->input->post('data_nasc')
        );
        return $this->db->insert('pessoa', $data);
    }

    public function getPessoas(){
        $this->db->order_by('id');
        return $this->db->get('pessoa')->result();;
    }
}