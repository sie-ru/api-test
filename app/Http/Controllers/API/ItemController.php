<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Item;

class ItemController extends Controller
{
    private Item $itemModel;

    public function __construct(Item $item)
    {
        $this->itemModel = $item;
    }

    public function index()
    {
        return $this->itemModel->getItems();
    }

}
