<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*Si no se le especifica la longitud en cadenas, toma por defecto lo que se acordo en la carpeta
         Providers/AppServiceProvider.php, método bot, linea :
         Schema::defaultStringLength(150);
        */
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');//toma el tipo de dato int de mysql
            $table->string('name');//string es como el varchar
            $table->mediumText('short');
            $table->text('body');
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
        Schema::dropIfExists('products');
    }
}
