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
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->string('person_name');
            $table->string('person_email');
            $table->string('person_phone');
            $table->unsignedBigInteger('company_id');
            $table->timestamps();

            $table->index('company_id', 'person_company_idx');
            $table->foreign('company_id', 'person_company_fk')->on('companies')->references('id');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('people');
    }
};
