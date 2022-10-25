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
        Schema::disableForeignKeyConstraints();

        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('nickname');
            $table->enum('gender', ['male','female']);
            $table->date('birth_date');
            $table->text('address');
            $table->foreignId('city_id')->constrained('cities', 'id');
            $table->foreignId('region_id')->constrained('regions', 'id');
            $table->foreignId('country_id')->constrained('countries', 'id');
            $table->string('phone_1');
            $table->string('phone_2')->nullable(true);
            $table->string('family_contact')->nullable(true);
            $table->string('family_contact_number')->nullable(true);
            $table->foreignId('job_title_id')->constrained('job_titles', 'id');
            $table->string('employee_number');
            $table->enum('identity_type',['ktp','sim'])->nullable(true);
            $table->string('identity_number')->nullable(true);
            $table->string('identity_photo')->nullable(true);
            $table->string('contract_number')->nullable(true);
            $table->date('hire_date')->nullable(true);
            $table->timestamps();
            $table->foreignId('created_by')->nullable(true)->references('id')->on('users')->onDelete('cascade');
            $table->foreignId('updated_by')->nullable(true)->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('employees');
    }
};
