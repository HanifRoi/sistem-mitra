<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistem Catatanku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            line-height: 1.6;
            background-color: #f9f9f9
        }

        .navbar {
            background-color: #1f2937;
            color: #fff;
            padding: 12px 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar .brand {
            font-size: 18px;
            font-weight: bold;
            color: #fff
            text-decoration: none;
        }

        .navbar .nav-links {
            list-style: none;
            display: flex;
            margin: 0;
            padding: 0;
            gap: 15px;
        }

        .navbar .nav-links a {
            color: #d1d5db;
            text-decoration: none;
            padding: 6px 12px;
            border-radius: 4px;
            transition: background-color 0.3s;
        }

        .navbar .nav-links a:hover {
            background-color: #374151;
            color: #fff
        }

        .container {
            max-width: 1000px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 6px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        }

        table {width: 100%; border-collapse: collapse; margin-top: 10px;}
        table th, table td {padding: 12px; text-align: left; border-bottom: 1px solid #ddd;}
        table th {background-color: #f2f2f2;}

        .pagination {margin-top: 20px; display: flex; gap: 5px; list-style: none; padding: 0;}
        .pagination li a, .pagination li span {padding: 6px 12px; border: 1px solid #d1d5db; border-radius: 4px; text-decoration: none; color: #374151;}
        .pagination li.active span {background-color: #2563eb; color: #fff; border-color: #2563eb;}
    </style>
<body>

    <nav class="navbar">
        <a href="/">Sistem Catatanku</a>
        <ul class="nav-links">
            <li><a href="/mitra">Dashboard</a></li>
        </ul>
    </nav>

    <div class="container">
        @yield('content')
    </div>
    
</body>
</html>