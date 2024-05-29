<!-- Result Frame -->
<b>
  <?php
    // Code
    if(isset($_POST['minimum'])) 
    {
      // INPUT
      $minimum = intval($_POST['minimum']);
      $maximum = intval($_POST['maximum']);

      // Handle edge case of Maximum being smaller than Minimum
      if ($maximum < $minimum) {
        echo "Maximum value must be greater than minimum value!";
      }

      // Initialize Counter
      $counter = $minimum;

      // While Loop
      while ( $counter <= $maximum ) {

        // Display Number
        echo $counter . " ";

        // Increment counter by 1
        $counter += 1;

      }
      
    }
    else {
      // Default
      echo "Results will be shown here...";
    }
  ?>
</b> 
