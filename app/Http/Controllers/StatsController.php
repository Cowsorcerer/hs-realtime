<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use App\Division;
use App\Stat;

class StatsController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|string
     */
    public function index(Request $request) {

        $user = Auth::user();
        $response = file_get_contents('https://trackobot.com/profile/stats/classes.json?username=' . $user->username. '&token=' . $user->token);
        $results = json_decode($response, true);

        foreach($results as $result) {
            $division = $result['as_class'];
//            dump(($division['Shaman'],
//                'win_percentage', $division['Shaman']['wins'] / $division['Shaman']['total'] * 100,
//                'division_id', Division::get('shaman')->id
//            ));

            $division['Shaman']['win_percentage'] = Stat::winPercentage($division['Shaman']['wins'], $division['Shaman']['total']);
            $division['Shaman']['division_id'] = Division::get('shaman')->id;

            dump($division);
        }

        return view('stats.index');
    }

    public function store() {


    }
}
