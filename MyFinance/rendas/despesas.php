<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Editable Table</title>
  
  
  <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>
  <link rel="stylesheet " type="text/css" href="../style/css/style.css">

  <link rel="stylesheet" type="text/css" href="../est">  
  
</head>

<body class="main-box">

  <div>
  <h1>Striped Rows</h1>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Name</th>
        <th>Phone</th>
        <th>DTMF</th>
        <th>Operations</th>
      </tr>
    </thead>
    <tbody>
    </tbody>
  </table>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <form action="#">
            <div class="form-group">
              <label for="name">Name:</label>
              <input type="name" class="form-control" id="name" placeholder="Enter name">
            </div>
            <div class="form-group">
              <label for="phone">Phone:</label>
              <input type="phone" class="form-control" id="phone" placeholder="Enter phone">
            </div>
            <div class="form-group">
              <label for="dtmf">DTMF:</label>
              <input type="dtmf" class="form-control" id="dtmf" placeholder="Enter dtmf">
            </div>
            <button type="submit" class="btn btn-success">Save</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>
</div>
  <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'></script>
  
  





</body>

</html>
