<?php namespace DanielBecerra\UrtSeguimiento\Traits;

trait FilterableByVisita
{
    public function scopeFilterByVisita($query, $model)
    {
        // Filtrar los items donde 'visita_id' es igual al 'id' de la visita que se está editando
        return $query->where('visita_id', $model->visita_id);
    }
}