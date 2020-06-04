<?php
class Endereco_model extends CI_Model{

    public function __construct(){
        $this->load->database();
    }

    public function criar_endereco(){
        $data = array(
            'endereco' => $this->input->post('endereco'),
            'cidade' => $this->input->post('cidade'),
            'uf' => $this->input->post('uf'),
            'cep' => $this->input->post('cep'),
            'pessoa_id' => $this->input->post('pessoa_id')
        );
        return $this->db->insert('endereco', $data);
    }


    public function getPessoas(){
        $this->db->order_by('nome');
        $query = $this->db->get('pessoa');
        return $query->result_array();
    }


    public function getEnderecos() {
        $this->db->select('*');
        $this->db->join('pessoa', 'pessoa.id = endereco.pessoa_id',  'inner');
        $this->db->order_by('endereco.id_endereco', 'ASC');
        return $this->db->get('endereco')->result();

    }
}