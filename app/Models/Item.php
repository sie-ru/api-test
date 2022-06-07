<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Item extends Model
{
    use HasFactory;

    protected $table = 'item';
    protected $hidden = '';

    public function getItems()
    {
        return $this->getItemsQuery()
                    ->limit(100)
                    ->get();
    }

    public function getItemsQuery()
    {
        return DB::table('item AS i')
                    ->select([
                        'i.item_id',
                        'i.name',
                        'b.name as brand_name'
                    ])
                    ->join('brand AS b', 'i.brand_id', '=', 'b.brand_id');
    }
}
