<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="UTF-8">
  <title>{{ $category->name }}</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Cairo Font -->
  <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700&display=swap" rel="stylesheet">

  <!-- Bootstrap RTL -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css" rel="stylesheet">

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
    .footer {
      background-color: #111;
      padding: 30px;
      text-align: center;
      color: #aaa;
      margin-top: 50px;
    }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark">
@include('home.header')
</nav>

<!-- Category Title -->
<div class="container mt-4">
  <h2 class="text-center mb-4">تصنيف: {{ $category->name }}</h2>

  <div class="row">
    @forelse($posts as $post)
      <div class="col-md-4">
        <div class="card">
          <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top" alt="{{ $post->title }}">
          <div class="card-body">
            <h5 class="card-title">{{ $post->title }}</h5>
            <a href="#" class="btn btn-sm btn-danger">مشاهدة</a>
          </div>
        </div>
      </div>
    @empty
      <p class="text-center">لا توجد عناصر في هذا التصنيف حالياً.</p>
    @endforelse
  </div>

  <!-- Pagination -->
  <div class="mt-4 d-flex justify-content-center">
    {{ $posts->links() }}
  </div>
</div>

<!-- Footer -->
<footer class="footer">
  &copy; {{ date('Y') }} جميع الحقوق محفوظة
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
