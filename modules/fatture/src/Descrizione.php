<?php

namespace Modules\Fatture;

use Common\Description;

class Descrizione extends Description
{
    protected $table = 'co_righe_documenti';

    /**
     * Crea una nuova riga collegata ad una fattura.
     *
     * @param Fattura $fattura
     *
     * @return self
     */
    public static function make(Fattura $fattura)
    {
        $model = parent::make();

        $model->fattura()->associate($fattura);

        return $model;
    }

    public function fattura()
    {
        return $this->belongsTo(Fattura::class, 'iddocumento');
    }
}
