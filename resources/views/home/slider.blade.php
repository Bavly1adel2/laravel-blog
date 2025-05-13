<nav class="mt-4 text-center">
  <ul class="pagination justify-content-center">
    <li class="page-item"><a class="page-link" href="" onclick="showPage(1)">1</a></li>
    <li class="page-item"><a class="page-link" href="" onclick="showPage(2)" >2</a></li>
    <li class="page-item"><a class="page-link" href="" onclick="showPage(3)">3</a></li>
  </ul>
</nav>
<script>
  function showPage(pageNumber) {
    const pages = document.querySelectorAll('.page');
    pages.forEach(page => page.classList.add('d-none'));
    document.getElementById('page' + pageNumber).classList.remove('d-none');
  }

  // Show page 1 by default
  showPage(1);
</script>
