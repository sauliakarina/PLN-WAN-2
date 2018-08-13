<?php

class c_main extends CI_Controller {

 public function __construct(){
  parent::__construct();
  $this->load->helper('url');
 }

 public function index() {
  $this->load->view('loginpage');
 }


public function home() {
  $this->load->view('element/header');
  $this->load->view('home');
  $this->load->view('element/footer');
 }


public function waktu() {
  $this->load->view('element/header');
  $this->load->view('waktu');
  $this->load->view('element/footer');
 } 

public function area() {
  $this->load->view('element/header');
  $this->load->view('area');
  $this->load->view('element/footer');
 } 


 public function search() {
  $this->load->view('element/header');
  $this->load->view('search');
  $this->load->view('element/footer');
 } 

 public function searchuser() {
  $this->load->view('searchuser');
 }

 public function searchkeluhan() {
  $this->load->view('element/header');
  $this->load->view('searchkeluhan');
  $this->load->view('element/footer');
 }
 
public function contoh() {
  $this->load->view('contoh/contoh1');
  $this->load->view('contoh/ui');
  $this->load->view('contoh/table');
  $this->load->view('contoh/forms');
  $this->load->view('contoh/login');
  $this->load->view('contoh/blank');
  $this->load->view('contoh/login');
 }
}