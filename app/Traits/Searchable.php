<?php

namespace App\Traits;

trait Searchable
{
    public function scopeSearch($query, $search)
    {
        $query->when($search && $this->searchable, fn($query) => tap($query, fn($query) =>
        collect($this->searchable)
            ->each(fn($field, $index) => $query
                ->when(!$index, fn($query) => $query->where($field, 'like', '%' . $search . '%'))
                ->when($index, fn($query) => $query->orWhere($field, 'like', '%' . $search . '%'))
            )
        ));
    }
}
