<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Carro extends CI_Controller {

    function __construct() {
        parent::__construct();
        if (!$this->session->userdata('estou_logado')) {
            redirect('Login');
        }
        $this->load->model('Carro_model', 'carro'); //Carro_model é o nome do model e pessoa é uma alias(apelido)
        $this->load->model('Pessoa_model', 'pessoa'); //Pessoa_model é o nome do model e pessoa é uma alias(apelido)
    }

    public function index() {
        $lista['carros'] = $this->carro->listar();
        $lista['pessoas'] = $this->pessoa->listar();
        $this->load->view('template/header');
        $this->load->view('carroCadastro', $lista);
        $this->load->view('template/footer');
    }

    public function inserir() {
        //nome dos dados no vetor devem ser os mesmos da tabela pessoa
        $dados['marca'] = $this->input->post('marca');
        $dados['modelo'] = $this->input->post('modelo');
        $dados['portas'] = $this->input->post('portas');
        $dados['cor'] = $this->input->post('cor');
        $dados['placa'] = $this->input->post('placa');
        $dados['idPessoa'] = $this->input->post('idPessoa');
        
        //chamando o método inserir($) do model pessoa
        $result = $this->carro->inserir($dados);

        if ($result == true) {
            $this->session->set_tempdata('msg','true', 5);
            redirect('carro');
        } else {
            $this->session->set_tempdata('msg','err', 5);
            redirect('carro');
        }
    }

    public function editar($id) {
        $dados['carro'] = $this->carro->editar($id);
        $dados['pessoas'] = $this->pessoa->listar();
        $this->load->view('template/header');
        $this->load->view('carroEditar', $dados);
        $this->load->view('template/footer');
    }

    public function atualizar() {
        //este é o lado do BD = este é o lado do Form
        $dados['idCarro'] = $this->input->post('idCarro');
        $dados['marca'] = $this->input->post('marca');
        $dados['modelo'] = $this->input->post('modelo');
        $dados['portas'] = $this->input->post('portas');
        $dados['cor'] = $this->input->post('cor');
        $dados['placa'] = $this->input->post('placa');
        $dados['idPessoa'] = $this->input->post('idPessoa');

        if ($this->carro->atualizar($dados) == true) {
            $this->session->set_tempdata('msg','trueUp', 5);
            redirect('carro');
        } else {
            $this->session->set_tempdata('msg','errUp', 5);
            redirect('carro');
        }
    }

    public function excluir($id) {
        $result = $this->carro->deletar($id);
        if ($result == true) {
            $this->session->set_tempdata('msg','trueDel', 5);
            redirect('carro');
        } else {
            $this->session->set_tempdata('msg','errDel', 5);
            redirect('carro');
        }
    }

}
