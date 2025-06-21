<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">Perpustakaan Keliling</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active" href="/member-pusling">Anggota</a>
          <a class="nav-link" href="{{ route('nonmember.create') }}">Non Anggota</a>
          <a class="nav-link" href="/rombo-pusling">Rombongan</a>
        </div>
      </div>
    </div>
  </nav>