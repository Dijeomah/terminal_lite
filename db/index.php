<!DOCTYPE html>
<html>
<head>
    <title>User Information</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h1 class="mt-4">User Information</h1>

    <form method="GET" action="">
        <div class="form-group">
            <label for="phone1">Phone 1:</label>
            <input type="text" class="form-control" name="phone1" id="phone1" required>
        </div>

        <div class="form-group">
            <label for="phone2">Phone 2:</label>
            <input type="text" class="form-control" name="phone2" id="phone2" required>
        </div>

        <button type="submit" class="btn btn-primary">Fetch Information</button>
    </form>

    <?php
    // Check if the form is submitted
    if (isset($_GET['phone1']) && isset($_GET['phone2'])) {
        // Get the values from the form
        $phone1 = $_GET['phone1'];
        $phone2 = $_GET['phone2'];

        // Fetch user information based on phone1 and phone2
        // Replace this code with your actual logic to fetch user information
        $user1Info = getUserInformation($phone1);
        $user2Info = getUserInformation($phone2);

        // Display the fetched user information
        echo "<h2>User 1 Information:</h2>";
        echo "<p>Name: " . $user1Info['name'] . "</p>";
        echo "<p>Email: " . $user1Info['email'] . "</p>";

        echo "<h2>User 2 Information:</h2>";
        echo "<p>Name: " . $user2Info['name'] . "</p>";
        echo "<p>Email: " . $user2Info['email'] . "</p>";
    }

    // Function to fetch user information
    function getUserInformation($phone)
    {
        // Replace this code with your actual logic to fetch user information
        // using the provided phone number
        $userInformation = [
            'name' => 'John Doe',
            'email' => 'johndoe@example.com'
        ];

        return $userInformation;
    }

    ?>
</div>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
