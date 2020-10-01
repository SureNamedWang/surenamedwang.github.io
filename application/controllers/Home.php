<?php
class Home extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->helper('url');
                $this->load->library('session');
                $this->load->helper('form');
        }

        public function index()
        {
                $this->load->view('templates/header');
                $this->load->view('templates/navbar');
                $this->load->view('home');
                // $this->load->view('templates/sidebar');
                $this->load->view('templates/footer');
        }

        public function result(){

		$resiko=0;
		$sero=0;
		$pcr=0;
		$multiplex=0;
		$thorax=0;
		$ctScan=0;
		$dr=0;

		if($this->input->post('rdoUsia')=="Ya"){
			$resiko=1;
		}
		else if($this->input->post('rdoUsia')=="Tidak"){
			if($resiko==0){
				$resiko=0;
			}

		}
		if($this->input->post('rdoKelamin')=="pria"){
			$resiko=1;
		}
		else if($this->input->post('rdoKelamin')=="wanita"){
			if($resiko==0){
				$resiko=0;
			}
		}
		if($this->input->post('rdoBatuk')=="Ya"){
			$resiko=1;
			$thorax=1;
			$ctScan=1;
			$dr=1;
			$multiplex=1;
		}
		else if($this->input->post('rdoBatuk')=="Tidak"){
			if($resiko==0){
				$resiko=0;
			}
		}
		if($this->input->post('rdoPilek')=="Ya"){
			$resiko=1;
			$dr=1;
			$multiplex=1;
		}
		else if($this->input->post('rdoPilek')=="Tidak"){
			if($resiko==0){
				$resiko=0;
			}
		}
		if($this->input->post('rdoSuhu')=="Ya"){
			$resiko=1;
			$dr=1;
		}
		else if($this->input->post('rdoSuhu')=="Tidak"){
			if($resiko==0){
				$resiko=0;
			}
		}
		if($this->input->post('rdoMencret')=="Ya"){
			$resiko=1;
			$dr=1;
			$multiplex=1;
		}
		else if($this->input->post('rdoMencret')=="Tidak"){
			if($resiko==0){
				$resiko=0;
			}
		}
		if($this->input->post('rdoPembauan')=="Ya"){
			$resiko=1;
			$dr=1;
		}
		else if($this->input->post('rdoPembauan')=="Tidak"){
			if($resiko==0){
				$resiko=0;
			}
		}
		if($this->input->post('rdoTenggorokan')=="Ya"){
			$resiko=1;
			$dr=1;
		}
		else if($this->input->post('rdoTenggorokan')=="Tidak"){
			if($resiko==0){
				$resiko=0;
			}
		}
		if($this->input->post('rdoSesak')=="Ya"){
			$resiko=1;
			$thorax=1;
			$ctScan=1;
			$dr=1;
		}
		else if($this->input->post('rdoSesak')=="Tidak"){
			if($resiko==0){
				$resiko=0;
			}
		}
		if($this->input->post('rdoLamaGejala')=="7+"){
			$resiko=1;
			$sero=1;
			if($this->input->post('rdoLamaGejala')!="Tidak"
			&&$this->input->post('rdoSerologi')=="R"
			&&$this->input->post('rdoSwab')=="R"
			&&$this->input->post('rdoKontak')!="Tidak"){
				$multiplex=1;
				$pcr=1;
			}
		}
		else if($this->input->post('rdoLamaGejala')=="7-"){
			$resiko=1;
		}
		else if($this->input->post('rdoLamaGejala')=="Tidak"){
			if($resiko==0){
				$resiko=0;
			}
		}
		if($this->input->post('rdoSerologi')=="NR"){
			if($resiko==0){
				$resiko=0;
			}
		}
		else if($this->input->post('rdoSerologi')=="R"){
			$resiko=1;
		}
		else if($this->input->post('rdoSerologi')=="Tidak"){
			if($resiko==0){
				$resiko=0;
			}
		}
		if($this->input->post('rdoSwab')=="NR"){
			if($resiko==0){
				$resiko=0;
			}
		}
		else if($this->input->post('rdoSwab')=="R"){
			$resiko=1;
		}
		else if($this->input->post('rdoSwab')=="Tidak"){
			if($resiko==0){
				$resiko=0;
			}
		}
		if($this->input->post('rdoKontak')=="Ya"){
			$resiko=1;
			$sero=1;
		}
		else if($this->input->post('rdoKontak')=="Tidak"){
			if($resiko==0){
				$resiko=0;
			}
		}
		if($this->input->post('rdoSurabaya')=="Ya"){
			$resiko=1;
		}
		else if($this->input->post('rdoSurabaya')=="Tidak"){
			if($resiko==0){
				$resiko=0;
			}
		}
		if($this->input->post('rdoKunjungan')=="Ya"){
			$resiko=1;
		}
		else if($this->input->post('rdoKunjungan')=="Tidak"){
			if($resiko==0){
				$resiko=0;
			}
		}

		$data['rekomendasi']="<pre style='font-family:sans-seriff;font-size:24px;font-weight:bolder'>Berdasarkan hasil dari Self Assessment yang telah anda isi,\n".
		"Anda memiliki resiko ";
		if($resiko==1){
			$data['rekomendasi'].="<b style='color:red;'>Tinggi</b>\n";
		}
		else{
			$data['rekomendasi'].="<b style='color:red;'>Rendah</b>\n";
		}
		if($sero==1||$pcr==1||$multiplex==1||$thorax==1||$ctScan==1||$dr==1){
			$data['rekomendasi'].="Berikut adalah rekomendasi test yang harus anda jalani:\n<ul>";
		}
		
		if($sero==1){
			$data['rekomendasi'].="<li>Tes Serologi</li>\n";
		}
		if($pcr==1){
			$data['rekomendasi'].="<li>Tes Swab PCR</li>\n";
		}
		if($multiplex==1){
			$data['rekomendasi'].="<li>Multiplex PCR</li>\n";
		}
		if($thorax==1){
			$data['rekomendasi'].="<li>Thorax</li>\n";
		}
		if($ctScan==1){
			$data['rekomendasi'].="<li>CT-Scan</li>\n";
		}
		if($dr==1){
			$data['rekomendasi'].="<li>Tes Darah</li>\n";
		}
		$data['rekomendasi'].="</pre>\n";
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		// $this->load->view('templates/sidebar');
		$this->load->view('hasil',$data);
		$this->load->view('templates/footer');

	}
}