<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gallery</title>
  <link rel="icon" type="image/png" href="../images/assets/icons/skaros.png"/>
  <link rel="stylesheet" href="../style.css">
  <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css">
  <script type="text/javascript" src="../scripts.js"></script>
</head>

<body>

<?php
include_once('./header.php');
?>

  <section class="gallery">

    <!-- Collecting all data from the csv files -->
    <?php
    //Categories
      if (($file = fopen("../Categories.csv", "r")) !== FALSE)
      {
        while (($data = fgetcsv($file, 500, ",")) !== FALSE)
        {		
          $data_categories[] = $data;
        }
        fclose($file);
      }
    //Artworks
      if (($file = fopen("../Skaros.csv", "r")) !== FALSE)
      { 
        while (($data = fgetcsv($file, 500, ",")) !== FALSE)
        {		 
          $data_artworks[] = $data;
        }
        fclose($file);
      }
    ?>

<!----- Navigation ------------------------------------------------->
    <select class="nav">
      <option class="nav-item active" data-categories="all">All</option>
      <?php         
        for ($i = 1; $i < count($data_categories); $i++)
        {
          $categories = $data_categories[$i][1];
          $categories_trim = str_replace(' ', '', $data_categories[$i][1]);
          echo "<option data-categories='".$categories_trim."' class='nav-item'>".$categories."</option>";
        }
      ?>
    </select>

<!----- Container ------------------------------------------------->
    <div class="container">
      <?php
        for ($i = 1; $i < count($data_artworks); $i++)
        {
          $yn = $data_artworks[$i][0];
          $name = $data_artworks[$i][1];
          $path = $data_artworks[$i][2];
          $preview = $data_artworks[$i][3];
          $cat1 = $data_artworks[$i][4];
          $cat2 = $data_artworks[$i][5];
          $categories = $cat1.'|'.$cat2;
          $categories_trim = str_replace(' ', '', $categories);
          $tags = $data_artworks[$i][6];
          $date = $data_artworks[$i][7];
          $description = $data_artworks[$i][8];
          
          if ($yn != "X")
          {
            echo "<div data-categories='".$categories_trim."' class=\"col\">";
              echo "<h1>- | ".$name." | -</h1>";
                if (str_contains($path, 'https'))
                {
                  echo "<iframe src='".$path."' frameborder='0' allowfullscreen alt='".$name."' loading='lazy'></iframe>";
                }
                else
                {
                  echo "<a href='../images/artworks/".$path."'>";
                    if ($preview == null)
                    {
                      echo "<img src='../images/artworks/".$path."'/>";
                    }
                    else 
                    {
                      echo "<img src='../images/previews/".$preview."'/>";
                    }
                  echo "</a>";
                }

            /*----- Informations Modal -----------------------------
              echo "<button class='info' onclick='openDialog(".$i.")'>Informations</button>";
              echo "<dialog id='dialog".$i."'>";
              echo "<button onclick='closeDialog()'>X</button>";
                echo "<div>";
                  echo "<h1>- | ".$name." | -</h1>";
                  echo "<p>".$description."<p>";
                  echo "<div class='tags'>";
                    if ($cat1 != "")
                    {
                      echo "<h2>".$cat1."</h2>";
                    }
                    if ($cat2 != "")
                    {
                      echo "<h2>".$cat2."</h2>";
                    }
                  echo "</div>";
                  echo "<h3>".$date."</h3>";
                echo "</div>";
              echo "</dialog>";*/
            //-----------------------------------------------------
            
            echo "</div>";
          }
        }
      ?>
    </div>

  </section>

<?php
include_once('./footer.php');
?>

</body>
</html>