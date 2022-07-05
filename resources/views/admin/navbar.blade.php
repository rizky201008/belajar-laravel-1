{{-- Navbar --}}
    <nav class="navbar navbar-expand-lg bg-primary navbar-dark fixed-top">
  <div class="container">
    <a class="navbar-brand" href="/admin">Enabos Blog</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link {{ ($title === "Tulis Artikel") ? 'active' : '' }}" href="/admin">Tulis Artikel</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === "Semua Artikel") ? 'active' : '' }}" href="/admin/posts">Semua Artikel</a>
        </li>
      </ul>
    </div>
  </div>
</nav>