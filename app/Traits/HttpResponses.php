<?php

namespace App\Trait;

trait HttpResponses {
  
  public function success($data, $message = null, $code = 200) {
    return response()->json([
      "status" => 'Request was successfull',
      'message' => $message,
      'data' => $data
    ], $code);
  }

  public function error($data, $message = null, $code) {
    return response()->json([
      "status" => 'An Error occured in the Process',
      'message' => $message,
      'data' => $data
    ], $code);
  }



}

