<?php
session_start();

// Check if the consent button was pressed
if (isset($_POST['consent'])) {
  // Set a session variable to indicate consent
  $_SESSION['consented'] = true;

  // Redirect to the main page
  header('Location: /cv/limited.php');
  // Capture IP address and timestamp
  $visitorIP = $_SERVER['REMOTE_ADDR'];
  $visitTime = date('Y-m-d H:i:s');

  // Get location data (using a third-party service)
  // You need an API key from a geolocation service provider
  $apiKey = 'f842cb9f456e6a8b6ece78c7c104d7a2';
  $locationData = file_get_contents("http://api.ipstack.com/$visitorIP?access_key=$apiKey");
  $locationData = json_decode($locationData, true);

  // Extract location information
  $country = $locationData['country_name'];
  $city = $locationData['city'];

  // Prepare email content
  $email_from = 'portfolio@sjpret.com';
  $headers = "From: <$email_from> \r\n";
  $emailContent = "You have a visitor, here is it's information:\nIP: $visitorIP,\nLocation: $city,\nCountry: $country,\nTime: $visitTime.";

  // Send email
  mail('sjpret12345@gmail.com', 'New Site Visit', $emailContent, $headers);

  // Sqlite database
  try {
      $pdo = new PDO("sqlite:/var/www/html/assets/db/database.db");
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch (PDOException $e) {
      die('Connection failed: ' . $e->getMessage());
  }

  $stmt = $pdo->prepare("INSERT INTO Visitors (ip_address, city, country, timestamp) VALUES (:ip_address, :city, :country, :timestamp)");
  $stmt->bindParam(':ip_address', $visitorIP, PDO::PARAM_STR);
  $stmt->bindParam(':city', $city, PDO::PARAM_STR);
  $stmt->bindParam(':country', $country, PDO::PARAM_STR);
  $stmt->bindParam(':timestamp', $visitTime, PDO::PARAM_STR);

  try {
      $stmt->execute();
  } catch (PDOException $e) {
      die('Error: ' . $e->getMessage());
  }
  exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portfolio | SJ Pretorius</title>
  <link id='favicon' rel="shortcut icon" href="/assets/images/business.png" type="image/png">
  <meta name="description" content="Welcome to sjpret.co.za, the digital home of SJ Pretorius, a versatile software developer based in South Africa. Explore a portfolio showcasing expertise in C#, .NET, Java, Python, and web development, complemented by professional certifications in Azure and more." />
  <style>
html {
  font-size: 62.5%;
  overflow-x: hidden;
  overflow-y: hidden;
}

body {
  display: flex;
  justify-content: center; /* Horizontal centering */
  align-items: center;     /* Vertical centering */
  min-height: 75vh;       /* Full viewport height */
  margin: 0;               /* Remove default margin */
  background: #223394;
}

/* Your existing .consent-form styles */
.consent-form {
  z-index: 1;
  max-width: 300px;
  padding: 20px;
  background-color: #0441ea;
  border-radius: 8px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  font-family: 'Nunito', sans-serif;
}

.consent-form h2 {
  text-align: center;
  color: #ffffff;
  margin-bottom: 20px;
}

.consent-form form div {
  margin-bottom: 10px;
  padding-left: 35%;
}

.consent-form input[type="submit"] {
  padding: 8px;
  border: 1px solid #ffffff;
  border-radius: 4px;
  background-color: #223394;
  color: white;
  margin-top: 10px;
  width: 45%;
}

.consent-form input[type="submit"]:hover {
  background-color: #1a2a70;
}

#particles-js {
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  z-index: -1;
}
    </style>
</head>
<body>
  <div id="particles-js"></div>
  <div class="consent-form">
    <h2>By visiting this portfolio site, you consent to have your IP address shared with the site owner for verification to ensure you are not a bot.</h2>
    <form method="POST">
      <div>
        <input type="submit" name="consent" value="Consent">
      </div>
    </form>
  </div>
  <script src="/assets/js/particles.min.js"></script>
  <script src="/assets/js/app.js"></script>
</body>
</html>
