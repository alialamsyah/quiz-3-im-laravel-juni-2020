<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePasswordResetsTable extends Migration
class CreateFollowersTable extends Migration
{
    /**
     * Run the migrations.
@@ -13,10 +13,10 @@ class CreatePasswordResetsTable extends Migration
     */
    public function up()
    {
        Schema::create('password_resets', function (Blueprint $table) {
            $table->string('email')->index();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        Schema::create('followers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('idfollowing');
            $table->bigInteger('users_idusers');
        });
    }

@@ -27,6 +27,6 @@ public function up()
     */
    public function down()
    {
        Schema::dropIfExists('password_resets');
        Schema::dropIfExists('followers');
    }
}
