<!DOCTYPE html>
<html>

<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
  <link type="text/css" rel="stylesheet" href="css/main.css" />

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Custom Materialize Theme</title>
</head>

<body class="grey lighten-4">

   <!-- NavVar -->
   <?php include 'nav.php';?>

  <!-- Section: Categories -->
  <section class="section section-categories grey lighten-4">
    <div class="container">
      <div class="row">
        <div class="col s12">
          <div class="card">
            <div class="card-content">
              <span class="card-title">Categories</span>
              <table class="striped">
                <thead>
                  <tr>
                    <th>Title</th>
                    <th>Date Created</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Web Development</td>
                    <td>Jan 1, 2018</td>
                    <td>
                      <a href="details.php" class="btn blue lighten-2">Details</a>
                    </td>
                  </tr>
                  <tr>
                    <td>Graphic Design</td>
                    <td>Jan 2, 2018</td>
                    <td>
                      <a href="details.php" class="btn blue lighten-2">Details</a>
                    </td>
                  </tr>
                  <tr>
                    <td>Tech Gadgets</td>
                    <td>Jan 3, 2018</td>
                    <td>
                      <a href="details.php" class="btn blue lighten-2">Details</a>
                    </td>
                  </tr>
                  <tr>
                    <td>Other</td>
                    <td>Jan 5, 2018</td>
                    <td>
                      <a href="details.php" class="btn blue lighten-2">Details</a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="card-action">
              <ul class="pagination">
                <li class="disabled">
                  <a href="#!" class="blue-text">
                    <i class="material-icons">chevron_left</i>
                  </a>
                </li>
                <li class="active blue lighten-2">
                  <a href="#!" class="white-text">1</a>
                </li>
                <li class="waves-effect">
                  <a href="#!" class="blue-text">2</a>
                </li>
                <li class="waves-effect">
                  <a href="#!" class="blue-text">3</a>
                </li>
                <li class="waves-effect">
                  <a href="#!" class="blue-text">4</a>
                </li>
                <li class="waves-effect">
                  <a href="#!" class="blue-text">5</a>
                </li>
                <li class="waves-effect">
                  <a href="#!" class="blue-text">
                    <i class="material-icons">chevron_right</i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<!-- Footer -->
<?php include 'footer.php';?>

  <!-- Fixed Action Button -->
  <div class="fixed-action-btn">
    <a href="#category-modal" class="modal-trigger btn-floating btn-large red">
      <i class="material-icons">add</i>
    </a>
  </div>

  <!-- Add Category Modal -->
  <div id="category-modal" class="modal">
    <div class="modal-content">
      <h4>Add Category</h4>
      <form>
        <div class="input-field">
          <input type="text" id="title">
          <label for="title">Title</label>
        </div>
      </form>
      <div class="modal-footer">
        <a href="#!" class="modal-action modal-close btn blue white-text">Submit</a>
      </div>
    </div>
  </div>

  <!-- Preloader -->
  <div class="loader preloader-wrapper big active">
    <div class="spinner-layer spinner-blue-only">
      <div class="circle-clipper left">
        <div class="circle"></div>
      </div>
      <div class="gap-patch">
        <div class="circle"></div>
      </div>
      <div class="circle-clipper right">
        <div class="circle"></div>
      </div>
    </div>
  </div>

  <!--Import jQuery before materialize.js-->
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script src="js/categories.js"></script>
  
</body>

</html>