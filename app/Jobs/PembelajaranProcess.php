<?php

namespace App\Jobs;

use App\Models\Pembelajaran;
use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class PembelajaranProcess implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $pembelajaran;

    /**
     * Create a new job instance.
     *
     * @return void
     */


    public function __construct(Pembelajaran $pembelajaran)
    {
        $this->pembelajaran = $pembelajaran;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $pembelajaranSelesai = Pembelajaran::create([
            "nama" => $this->pembelajaran->nama,
            "event_name" => "selesai_belajar",
            "execute_time" => Carbon::now()
        ]);
    }
}
