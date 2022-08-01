<?php 

	/**
	 * 
	 */
	class Kontak extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
		}

		function index(){

			$this->load->view('utama/index');
		}

		function act_kontak(){
			$jml = $this->input->post('jml');
			$row = $this->db->get('tbl_kontak')->num_rows();
			// 4928

			if ($jml > $row) {
				
				$lop = $jml - $row;
				$this->db->order_by('id', 'RANDOM');
				$datakontak = $this->db->get('tbl_kontak')->result_array();

				foreach ($datakontak as $datakontak2) {
					$data = [
						'nohp' => $datakontak2['nohp'],
					];
					$this->db->insert('tbl_hasilkontak', $data);
				}

				$for = $lop / 2;

				for ($i=0; $i < $for ; $i++) { 
					$huruf = array(
						"62812",
						"62813",
						"62852",
						"62811",
						"62878"
					);
					shuffle($huruf);
					$hasil = array_shift($huruf);

					$data = [
						'nohp' => $hasil .rand(1,100000000),
					];

					$this->db->insert('tbl_hasilkontak', $data);
				}

				$this->db->order_by('id', 'RANDOM');
				$this->db->limit($for);
				$list = $this->db->get('tbl_kontak')->result_array();
				foreach ($list as $get) {
					$data = [
						'nohp' => substr($get['nohp'], 0, -2).rand(10,99),
					];

					$this->db->insert('tbl_hasilkontak', $data);
				}






			}else{

				$this->input->post('jml');
				$this->db->order_by('id', 'RANDOM');
				$this->db->limit($jml);
				$list = $this->db->get('tbl_kontak')->result_array();
				foreach ($list as $get) {
					$data = [
						'nohp' => $get['nohp'],
					];

					$this->db->insert('tbl_hasilkontak', $data);
				}
			}

			redirect('kontak/hasilkontak');
		}



		function getkontak(){
			$data['jml'] = $this->input->get('jml');
			$this->load->view('utama/table', $data);
		}

		function get(){


			$this->db->order_by('id', 'RANDOM');
			$this->db->limit('2');
			$list = $this->db->get('tbl_kontak')->result_array();
			foreach ($list as $get) {
				echo $get['nohp']."<br>";
			}
			echo "<hr>";

			foreach ($list as $get) {
				echo substr($get['nohp'], 0, -2).rand(10,99)."<br>";
			}


		}

		function hapus(){

			$this->db->delete('tbl_hasilkontak', ['key' => 0]);
			redirect('kontak/hasilkontak');
		}

		function hasilkontak(){

			$data['kontak'] = $this->db->get('tbl_hasilkontak')->result_array();
			$this->load->view('utama/hasilkontak', $data);

		}


	}

?>