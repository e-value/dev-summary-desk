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
        Schema::create('revision_laws', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('law_id')->nullable();
            $table->date('issue_date')->nullable();
            $table->date('enforcement_date')->nullable();
            $table->string('status')->nullable();
            $table->text('point')->nullable();
            $table->text('content')->nullable();
            $table->timestamps();

            $table->foreign('law_id')
                    ->references('id')
                    ->on('laws')
                    ->cascadeOnUpdate()
                    ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('revision_laws');
    }
};
