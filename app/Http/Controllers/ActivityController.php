<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ActivityLog;
use Carbon\Carbon;

class ActivityController extends Controller
{
    // Menampilkan halaman achievement
    public function index() {
        $activities = ActivityLog::orderBy('scanned_at', 'desc')->get();
        return view('achievement', compact('activities'));
    }

    // Simulasi Proses Scan QR (Logika yang dipanggil saat QR berhasil di-scan)
    public function processScan(Request $request) {
        // Logika: Data ini biasanya datang dari hasil decode QR Code
        ActivityLog::create([
            'event_name' => $request->event_name,
            'category' => $request->category,
            'achievement' => $request->achievement,
            'scanned_at' => Carbon::now(),
        ]);

        return redirect()->back()->with('success', 'Kegiatan Berhasil Dicatat!');
    }
}
