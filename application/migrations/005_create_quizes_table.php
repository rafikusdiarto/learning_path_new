<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_quizes_table extends CI_Migration {

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
                'unsigned' => TRUE,
            ),
			'questions_text' => array(
				'type' => 'TEXT',
			),
			'choiceA' => array(
				'type' => 'TEXT',
			),
			'choiceB' => array(
				'type' => 'TEXT',
			),
			'choiceC' => array(
				'type' => 'TEXT',
			),
			'choiceD' => array(
				'type' => 'TEXT',
			),
			'answer_key' => array(
				'type' => 'VARCHAR',
				'constraint' => '255',
			),
			'questions_score' => array(
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => TRUE,
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
        $this->dbforge->create_table('quizes', TRUE);
		$this->db->query('ALTER TABLE quizes ADD FOREIGN KEY (learning_path_id) REFERENCES learning_paths(id) ON DELETE CASCADE ON UPDATE CASCADE ');

    }

    public function down()
    {
        $this->dbforge->drop_table('quizes');
    }
}
