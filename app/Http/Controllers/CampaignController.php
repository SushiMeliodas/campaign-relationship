<?php

namespace App\Http\Controllers;

use App\Campaign;
use Illuminate\Http\Request;

class CampaignController extends Controller
{
    public function showIndexPage(Request $request, Campaign $campaign)
    {
        $campaign = Campaign::find(1);
        dd($campaign->packages);


        return view('index', compact('campaign'));
    }
}
