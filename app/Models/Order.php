<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Order extends Model
{
    use HasFactory;
    public function user() {
        return $this->belongsTo(User::class);
    }

    public function scopeGroupByMonth(Builder $query) {

        return $query->selectRaw('YEAR(created_at) as year, MONTH(created_at) as month, COUNT(*) as count')
            ->groupBy('year', 'month')
            ->orderBy('year')
            ->orderBy('month')
            ->pluck('count', 'month')
            ->values()
            ->toArray();
    }

    public function scopeGetYearOrders(Builder $query, $year) {

        return $query->whereYear('created_at', $year);
    }



}
