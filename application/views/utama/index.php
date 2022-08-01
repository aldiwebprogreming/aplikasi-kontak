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
    <title>Contact</title>
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

      <div class="card mt-3">
        <div class="card-body">
          <h3>Create Contact</h3>

          <form method="post" action="<?= base_url('kontak/act_kontak') ?>">
            <div class="form-group">
              <label for="exampleInputEmail1">Jumlah Kontak</label>
              <input type="number" id="jml" name="jml" class="form-control" id="exampleInputEmail1">

            </div>
            <h4 id="loading" style="display: none;">Process Scrape Contact...</h4>
            <button type="submit" id="proses" class="btn btn-primary">Create Contact</button>

          </form>


          <div class="load mt-3" id="box">

          </div>


        </div>
      </div>

    </div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->




    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 

    <script>
      $(document).ready(function(){
        $("#proses").click(function(){
          $("#loading").show();
        })
      })
    </script>


    <!-- <script>
      $(document).ready(function () {
        $('#example').DataTable();
      });
    </script>
    <script>
      $(document).ready(function(){

        $("#proses").click(function(){

          var jml = $("#jml").val();
          var url = "<?= base_url('kontak/getkontak?jml=') ?>"+jml;
          $("#box").load(url);

        })

      })
    </script> -->
  </body>
  </html>