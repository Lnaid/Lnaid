<?php

namespace App\Http\Traits;
use App\Models\User;
use App\Models\Student;
use App\Models\StudentVerification;
use App\Models\Request;

trait HasValidationScore {

    function getVerificationScore($user_id) {

      $v = StudentVerification::where('user_id', $user_id)->first();

      if($v != null){

        if($v->bvn_verify && $v->nin_verify && $v->school_id_verify && $v->admission_letter_verify && $v->transcript_letter_verify){

          return 100;

        } elseif($v->bvn_verify && $v->nin_verify){

          return 20;

        } elseif($v->bvn_verify && $v->nin_verify && $v->school_id_verify){

          return 30;

        } elseif($v->bvn_verify && $v->nin_verify && $v->school_id_verify && $v->admission_letter_verify){

          return 80;

        } elseif($v->bvn_verify || $v->nin_verify || $v->school_id_verify || $v->admission_letter_verify || $v->transcript_letter_verify){
          return 10;
        }

      } else {
        return 0;
      }
      
    }


    function getAmountRequest($user_id){

      $s = Request::where('student_id', Student::where('user_id', $user_id)->first()->id)->get();

      if(count($s) > 0){
        return Request::where('student_id', Student::where('user_id', $user_id)->first()->id)->sum('amount');
      } else {
        return 0;
      }

    }

    function getAmountReceived($user_id){

      $s = Request::where('student_id', Student::where('user_id', $user_id)->first()->id)->get();

      if(count($s) > 0){
        return Request::where('status', 1)->where('student_id', Student::where('user_id', $user_id)->first()->id)->sum('amount');
      } else {
        return 0;
      }

    }

    function getFundRequestCompleted($user_id){

      $s = Request::where('student_id', Student::where('user_id', $user_id)->first()->id)->get();

      if(count($s) > 0){
        return Request::where('status', 1)->where('student_id', Student::where('user_id', $user_id)->first()->id)->get()->count();
      } else {
        return 0;
      }

    }

    function getFundRequest($user_id){

      $s = Request::where('student_id', Student::where('user_id', $user_id)->first()->id)->get();

      if(count($s) > 0){
        return Request::where('student_id', Student::where('user_id', $user_id)->first()->id)->get()->count();
      } else {
        return 0;
      }

    }
}