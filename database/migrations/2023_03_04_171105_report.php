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
        Schema::create('report', function (Blueprint $table) {
            $table->id('id_pengaduan');
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')
              ->references('id')
              ->on('users');

            $table->string('title');
            $table->string('message');
            $table->string('destination_agency');
            $table->string('images');
            $table->enum('status', ['sent', 'process','done']);
            $table->date('incident_date');
            $table->timestamps();

        });

        // Create Stored Procedures
        DB::statement('
            CREATE PROCEDURE `get_all_reports` ()
            BEGIN
                SELECT * FROM `report`;
            END
        ');

        DB::statement('
            CREATE PROCEDURE `get_reports_by_user` (IN `user_id` INT)
            BEGIN
                SELECT * FROM `report` WHERE `id_user` = `user_id`;
            END
        ');

        DB::statement('
            CREATE PROCEDURE `get_reports_by_status` (IN `status` VARCHAR(20))
            BEGIN
                SELECT * FROM `report` WHERE `status` = `status`;
            END
        ');

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('report');
    }
};
