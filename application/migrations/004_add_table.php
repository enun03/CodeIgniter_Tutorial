<?php

class Migration_Add_table extends CI_Migration {
    

    function up() {
        $this->dbforge->add_field(
                array(
                    'id_blog' => array(
                        'type' => 'INT',
                        'auto_increment' => TRUE
                    ),
                    'nombre_blog' => array(
                        'type' => 'VARCHAR',
                        'constraint' => '100',
                        'null' => FALSE
                    ),
                    'keywords_blog' => array(
                        'type' => 'TEXT',
                        'null' => TRUE
                    )
                )
        );
        $this->dbforge->add_key('id_blog', TRUE);
        
        $this->dbforge->create_table('blog');
    }

    function down() {
        $this->dbforge->drop_table('blog');
    }

}
