<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Thank You</title>
    <style>
        /* Set background color and font styles */
        body {
            background-color: #f7f7f7;
            font-family: Arial, sans-serif;
        }
        
        /* Center thank you message on the page */
        .container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        
        /* Style thank you message */
        h1 {
            font-size: 4rem;
            margin-bottom: 2rem;
            color: #333;
        }
        
        /* Add animation to thank you message */
        .animate {
            animation: bounce 1s ease-in-out;
        }
        
        /* Define animation keyframes */
        @keyframes bounce {
            0% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.2);
            }
            100% {
                transform: scale(1);
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="animate">Thank You for Your Message!</h1>
        <img src="path-to-your-image" alt="Thank You Image">
    </div>
</body>
</html>
