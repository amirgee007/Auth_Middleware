<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReleaseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Releases', function(Blueprint $table)
        {
                $table->increments('Rels_id')->unsigned();
                $table->string('Rels_name', 100);
                $table->string('Release', 100);
                $table->text('Rels_Type');
                $table->text('Rels_Cover');
                $table->text('Rels_Itunelink');

                $table->integer('created_by');
                $table->integer('updated_by');
                $table->integer('deleted_by');
                $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
                $table->timestamp('updated_at')->nullable()->default(DB::raw('NULL on update CURRENT_TIMESTAMP'));
                $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Releases');

    }
}
