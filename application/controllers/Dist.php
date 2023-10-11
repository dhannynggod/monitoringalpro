<?php
defined('BASEPATH') or exit('No direct script access allowed');

require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Dist extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("m_data");
		$this->load->database();
		$this->load->helper(array('url', 'file'));
	}

	public function index()
	{
		$data = array(
			'title' => "Monitoring Alpro",
			'dataBelum' => $this->m_data->getCountBelum(),
			'dataSelesai' => $this->m_data->getCountSelesai()
		);
		$this->load->view('dist/index', $data);
	}

	public function reporting()
	{
		$data = array(
			'title' => "Monitoring Alpro"
		);
		$this->load->view('dist/reporting', $data);
	}

	public function gmaps_simple()
	{
		$data = array(
			'title' => "Monitoring Alpro",
			'lokasi' => $this->m_data->getStatusBelum(),
		);
		$this->load->view('dist/gmaps-simple', $data);
	}

	public function detail_informasi()
	{
		$data = array(
			'title' => 'Monitoring Alpro',
			'data_alpro_belum' => $this->m_data->getStatusBelum(),
			'data_alpro_selesai' => $this->m_data->getStatusSelesai(),
		);
		$this->load->view('dist/information', $data);
	}

	public function detail_case()
	{
		$data = array(
			'title' => "Monitoring Alpro"
		);

		$this->load->view('dist/detail_case', $data);
	}

	public function file()
	{
		$this->form_validation->set_rules('nama_teknisi', 'Nama Teknisi', 'required');
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = '2048';
		$config['upload_path'] = './uploads/file/';
		date_default_timezone_set('ASIA/JAKARTA');
		$this->load->library('upload', $config);

		if (!empty($_FILES['file1']['name'])) {
			$this->upload->do_upload('file1');
			$data1 = $this->upload->data();
			$file1 = $data1['file_name'];
		}
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('dist/reporting');
		} else {
			$data = [
				'nama_teknisi'  => $this->input->post('nama_teknisi'),
				'longitude'  => $this->input->post('longitude'),
				'latitude'  => $this->input->post('latitude'),
				'alamat'  => $this->input->post('alamat'),
				'gangguan'  => $this->input->post('gangguan'),
				'keterangan'  => $this->input->post('keterangan'),
				'status'  => $this->input->post('status'),
				'created' => date('Y-m-d H:i:s'),
				'file1' => $file1,
				'file2' => '0',
				'file3' => '0'
			];

			$this->db->insert('data_alpro', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New Image Added!</div>');
			redirect('dist/detail_informasi');
		}
	}

	public function update()
	{
		$this->form_validation->set_rules('status', 'status', 'required');
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = '2048';
		$config['upload_path'] = './uploads/file/';
		$this->load->library('upload', $config);

		if (!empty($_FILES['file2']['name'])) {
			$this->upload->do_upload('file2');
			$data2 = $this->upload->data();
			$file2 = $data2['file_name'];
		}
		if (!empty($_FILES['file3']['name'])) {
			$this->upload->do_upload('file3');
			$data3 = $this->upload->data();
			$file3 = $data3['file_name'];
		}

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('dist/update');
		} else {
			$id = $this->input->post('id');
			$data = [
				'status'  => $this->input->post('status'),
				'file2' => $file2,
				'file3' => $file3
			];
			$this->m_data->update($data, $id);
			redirect('dist/detail_informasi');
		}
		$data['data_alpro'] = $this->m_data->getById($id);
		$this->load->view('dist/update', $data);
	}

	public function delete_img1($id)
	{
		$oldimage = $this->m_data->getImageById($id);
		unlink('./uploads/file/' . $oldimage['file1']);
		if ($this->m_data->delete($id) > 0) {
			$this->session->set_flashdata('status', 'Sukses hapus');
			redirect('dist/detail_informasi');
		} else {
			$this->session->set_flashdata('status', 'delete gagal silahkan ulangi kembali');
			redirect('dist/detail_informasi');
		}
	}

	public function delete_img2($id)
	{
		$oldimage = $this->m_data->getImageById($id);
		unlink('./uploads/file/' . $oldimage['file1']);
		unlink('./uploads/file/' . $oldimage['file2']);
		unlink('./uploads/file/' . $oldimage['file3']);
		if ($this->m_data->delete($id) > 0) {
			$this->session->set_flashdata('status', 'Sukses hapus');
			redirect('dist/detail_informasi');
		} else {
			$this->session->set_flashdata('status', 'delete gagal silahkan ulangi kembali');
			redirect('dist/detail_informasi');
		}
	}

	function detail($id)

	{
		$data = array(
			'title' => "Monitoring Alpro"
		);
		$data['data_alpro'] = $this->m_data->getById($id);

		$this->load->view('dist/detail_case', $data);
	}

	public function detail_update($id)
	{
		$data = array(
			'title' => 'Monitoring Alpro',
			'data_alpro' => $this->m_data->getById($id),
		);
		$this->load->view('dist/update', $data);
	}

	public function export()
	{
		date_default_timezone_set("Asia/Jakarta");
		$data =  $this->m_data->getAll();

		$spreadsheet = new Spreadsheet();
		$sheet = $spreadsheet->getActiveSheet();
		$sheet->setCellValue('A1', 'No');
		$sheet->setCellValue('B1', 'Nama');
		$sheet->setCellValue('C1', 'LongLat');
		$sheet->setCellValue('D1', 'Alamat');
		$sheet->setCellValue('E1', 'Kendala');
		$sheet->setCellValue('F1', 'Keterangan');
		$sheet->setCellValue('G1', 'Status Eksekusi');

		$column = 2;
		foreach ($data as $key => $value) {
			$sheet->setCellValue('A' . $column, ($column - 1));
			$sheet->setCellValue('B' . $column, ($value->nama_teknisi));
			$sheet->setCellValue('C' . $column, ($value->longitude . ', ' . $value->latitude));
			$sheet->setCellValue('D' . $column, ($value->alamat));
			$sheet->setCellValue('E' . $column, ($value->gangguan));
			$sheet->setCellValue('F' . $column, ($value->keterangan));
			$sheet->setCellValue('G' . $column, ($value->status));
			$column++;
		}

		$sheet->getStyle('A1:G1')->getFont()->setBold(true);
		$sheet->getStyle('A1:G1')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FFFFFF00');

		$styleArray = ['borders' => ['allBorders' => ['borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN, 'color' => ['argb' => 'FF000000'],],],];
		$sheet->getStyle('A1:G'.($column-1))->applyFromArray($styleArray);

		$sheet->getColumnDimension('A')->setAutoSize(true);
		$sheet->getColumnDimension('B')->setAutoSize(true);
		$sheet->getColumnDimension('C')->setAutoSize(true);
		$sheet->getColumnDimension('D')->setAutoSize(true);
		$sheet->getColumnDimension('E')->setAutoSize(true);
		$sheet->getColumnDimension('F')->setAutoSize(true);
		$sheet->getColumnDimension('G')->setAutoSize(true);

		$writer = new Xlsx($spreadsheet);
		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment;filename="ALPRO_' . date('d-m-Y H:i') . '.xlsx"');
		header('Cache-Control: max-age=0');
		$writer->save('php://output');
		exit();
	}
}
