<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNoticesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notices', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger("us_id")->unsigned()->default(0)->index()->comment("users.id");
            $table->string("notice_title")->comment("title");
            $table->longText("notice_text")->nullable()->comment("text");
            $table->integer("notice_hits")->unsigned()->default(0)->comment("view hits");
            $table->integer("notice_file_cnt")->unsigned()->default(0)->comment("appending file count");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notices');
    }
}
