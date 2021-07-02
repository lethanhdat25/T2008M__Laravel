<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apartments', function (Blueprint $table) { $table->id();
            $table->timestamps();
            $table->string("name");
            $table->string("address");
            $table->decimal("price",14,2)->default(0);
            $table->string("general information");
            $table->string("detail");
            $table->string("image")->nullable();
            $table->string("status");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apertments');
    }
}
