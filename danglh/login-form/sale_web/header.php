<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/main.css">
  <script src="js/main.js" defer></script>
  <title>Sale_Web</title>
</head>

<body>
  <header>
    <div class="logo"><a href="index.php">LOGO</a>
    </div>
    <div class="search-container">
      <form action="/search">
        <input class="search_text" type="text" placeholder="Search.." name="search">
        <button class="search_submit" type="search_submit">Search</button>
      </form>
    </div>
    <div class="information">
      <ul>
        <?php
        if(isset($_SESSION['id_user'])){
          echo '<li><a href="index.php?page=cart">View Cart</a></li>
                <div class="line"></div>
                <li><a href="index.php?page=profile">Profile</a></li>
                <div class="line"></div>
                <li><a href="logout.php">Logout</a></li>';
        } else {
          echo '<li><a href="login.php">Login</a></li>
                <div class="line"></div>
                <li><a href="register.php">Register</a></li>';
        }
        ?>

      </ul>
    </div>

  </header>
  <nav>
    <ul>
      <li>
        <div class="under-line">
        </div>
        <div class="category">
          <a href="index.php?page=mobilephone">MOBILEPHONE</a>
        </div>
        <div class="menu">
          <div class="brand">
            <h3>Brand</h3>
          </div>
          <ul>
            <li>Apple</li>
            <li>Apple</li>
            <li>Apple</li>
            <li>Apple</li>
            <li>Apple</li>
            <li>Apple</li>
          </ul>
        </div>
      </li>

      <li>
        <div class="under-line">
        </div>
        <div class="category">
          <a href="index.php?page=tablet">TABLET</a>
        </div>
        <div class="menu">
          <div class="brand">
            <h3>Brand</h3>
          </div>
          <ul>
            <li>Apple</li>
            <li>Apple</li>
            <li>Apple</li>
            <li>Apple</li>
            <li>Apple</li>
            <li>Apple</li>
          </ul>
        </div>
      </li>

      <li>
        <div class="under-line">
        </div>
        <div class="category">
          <a href="index.php?page=laptop">LAPTOP</a>
        </div>
        <div class="menu">
          <div class="brand">
            <h3>Brand</h3>
          </div>
          <ul>
            <li>Apple</li>
            <li>Apple</li>
            <li>Apple</li>
            <li>Apple</li>
            <li>Apple</li>
            <li>Apple</li>
          </ul>
        </div>
      </li>

      <li>
        <div class="under-line">
        </div>
        <div class="category">
          <a href="vocabulary.php">TELEVISION</a>
        </div>
        <div class="menu">
          <div class="brand">
            <h3>Brand</h3>
          </div>
          <ul>
            <li>Apple</li>
            <li>Apple</li>
            <li>Apple</li>
            <li>Apple</li>
            <li>Apple</li>
            <li>Apple</li>
          </ul>
        </div>
      </li>

      <li>
        <div class="under-line">
        </div>
        <div class="category">
          <a href="vocabulary.php">ACCESSORY</a>
        </div>
        <div class="menu">
          <div class="brand">
            <h3>Brand</h3>
          </div>
          <ul>
            <li>Apple</li>
            <li>Apple</li>
            <li>Apple</li>
            <li>Apple</li>
            <li>Apple</li>
            <li>Apple</li>
          </ul>
        </div>
      </li>

      <li>
        <div class="under-line">
        </div>
        <div class="category">
          <a href="vocabulary.php">WATCH</a>
        </div>
        <div class="menu-2">
          <div class="brand">
            <h3>Brand</h3>
          </div>
          <ul>
            <li>Apple</li>
            <li>Apple</li>
            <li>Apple</li>
            <li>Apple</li>
            <li>Apple</li>
            <li>Apple</li>
          </ul>
        </div>
      </li>

      <li>
        <div class="under-line">
        </div>
        <div class="category">
          <a href="vocabulary.php">HEADPHONE</a>
        </div>
        <div class="menu-2">
          <div class="brand">
            <h3>Brand</h3>
          </div>
          <ul>
            <li>Apple</li>
            <li>Apple</li>
            <li>Apple</li>
            <li>Apple</li>
            <li>Apple</li>
            <li>Apple</li>
          </ul>
        </div>
      </li>
    </ul>
  </nav>
