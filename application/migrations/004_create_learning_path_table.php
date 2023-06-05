<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_learning_path_table extends CI_Migration {

    public function up()
    {
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'title' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            'link_youtube' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            'thumbnail' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            'description' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
			'created_at datetime default current_timestamp',
			'updated_at datetime default current_timestamp on update current_timestamp',
			'status' => 
			array(
				'type' => 'tinyint',
				'constraint' => '1',
			),
        ));

        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('learning_paths');
    }

    public function down()
    {
        $this->dbforge->drop_table('learning_paths');
    }
}
