<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->model('DevisModel', '', TRUE);


        $this->load->helper('form');
        $this->load->helper('file');
        $this->load->helper('url');

        $this->load->library('session');
    }

    public function accueil() {

        $this->load->view('accueil');
    }


    function load_first_form() {

        $nom = $this->input->post('nom');
        $prenom = $this->input->post('prenom');
        $adresse = $this->input->post('adresse');
        $tel = $this->input->post('tel');
        $email = $this->input->post('email');  
        $passwd = $this->input->post('passwd');



        $dataFirstForm = array('nom' => $nom,
            'prenom' => $prenom,
            'adresse' => $adresse,
            'tel' => $tel,
            'email' => $email,
            'passwd' => $passwd);
        
        $this->session->set_userdata('dataFirstForm', $dataFirstForm); // save first form in a session
        $this->load->view('demandeDevis2');
    }

    function load_second_form() {


        $titre = $this->input->post('titre');
        $destination = $this->input->post('destination');
        $fret = $this->input->post('fret');
        $produit = $this->input->post('produit');
		$marque = $this->input->post('marque');
		$model = $this->input->post('model');
        $valeur = $this->input->post('valeur');
        $facture = $this->input->post('facture');
        $circulation = $this->input->post('circulation');
        $serial = $this->input->post('serial');
        $file = $this->input->post('file');
        $contenu = $this->input->post('contenu');
        $photo = $this->input->post('photo');
        $transitaire = $this->input->post('transitaire');
        $relationPart = $this->input->post('relationPart');
        $declarant = $this->input->post('declarant');
		$adresseDeclarant = $this->input->post('adresseDeclarant');
        $relPartDec = $this->input->post('relPartDec');
        $cle = $this->input->post('cle');

        $dataSecondForm = array(
            'titre' => $titre,
            'destination' => $destination,
            'fret' => $fret,
            'produit' => $produit,
	    'marque' => $marque,
	    'model' => $model,
            'valeur' => $valeur,
            'facture' => $facture,
            'circulation' => $circulation,
            'serial' => $serial,
            'file' => $file,
            'contenu' => $contenu,
            'photo' => $photo,
            'transitaire' => $transitaire,
            'relationPart' => $relationPart,
            'declarant' => $declarant,
	    'adresseDeclarant' => $adresseDeclarant,
            'relPartDec' => $relPartDec,
            'cle' => $cle,
            'created_at' => date('Y-m-d H:i:s', time()));
        $this->session->set_userdata('dataSecondForm', $dataSecondForm);
	    $this->load->view('demandeDevis3');
    }

    function load_third_form() {

        $FirstForm = $this->session->userdata('dataFirstForm');
        $SecondForm = $this->session->userdata('dataSecondForm');
        $allData = array_merge($FirstForm, $SecondForm);
        if ($this->DevisModel->addDevis($allData)) {
            $this->session->set_flashdata('msg', '<div style="margin: 75 150 0px;" class="alert alert-success text-center">Insertion avec succès !! </div>');
        }
        
        redirect('home_page','refrech');
    }


    public function devis($page) {



        if ($page == 1) {
            $this->load->view('demandeDevis');
        } else if ($page == 2) {
            $this->load->view('demandeDevis2');
        } else if ($page == 3) {
            $this->load->view('demandeDevis3');
        }
    }

    public function dossiers() {

        $this->load->view('dossiers');
    }

    public function tarifs() {

        $this->load->view('pricing');
    }

    public function about() {

        $this->load->view('about');
    }

    public function contact() {

        $this->load->view('contact');
    }

}
