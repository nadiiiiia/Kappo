<?php

Class DevisModel extends CI_Model {

public function addDevis($data)
{
        if ($this->db->insert('kappo_ask_devis', $data)) {
            return true;
        } else {
            return false;
        }
}


}
?>