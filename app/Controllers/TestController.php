<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class TestController extends Controller
{
    public function index()
    {
        // Load the database connection
        try {
            $db = \Config\Database::connect();

            // Test the connection
            if ($db->connID) {
                // Optional: Get the database version
                $version = $db->query('SELECT version()')->getRow()->version;

                return $this->response->setJSON([
                    'status' => 'success',
                    'message' => 'Database connection successful',
                    'version' => $version // Include the database version in the response
                ]);
            } else {
                return $this->response->setJSON(['status' => 'error', 'message' => 'Database connection failed']);
            }
        } catch (\Exception $e) {
            return $this->response->setJSON([
                'status' => 'error',
                'message' => 'Database connection error: ' . $e->getMessage()
            ]);
        }
    }
}
