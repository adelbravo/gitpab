<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContributorGroupContributorTable extends Migration
{
    public function up()
    {
        Schema::create('contributor_group_contributor', function (Blueprint $table) {
            $table->unsignedBigInteger('contributor_group_id');
            $table->unsignedBigInteger('contributor_id');

            $table->foreign('contributor_group_id')
                ->references('id')->on('contributor_group')
                ->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('contributor_id')
                ->references('id')->on('contributor')
                ->onUpdate('CASCADE')->onDelete('CASCADE');

            $table->primary(['contributor_group_id', 'contributor_id'], 'group_contributor_pk');
        });
    }

    public function down()
    {
        Schema::dropIfExists('contributor_group_contributor');
    }
}
