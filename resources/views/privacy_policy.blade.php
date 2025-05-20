<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Privacy Policy</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h1,
        h2 {
            color: #333;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        h2 {
            margin-top: 20px;
            border-bottom: 2px solid #ddd;
            padding-bottom: 5px;
        }

        p {
            margin: 10px 0;
        }

        ul {
            margin: 10px 0 10px 20px;
        }

        footer {
            margin-top: 20px;
            font-size: 0.9em;
            color: #555;
            text-align: center;
        }

        a {
            color: #007BFF;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="container">
         <p>{{$privacy_policy->title}}</p>
         {!! $privacy_policy->description !!}

        <footer>
            <p>&copy; [Insert Year] [Institution Name]. All rights reserved.</p>
        </footer>
    </div>
</body>

</html>
