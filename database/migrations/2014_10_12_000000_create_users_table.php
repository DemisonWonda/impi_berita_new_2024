<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};

// DATABASE MIGRATION//


class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            <?php

            namespace App\Database\Migrations;
            
            use CodeIgniter\Database\Migration;
            
            class AddBlog extends Migration
            {
                public function up()
                {
                    //
                }
            
                public function down()
                {
                    //
                }
            }


            public function up()
            {
                $this->forge->addField([
                    'blog_id'          => [
                        'type'           => 'INT',
                        'constraint'     => 5,
                        'unsigned'       => true,
                        'auto_increment' => true,
                    ],
                    'blog_title'       => [
                        'type'       => 'VARCHAR',
                        'constraint' => '100',
                    ],
                    'blog_description' => [
                        'type' => 'TEXT',
                        'null' => true,
                    ],
                ]);
                $this->forge->addKey('blog_id', true);
                $this->forge->createTable('blog');
            }


            public function down()
    {
        $this->forge->dropTable('blog');
    }

    public function run()
    {
        $data = [
            'blog_title' => 'leravio',
            'blog_description'    => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry'
        ];

        // Simple Queries
        $this->db->query("INSERT INTO blog (blog_title, blog_description) VALUES(:blog_title:, :blog_description:)", $data);

        // Using Query Builder
        $this->db->table('blog')->insert($data);
    }

    public function run()
    {
        $this->call('BlogSeeder');
    }

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}