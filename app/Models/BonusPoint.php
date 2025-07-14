<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BonusPoint extends Model
{
    /** @use HasFactory<\Database\Factories\BonusPointFactory> */
    use HasFactory;
    public const TYPE_LIMIT = 1; // 有限
    public const TYPE_PERMANENT = 2; // 永久
    public const STATUS_ACTIVE = 1; // 啟用
    public const STATUS_INACTIVE = 2; // 停用
    protected $guarded = [];
}
