<?php

// API Server: https://api.demo.sitehost.co.nz
// API Version: 1.0
// API Key: d17261d51ff7046b760bd95b4ce781ac
// Client ID: 293785
// Formats: json or xml/

// sample api call
// {api_server}/{api_version}/{method}.{format}?{args}&apikey={api_key}

// Define the API URL you want to fetch data from
$api_url = 'https://api.demo.sitehost.co.nz/1.0/srs/list_domains.json?client_id=293785&apikey=d17261d51ff7046b760bd95b4ce781ac';

// Fetch data from the API
$response = file_get_contents($api_url);

// Parse the JSON data
$data = json_decode($response);

?>

<!DOCTYPE html>
<html>

<head>
    <title>API Data Display</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>
    <div class="container">
        <h1>API Data Display</h1>
        <?php
              // Check if the request was successful
              if ($data === null) {
                  echo 'Failed to retrieve data from the API.';
              } else {
                  // Display the data
                  echo '<div id="data">';
                  foreach ($data as $item) {
                      echo '<p>' . $item->name . ': ' . $item->value . '</p>';
                  }
                  echo '</div>';
              }

      ?>
    </div>


    <script src="script.js"></script>
</body>

</html>