<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_quiz_history_table extends CI_Migration {

    public function up()
    {
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'learning_path_id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE
            ),
            'score' => array(
                'type' => 'INT',
                'constraint' => 3,
                'unsigned' => TRUE
            ),
			'created_at datetime default current_timestamp',
			'updated_at datetime default current_timestamp on update current_timestamp',
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('quiz_history');
		$this->db->query('ALTER TABLE quiz_history ADD FOREIGN KEY (learning_path_id) REFERENCES learning_paths(id) ON DELETE CASCADE ON UPDATE CASCADE ');

    }

    public function down()
    {
        $this->dbforge->drop_table('quiz_history');
    }
}
