<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>مدونتي - مدونة متقدمة</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;700&display=swap" rel="stylesheet">
  @include('home.homecss')
</head>
<body>

  <!-- Navbar -->
  @include('home.header')

  <!-- Search Bar -->
  <div class="container mt-4">
    <div class="search-bar mb-4">
      <input type="text" class="form-control" placeholder="ابحث هنا...">
    </div>

    <!-- Posts Row -->
    <div class="row">
      @foreach($posts as $post)
        <div class="col-md-6 col-lg-4 mb-4">
          <div class="card h-100">
            <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top" alt="...">
            <div class="card-body">
              <span class="badge bg-success">{{ $post->category->name ?? 'غير محدد' }}</span>
              <h5 class="card-title mt-2">{{ $post->title }}</h5>
              <p class="card-text mt-2  text-success">{{ Str::limit($post->body, 50) }}</p>
              <h6 class="mt-2 text-white">{{ $post->created_at->diffForHumans() }}</h6>
              <div class="d-flex justify-content-between align-items-center mt-2">
              <a href="{{ route('postsdetails', $post->id) }}" class="btn btn-download">تحميل</a>

                <span class="text-secondary">🎮 456 لاعب</span>
              </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>
    
    <!-- Pagination -->
    <nav class="mt-4 text-center">
      <ul class="pagination justify-content-center">
        {{ $posts->links('pagination::bootstrap-5') }}
      </ul>
    </nav>
    
  <!-- Slider (ضعه هنا ليبقى ظاهر دائمًا) -->
  <!-- @include('home.slider') -->

  </div>

  <!-- Footer -->
  @include('home.footer')

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
