<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use auth;

class sanctulController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function login(Reauest $request){
        return 'hzllo';
        // if(!Auth::attempt(['email' => $request->email, 'password' => $request->password])){
        //     return response()->json([
        //         "success" => false,
        //         "satus" =>200
        //     ]);

        //     $user = auth()->user();
        //     $token = $user->createToken(token);

        //     return $token->plainTextToken;
        // }
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
