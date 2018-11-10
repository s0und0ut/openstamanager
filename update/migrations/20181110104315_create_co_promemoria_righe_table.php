<?php

use Util\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCoPromemoriaRigheTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        $this->schema->create('co_promemoria_righe', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('descrizione');
            $table->float('qta', 12, 4);
            $table->string('um', 25);
            $table->decimal('prezzo_vendita', 12, 4);
            $table->decimal('prezzo_acquisto', 12, 4);
            $table->integer('idiva');
            $table->string('desc_iva');
            $table->decimal('iva', 12, 4);
            $table->integer('id_promemoria')->index('id_riga_contratto');
            $table->decimal('sconto', 12, 4);
            $table->decimal('sconto_unitario', 12, 4);
            $table->enum('tipo_sconto', ['UNT', 'PRC'])->default('UNT');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        $this->schema->drop('co_promemoria_righe');
    }
}
