<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Buku extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'judul'       => [
				'type'       => 'VARCHAR',
				'constraint' => '255',
			],
			'slug' => [
				'type' => 'VARCHAR',
				'constraint' => '255',
			],
			'penulis'       => [
				'type'       => 'VARCHAR',
				'constraint' => '255',
			],
			'penerbit'       => [
				'type'       => 'VARCHAR',
				'constraint' => '255',
			],
			'sampul'       => [
				'type'       => 'VARCHAR',
				'constraint' => '255',
			],
			'created_at' => [
				'type' => 'DATETIME',
				'null' => TRUE
			],
			'updated_at' => [
				'type' => 'DATETIME',
				'null' => true
			]
		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('buku');
	}
	public function down()
	{
		$this->forge->dropTable('buku');
	}
}
