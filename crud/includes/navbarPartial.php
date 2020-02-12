<div class="container">
  <div class="rows">
    <div class="col">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">MovieStore</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
          </ul>
          <span class="p-r"><h6>Hi, <b style="color: darkorange; font-weight: 700;"><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h6></span>
          <span class="navbar-text">
              <a href="logout.php" class="btn btn-danger btnSignout">Sign Out</a>
          </span>
        </div>
      </nav>
    </div>
  </div>
</div>