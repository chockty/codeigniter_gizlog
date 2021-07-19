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
                        'name' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '255',
                        ),
                        'email' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '255',
                        ),
                        'avator' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '255',
				'null' => TRUE,
                        ),
			'password' => array(
			        'type' => 'CHAR',
				'constraint' => '100',
			),
                        'remember_token' => array(
				'type' => 'VARCHAR',
				'constraint' => '255',
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
                $this->dbforge->add_key('blog_id', TRUE);
                $this->dbforge->create_table('daily_report');
        }

        public function down()
        {
                $this->dbforge->drop_table('daily_report');
        }
}
