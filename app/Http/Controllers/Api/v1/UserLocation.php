<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Api\v1\BaseController as BaseController;
use App\Http\Controllers\Controller;
use App\Http\Resources\CompanyResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserLocation extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user=User::find(Auth::user()->id);

        if($user){
            $locations=$user->locations;
            return $this->sendResponse(\App\Http\Resources\UserLocation::collection($locations), 'User locations retrieved successfully.');

        }
    }


}
