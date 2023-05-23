<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_leaders_table extends CI_Migration {

    public function up()
    {
        $fields = array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'email' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            'username' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            'join_at' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            'password' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            // Add other fields as per your requirements
        );

        $this->dbforge->add_field($fields);
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('leaders');
    }

    public function down()
    {
        $this->dbforge->drop_table('leaders');
    }
}
