<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::table('roles')->insert([
            ['name' => 'user'],
            ['name' => 'librarian'],
            ['name' => 'admin']
        ]);

        Schema::table('users', function (Blueprint $table) {
            $table->foreignId('role_id')->default(1)->constrained('roles');
        });

        if (!DB::table('users')->where('id', 1)->exists()) {
            DB::table('users')->insert([
                'id' => 1,
                'firstname' => 'default',
                'lastname' => 'admin',
                'email' => 'admin@biblioteka.pl',
                'email_verified_at' => now(),
                'password' => Hash::make('zaq1@WSX'),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
                'role_id' => 3
            ]);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
