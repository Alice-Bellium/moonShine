<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id Идентификатор записи
 * @property string $title Название
 * @property string $content Содержание
 * @property-read Carbon $created_at Дата создания
 * @property-read Carbon $updated_at Дата обновления
 */
class Artical extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
      'title',
      'content',
    ];
}
