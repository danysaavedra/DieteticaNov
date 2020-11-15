<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateColumnaPromo extends Migration
{
  /**
  * @return void
  */
  public function up()
  {
      Schema::table('products', function (Blueprint $table) {

            $table->unsignedInteger('promo')->default(0);

      });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
      Schema::table('products', function (Blueprint $table) {

          $table->dropColumn('promo');
          // $table->foreign('product_id')->references('id')->on('Products');

      });
  }
}

