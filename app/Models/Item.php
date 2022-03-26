<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

/**
 * @property string $title
 * @property boolean $active
 * @method static self|Builder query()
 * @method self|Builder active()
 */
class Item extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'active'];

    // TODO Eloquent Задание 1: указать что таблица - products

    protected $table = 'products';

    /**
     * @param $query
     * @return mixed
     */
    public function scopeActive($query): Builder
    {
        return $query->where('active', '=', true);
    }

}
