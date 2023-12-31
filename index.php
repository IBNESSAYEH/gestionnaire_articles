
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f4f4f4;
    }
    .container {
      text-align: center;
      margin-top: 50px;
    }
    .navbar {
      background-color: #343a40;
    }
    .navbar-brand {
      color: #ffffff;
    }
    .navbar-nav .nav-link {
      color: #ffffff;
    }
  </style>
  <title>Article Form</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark">
    <a class="navbar-brand" href="#">Articles</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">Articles</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Add Article</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="container">
   


  <table class="table">
  <thead>
  <tr>
      <th scope="row">titre</th>
      <td>contenu</td>
      <td>date_de_creation</td>
      <td>actions</td>
    </tr>
  </thead>
  <tbody>
  <?php

  include "hundlers/getAllArticles.php";

  ?>
  </tbody>
</table>






  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
