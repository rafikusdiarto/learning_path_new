<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_steps_table extends CI_Migration {

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
            'step' => array(
                'type' => 'VARCHAR',
                'constraint' => 255,
            ),
            'description' => array(
                'type' => 'VARCHAR',
                'constraint' => 255,
            ),
			'created_at datetime default current_timestamp',
			'updated_at datetime default current_timestamp on update current_timestamp',
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('steps');
		$this->db->query('ALTER TABLE steps ADD FOREIGN KEY (learning_path_id) REFERENCES learning_paths(id) ON DELETE CASCADE ON UPDATE CASCADE ');

    }

    public function down()
    {
        $this->dbforge->drop_table('steps');
    }
}
