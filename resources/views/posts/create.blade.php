<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="hack-lg.ico" type="image/x-icon">
    <link rel="shortcut icon" href="images\hack-lg.ico" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Post - Admin Panel | Ndoch Cars & Imports</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 20px;
            box-sizing: border-box;
        }

        h2 {
            color: #333;
            text-align: center;
            margin-bottom: 20px;
            font-size: 28px;
            font-weight: 600;
        }

        p {
            text-align: center;
            color: #555;
            margin-bottom: 40px;
            font-size: 18px;
        }

        form {
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #555;
            font-size: 16px;
            font-weight: 500;
        }

        input,
        textarea,
        button {
            width: 100%;
            padding: 12px 15px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 16px;
            transition: border-color 0.3s;
        }

        input:focus,
        textarea:focus {
            outline: none;
            border-color: #007bff;
        }

        button {
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.3s;
            font-size: 18px;
            font-weight: 500;
        }

        button:hover {
            background-color: #0056b3;
            transform: translateY(-2px);
        }

        .alert {
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 5px;
            font-size: 16px;
        }

        .alert-danger {
            background-color: #f8d7da;
            border-color: #f5c6cb;
            color: #721c24;
        }

        .alert-success {
            background-color: #d4edda;
            border-color: #c3e6cb;
            color: #155724;
        }

        @media (max-width: 767px) {
            form {
                padding: 20px;
            }
        }
    </style>
</head>

<body>
    <h2>Create Post - Admin Panel</h2>
    <p>This section is for administrators only. Please fill out the form below to create a new vehicle post for Ndoch
        Cars & Imports.</p>

    <form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
        @csrf

        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" required>
        </div>
        <div>
            <label for="model">Model</label>
            <input type="text" name="model" id="model" required>
        </div>
        <div>
            <label for="price">Price</label>
            <input type="text" name="price" id="price" required>
        </div>
        <div>
            <label for="condition">Condition</label>
            <select name="condition" id="condition" required>
                <option value="Foreign Used">Foreign Used</option>
                <option value="Local Used">Local Used</option>
                <option value="Brand New">Brand New</option>
            </select>
        </div>
        <div>
            <label for="transmission">Transmission</label>
            <input type="text" name="transmission" id="transmission" required>
        </div>
        <div>
            <label for="drive">Drive</label>
            <input type="text" name="drive" id="drive" required>
        </div>
        <div>
            <label for="engine_type">Engine Number</label>
            <input type="text" name="engine_type" id="engine_type" required>
        </div>
        <div>
            <label for="chessis">Chessis/Frame Number</label>
            <input type="text" name="chessis" id="chessis" required>
        </div>
        <div>
            <label for="engine_size">Rating(CC)</label>
            <input type="text" name="engine_size" id="engine_size" required>
        </div>
        <div>
            <label for="fuel">Fuel Type</label>
            <input type="text" name="fuel" id="fuel" required>
        </div>
        <div>
            <label for="year">Year of Manufacture</label>
            <input type="text" name="year" id="year" required>
        </div>
        <div>
            <label for="color">Color</label>
            <input type="text" name="color" id="color" required>
        </div>
        <div>
            <label for="doors">Doors</label>
            <input type="text" name="doors" id="doors" required>
        </div>
        <div>
            <label for="seats">Number of passengers</label>
            <input type="text" name="seats" id="seats" required>
        </div>
        <div>
            <label for="body_type">Body Type</label>
            <input type="text" name="body_type" id="body_type" required>
        </div>
        <div>
            <label for="mileage">Mileage</label>
            <input type="text" name="mileage" id="mileage" required>
        </div>
        <div>
            <label for="status">Status</label>
            <input type="text" name="status" id="status" required>
        </div>
        <div>
            <label for="image">Images</label>
            <input type="file" name="image[]" id="image" multiple>
            <div id="imagePreview" class="image-preview"></div>


        </div>


        <button type="submit">Submit</button>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

    </form>


    <style>
        .drop - zone {
            border: 2 px dashed #ddd;
            border - radius: 5 px;
            padding: 20 px;
            text - align: center;
            cursor: pointer;
            margin - bottom: 20 px;
        }

        .drop - zone__prompt {
            font - size: 16 px;
            color: #777;
        }

        .image-preview {
            display: flex;
            flex-wrap: wrap;
            margin-bottom: 20px;
        }

        .image-preview img {
            width: 150px;
            height: 150px;
            object-fit: cover;
            margin-right: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
        }
    </style>
    <script>
        // Handle file input change
        const fileInput = document.getElementById('image');

        fileInput.addEventListener('change', function() {
            handleFiles(this.files);
        });

        // Display image previews
        function handleFiles(files) {
            const preview = document.getElementById('imagePreview');
            preview.innerHTML = '';

            for (const file of files) {
                if (file.type.startsWith('image/')) {
                    const img = document.createElement('img');
                    img.classList.add('preview-image');
                    img.file = file;
                    preview.appendChild(img);

                    const reader = new FileReader();
                    reader.onload = (function(aImg) {
                        return function(e) {
                            aImg.src = e.target.result;
                        };
                    })(img);

                    reader.readAsDataURL(file);
                }
            }

            const counter = document.createElement('p');
            counter.textContent = `Number of images: ${files.length}`;
            preview.appendChild(counter);
        }

        // Remove image from preview
        document.getElementById('imagePreview').addEventListener('click', function(e) {
            if (e.target && e.target.matches('img.preview-image')) {
                e.target.parentNode.removeChild(e.target);
            }
        });
    </script>
</body>

</html>
