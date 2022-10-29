<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Campaign;
use Auth;

class CampaignController extends Controller
{
    //
    public function index() {
        $dataCampaigns = Campaign::where('organizer_id', Auth::id())->get()->toArray();
        return view('pages.index', compact('dataCampaigns'));
    }

    public function create() {
        return view('pages.campaigns.create');
    }
}
