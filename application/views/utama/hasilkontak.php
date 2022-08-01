<!doctype html>
  <html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <title></title>
  </head>
  <body>

   <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Contact</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="#">Getcontact <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>

      </ul>
    </div>
  </nav>

  <div class="container">
   <h3 class="mt-2">List Contact</h3>
   <table id="example" class="display" style="width:100%">
    <thead>
      <tr>
        <th>No</th>
        <th>Phone</th>

      </tr>
    </thead>            
    <tbody>

      <?php 
      $no = 1;
      foreach ($kontak as $data) { ?>
        <tr>
          <td><?= $no++ ?></td>
          <td><?= $data['nohp'] ?></td>
        </tr>
      <?php } ?>

    </tbody>
    <tfoot>
      <tr>
        <th>No</th>
        <th>Phone</th>

      </tr>
    </tfoot>
  </table>
  <a href="<?= base_url('kontak/hapus') ?>" class="btn btn-danger">Delete Contact</a>
  <a href="<?= base_url('kontak/index') ?>" class="btn btn-primary">Create Contact</a>
  <br>
  <br>
</div>




<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->




<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 


<script>
  $(document).ready(function () {
    $('#example').DataTable();
  });
</script>
</body>
</html>