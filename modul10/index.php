<!DOCTYPE html>
<html lang="en">

<head>
    
    <title>Login</title>
  
    <script src="https://cdn.tailwindcss.com"></script>
   
</head>

<body>
<?php require "koneksi.php" ;
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Mencegah SQL Injection
    $email = $koneksi_user->real_escape_string($email);
    $password = $koneksi_user->real_escape_string($password);

    // Mengambil data dari database
    $sql = "SELECT * FROM user WHERE username='$email' AND password='$password'";
    $result = $koneksi_user->query($sql);

    if ($result->num_rows > 0) {
        // Login berhasil
        $_SESSION['email'] = $email;
        echo "<script>alert('Login berhasil!');</script>";
        header('location:cetak.php');
    } else {
        // Login gagal
        echo "<script>alert('Email atau password salah!');</script>";
    }
}

?>
  
    <div class="contain py-16">
        <div class="max-w-lg mx-auto shadow px-6 py-7 rounded overflow-hidden">
            <h2 class="text-2xl uppercase font-medium mb-1">Login</h2>
            <p class="text-gray-600 mb-6 text-sm">
                Selamat datang di Data Kontak
            </p>
            <form action="#" method="post" autocomplete="off">
                <div class="space-y-2">
                    <div>
                        <label for="email" class="text-gray-600 mb-2 block">Email address</label>
                        <input type="email" name="email" id="email"
                            class="block w-full border border-gray-300 px-4 py-3 text-gray-600 text-sm rounded focus:ring-0 focus:border-green-600 placeholder-gray-400"
                            placeholder="youremail.@domain.com">
                    </div>
                    <div>
                        <label for="password" class="text-gray-600 mb-2 block">Password</label>
                        <input type="password" name="password" id="password"
                            class="block w-full border border-gray-300 px-4 py-3 text-gray-600 text-sm rounded focus:ring-0 focus:border-green-600 placeholder-gray-400"
                            placeholder="*******">
                    </div>
                </div>
                <div class="flex items-center justify-between mt-6">
                    <div class="flex items-center">
                        <input type="checkbox" name="remember" id="remember"
                            class="text-green-600 focus:ring-0 rounded-sm cursor-pointer">
                        <label for="remember" class="text-gray-600 ml-3 cursor-pointer">Remember me</label>
                    </div>
                    <a href="#" class="text-green-600">Forgot password</a>
                </div>
                <div class="mt-4">
                    <button type="submit"
                        class="block w-full py-2 text-center text-white bg-green-600 border border-green-600 rounded hover:bg-transparent hover:text-green-600 transition uppercase font-roboto font-medium">Login</button>
                </div>
            </form>

            
        </div>
    </div>
   

  

 
</body>

</html>