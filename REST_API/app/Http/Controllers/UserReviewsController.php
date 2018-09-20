<?php

namespace App\Http\Controllers;

use App\UserReviews;
use Illuminate\Http\Request;

class UserReviewsController extends Controller
{
    /**
     * Get list of users.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function getUser(Request $request)
    {
        try {
            $userReviews = UserReviews::all();
            return response()->json([
                'status' => http_response_code(),
                'message' => "Success",
                'data' => $userReviews
            ],200);
        } catch(\Exception $e){
            return response()->json([
				'status' => http_response_code(),
				'message' => 'Failed, User not Found',
			]);
        }
    }

    /**
     * Get list of users.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function getUserById(Request $request, $id)
    {
        try {
            $userReviews = UserReviews::find($id);
            return response()->json([
                'status' => http_response_code(),
                'message' => "Success",
                'data' => $userReviews
            ],200);
        } catch(\Exception $e){
            return response()->json([
				'status' => http_response_code(),
				'message' => 'Failed, User not Found',
			]);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $userReviews = new UserReviews();
            $userReviews->order_id = $request->order_id;
            $userReviews->product_id = $request->product_id;
            $userReviews->rating = $request->rating;
            $userReviews->review = $request->review;
            $userReviews->save();
            return response()->json([
                'status' => http_response_code(),
                'message' => "Success",
                'data' => $userReviews
            ],200);
        } catch(\Exception $e){
            return $e;
            return response()->json([
				'status' => http_response_code(),
				'message' => 'Failed to create user review',
			]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UserReviews  $userReviews
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $userReviews = UserReviews::findOrFail($id);
            $updateFields = $request->all();
            foreach ($updateFields as $key => $value) {
                $userReviews->$key = $value;
            }
            $userReviews->save();
            return response()->json([
                'status' => http_response_code(),
                'message' => "Success",
                'data' => $userReviews
            ],200);
        } catch(\Exception $e){
            return response()->json([
				'status' => http_response_code(),
				'message' => 'Failed to update user review ' . $id
			]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UserReviews  $userReviews
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $userReviews = UserReviews::findOrFail($id);
            $userReviews->delete();
            return response()->json([
                'status' => http_response_code(),
                'message' => "Success",
                'data' => $userReviews
            ],200);
        } catch(\Exception $e){
            return response()->json([
				'status' => http_response_code(),
				'message' => 'Failed to delete user review ' . $id
			]);
        }
    }
}
