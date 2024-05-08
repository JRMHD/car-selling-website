<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Contact Form Submission</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333333;
            text-align: center;
            margin-bottom: 30px;
        }

        p {
            color: #555555;
            margin: 15px 0;
            line-height: 1.5;
        }

        .label {
            font-weight: bold;
            color: #333333;
        }

        .cta {
            background-color: #2196F3;
            color: #ffffff;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            display: inline-block;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>New Contact Form Submission</h1>
        <p>Dear Website Owner,</p>
        <p>You have received a new message through your contact form. Please review the details below and respond to the
            sender as soon as possible.</p>
        <p><span class="label">Name:</span> {{ $data['name'] }}</p>
        <p><span class="label">Email:</span> {{ $data['email'] }}</p>
        <p><span class="label">Phone:</span> {{ $data['phone'] }}</p>
        <p><span class="label">Subject:</span> {{ $data['subject'] }}</p>
        <p><span class="label">Message:</span> {{ $data['message'] }}</p>
        <a href="mailto:{{ $data['email'] }}" class="cta">Reply to Sender</a>
    </div>
</body>

</html>
