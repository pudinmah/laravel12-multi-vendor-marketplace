<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\AuthorSale;
use App\Models\Item;
use App\Models\ItemReview;
use App\Models\Purchase;
use App\Models\PurchaseItem;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('frontend.dashboard.index');
    }
}
