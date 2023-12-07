<?php

namespace App\Controllers;

class Print_nota extends BaseController
{
    public function nota($id_pesanan)
    {
        // Fetch the pesanan data based on the ID
        $pesananModel = new \App\Models\PesananModel();
        $data['pesanan'] = $pesananModel->find($id_pesanan);

        // Check if the pesanan is found
        if ($data['pesanan']) {
            // Load the view for printing
            return view('print_nota', $data);
        } else {
            // Handle when pesanan is not found, for example, redirect to an error page
            return redirect()->to('/error')->with('error', 'Pesanan not found.');
        }
    }
}
