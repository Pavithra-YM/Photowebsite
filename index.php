<!DOCTYPE html>
<html lang="en">

<head>
  <title>Pavitra | Portfolio</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="icon" type="image/x-icon" href="/image/favicon.jpg">

</head>
<body>


  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Photo Gallery</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Categories
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#nature">Nature</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#architecture">Architecture</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#travel">Travel</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact">Contact us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about">About us</a>
        </li>

      </ul>

      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>

  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-80" src="image/14.jpg" alt="NATURE">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="image/12.jpg" alt="Architecture">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="image/20.jpg" alt="TRAVEL">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <a id="nature">
    <section class="my-4">
      <div class="py-4">
        <h2 class="text-center">Nature</h2>
      </div>

      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-4 col-md-5 col-6">
            <img src="image/15.jfif" class="img-fluid pb-3">
          </div>
          <div class="col-lg-4 col-md-4 col-12">
            <img src="image/16.jfif" class="img-fluid pb-3">
          </div>
          <div class="col-lg-4 col-md-4 col-12">
            <img src="image/17.jfif" class="img-fluid pb-3">
          </div>
        </div>
    </section>
  </a>

  <a id="architecture">
    <section class="my-4">
      <div class="py-4">
        <h2 class="text-center">Architecture</h2>
      </div>

      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-12">
            <img src="image/1.jfif" class="img-fluid pb-3">
          </div>
          <div class="col-lg-4 col-md-4 col-12">
            <img src="image/2.jpg" class="img-fluid pb-3">
          </div>
          <div class="col-lg-4 col-md-4 col-12">
            <img src="image/3.jpg" class="img-fluid pb-3">
          </div>
        </div>
    </section>
  </a>
  <a id="travel">
    <section class="my-4">
      <div class="py-4">
        <h2 class="text-center">Travel</h2>
      </div>

      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-12">
            <img src="image/5.jpg" class="img-fluid pb-3">
          </div>
          <div class="col-lg-4 col-md-4 col-12">
            <img src="image/6.jfif" class="img-fluid pb-3">
          </div>
          <div class="col-lg-4 col-md-4 col-12">
            <img src="image/13.jfif" class="img-fluid pb-3">
          </div>
        </div>
    </section>
  </a>


  <a id="Contact_us">
    <section class="my-4">
      <div class="py-4">
        <h2 class="text-center">Contact US</h2>
      </div>

      <div class="w-50 m-auto">
        <form enctype="multipart/form-data" id="form_id">
          <div class="form-group">
            <label>name:</label>
            <input type="text" name="name" class="form-control">
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" class="form-control">
          </div>
          <div class="form-group">
            <label>Number</label>
            <input type="text" name="number" class="form-control">
          </div>
          <button type="submit" class="btn btn-success">Submit</button>
          </from>
      </div>
    </section>
  </a>

  <a id="about-us">

     <section class="my-4">
      <div class="py-4">
        <h2 class="text-center">About us</h2>
      </div>
      <div class="container-fluid">
        <h3 class="text-center"></h3><br>
        <p class="text-center"><b>I am a passionate photograper interseted in working in nature ,travel,etc
            I am a full timer freelancer with an experience of 5 years
          </b></p>
      </div>
    </section>



  <input type="hidden" name="token" value="<?= $_SESSION["token"] ?>">

  <!-- <script>
    const inp = document.querySelector('.form-control');
    const myurl = location.href;
    inp.addEventListener('keyup', () => {
      if (inp.value !== '' && inp.value.length > 3) {
        let li = ['nature', 'architecture', 'travel']
        li.forEach(lists => {
          if (lists.includes(inp.value)) {
            location.href = `${myurl}#${lists}`
          }
        });
      }
    });

    // Form checks
    const form_is = document.querySelector('#form_id');
    const form_inp = form_is.querySelectorAll('input')
    form_is.addEventListener('submit', (event) => {
      event.preventDefault();
      session_start();
      $_SESSION["token"] = bin2hex(random_bytes(32));
      fd = new FormData();
      fd.append('name', form_inp[0].value)
      fd.append('email', form_inp[1].value)
      fd.append('number', form_inp[2].value)
      $.ajax({
        url: 'about.php',
        type: 'POST',
        data: fd,
        error: alert('Something went wrong'),
        success: function(response) {
          alert('Form submitted')
        }
      })
    })
  </script> -->
  <script>
  document.addEventListener('DOMContentLoaded', function() {
    const inp = document.querySelector('.form-control');
    const myurl = location.href;

    inp.addEventListener('keyup', () => {
      const inputValue = inp.value.toLowerCase().trim();

      if (inputValue !== '' && inputValue.length > 3) {
        const li = ['nature', 'architecture', 'travel'];

        li.forEach(lists => {
          if (lists.includes(inputValue)) {
            location.href = `${myurl}#${lists}`;
          }
        });
      }
    });

    // Form submission
    const form = document.querySelector('#form_id');

    form.addEventListener('submit', (event) => {
      event.preventDefault();

      
      const token = generateToken(); 

      const formData = new FormData(form);
      formData.append('token', token);

      fetch('about.php', {
        method: 'POST',
        body: formData
      })
      .then(response => {
        if (!response.ok) {
          throw new Error('Network response was not ok');
        }
        return response.text();
      })
      .then(data => {
        alert('Form submitted successfully');
      
      })
      .catch(error => {
        alert('Something went wrong: ' + error.message);
      });
    });
  });

  function generateToken() {
    return 'simulated_token';
  }
</script>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>