<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/mess.css">
    <title>Simple Messaging Interface</title>
    <style>
        /* Basic styling for the messaging interface */
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .message {
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .user-message {
            background-color: #f2f2f2;
        }
        .other-message {
            background-color: #d9edf7;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Messages -->
        <div class="message user-message">
            <p>Hello, how are you?</p>
        </div>
        <div class="message other-message">
            <p>I'm good, thank you!</p>
        </div>
        <div class="message user-message">
            <p>What are you up to today?</p>
        </div>
        <div class="message other-message">
            <p>Just working on some projects. How about you?</p>
        </div>

        <!-- Message input form -->
        <form action="#" method="post">
            <input type="text" name="message" placeholder="Type your message...">
            <button type="submit">Send</button>
        </form>
    </div>
</body>
</html>

