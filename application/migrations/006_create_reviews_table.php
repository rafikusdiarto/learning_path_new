<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_reviews_table extends CI_Migration {

    public function up()
    {
        $fields = array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'name' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            'position' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
			'review_description' => array(
                'type' => 'TEXT',
            ),
			'created_at datetime default current_timestamp',
			'updated_at datetime default current_timestamp on update current_timestamp',
            // Add other fields as per your requirements
        );

        $this->dbforge->add_field($fields);
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('reviews');
    }

    public function down()
    {
        $this->dbforge->drop_table('reviews');
    }
}
