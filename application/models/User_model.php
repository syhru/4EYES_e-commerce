<?php
class user_model  extends CI_Model{

    function get_user(){
        $result=$this->db->get('tb_user');
        return $result;
    }

    function save($nama,$username, $password, $role_id){
        $data=array(
            'nama'=>$nama,
            'username'=>$username,
            'password'=>$password,
            'role_id'=>$role_id,
            );
            $this->db->insert('tb_user',$data);
            }

    function delete($id){
        $this->db->where('id', $id);
        $this->db->delete('tb_user');
    }

    function get_id($id){
        $query = $this->db->get_where('tb_user', array('id' => $id)); return $query;
    }

    function update($id,$nama,$username,$password,$role_id){
        $data = array(
        'nama' => $nama,
        'username' => $username,
        'password' => $password,
        'role_id' => $role_id
        );

        $this->db->where('id', $id);
        $this->db->update('tb_user', $data);
    }
}

?>