<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pessoas extends CI_Controller {

    public function verificar_sessao() {
        if ($this->session->userdata('logado') == false) {
            redirect('login');
        }
    }

    public function index() {
        $this->verificar_sessao();
        $this->load->model('pessoa_model', 'pessoa');
        $data['pessoas'] = $this->pessoa_model->getPessoas();
        $this->load->view('pessoas/index', $data);
    }

    public function nova() {
        $this->verificar_sessao();
        $this->form_validation->set_rules('nome', 'Nome', 'required');
        $this->form_validation->set_rules('identidade', 'Identidade', 'required');
        $this->form_validation->set_rules('data_nasc', 'Data de Nascimento', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('pessoas/cadastro');
        } else {
            $this->pessoa_model->criar_pessoa();
            // Set message
            $this->session->set_flashdata('criar_pessoa', 'Sua Pessoa cadastrada com Sucesso');
            redirect('pessoas/index');
        }
    }

    public function salvar() {
        $this->verificar_sessao();

        $this->load->model('pessoa_model', 'pessoa');

        $id = $this->input->post('id');
        $data['nome'] = $this->input->post('nome');
        $data['identidade'] = $this->input->post('identidade');
        $data['data_nasc'] = $this->input->post("data_nasc");

        if ($this->pessoa->salvar($data, $id)) {
            $this->session->set_flashdata("success", "Dados Atualizados com Sucesso!");
            redirect('pessoas/index');
        } else {
            $this->session->set_flashdata("error", "Não foi possível atualizar os dados!");
            redirect('pessoas/index');
        }
    }
}
