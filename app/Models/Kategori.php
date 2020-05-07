<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Kategori
 * @package App\Models
 */
class Kategori extends Model
{
    use SoftDeletes;

    /**
     *
     */
    const CREATED_AT = 'olusturma_tarihi';
    /**
     *
     */
    const UPDATED_AT = 'guncelleme_tarihi';
    /**
     *
     */
    const DELETED_AT = 'silinme_tarihi';
    /**
     * @var string
     */
    protected $table = "kategori";
    /**
     * @var array
     */
    protected $guarded = [];

    /**
     * @return BelongsToMany
     */
    public function tumUrunler()
    {
        return $this->hasManyThrough(KategoriUrun::class, Kategori::class, 'parent_id', 'kategori_id', 'id');
    }

    function urunler()
    {
        return $this->hasMany(KategoriUrun::class, 'kategori_id');
    }

    public function urunKategori()
    {
        return $this->belongsToMany('App\Models\Urun');
    }

    /**
     * @return HasMany
     */
    public function alt()
    {
        return $this->hasMany(self::class, 'parent_id', 'id');
    }

    public function ust_kategori()
    {
        return $this->belongsTo(self::class, 'parent_id')
            ->withDefault(['kategori_adi' => 'Ana Kategori']);
    }
}
