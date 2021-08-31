<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrationMuslimMatrimoniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registration_muslim_matrimonies', function (Blueprint $table) {
            $table->id();
            $table->string('lookingfor')->nullable();
            $table->string('preferencecountry')->nullable();
            $table->string('name')->nullable();
            $table->string('education')->nullable();
            $table->string('parents_info')->nullable();
            $table->string('siblings_info')->nullable();
            $table->string('home_district')->nullable();
            $table->string('regforwho')->nullable();
            $table->string('permission')->nullable();
            $table->string('bg_name')->nullable();
            $table->string('bg_lastname')->nullable();
            $table->string('street_address')->nullable();
            $table->string('addressline2')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('zip_code')->nullable();
            $table->char('phonenumber')->nullable();
            $table->string('dateofbirth')->nullable();
            $table->string('heights')->nullable();
            $table->string('citizenship')->nullable();
            $table->string('maritalstatus')->nullable();
            $table->string('interesthobbies')->nullable();
            $table->string('typepartner')->nullable();
            $table->string('email')->nullable();
            $table->string('image')->nullable();
            $table->boolean('membership')->nullable();
            $table->boolean('termscondition')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registration_muslim_matrimonies');
    }
}
