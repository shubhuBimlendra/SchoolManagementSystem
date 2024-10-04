<?php include('../includes/config.php') ?>
<?php include('header.php') ?>
<?php include('sidebar.php') ?>

<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <div class="d-flex">
          <h1 class="m-0 text-dark">Manage Accounts</h1>
        </div>

      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Accounts</a></li>
          <li class="breadcrumb-item active"><?php echo ucfirst($_REQUEST['user']) ?></li>
        </ol>
      </div><!-- /.col -->
      
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <?php 
      $user_query = 'SELECT * FROM accounts where `type` = "'.$_REQUEST['user'].'" ';
      $user_result = mysqli_query($db_conn, $user_query);
      while($users = mysqli_fetch_object($user_result))
      {
        echo $users->email . '<br>';
      }
      
      ?>
    </div>
  </div><!--/. container-fluid -->
</section>
<!-- /.content -->

<?php include('footer.php') ?>
