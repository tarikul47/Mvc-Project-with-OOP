<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row px-0">
            <div class="col px-0">
                <div class="card">
                    <div class="card-header text-center">
                        <?php echo $books->gettitle();?> Book Information
                    </div>
                    <div class="card-body text-center">

                    <table class="table table-striped table-dark">
  <thead>
    <tr>
      <td scope="col">ID</th>
      <td scope="col">Title</th>
      <td scope="col">Price</th>
      <td scope="col">Author</th>
      <td scope="col">Message</th>
    </tr>
  </thead>
  <tbody>

<?php
    echo "<tr>";
 echo '<td>'.$books->getId().'</td>';   
 echo '<td><a href="?book='.$books->gettitle().'" target=_blank>'.$books->gettitle().'</a></td>';
 echo '<td>'.$books->getPrice().'</td>';
 echo '<td>'.$books->getAuthor().'</td>';
 echo '<td>'.$books->getMessage().'</td>';
 echo "</tr>";

?>
  </tbody>
</table>

                    </div>
                    <div class="card-header text-center">
                    <?php echo $books->gettitle();?> Book Information
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>