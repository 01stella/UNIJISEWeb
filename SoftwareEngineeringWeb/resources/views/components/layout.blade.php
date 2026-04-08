<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('style/images/favicon.png') }}">
    <title>Software Engineering</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/intersect@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <style>
      /* Base styles and hiding Alpine until loaded */
      [x-cloak] { display: none !important; }
      html { scroll-behavior: smooth; font-family: 'Poppins', sans-serif; }
      body { font-family: 'Poppins', sans-serif; -webkit-font-smoothing: antialiased; }
      section[id], div[id] { scroll-margin-top: 80px; }
    </style>
</head>
<body class="bg-black text-white">
    <div class="content-wrapper overflow-clip">
        {{ $slot }}
    </div>
</body>
</html>