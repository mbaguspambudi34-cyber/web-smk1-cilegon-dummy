<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['required', 'string', 'max:30'],
            'message' => ['required', 'string'],
        ]);

        try {
            Contact::create($validated);
        } catch (QueryException) {
            return back()
                ->withInput()
                ->with('error', 'Pesan belum dapat disimpan. Periksa konfigurasi database MySQL terlebih dahulu.');
        }

        return redirect()
            ->route('contact')
            ->with('success', 'Pesan Anda berhasil dikirim. Pihak sekolah akan segera menghubungi Anda.');
    }
}
