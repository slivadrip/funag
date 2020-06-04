<?php
class Relatorio_model extends CI_Model{

    public function __construct(){
        $this->load->database();
    }



    public function getRelatorio() {
        $this->db->select('pessoa.id, pessoa.nome, endereco.endereco, endereco.cidade, endereco.uf');
        $this->db->join('endereco', 'endereco.pessoa_id = pessoa.id',  'inner');
        return $this->db->get('pessoa')->result();

    }


    public function getPessoas(){
        return $this->db->get('pessoa')->result();
    }


    public function getEnderecos(){
        return $this->db->get('endereco')->result();

    }

 

    public function countPessoa()
    {
        return $this->db->count_all('pessoa');
    }
}