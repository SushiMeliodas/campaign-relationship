<?php

namespace App\Http\Controllers;

use App\Campaign;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CampaignController extends Controller
{
    public function showIndexPage(Request $request, Campaign $campaign)
    {
        // $campaign = Campaign::find(1);

        $campaign = DB::table('campaign_package_products as D')
            ->join('campaigns as A', 'D.campaign_id', '=', 'A.id')
            ->join('packages as B', 'D.package_id', '=', 'B.id')
            ->join('products as C', 'D.product_id', '=', 'C.id')
            ->select(
                'A.campaign_name',
                'B.package_name',
                'B.package_quantity',
                'B.package_unit_price',
                'C.product_name',
                'C.product_quantity',
                'C.product_unit_price'
            )
            ->get();

        // dd($campaign);
        return view('index', compact('campaign'));
    }
}
