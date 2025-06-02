<nav class="navbar navbar-expand-lg navbar-light" style="position: fixed;" id="navbar">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Sportalytics</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Accueil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Matchs à venir</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Résultats</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Actualités</a>
            </li>
            </ul>
        </div>
    </div>
</nav>

<script>
let lastScrollTop = 0;
const navbar = document.getElementById('navbar');

window.addEventListener('scroll', function() {
  let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

  if (scrollTop > lastScrollTop) {
    navbar.style.top = "-80px";
  } else {
    navbar.style.top = "0";
  }

  lastScrollTop = scrollTop <= 0 ? 0 : scrollTop;
});
</script>
