<?php

namespace App\Models;

use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Brand extends Model
{
    use HasFactory;

    const BRANDS_ON_HOME_PAGE = 6;

    protected $fillable = [
      'slug',
      'title',
      'thumbnail',
      'on_home_page',
      'sorting'
    ];

    public function scopeHomePage(Builder $query)
    {
        $query->where('on_home_page', true)
            ->orderBy('sorting')
            ->limit(self::BRANDS_ON_HOME_PAGE);
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function(Brand $brand) {
            $brand->slug = $brand->slug ?? str($brand->title)->slug();
        });
    }

    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }
}
