<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Username Verification</title>
    <style>
        /* Global Styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        /* Container Styles */
        .container {
            background: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px; /* Fixed width for the form */
        }

        h3 {
            text-align: center;
            margin-bottom: 15px;
        }

        /* Input Field Styles */
        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        /* Button Styles */
        button, .submit-button {
            background-color: green;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
        }

        button:hover, .submit-button:hover {
            background-color: darkgreen;
        }

        /* Status Message */
        .status {
            margin-top: 10px;
            text-align: center;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <div class="container">
        <h3>Username Verification</h3>
        <!-- Form for Username Verification -->
        <form id="usernameForm">
            <label for="username">Username:</label><br>
            <input type="text" id="username" name="username" required><br>
            <button type="submit" class="submit-button">Submit</button>
        </form>

        <!-- Status Message -->
        <p class="status" id="statusMessage"></p>
    </div>

    <script src="verify_ajax.js"></script>
</body>
</html>
