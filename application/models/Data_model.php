<?php 

class Data_model extends CI_Model 
{
    public function simpan()
    {
        $data = $this->input->post();
        if (!empty($data)) {
            return $this->db->insert("user", $data);
        }
    }
    public function edit($id)
    {
        $data = $this->input->post();
        if (!empty($data)) {
            return $this->db->update("user", $data, ['id' => $id]);
        }
    }
    public function getData()
    {
        $nama = $this->input->get('username');
        if(!empty($nama)){
            return $this->db->query('SELECT * FROM user WHERE username LIKE ?','%'.$nama.'%')->result_array();
        }else{
            return $this->db->get('user')->result_array();
        }
    }

    public function getEdit($id)
    {
        return $this->db->get_where("user", ["id" => $id])->row_array();
    }
    public function delete($id)
    {
        return $this->db->delete('user', ["id" => $id]);
    }
    public function hitungJumlahAsset()
    {   
        $query = $this->db->get('user');
        if($query->num_rows()>0)
        {
            return $query->num_rows();
        }else
        {
            return 0;
        }
    }
    public function is_login()
    {
        $login = $this->session->userdata("login");
        if(!empty($login))
        {
            return true;
        }else{
            return false;
        }
    }
    public function do_login()
    {
        $post = $this->input->post();
        if(!empty($post))
        {
            $email = $post["email"];
            $password = $post["password"];

            $user = $this->db->query("SELECT * FROM user WHERE email = ?", $email)->row_array();
            if(!empty($user))
            {
                if ($user["password"] == $password) {
                    $this->session->set_userdata("login", $user);
                    redirect(base_url("index.php/user/index"));
                }else{
                    return "Maaf, Password Anda Salah!";
                }
            }else{
                return "Maaf, Email Belum Terdaftar Atau Salah";
            }
        }
    }
}