<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('name',8)->comment('役職名');
            $table->string('memo')->comment('備考');
            $table->timestamps();
        });
        DB::table('roles')->insert(['id'=>1,'name'=>'sv','memo'=>'スーパーバイザー']);//追加してみたけどええんか？
        DB::table('roles')->insert(['id'=>2,'name'=>'clerk','memo'=>'店員']);//追加してみたけどええんか？問題は解決せず
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles');
    }
}
