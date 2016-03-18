<?php

class Migration_Add_table2 extends CI_Migration {
    

    function up() {
        $this->dbforge->add_field(
                array(
                    'id_user' => array(
                        'type' => 'INT',
                        'auto_increment' => TRUE
                    ),
                    'user_name' => array(
                        'type' => 'VARCHAR',
                        'constraint' => '100',
                        'null' => FALSE
                    )
                )
        );
        $this->dbforge->add_key('id_user', TRUE);
        
        $this->dbforge->create_table('users');
    }

    function down() {
        $this->dbforge->drop_table('users');
    }

}


