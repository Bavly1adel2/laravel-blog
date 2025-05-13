
  <style>
/* Enable hover effect for dropdown */
.nav-item.dropdown:hover .dropdown-menu {
  display: block;
  margin-top: 0;
}

.dropdown-menu {
  transition: all 0.3s ease;
}


</style>
<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
      <a class="navbar-brand fw-bold" href="{{ route('home')}}">مدونتي</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link active" href="{{ route('home')}}">الرئيسية</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ route('about')}}">عن الشركة</a></li>
                <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="" data-bs-toggle="dropdown">الأقسام</a>
        <ul class="dropdown-menu dropdown-menu-dark">
        <a class="dropdown-item" href="{{ route('category.show', 'movies') }}">أفلام</a>
          <li><a class="dropdown-item" href="{{ route('category.show', 'series') }}">مسلسلات</a></li>
          <li><a class="dropdown-item" href="{{ route('category.show', 'programs') }}">برامج</a></li>
          <li><a class="dropdown-item" href="{{ route('category.show', 'books') }}">كتب</a></li>
          <li><a class="dropdown-item" href="{{ route('category.show', 'games') }}">ألعاب</a></li>
        </ul>
      </li>

          <li class="nav-item"><a class="nav-link" href="#">اتصل بنا</a></li>
          @if (Route::has('login'))
          @auth
          <x-app-layout>

          </x-app-layout>
          @else
          <li class="nav-item btn btn-success me-2"><a class="nav-link" href="{{ route('login')}}">تسجيل الدخول</a></li>
          <li class="nav-item btn btn-primary"><a class="nav-link" href="{{ route('register')}}">انشاء حساب</a></li>
          @endauth
          @endif
        </ul>

      </div>
    </div>
  </nav>