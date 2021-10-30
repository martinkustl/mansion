<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaticFileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('static_file', function (Blueprint $table) {
            $table->id();
            $table->string('mime_type', 20);
            $table->string('extension', 10);
            $table->string('folder_name', 45);
            $table->string('name');
            $table->integer('height')->nullable();
            $table->integer('width')->nullable();
            $table->integer('size')->nullable();
            $table->foreignId('facility_id')->nullable()->constrained('facility');
            $table->foreignId('event_id')->nullable()->constrained('event');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('static_file');
    }
}
