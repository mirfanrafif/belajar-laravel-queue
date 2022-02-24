<?php

namespace App\Http\Controllers;

use App\Jobs\PembelajaranProcess;
use App\Models\Pembelajaran;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PembelajaranController extends Controller
{
    public function mulaiBelajar(Request $request)
    {
        $nama = $request->nama;

        $pembelajaran = Pembelajaran::create([
            "nama" => $nama,
            "event_name" => "mulai_belajar",
            "execute_time" => Carbon::now()
        ]);

        PembelajaranProcess::dispatch($pembelajaran)->delay(now()->addMinutes(1));

        return $pembelajaran;
    }
}
