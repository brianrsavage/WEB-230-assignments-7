<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div class="fluid-container">
  <div class="row justify-content-center">
    <div class="col-6" style="padding:25px;">
      <h1>Using htmlentities - Extra Credit</h1>
    </div>
  </div>
    <?php

      $day = '';
      $date = '';
      $year = '';

      if ( isset($_GET['day']) && isset($_GET['date']) && isset($_GET['year']) ) {
        // 01. Add htmlentities to form submission.
        $day = htmlentities($_GET['day']);
        $date = htmlentities($_GET['date']);
        $year = htmlentities($_GET['year']);

        $msg = '';
        $msgType = 'success';
        if ( !empty($day) && !empty($date) && !empty($year)) {
          $msg = 'It is '. $day .' '. $date .' '. $year;
        }else{
          $msg = 'Fill in all fields.';
          $msgType = 'danger';
        }
        echo '<div class="row justify-content-center"><div class="col-6"><div class="alert alert-'.$msgType.'" role="alert"><h5>'.$msg.'</h5></div></div></div>';
      }
    ?>
    <div class="row justify-content-center">
      <div class="col-6">
        <form method="GET">
          <div class="form-group">
            <label for="day">Day:</label>
            <!--
              02. Make the day field required and added HTML5 validation to check that only letters have
              been entered with a minimum of two.
            -->
            <input type="text" name="day" class="form-control" placeholder="Enter day here. e.g. Monday, Tuesday, etc."
                pattern="[A-z]{5,}" title="Day should only contain letters. e.g. Monday, Tuesday, etc."
                value="<?php echo $day; ?>" required>
          </div>
          <div class="form-group">
            <label for="date">Date:</label>
            <!--
              03. Make the date field required and added HTML5 validation to check that only numbers, no zeros,
              have been entered with a minimum of one.
            -->
            <input type="text" name="date" class="form-control" placeholder="Enter the numeric date here."
                pattern="^[1-9]|[1-2][0-9]|3[0-1]$" title="Day should only contain numbers. e.g. 1, 11, etc."
                value="<?php echo $date; ?>" required>
          </div>
          <div class="form-group">
            <label for="year">Year:</label>
            <!--
              04. Make the year field required and added HTML5 validation to check that only numbers, no zeros in
              the beginning, have been entered with a minimum of one.
            -->
            <input type="text" name="year" class="form-control" placeholder="Enter the numeric year here."
            pattern="[1-9][0-9]{3}" title="Day should only contain numbers. e.g. 1971, 2018, etc."
            value="<?php echo $year; ?>" required>
          </div>
          <div>
            <input type="submit" class="btn" value="Submit">
          </div>
        </form>
      </div>
    </div>
  </div>