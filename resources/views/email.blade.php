{{-- <!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email dari Aplikasi Kami</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            background-color: #f4f4f4;
            padding: 10px;
            text-align: center;
        }
        .content {
            padding: 20px 0;
        }
        .footer {
            background-color: #f4f4f4;
            padding: 10px;
            text-align: center;
            font-size: 12px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>{{ $judul }}</h1>
        </div>
        <div class="content">
            <p>Halo {{ $nama }},</p>
            <p>{{ $pesan }}</p>
        </div>
        <div class="footer">
            <p>&copy; {{ date('Y') }} Aplikasi Kami. Semua hak dilindungi.</p>
        </div>
    </div>
</body>
</html> --}}




<x-mail::message>
#Hi Kamu!

Visit your settings page by clicking on the following button

<x-mail::button url="{{route('test-route-email')}}">
Your Settings
</x-mail::button>

Thanks!

Team MyApp
</x-mail::message>