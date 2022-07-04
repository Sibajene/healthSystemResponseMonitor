<?php include('includes/header.php'); ?>

<?php include('includes/navbar.php'); ?>

<div class="container py-5">
    <div class="row py-3">
        <div class="col-md-8">

            <div class="card">
                <img src="https://res.cloudinary.com/ecotuulecloud/image/upload/v1655231118/ecotuule/namps_tdxijl.jpg" class="card-img-top" style="opacity:80%;" alt="...">
                <div class="card-body">
                    <?php
                    include('admin/database/dbconfig.php');
                    $query = "SELECT * FROM aboutus";
                    $query_run = mysqli_query($connection, $query);

                  if(mysqli_num_rows($query_run))
                  {
                    foreach($query_run as $row)
                    {
                        ?>
                
                    <h1 class="card-title"><?php echo $row['title'];?></h1>
                    <h6><?php echo $row['subtitle'];?></h6>
                    <p class="card-text"><?php echo $row['description'];?></p>
                    <a href="#"><?php echo $row['links'];?></a>

                    <?php
                    }
                  }
                  else
                  {
                    echo 'No record Found';
                  }
                    ?>
                </div>
            </div>
        
        </div>


            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h1 class="card-title"><?php echo $row['title'];?></h1>
                        <h6><?php echo $row['subtitle'];?></h6>
                        <p class="card-text"><?php echo $row['description'];?></p>
                        <a href="#" class="btn btn-primary"><?php echo $row['links'];?></a>
                    </div>
                </div>
                <hr>
            <div class="card">
             <div class="card-body">
                <h1 class="card-title">Momms pride</h1>
                    <a href="#" class="btn btn-primary">Go else</a>
                <p class="card-text">One can tell over our lives</p>
                </div>
            </div>
        </div>

    </div>
</div>

<?php include('includes/footer.php'); ?>
