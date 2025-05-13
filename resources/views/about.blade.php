<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>عن الشركة</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Cairo Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700&display=swap" rel="stylesheet">
    
    <!-- Bootstrap 5 RTL -->
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
        .footer {
            background-color: #111;
            padding: 30px;
            text-align: center;
            color: #aaa;
            margin-top: 50px;
        }
        .about-section {
            padding: 60px 20px;
            background-color: #2b2b2b;
            border-radius: 10px;
            margin-top: 30px;
        }
        .about-section h2 {
            color: #ff6666;
            margin-bottom: 30px;
        }
        .about-section p {
            font-size: 1.1rem;
            line-height: 1.8;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
   @include('home.header')

    <!-- About Section -->
    <div class="container about-section">
        <h2>من نحن؟</h2>
        <p>
            نحن شركة متخصصة في تقديم أفضل الخدمات التقنية لعملائنا الكرام. نسعى دائمًا إلى الابتكار وتقديم محتوى عالي الجودة يليق بثقتكم بنا.
        </p>
        <p>
            فريقنا يتكون من مطورين ومصممين محترفين يعملون بشغف لتقديم أفضل تجربة للمستخدم في مجالات مختلفة مثل تطوير المواقع، البرمجة، التصميم، والألعاب.
        </p>
        <p>
            هدفنا هو بناء علاقات طويلة الأمد مع عملائنا وتوفير حلول تقنية ذكية تلبي تطلعاتهم.
        </p>
    </div>

    <!-- Footer -->
   @include('home.footer')
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
