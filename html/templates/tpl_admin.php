<?php

/**
 * Function to draw admin area header
 */
function draw_header()
{ ?>

  <!DOCTYPE html>
  <html lang="en-US">

  <head>
    <title>Artifact Ink Admin</title>
    <meta charset="UTF-8">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- custom bootstrap -->
    <link rel="stylesheet" href="../css/admin.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </head>

  <body>

  <?php }

/**
 * Function to draw admin area top navbar
 */
function draw_navbar()
{ ?>
    <header>
      <nav class="navbar navbar-expand-lg navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
        <div class="collapse navbar-collapse my-2">

          <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Artifact Ink Admin</a>

          <ul class="navbar-nav ml-auto mr-2">
            <li class="nav-item">
              <a class="nav-link" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail">
                  <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                  <polyline points="22,6 12,13 2,6"></polyline>
                </svg>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell">
                  <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                  <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                </svg>
              </a>
            </li>
          </ul>

        </div>
      </nav>
    </header>

  <?php }

/**
 * Function to draw admin area footer
 */
function draw_footer()
{ ?>
  </body>

  <footer class="footer">
    Copyright © 2020 LBAW FEUP
  </footer>

  </html>
<?php }

/**
 * Function to draw admin area top navbar
 */
function draw_sidebar()
{ ?>
  <!-- side bar with options -->
  <nav class="col-md-2 d-none d-md-block bg-light sidebar">
    <div class="sidebar-sticky d-flex flex-column">

      <h6 class="sidebar-heading px-3 mt-4 mb-1 text-muted">Admin Dashboard</h6>

      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link active" href="/admin">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
              <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
              <polyline points="9 22 9 12 15 12 15 22"></polyline>
            </svg>
            Home
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag">
              <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
              <line x1="3" y1="6" x2="21" y2="6"></line>
              <path d="M16 10a4 4 0 0 1-8 0"></path>
            </svg>
            Products
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clipboard">
              <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path>
              <rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect>
            </svg>
            Categories
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-package">
              <line x1="16.5" y1="9.4" x2="7.5" y2="4.21"></line>
              <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path>
              <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
              <line x1="12" y1="22.08" x2="12" y2="12"></line>
            </svg>
            Orders
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2">
              <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
            </svg>
            Reviews
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users">
              <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
              <circle cx="9" cy="7" r="4"></circle>
              <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
              <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
            </svg>
            Users
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-tag">
              <path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"></path>
              <line x1="7" y1="7" x2="7.01" y2="7"></line>
            </svg>
            Sales
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-send">
              <line x1="22" y1="2" x2="11" y2="13"></line>
              <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
            </svg>
            Make Newsletter
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/admin/faq.php">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-help-circle">
              <circle cx="12" cy="12" r="10"></circle>
              <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
              <line x1="12" y1="17" x2="12.01" y2="17"></line>
            </svg>
            FAQ
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-info">
              <circle cx="12" cy="12" r="10"></circle>
              <line x1="12" y1="16" x2="12" y2="12"></line>
              <line x1="12" y1="8" x2="12.01" y2="8"></line>
            </svg>
            Info
          </a>
        </li>
      </ul>

      <div class="mt-auto mb-3">
        <a class="nav-link" href="#">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out">
            <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
            <polyline points="16 17 21 12 16 7"></polyline>
            <line x1="21" y1="12" x2="9" y2="12"></line>
          </svg>
          Sign Out
        </a>
      </div>
    </div>
  </nav>
<?php }

function draw_home()
{ ?>
  <div class="container-fluid">
    <div class="row">

      <?php draw_sidebar() ?>

      <main class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <div class="border-bottom mt-2">
          <h1>Overview</h1>
        </div>

        <div class="container row mx-auto my-2">

          <div class="col-lg-3 col-md-6 col-sm-6 py-2">
            <div class="card text-center">
              <div class="card-body">
                <h4 class="card-title">Users</h4>
                <table class="table table-sm mb-0">
                  <tbody>
                    <tr>
                      <td scope="">Users Registered</td>
                      <td>675</td>
                    </tr>
                    <tr>
                      <td scope="row">Users Online</td>
                      <td>12</td>
                    </tr>
                    <tr>
                      <td scope="row">Site Visitors</td>
                      <td>8694</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 py-2">
            <div class="card text-center">
              <div class="card-body">
                <h4 class="card-title">Products</h4>
                <table class="table table-sm mb-0">
                  <tbody>
                    <tr>
                      <td scope="row">Total Products</td>
                      <td>98</td>
                    </tr>
                    <tr>
                      <td scope="row">Products On Sale</td>
                      <td>14</td>
                    </tr>
                    <tr>
                      <td scope="row">Product Views</td>
                      <td>8694</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 py-2">
            <div class="card text-center">
              <div class="card-body">
                <h4 class="card-title">Orders</h4>
                <table class="table table-sm mb-0">
                  <tbody>
                    <tr>
                      <td scope="row">Total Orders</td>
                      <td>562</td>
                    </tr>
                    <tr>
                      <td scope="row">Orders Shipped</td>
                      <td>496</td>
                    </tr>
                    <tr>
                      <td scope="row">Orders Received</td>
                      <td>365</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 py-2">
            <div class="card text-center">
              <div class="card-body">
                <h4 class="card-title">Reviews</h4>
                <table class="table table-sm mb-0">
                  <tbody>
                    <tr>
                      <td scope="row">Total Reviews</td>
                      <td>134</td>
                    </tr>
                    <tr>
                      <td scope="row">Average Per Product</td>
                      <td>2.7</td>
                    </tr>
                    <tr>
                      <td scope="row">Incomplete Reviews</td>
                      <td>27</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

        <div class="border-bottom mt-2">
          <h1>Notifications</h1>
        </div>

        <div class="row mx-auto my-2">
          <table class="table table-striped table-hover">
            <thead>
              <tr>
                <th scope="col">Category</th>
                <th scope="col">#</th>
                <th scope="col">Description</th>
                <th scope="col">Timestamp</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">Products</th>
                <td>234</td>
                <td>Product "Dynamic Black Ink" #45 is out of stock</td>
                <td>Sunday, 08-Mar-20 12:34:17</td>
                <td><button type="button" class="btn btn-link py-0">Clear</button></td>
              </tr>
              <tr>
                <th scope="row">Review</th>
                <td>134</td>
                <td>User miguel123 made a review on order #541</td>
                <td>Sunday, 08-Mar-20 12:34:17</td>
                <td><button type="button" class="btn btn-link py-0">Clear</button></td>
              </tr>
              <tr>
                <th scope="row">Order</th>
                <td>541</td>
                <td>User miguel123 made a new order</td>
                <td>Sunday, 08-Mar-20 12:34:17</td>
                <td><button type="button" class="btn btn-link py-0">Clear</button></td>
              </tr>
              <tr>
                <th scope="row">Users</th>
                <td>675</td>
                <td>User miguel123 just signed up</td>
                <td>Sunday, 08-Mar-20 12:34:17</td>
                <td><button type="button" class="btn btn-link py-0">Clear</button></td>
              </tr>
            </tbody>
          </table>
        </div>

      </main>
    </div>
  </div>

<?php }

function draw_faq()
{ ?>
  <div class="container-fluid">
    <div class="row">

      <?php draw_sidebar() ?>


    </div>
  </div>
<?php }

?>