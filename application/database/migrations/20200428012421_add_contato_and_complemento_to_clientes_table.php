<?php

class Migration_add_cep_to_usuarios_table extends CI_Migration
{
    public function up()
    {
        $this->dbforge->add_column('clientes', [
            'contato' => [
                'type' => 'VARCHAR',
                'constraint' => 45,
                'null' => true,
                'default' => null,
            ],
            'complemento' => [
                'type' => 'VARCHAR',
                'constraint' => 45,
                'null' => true,
                'default' => null,
            ],
        ]);
    }

    public function down()
    {
        $this->dbforge->drop_column('clientes', 'contato');
        $this->dbforge->drop_column('clientes', 'complemento');
    }
}
