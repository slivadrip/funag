<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Enderecos extends CI_Controller {

    public function verificar_sessao() {
        if ($this->session->userdata('logado') == false) {
            redirect('login');
        }
    }

    public function index() {
        $this->verificar_sessao();
        $this->load->model('endereco_model', 'endereco');
        $data['enderecos'] = $this->endereco_model->getEnderecos();
        $this->load->view('enderecos/index', $data);
    }

    public function novo() {
        $this->verificar_sessao();

        $this->form_validation->set_rules('endereco', 'Endereço', 'required');
        $this->form_validation->set_rules('cidade', 'Cidade', 'required');
        $this->form_validation->set_rules('uf', 'UF', 'required');
        $this->form_validation->set_rules('cep', 'CEP', 'required');
        $this->form_validation->set_rules('pessoa_id', 'Pessoa', 'required');

        $data['pessoas'] = $this->endereco_model->getPessoas();;

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('enderecos/cadastro', $data);
        } else {
            $this->endereco_model->criar_endereco();
            // Set message
            $this->session->set_flashdata('criar_endereco', 'Sua Pessoa cadastrada com Sucesso');
            redirect('enderecos/index');
        }
    }

   }
