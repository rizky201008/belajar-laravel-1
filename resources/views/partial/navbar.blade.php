{{-- Navbar --}}
    <nav class="navbar navbar-expand-lg bg-primary navbar-dark fixed-top">
  <div class="container">
    <a class="navbar-brand" href="@auth /admin @else / @endauth">Enabos Blog</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        @auth
        <li class="nav-item">
          <a class="nav-link {{ ($title === "Tulis Artikel") ? 'active' : '' }}" href="/admin">Buat Post</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === "Blog") ? 'active' : '' }}" href="/admin/posts">Post</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === "Kategori") ? 'active' : '' }}" href="/admin/categories">Kategori</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === "Blog") ? 'active' : '' }}" href="/admin/logout">Logout</a>
        </li>
        @else
            <li class="nav-item">
          <a class="nav-link {{ ($title === "Home") ? 'active' : '' }}" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === "Blog") ? 'active' : '' }}" href="/blog">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === "Kategori") ? 'active' : '' }}" href="/category">Kategori</a>
        </li>
        @endauth
      </ul>
    </div>
  </div>
</nav>