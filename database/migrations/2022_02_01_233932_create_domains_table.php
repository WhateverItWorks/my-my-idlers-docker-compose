<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDomainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('domains', function (Blueprint $table) {
<<<<<<< HEAD
            $table->char('id', 8)->unique()->default(null);
=======
            $table->char('id', 8)->primary()->default(null);
>>>>>>> 972edfc66e6862c09c39b21902d4856409aa6157
            $table->string('domain');
            $table->tinyInteger('active')->default(1);
            $table->string('extension');
            $table->string('ns1')->nullable();
            $table->string('ns2')->nullable();
            $table->string('ns3')->nullable();
            $table->integer('provider_id')->default(9999);
            $table->date('owned_since')->nullable();
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
        Schema::dropIfExists('domains');
    }
}
