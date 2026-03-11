<?php

namespace App\Models;

use CodeIgniter\Model;

class Card_discount extends Model
{
    protected $table = 'card_discounts'; 
    protected $primaryKey = 'card_id';
    protected $returnType = 'array'; 
    // Added 'card_kind' for the radio buttons
    protected $allowedFields = ['bank_name', 'card_kind', 'card_type', 'discount_percentage', 'deleted'];

    public function get_all()
    {
        return $this->where('deleted', 0)->findAll();
    }

    public function get_info($card_id)
    {
        $result = $this->where('card_id', $card_id)->first();
        if (!$result) {
            return ['card_id' => -1, 'bank_name' => '', 'card_kind' => 'Credit Card', 'card_type' => '', 'discount_percentage' => '0'];
        }
        return $result;
    }

    public function save_card($data, $card_id = -1)
    {
        if ($card_id == -1) {
            return $this->insert($data);
        }
        return $this->update($card_id, $data);
    }
    
    public function delete_card($card_id)
    {
        return $this->update($card_id, ['deleted' => 1]);
    }
}