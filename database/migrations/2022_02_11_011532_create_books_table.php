<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->foreignId('member_id')->constrained('members','id');
            $table->foreignId('vehicle_id')->constrained('vehicles','id');
            $table->text('pickup_location');
            $table->date('pickup_date')->useCurrent();
            $table->text('dropoff_location');
            $table->date('dropoff_date')->useCurrent();
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
