<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_blog extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'id' => array(
                                'type' => 'INT',
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'user_id' => array(
                                'type' => 'INT',
                                'constraint' => '100',
                        ),
                        'title' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '255',
                        ),
												'content' => array(
                                'type' => 'TEXT',
                        ),
												'reporting_time' => array(
                                'type' => 'DATETIME',
                        ),
												'created_at' => array(
                                'type' => 'TIMESTAMP',
                                'null' => TRUE,
                        ),
												'updated_at' => array(
                                'type' => 'TIMESTAMP',
                                'null' => TRUE,
                        ),
												'updated_at' => array(
                                'type' => 'TIMESTAMP',
                                'null' => TRUE,
                        )
                ));
                $this->dbforge->add_key('id', TRUE);
                $this->dbforge->create_table('daily_report');
        }

        public function down()
        {
                $this->dbforge->drop_table('daily_report');
        }
}
