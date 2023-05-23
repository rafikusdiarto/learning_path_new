<?php

class LeaderSeeder extends Seeder {

	private $table = 'leaders';

	public function run() {
		$this->db->truncate($this->table);

		$data = [
            [
                'username' => 'R Fasih',
                'password' => 'password123',
                'email' => 'fasih@gmail.com',
                'join_at' => '2020-10-02',
            ],
            [
                'username' => 'Carlos',
                'password' => 'password123',
                'email' => 'carlos@gmail.com',
                'join_at' => '2021-07-02',
            ],
            // Add more user data as needed
        ];

        $this->db->insert_batch('leaders', $data);

		echo PHP_EOL;
	}
}

