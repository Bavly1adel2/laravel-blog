<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>تفاصيل المقال</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.rtl.min.css" rel="stylesheet"/>
  <style>
    body {
      background-color: #121212;
      color: #f5f5f5;
      font-family: 'Cairo', sans-serif;
    }

    .navbar {
      background-color: #d32f2f;
      box-shadow: 0 2px 10px rgba(0,0,0,0.5);
    }

    .breadcrumb {
      background: none;
      padding: 0;
      margin-bottom: 20px;
    }

    .post-card {
      background-color: #1e1e1e;
      border: none;
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 0 4px 20px rgba(255,255,255,0.05);
      transition: 0.3s;
    }

    .post-card:hover {
      transform: translateY(-5px);
    }

    .post-card img {
      width: 100%;
      max-height: 400px;
      object-fit: cover;
    }

    .post-content {
      padding: 20px;
    }

    .post-content h1 {
      font-size: 2rem;
      color: #ffc107;
    }

    .post-meta {
      color: #bbb;
      font-size: 0.9rem;
      margin-bottom: 10px;
    }

    .tags span {
      display: inline-block;
      background-color: #333;
      color: #ddd;
      padding: 5px 12px;
      border-radius: 20px;
      margin: 0 5px 10px 0;
      font-size: 0.8rem;
    }

    .footer {
      background-color: #111;
      padding: 30px;
      text-align: center;
      color: #aaa;
      margin-top: 80px;
    }
  </style>
</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
    @include('home.header')
  </nav>

  <div class="container py-5">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#" class="text-decoration-none text-light">الرئيسية</a></li>
        <li class="breadcrumb-item active" aria-current="page">تفاصيل المقال</li>
      </ol>
    </nav>

    <div class="post-card">
      <img src="{{ asset('storage/' . $post->image) }}" alt="صورة المقال">
      <div class="post-content">
        <h1>{{ $post->title }}</h1>
        <div class="post-meta">{{ $post->created_at->diffForHumans() }} </div>

        <p>
         {{ $post->body }}
        </p>

        <a href="{{ $post->url }}" class="text-decoration-underline" target="_blank">
    <p   class="text-primary">{{ $post->url }}</p>
</a>


        <div class="tags mt-4">
          <strong>الوسوم:</strong>
          <span>{{ $post->category->name ?? 'Uncategorized' }}</span>
          
        </div>
      </div>
    </div>
  </div>

  <footer class="footer">
  @include('home.footer')
  </footer>

</body>
</html>
