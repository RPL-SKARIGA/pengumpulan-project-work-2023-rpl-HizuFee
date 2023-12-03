<?php 
namespace App\Controllers;

class AuthController extends BaseController
{
    public function logout()
    {
        // Destroy the user's session to log them out
        session()->destroy();

        // Redirect to the login page or any other desired page
        return redirect()->to('/login'); // Change the URL to the appropriate login page
    }
} ?>