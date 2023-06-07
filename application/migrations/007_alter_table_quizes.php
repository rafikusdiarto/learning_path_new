<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Alter_table_quizes extends CI_Migration {

    public function up()
    {
        // Nama tabel yang akan diubah
        $table_name = 'quizes';

        // Spesifikasi kolom yang akan ditambahkan
        $fields = array(
            'result' => array(
                'type' => 'INT',
                'constraint' => 10,
                'null' => TRUE
            )
        );

        // Menambahkan kolom ke tabel
        $this->dbforge->add_column($table_name, $fields);
    }

    public function down()
    {
        // Nama tabel yang akan diubah
        $table_name = 'quizes';

        // Nama kolom yang akan dihapus
        $column_name = 'result';

        // Menghapus kolom dari tabel
        $this->dbforge->drop_column($table_name, $column_name);
    }
}
