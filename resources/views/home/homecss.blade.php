<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        body {
      background-color: #1a1a1a;
      color: wheat;
      font-family: 'Cairo', sans-serif;
    }
    .navbar {
      background-color: #d32f2f;
      position: sticky;
      top: 0;
      z-index: 999;
    }
    .card {
      background-color: #2b2b2b;
      border: none;
      margin-bottom: 20px;
      transition: 0.3s;
      color: white;
    }
    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 4px 10px rgba(255, 255, 255, 0.1);
    }
    .card img {
      height: 200px;
      object-fit: cover;
    }
    .btn-download {
      background-color: #e53935;
      color: white;
    }
    .footer {
      background-color: #111;
      padding: 30px;
      text-align: center;
      color: #aaa;
      margin-top: 50px;
    }
    .sidebar {
      background-color: #2c2c2c;
      padding: 20px;
      margin-top: 20px;
      border-radius: 8px;
    }
    .sidebar h5 {
      border-bottom: 1px solid #444;
      padding-bottom: 10px;
      margin-bottom: 20px;
    }
    .search-bar input {
      border: none;
      border-radius: 25px;
      padding: 10px 20px;
      width: 100%;
      background-color: #333;
      color: white;
    }
    </style>
</body>
</html>