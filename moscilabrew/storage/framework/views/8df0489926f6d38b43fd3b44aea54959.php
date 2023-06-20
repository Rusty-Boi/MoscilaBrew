<nav class="navbar navbar-expand-lg bg-grey vh-20 fixed-top">
      <div class="container-fluid">
          <a class="navbar-brand fw-semibold" href="/seller/dashboard">MoscilaBrew Partners</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
              aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-center" id="navbarTogglerDemo02">
              <form class="d-flex flex-grow-1 justify-content-between" role="search">
                  <div></div>
                  <input class="form-control me-2 justify-content-evenly w-75 rounded-3" type="search"
                      placeholder="Search" aria-label="Search">
                  <button onclick="search()" class="btn" type="submit">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                          class="bi bi-search" viewBox="0 0 16 16">
                          <path
                              d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                      </svg>
                  </button>
              </form>
              <div>
                  <button onclick="profileNav()" class="btn profile" type="button" id="userProfile">
                      <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="black"
                          class="bi bi-person" viewBox="0 0 16 16">
                          <path
                              d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z" />
                      </svg>
                  </button>
                  <button onclick="cartNav()" class="btn" type="button" id="cart">
                      <div class="dropdown border-top ">
                          <a href="#" class="d-flex align-items-center justify-content-center px-0 p-3 link-dark text-decoration-none dropdown-toggle" id="dropdownUser3" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="https://github.com/mdo.png" alt="mdo" width="24" height="24" class="rounded-circle">
                          </a>
                          <ul class="dropdown-menu text-small shadow dropdown-menu-end" aria-labelledby="dropdownUser3">
                            <li><a class="dropdown-item" href="#">New project...</a></li>
                            <li><a class="dropdown-item" href="#">Settings</a></li>
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Sign out</a></li>
                          </ul>
                        </div>
                  </button>
              </div>
          </div>
      </div>
      </div>
  </nav><?php /**PATH C:\Users\Admin\Documents\GitHub\MoscilaBrew\moscilabrew\resources\views/layouts/header-seller.blade.php ENDPATH**/ ?>