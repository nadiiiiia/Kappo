<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function accueil()
	{
            
           // echo "this is the One !";
		$this->load->view('accueil');
	}
        
        	public function devis($page)
	{
            
                if ($page == 1){
		$this->load->view('demandeDevis');
                }else if ($page == 2){
                    $this->load->view('demandeDevis2');
                }else if ($page == 3){
                    $this->load->view('demandeDevis3');
                }
	}
        	public function dossiers()
	{
            
                    $this->load->view('dossiers');
	}
                	public function tarifs()
	{
            
                    $this->load->view('pricing');
	}
                     	public function about()
	{
            
                    $this->load->view('about');
	}
                        public function contact()
	{
            
                    $this->load->view('contact');
	}
         
        
}
