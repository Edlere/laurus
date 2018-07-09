<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('language', 3);
            $table->string('color', 10);
            $table->string('ph_name', 500);
            $table->string('ph_address', 500);
            $table->string('ph_telephone', 20);
            $table->string('ph_email', 30);
            $table->string('ph_fax', 20);
            $table->string('ph_print', 1);
            $table->string('currency', 8);
            $table->string('barcode_type', 10);
            $table->timestamps();
        });

        DB::table('settings')->insert([
            'language'     => 'es',
            'color'        => 'white',
            'ph_name'      => 'CENTRO MEDICO ESPECIALIZADO CLINICA DE LA MUJER Y EL NIÑO E.I.R.L.',
            'ph_address'   => 'Urb. nicolas de Garatea I Etapa Mz. H Lte. 33 Nuevo Chimbote - Santa - Ancash',
            'ph_telephone' => '603639',
            'ph_email'     => 'ejemplo@ejemplo.com',
            'ph_fax'       => 'xxxxxxxxx',
            'ph_print'     => '1',
            'currency'     => 'soles',
            'barcode_type' => 'Infectious diseases‎',

        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('setting');
    }
}
