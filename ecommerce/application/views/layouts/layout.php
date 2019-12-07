<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <?php echo $template['partials']['header'];?>
</head>
<body >


  <!-- Content Wrapper. Contains page content -->
  <div class="super_container">
    <?php 

        echo $template['partials']['top_nav'];
        echo $template['body'];
        
    ?>
  </div>

  <?php
      echo $template['partials']['footer'];
  ?>
</body>
</html>