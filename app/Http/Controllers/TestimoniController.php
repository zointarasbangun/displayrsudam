<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestimoniController extends Controller
{
    /**
     * Display a listing of testimonials.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $testimonials = DB::table('testimonials')
                ->orderBy('id', 'desc')
                ->get();

            foreach ($testimonials as $testimonial) {
                if ($testimonial->media_type === 'video' && str_contains($testimonial->video_url, 'watch?v=')) {
                    $videoId = \Illuminate\Support\Str::after($testimonial->video_url, 'v=');
                    $testimonial->video_url = 'https://www.youtube.com/embed/' . $videoId;
                }
            }

            try {
                return view('testimoni', compact('testimonials'));
            } catch (\Exception $e) {
                try {
                    return view('frontend.testimoni', compact('testimonials'));
                } catch (\Exception $e) {
                    try {
                        return view('dashboard.testimoni', compact('testimonials'));
                    } catch (\Exception $e) {
                        return "View tidak ditemukan. Error: " . $e->getMessage();
                    }
                }
            }
        } catch (\Exception $e) {
            return "Database error: " . $e->getMessage();
        }
    }
}