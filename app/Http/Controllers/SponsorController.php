<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Traits\FundRequestTrait;
use App\Models\Request as RequestDb;

class SponsorController extends Controller
{

    use FundRequestTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recentRequests = FundRequestTrait::getRecentRequests($total = 20, $perpage = 10);
        $topRequests =FundRequestTrait::getTopRequests($total = null, $perpage = 2);
        $data['title'] = 'Dashboard';
        return view('dashboard.sponsor.index', $data);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function allRequest()
    {
        $allRequests = FundRequestTrait::getAllRequests($total = null, $perpage = 2);
        $data['title'] = 'Dashboard';
        dd($allRequests);
        // return view('dashboard.sponsor.request-index')->with(['data' => $data, 'request' => $allRequests]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function singleRequest($id)
    {
        $request = RequestDb::find($id);
        $title = 'Dashboard';
        if($request->isFundRequest()){
            return view('dashboard.sponsor.request-single', ['title' => $title, 'request' => $request]);
        }else{
            //  TODO - create another single page for non fund request, most preferable a chat screen.
            return redirect()->back();
        }
        

        // dd($request);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
