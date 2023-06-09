<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assainment 6</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    
    <form action="submit-form.php" method="POST" enctype="multipart/form-data" class="max-w-md mx-auto">
        <div class="mb-4">
          <label for="name" class="block text-gray-700 font-bold mb-2">Name:</label>
          <input type="text" id="name" name="name" required class="border border-gray-500 p-2 w-full rounded">
        </div>
      
        <div class="mb-4">
          <label for="email" class="block text-gray-700 font-bold mb-2">Email:</label>
          <input type="email" id="email" name="email" required class="border border-gray-500 p-2 w-full rounded">
        </div>
      
        <div class="mb-4">
          <label for="password" class="block text-gray-700 font-bold mb-2">Password:</label>
          <input type="password" id="password" name="password" required class="border border-gray-500 p-2 w-full rounded">
        </div>
      
        <div class="mb-4">
          <label for="profile-pic" class="block text-gray-700 font-bold mb-2">Profile Picture:</label>
          <input type="file" id="profile-pic" name="profile-pic" accept="image/*" required class="border border-gray-500 p-2 w-full rounded">
        </div>
      
        <div class="mb-4">
          <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Submit</button>
        </div>
      </form>
</body>
</html>