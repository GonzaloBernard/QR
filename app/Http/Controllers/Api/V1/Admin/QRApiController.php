<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QRApiController extends Controller
{
    public function getQR(Request $request){
        return QrCode::style('square')->gradient(0, 0, 100, 0, 0, 50, "diagonal")->generate($request->data);
    }
}
