<?php

class AdminSeeder extends Seeder
{
    public function run()
    {
        $this->db->truncate('admin');

        $data = [
            [
                'username' => 'admin',
                'password' => 'admin123',
                'email' => 'admin@mail.com',
            ],
            // Add more admin data as needed
        ];

        $this->db->insert_batch('admin', $data);
    }
}
