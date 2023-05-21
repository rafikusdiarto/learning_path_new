<?php

class UserSeeder extends Seeder {

	private $table = 'users';

	public function run() {
		$this->db->truncate($this->table);

		$data = [
            [
                'username' => 'rafi kusdiarto',
                'password' => 'password123',
                'email' => 'rafi@gmail.com',
            ],
            [
                'username' => 'm rawon',
                'password' => 'password123',
                'email' => 'rawon@gmail.com',
            ],
            // Add more user data as needed
        ];

        $this->db->insert_batch('users', $data);

		echo PHP_EOL;
	}
}

