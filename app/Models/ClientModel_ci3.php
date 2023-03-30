<?php

namespace App\Models;
use CodeIgniter\Model;

class ClientModel extends Model
{
    function findClientById($id)
    {       
        $query = $this->db->query("SELECT * FROM client WHERE id = '$id'");
        return $query->getResult();
    }
}