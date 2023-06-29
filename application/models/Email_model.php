<?php
class Email_model extends CI_Model
{
    public function saveEmail($email)
    {
        $data = array(
            'email' => $email,
            'created_at' => date('Y-m-d H:i:s')
        );

        $this->db->insert('emails', $data);
        return $this->db->insert_id();
    }

}
