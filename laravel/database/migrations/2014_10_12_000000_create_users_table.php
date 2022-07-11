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
        
        
        Schema::create('users', function (Blueprint $table) {
            $table->charset = 'utf8mb4';
            $table->id()->primary();
            $table->string('user',16)->unique();
            $table->string('email',32)->unique();
            $table->string('name',16);
            $table->string('surname',16);
            $table->date('birth_date');
            $table->timestamp('email_verified_at')->nullable();
            $table->integer('type')->default(0);
            $table->integer('verified')->default(0);
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();


           // $table->primary('id');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
