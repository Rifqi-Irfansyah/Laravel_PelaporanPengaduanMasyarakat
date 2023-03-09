<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Create Schema Database 
        Schema::create('comment', function (Blueprint $table) {
            $table->id('id_comment');
            $table->string('comment', 1000);

            // table relation id_pengaduan
            $table->unsignedBigInteger('id_pengaduan');
            $table->foreign('id_pengaduan')
              ->references('id_pengaduan')
              ->on('report');
            // table relation id_user (admin, office)
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')
              ->references('id')
              ->on('users');

            $table->timestamps();

        });

        // Create Stored Procedures
        DB::statement('DROP PROCEDURE IF EXISTS `insert_comment`');
        DB::statement('
        CREATE PROCEDURE `insert_comment`(
          IN `comment` VARCHAR(1000),
          IN `id_pengaduan` BIGINT,
          IN `id_user` BIGINT)
          BEGIN
              INSERT INTO `comment` (`comment`, `id_pengaduan`, `id_user`, `created_at`, `updated_at`)
              VALUES (comment, id_pengaduan, id_user, NOW(), NOW());
          END;
        ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comment');
    }
};