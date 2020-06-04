<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Relatorios extends CI_Controller {

    public function verificar_sessao() {
        if ($this->session->userdata('logado') == false) {
            redirect('login');
        }
    }
    public function index() {
        $this->verificar_sessao();
        $this->load->model('relatorio_model', 'relatorio');

        $data['pessoas'] = $this->relatorio_model->getPessoas();
        $data['enderecos'] = $this->relatorio_model->getEnderecos();
        $data['countPessoa'] = $this->relatorio_model->countPessoa();

        //load library
        $this->load->library('pdf'); // change to pdf_ssl for ssl
        $filename = "Relatorio de Pessoas";
        $html = $this->load->view('relatorios/pessoas', $data, TRUE);
        $html = preg_replace('/>\s+</', '><', $html);

        $this->pdf->create($html, $filename);

    }


}
