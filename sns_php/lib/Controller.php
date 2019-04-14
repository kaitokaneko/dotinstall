<?php

namespace MyApp;

class Controller {

  protected finction isLoggedIn() {
    // $_SESSION['me']
    return isset($_SESSION['me']) && !empty($_SESSION['me']);
  }

}
