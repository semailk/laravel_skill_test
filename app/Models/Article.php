<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Schema\Builder;

/**
 * @property string $name
 * @property boolean $active
 * @property boolean $main
 * @property string $description
 */
class Article extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'active', 'main', 'description'];

    /**
     * Возвращаем все categories артикла
     *
     * @return BelongsToMany
     */
    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class);
    }

}
