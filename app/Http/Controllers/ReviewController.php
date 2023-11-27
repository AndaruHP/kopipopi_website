<?php

// app/Http/Controllers/ReviewController.php

namespace App\Http\Controllers;

use App\Models\Rating;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function create()
    {
        $user = auth()->user();
        return view('review.index', [
            'user' => $user
        ]);
    }

    public function store(Request $request)
    {
        // Validasi data yang diterima dari formulir
        $validatedData = $request->validate([
            'rating' => 'required|numeric|min:0|max:5',
            'description' => 'required|string',
            'user_id' => 'required|exists:users,id'
        ]);

        // Cek apakah pengguna sudah memberikan review sebelumnya
        $existingReview = Rating::where('user_id', $validatedData['user_id'])->first();

        if ($existingReview) {
            // Jika sudah memberikan review, Anda dapat menangani ini sesuai kebutuhan,
            // misalnya, memberikan pesan kesalahan atau melakukan tindakan tertentu.
            return redirect('/')->with('error', 'Anda sudah memberikan review sebelumnya');
        }

        // Simpan review ke database
        Rating::create([
            'rating' => $validatedData['rating'],
            'description' => $validatedData['description'],
            'user_id' => $validatedData['user_id'],
            // Jangan lupa menambahkan kolom lain yang mungkin Anda perlukan
        ]);

        return redirect('/')->with('success', 'Review berhasil ditambahkan!');
    }


    public function index()
    {
        $reviews = Rating::all();
        return view('dashboard.review', ['reviews' => $reviews]);
    }

    public function destroy(Rating $rating)
    {
        Rating::destroy($rating->id);

        return redirect('/dashboard/review')->with('success', 'Review deleted successfully');
    }
}
