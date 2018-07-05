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

  <!-- Section: Details -->
  <section class="section section-details grey lighten-4">
    <div class="container">
      <div class="row">
        <div class="col s12">
          <div class="card">
            <div class="card-content">
              <div class="row">
                <div class="col s12 m6">
                  <span class="card-title">Post Details</span>
                </div>
                <div class="col s12 m6 center">
                  <img src="img/person1.jpg" alt="" class="responsive-img circle" style="width: 40px;margin-left:10px;">
                  <p>Posted By John Doe</p>
                  <p>On Jan, 12, 2018</p>
                </div>
              </div>

              <form>
                <div class="input-field">
                  <input type="text" id="title" value="Post One">
                  <label for="title">Title</label>
                </div>
                <div class="input-field">
                  <select>
                    <option value="" disabled>Select option</option>
                    <option value="1" selected>Web Development</option>
                    <option value="2">Graphic Design</option>
                    <option value="3">Tech Gadgets</option>
                    <option value="4">Other</option>
                  </select>
                  <label>Category</label>
                </div>
                <div class="input-field">
                  <textarea name="body" id="body" class="materialize-textarea">
                      This is the content for post one
                    </textarea>
                </div>
              </form>

            </div>
            <div class="card-action">
              <button class="btn green">Save</button>
              <button class="btn red">Delete</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  
  <?php include 'footer.php';?>

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
  <script src="https://cdn.ckeditor.com/4.8.0/standard/ckeditor.js"></script>

  <script>
    // Hide Sections
    $('.section').hide();

    setTimeout(function () {
      $(document).ready(function () {
        // Show sections
        $('.section').fadeIn();

        // Hide preloader
        $('.loader').fadeOut();

        //Init Side nav
        $('.button-collapse').sideNav();

        // Init Modal
        $('.modal').modal();

        // Init Select
        $('select').material_select();

        CKEDITOR.replace('body');

      });
    }, 1000);
  </script>
</body>

</html>