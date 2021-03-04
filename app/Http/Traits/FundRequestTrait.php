<?php

namespace App\Http\Traits;
use App\Models\User;
use App\Models\Sponsor;
use App\Models\Student;
use App\Models\Request as RequestDb;
use Illuminate\Support\Facades\Auth;
use Silber\Bouncer\BouncerFacade as Bouncer;

trait FundRequestTrait {

    public static function getAllRequests($total = null, $perPage = null) {
      return RequestDb::all();
    }

    public static function getRandomRequests($total = null) {
          return RequestDb::inRandomOrder()->take($total)->get();
    }

    public static function getRecentRequests($total = null, $perPage = null) {
       return RequestDb::orderBy('created_at', 'DESC')->take($total)->paginate($perPage);
    }

    public static function getSingleRequest($id) {
       
    }

    public static function getTopRequests($total = null, $perPage = null) {
       
    }

     public static function featuredRequests($total = null, $perPage = null) {
        // return RequestDb::where('is_featured', true)->take($total)->paginate($perPage);
        return RequestDb::all();

    }

    public static function recommendedRequests($total = null, $perPage = null) {
        // TODO write logic to pull request from schools the spoonsor is following
        return RequestDb::all();
    }

    public static function favoriteSchoolRequests($total = null, $perPage = null) {
       
    }
}