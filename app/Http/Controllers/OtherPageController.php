<?php

namespace App\Http\Controllers;

use App\Models\Leadership;
use App\Models\Policy;
use Illuminate\Http\Request;

class OtherPageController extends Controller
{
    public function our_stoty()
    {
        return view('home.about-us.our-story');
    }
    public function vision_mission()
    {
        return view('home.about-us.vision-and-mission');
    }
    public function governance_structure()
    {
        return view('home.about-us.governance-structure');
    }
    public function leadership()
    {
        $leaderships = Leadership::orderByDesc('id')->get();
        return view('home.about-us.leadership', compact('leaderships'));
    }
    public function offices()
    {
        return view('home.about-us.offices');
    }
    public function policy_guidelines()
    {
        $policies = Policy::all();
        return view('home.about-us.policies-and-guidelines', compact('policies'));
    }
    public function partnerships()
    {
        return view('home.partnerships');
    }
}
