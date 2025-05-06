<!DOCTYPE html>
<!-- ICS2O-Unit5-04-PHP -->
<html lang="en-ca">

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Student Discount, in PHP" />
  <meta name="keywords" content="mths, icd2o" />
  <meta name="author" content="Peter Zerbinos" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.orange-pink.min.css" />
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="apple-touch-icon" sizes="180x180" href="./apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="./favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="./favicon-16x16.png" />
  <link rel="manifest" href="./site.webmanifest" />
  <title>Student Discount, in PHP</title>
</head>


<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Student Discount, in PHP</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="right-image">
        <img src="./images/museum.jpg" alt="Museum" />
      </div>
      <div class="page-content">Please enter in your age and select a day.</div>
      <br />
      <form action="answer.php" method="GET">
        <div class="mdl-textfield mdl-js-textfield">
          <!-- input pattern attribute -->
          <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="user-age" />
          <!-- mdl-textfield__label -->
          <label class="mdl-textfield__label" for="demo-input">Age...</label>
          <!-- class "mdl-textfield__error" -->
          <span class="mdl-textfield__error">Input is not a number</span>
        </div>
        <br />
        <br />
        <!-- Dropdown box for date-->
        <div
          class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
          <select class="mdl-textfield__input" name="day-of-week">
            <option value="MON" data-selected="true">Monday</option>
            <option value="TUE">Tuesday</option>
            <option value="WED">Wednesday</option>
            <option value="THU">Thursday</option>
            <option value="FRI">Friday</option>
            <option value="SAT">Saturday</option>
            <option value="SUN">Sunday</option>
          </select>
          <label class="mdl-textfield__label" for="day-of-week">Day of the Week</label>
        </div>
        <br />
        <!-- Accent-colored raised button with ripple -->
        <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent"
          type="submit">
          Check for Discount
        </button>
      </form>
      <br />
      <div class="page-content">
        <div id="result"></div>
      </div>
    </main>
  </div>
</body>

</html>