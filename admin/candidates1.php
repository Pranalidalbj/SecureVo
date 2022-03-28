<?php include 'includes/session.php'; ?>
<?php
$title = "Home";
$content = '

<style>
td{
    padding : 12px
}
</style>
<center><h4> Add Candidates </h4></center>
<section class="content">
      <?php
        if(isset($_SESSION["error"])){
          echo "
            <div class="alert alert-danger alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h4><i class="icon fa fa-warning"></i> Error!</h4>
              '.$_SESSION["error"].'
            </div>
          ";
          unset($_SESSION["error"]);
        }
        if(isset($_SESSION["success"])){
          echo "
            <div class="alert alert-success alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h4><i class="icon fa fa-check"></i> Success!</h4>
              '.$_SESSION["success"].'
            </div>
          ";
          unset($_SESSION["success"]);
        }
      ?>
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header with-border">
              <a href="#addnew" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i> New</a>
            </div>
            <div class="box-body">
              <table id="example1" class="table table-bordered">
                <thead>
                  <th class="hidden"></th>
                  <th>Position</th>
                  <th>Photo</th>
                  <th>Firstname</th>
                  <th>Lastname</th>
                  <th>Platform</th>
                  <th>Tools</th>
                </thead>
                <tbody>
                  <?php
                    $sql = "SELECT *, candidates.id AS canid FROM candidates LEFT JOIN positions ON positions.id=candidates.position_id ORDER BY positions.priority ASC";
                    $query = $conn->query($sql);
                    while($row = $query->fetch_assoc()){
                      $image = (!empty($row["photo"])) ? "../imgs/".$row["photo"] : "../imgs/profile.jpg";
                      echo "
                        <tr>
                          <td class="hidden"></td>
                          <td>".$row["info"]."</td>
                          <td>
                            <img src="".$image."" width="30px" height="30px">
                            <a href="#edit_photo" data-toggle="modal" class="pull-right photo" data-id="".$row["canid"].""><span class="fa fa-edit"></span></a>
                          </td>
                          <td>".$row["cname"]."</td>
                          
                          <td><a href="#platform" data-toggle="modal" class="btn btn-info btn-sm btn-flat platform" data-id="".$row["canid"].""><i class="fa fa-search"></i> View</a></td>
                          <td>
                            <button class="btn btn-success btn-sm edit btn-flat" data-id="".$row["canid"].""><i class="fa fa-edit"></i> Edit</button>
                            <button class="btn btn-danger btn-sm delete btn-flat" data-id="".$row["canid"].""><i class="fa fa-trash"></i> Delete</button>
                          </td>
                        </tr>
                      ";
                    }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
<br>
<br>
<br>
';

include 'Template.php';
?>