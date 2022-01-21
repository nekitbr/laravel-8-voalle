<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('role')->nullable();

            $table->rememberToken();
            $table->softDeletes();
            $table->timestamps();
        });

        \App\Models\User::create(['name' => 'admin', 'email' => 'admin@admin.com', 'password' => 'admin', 'role' => 'admin']);
        for ($i=0; $i < 100; $i++) { 
            \App\Models\User::create([
                'name' => 'user_' . $i,
                'email' => 'uMail_' . $i . '@mail.com',
                'email_verified_at' => null,
                'password' => 'pass_' . $i,
                'role' => ['admin', 'translator', 'support'][array_rand([0, 1, 2])],
            ]);
        }
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
}
