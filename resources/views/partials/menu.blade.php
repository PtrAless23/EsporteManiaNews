<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <img style="max-width: 50px;" src="https://esportemaniasite.000webhostapp.com/images/E.jpg" alt="Logo Esporte Mania News" class="navbar-brand img-thumbnail mb-2">
  <a class="navbar-brand" href="#">EsporteManiaNews</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="{{ route('home') }}">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="{{ route('categories.index') }}">Gerenciamento</a>
        </li>
    </ul>
  </div>
</nav>

