<!DOCTYPE html>
<html>
  <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
      <title>Contact Us Information</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
      <style>
          *{
            margin: 0px;
            padding: 0px;
            outline: 0px;
          }

          .wrapper{
            width: 100%;
            padding: 20px 40px;
          }

          h2.title{
            text-align: center;
            font-family: sans-serif;
            font-size: 20px;
            line-height: 30px;
          }

          .table_data{
              font-family: sans-serif;
              font-size: 13px;
          }

          .table_data tr{

          }

          .table_data tr th{
              text-align: left;
              font-weight: bold;
              background-color: #000;
              color: #f7f7f7;
              padding: 5px;
          }

          .table_data tr td{
              text-align: left;
              padding: 5px;

          }
      </style>
  </head>
  <body>
      <div class="wrapper">
          <h2 class="title">Contact Message Information</h2>
          <hr>
          <table class="table table-bordered table-striped table_data">
              <thead>
              <tr>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Phone</th>
              </tr>
              </thead>
              <tbody>
              @foreach($all as $data)
                  <tr>
                      <td>{{ $data->cm_name }}</td>
                      <td>{{ $data->cm_email }}</td>
                      <td>{{ $data->cm_phone }}</td>
                  </tr>
              @endforeach
              </tbody>
          </table>
      </div>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  </body>
</html>
