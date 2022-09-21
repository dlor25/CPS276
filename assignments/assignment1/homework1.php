<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <title>Form Project</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body class="p-3 m-0 border-0 bd-example">

    <!-- Example Code -->
    
    <form class="row g-3" method="post" action="#">
    <div class="container">
      <label for="inputfirstname" class="form-label">First Name</label>
        <input type="name" class="form-control" id="inputfirstname">
      </div>
      <div class="container">
        <label for="inputlastname" class="form-label">Last Name</label>
        <input type="name" class="form-control" id="inputlastname">
      </div> 
      <div class="container">
        <label for="inputAddress" class="form-label">Address</label>
        <input type="text" class="form-control" id="inputAddress">
      </div>
      <div class="container">
        <label for="inputCity" class="form-label">City</label>
        <input type="text" class="form-control" id="inputCity">
      </div>
      <div class="container">
        <label for="inputState" class="form-label">State</label>
        <select id="inputState" class="form-select">
        <option>Alabama</option>
        <option>California</option>
        <option selected>Michigan</option>
        <option>New York</option>
        <option>Vermont</option>
        </select>
      </div>
      <div class="container">
        <label for="inputZip" class="form-label">Zip</label>
        <input type="text" class="form-control" id="inputZip">
      </div>
      <div class="container">
        <label><input type="radio" name="gender" value="male" > Male </label>
        <label><input type="radio" name="gender" value="female" > Female </label>
      </div>
      <div class="container">
        <button type="submit" class="btn btn-primary">Register</button>
      </div>
    </form>
    
    <!-- End Example Code -->
  </body>
</html>