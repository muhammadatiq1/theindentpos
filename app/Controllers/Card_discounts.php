<?php

namespace App\Controllers;

use App\Models\Card_discount;

class Card_discounts extends Secure_Controller
{
    public function __construct()
    {
        parent::__construct('sales');
    }

    public function index()
    {
        $model = new Card_discount();
        // This variable prevents the header from crashing
        $data['controller_name'] = 'card_discounts'; 
        $data['manage_table'] = $model->get_all();
        
        echo view('card_discounts/manage', $data);
    }

    public function view($card_id = -1)
    {
        $model = new Card_discount();
        $data['card_info'] = $model->get_info($card_id);
        
        // Load the popup form without the header/footer
        echo view('card_discounts/form', $data);
    }

    public function save($card_id = -1)
    {
        $model = new Card_discount();
        $card_data = [
            'bank_name' => $this->request->getPost('bank_name'),
            'card_kind' => $this->request->getPost('card_kind'), // Debit or Credit
            'card_type' => $this->request->getPost('card_type'),
            'discount_percentage' => $this->request->getPost('discount_percentage')
        ];

        $model->save_card($card_data, $card_id);
        
        // Return JSON so the popup knows to close and reload the page
        echo json_encode(['success' => true, 'message' => 'Card Saved!']);
    }

    public function delete($card_id = -1)
    {
        $model = new Card_discount();
        $model->delete_card($card_id);
        return redirect()->to(site_url('card_discounts'));
    }
}