<?php 
  session_start();
  include_once "../php/config.php";
  if(!isset($_SESSION['unique_id'])){
    // header("location: login.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Room-me chores</title>
  <link rel="stylesheet" href="../style.css">
  <script src="https://kit.fontawesome.com/5f546344bc.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="wrapper">
  <div class="buttons">
  <a id="button" class="messages" href="../users.php"><i class="fa-solid fa-message"></i></a>
    <a id="button" class="messages" href="../Bills/bill_list.php"><i class="fa-solid fa-receipt"></i></a>
    <a id="button" class="messages" href="../iou/iou.php"><i class="fa-solid fa-money">$</i></a>
    <a id="button" class="messages" href="#"><i class="fa-solid fa-broom"></i></a>

    </div>
    <section class="users">

      <header>
        <div class="content">

          <?php 
            $sql = mysqli_query($conn, "SELECT count(*) FROM chores where status='N';");
            if(mysqli_num_rows($sql) > 0){
              $row = mysqli_fetch_assoc($sql);
            }
          ?>
          <div class="details">
            <span>CHORES</span>
            <p style="margin-top: 10px;">Number of undone chores: <?php echo $row['count(*)']; ?></p>
          </div>
        </div>
        <a href="../php/logout.php?logout_id=<?php echo $row['unique_id']; ?>" class="logout">Logout</a>
      </header>
      <div class="users-list">


      </div>
      <a href="choreadd.php" class="add">+</a>
    </section>
  </div>

  <script src="chores.js"></script>


</body>
</html>
