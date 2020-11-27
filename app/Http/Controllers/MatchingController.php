<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\member;
class MatchingController extends Controller
{

    public function matchingWhenMatched(string $name, string $sex, int $age)
    {
        Member::create([
            "name" => $name,
        ]);

    }
}
