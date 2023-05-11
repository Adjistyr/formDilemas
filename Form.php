<?php
class Form extends CI_Controller
{
    public function index()
    {
        $this->load->view('view-form-siswa');
    }
    public function cetak()
    {
        $this->form_validation->set_rules('nama', 'nama', 'required|min_length[3]', ['required' => 'Nama Harus diisi','min_lenght' => 'Nama terlalu pendek']);
		$this->form_validation->set_rules('nis', 'nis', 'required|min_length[3]', ['required' => 'Nis Harus diisi','min_lenght' => 'Nis terlalu pendek']);
        $this->form_validation->set_rules('kelas', 'kelas', 'required|min_length[1]', ['required' => 'Kelas Harus diisi','min_lenght' => 'Kelas terlalu pendek']);
		$this->form_validation->set_rules('tanggallahir', 'tanggallahir', 'required|min_length[3]', ['required' => 'Tanggal lahir Harus diisi','min_lenght' => 'Tanggal lahir terlalu pendek']);
        $this->form_validation->set_rules('tempatlahir', 'tempatlahir', 'required|min_length[3]', ['required' => 'Tempat lahir diisi','min_lenght' => 'Tempat lahir terlalu pendek']);
		$this->form_validation->set_rules('alamat', 'alamat', 'required|min_length[3]', ['required' => 'Alamat tinggal Harus diisi','min_lenght' => 'Alamat tinggal terlalu pendek']);
		if ($this->form_validation->run() != true) {
            $this->load->view('view-form-siswa');

        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'nis' => $this->input->post('nis'),
                'kelas' => $this->input->post('kelas'),
                'tanggallahir' => $this->input->post('tanggallahir'),
                'tempatlahir' => $this->input->post('tempatlahir'),
                'alamat' => $this->input->post('alamat'),
                'kelamin' => $this->input->post('kelamin'),
                'agama' => $this->input->post('agama'),
                
            ];
            $this->load->view('view-data-siswa', $data);
        }

     }
}

