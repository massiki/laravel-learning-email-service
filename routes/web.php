<?php

use App\Mail\TesEmail;
use App\Mail\Testing2;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/form-kirim', function () {
    return view('testing');
});

Route::post('/kirim', function () {
    // testing1
    // Mail::send('email', [
    //     'judul' => 'Pemberitahuan Penting',
    //     'nama' => 'John Doe',
    //     'pesan' => 'Ini adalah pesan penting untuk Anda.',
    // ], function ($message) {
    //     $message->to('penerima@example.com')
    //             ->subject('Subjek Email');
    // });

    // testing1.5
    // $data = [
    //     'judul' => 'Pemberitahuan Penting',
    //     'nama' => 'John Doe',
    //     'pesan' => 'Ini adalah pesan penting untuk Anda.',
    // ];

    // Mail::to('penerima@example.com')->send(new TesEmail($data));

    //testing2
    Mail::to('fikri.amrull0h15@gmail.com')->send(new Testing2());

    return redirect()->back()->with('success', 'Email telah dikirim!');
});

Route::get('/berhasil', function () {
    return 'anda berhasil';
})->name('test-route-email');