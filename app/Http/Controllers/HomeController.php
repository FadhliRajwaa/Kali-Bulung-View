<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $facilities = [
            [
                'name' => 'Sewa Ban',
                'description' => 'Nikmati keseruan berenang dengan ban renang yang aman dan nyaman',
                'icon' => '🏊‍♂️',
                'image' => 'images/kolam_renang_portrait/portrait-1.jpg'
            ],
            [
                'name' => 'Warung Makan 1',
                'description' => 'Warung dengan menu makanan ringan dan minuman segar',
                'icon' => '🍽️',
                'image' => 'images/kolam_renang_portrait/portrait-2.jpg'
            ],
            [
                'name' => 'Warung Makan 2',
                'description' => 'Pilihan kuliner lokal dengan cita rasa yang lezat',
                'icon' => '🥘',
                'image' => 'images/kolam_renang_portrait/portrait-3.jpg'
            ],
            [
                'name' => 'Gazebo',
                'description' => 'Area istirahat yang teduh untuk bersantai bersama keluarga',
                'icon' => '🏕️',
                'image' => 'images/kolam_renang_portrait/portrait-4.jpg'
            ],
            [
                'name' => 'Toilet & Ruang Ganti',
                'description' => 'Fasilitas toilet dan ruang ganti yang bersih dan nyaman',
                'icon' => '🚿',
                'image' => 'images/kolam_renang_portrait/portrait-5.jpg'
            ]
        ];

        // Use only landscape images as shown in user's folder
        $gallery = [
            'images/kolam_renang_landscape/landscape-1.jpg',
            'images/kolam_renang_landscape/landscape-2.jpg',
            'images/kolam_renang_landscape/landscape-3.jpg',
            'images/kolam_renang_portrait/portrait-1.jpg',
            'images/kolam_renang_portrait/portrait-2.jpg',
            'images/kolam_renang_portrait/portrait-3.jpg',
            'images/kolam_renang_portrait/portrait-4.jpg',
            'images/kolam_renang_portrait/portrait-5.jpg',
        ];

        // Ensure all images exist and are accessible
        $filteredGallery = [];
        foreach ($gallery as $image) {
            $fullPath = public_path($image);
            if (file_exists($fullPath) && filesize($fullPath) > 1000) { // At least 1KB
                $filteredGallery[] = $image;
            }
        }

        return view('home', compact('facilities', 'filteredGallery'));
    }

    public function contact(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|max:1000',
        ]);

        // Here you can add logic to save the contact form or send email
        // For now, we'll just return success response
        
        return back()->with('success', 'Pesan Anda telah terkirim! Kami akan segera menghubungi Anda.');
    }
}
