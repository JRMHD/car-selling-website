<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="hack-lg.ico" type="image/x-icon">
    <link rel="shortcut icon" href="images\hack-lg.ico" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Post - Admin Panel | HACK SOLUTIONS USA</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 20px;
            box-sizing: border-box;
        }

        h2 {
            color: #3498db;
            text-align: center;
            margin-bottom: 20px;
        }

        p {
            text-align: center;
            color: #555;
            margin-bottom: 40px;
        }

        form {
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #555;
        }

        input,
        textarea,
        button {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 16px;
        }

        button {
            background-color: #3498db;
            color: #fff;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #2980b9;
        }
    </style>
</head>

<body>
    <h2>Create Post - Admin Panel</h2>
    <p>This page is for administrators only. HACK SOLUTIONS USA</p>

    <form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data" onsubmit="parsePrice()">
        @csrf

        <div>
            <label for="title">Title</label>
            <input type="text" name="title" id="title" required>
        </div>

        <div>
            <label for="content">Content</label>
            <textarea name="content" id="content" required></textarea>
        </div>

        <div>
            <label for="price">Price</label>
            <input type="text" name="price" id="priceInput" placeholder="e.g., 19.99/week">
            <input type="hidden" name="parsedPrice" id="parsedPrice">
        </div>

        <div>
            <label for="image">Image</label>
            <input type="file" name="image" id="image">
        </div>

        <button type="submit">Submit</button>
    </form>
</body>

</html>
