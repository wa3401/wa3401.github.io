<!DOCTYPE html>
<html>
<head>
	<title>Endorsement Form</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/css/endorse.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    
</head>
<body>
    <header>
    <div class="headshot-wrapper">
			<img class="headshot" src="images/will.jpeg" alt="Will Anderson" />
			<h1>Will Anderson</h1>
            <div class="social-icons">
                <a href="https://www.linkedin.com/in/will-anderson10/" class="fa fa-linkedin" target="_blank"></a>
                <a href="https://github.com/wa3401" class="fa fa-github" target="_blank"></a>
                <a href="https://soundcloud.com/will-anderson-sndcld" class="fa fa-soundcloud" target="_blank"></a>
                <a href="https://www.instagram.com/willandersonjamz/" class="fa fa-instagram" target="_blank"></a>
            </div>
			<h2>Software Engineer</h2>
		</div>
      <nav class="navbar">
        <ul>
          <li><a href="index.html">Home</a></li>
        </ul>
      </nav>
    </header>
    <main>
	
    <div class="container">
        <h1>Endorsement Form</h1>
        <form method="POST" action="">
            <label>Name:</label>
            <input type="text" name="name"><br><br>
            <label>Skill:</label>
            <input type="text" name="skill"><br><br>
            <label>Comment:</label>
            <textarea name="comment"></textarea><br><br>
            <input type="submit" name="submit" value="Submit">
        </form>
    </div>
	<hr>
    <div class="container">
	<h2>Endorsements</h2>
	<table>
		<tr>
			<th>Name</th>
			<th>Skill</th>
			<th>Comment</th>
		</tr>
		<?php
			// Database configuration
            $db_host = "localhost";
            $db_user = "mamp_practice";
            $db_pass = "XT@9yavEbia3GwMJ";
            $db_name = "endorsements";

            // Create a database connection
            $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
			
			// Check connection
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}
			
			// If form is submitted
			if (isset($_POST['submit'])) {
				// Get form data
				$name = $_POST['name'];
				$skill = $_POST['skill'];
				$comment = $_POST['comment'];
				
				// Insert form data into MySQL database
				$sql = "INSERT INTO endorsements (name, skill, comment) VALUES ('$name', '$skill', '$comment')";
				if (mysqli_query($conn, $sql)) {
					echo "Endorsement added successfully!";
				} else {
					echo "Error adding endorsement: " . mysqli_error($conn);
				}
			}
			
			// Retrieve endorsements from MySQL database
			$sql = "SELECT * FROM endorsements";
			$result = mysqli_query($conn, $sql);
			
			// Display endorsements
			if (mysqli_num_rows($result) > 0) {
				while($row = mysqli_fetch_assoc($result)) {
					echo "<tr>";
					echo "<td>" . $row['name'] . "</td>";
					echo "<td>" . $row['skill'] . "</td>";
					echo "<td>" . $row['comment'] . "</td>";
					echo "</tr>";
				}
			} else {
				echo "<tr><td colspan='3'>No endorsements yet.</td></tr>";
			}
			
			// Close MySQL database connection
			mysqli_close($conn);
		?>
	</table>
    </div>
    <footer>
        <p>&copy; 2023 William Anderson</p>
      </footer>
</body>
</html>