<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->boolean('isAdmin')->comment('สิทธิ์ admin')->default(0);
            $table->longText('address')->comment('ที่อยู่');
            $table->string('phone')->comment('เบอร์โทร');
            $table->string('image')->comment('รูปภาพ')->default("/storage/no-pic.jpg");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['isAdmin', 'address', 'phone', 'image']);
        });
    }
}
