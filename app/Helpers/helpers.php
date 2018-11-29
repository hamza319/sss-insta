<?php

use Carbon\Carbon;

/**
 * Created by PhpStorm.
 * User: Hamza Zafer
 * Date: 28-Nov-18
 * Time: 5:41 PM
 */

function getSignature(){
    $time = Carbon::now()->timestamp;

    $prams = [
        "source" => "uw",
        "timestamp" => $time,
        "upload_preset" => "zu0bugfs"
    ];

    $sha = Cloudinary::api_sign_request($prams, env("CLOUDINARY_API_SECRET"));
    return ["secret" => $sha, "time" => $time];
}