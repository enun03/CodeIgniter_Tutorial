<?php

class Migration_Add_table3 extends CI_Migration {
    

    function up() {
        $this->dbforge->add_field(
                array(
                    'id_product' => array(
                        'type' => 'INT',
                        'auto_increment' => TRUE
                    ),
                    'product_name' => array(
                        'type' => 'VARCHAR',
                        'constraint' => '100',
                        'null' => FALSE
                    )
                )
        );
        $this->dbforge->add_key('id_product', TRUE);
        
        $this->dbforge->create_table('products');
    }

    function down() {
        $this->dbforge->drop_table('products');
    }

}


