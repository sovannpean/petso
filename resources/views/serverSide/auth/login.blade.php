<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>PetSo - Login</title>
</head>
<body>
    <section class="w-full h-[1034px] flex items-center justify-center bg-cover bg-[url('image/backgroundSignup.jpeg')]">
        <div class="w-[580px] bg-slate-50 rounded-2xl p-10">
            <form class="w-full">
                <h1 class="text-3xl font-bold text-center mb-10">Login</h1>
                <div class="mb-5">
                    <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone</label>
                    <input type="number" id="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                </div>
                <div class="mb-5">
                    <div class="flex justify-between">
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your password</label>
                        <i class="fa-regular fa-eye"></i>
                    </div>
                    <input type="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                </div>
                <div class="flex items-start mb-5">
                    <div class="flex items-center h-5">
                        <input id="remember" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" required />
                    </div>
                    <div class="flex justify-between w-full">
                        <label for="remember" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Remember me</label>
                        <a href="#" class="text-sm font-medium text-[#526BEE]">Forgot Password?</a>
                    </div>
                </div>
                <button type="submit" class="mb-10 text-white bg-blue-700 w-[500px] hover:bg-blue-800 py-2.5 font-medium rounded-lg">Login</button>
                <div class="mb-5 flex justify-between items-center">
                    <hr class="w-[35%]">
                    <p>Or Login with</p>
                    <hr class="w-[35%]">
                </div>
                <div class="flex justify-between">
                    <div class="items-center justify-center gap-3 flex border rounded-md w-[150px] h-[50px] hover:bg-[#5B96A6] hover:text-white">
                        <i class="fa-brands fa-google text-2xl"></i>
                        <label for="google" class="font-semibold">Google</label>
                    </div>
                    <div class="items-center justify-center gap-3 flex border rounded-md w-[150px] h-[50px] hover:bg-[#5B96A6] hover:text-white">
                        <i class="fa-brands fa-facebook text-2xl"></i>
                        <label for="google" class="font-semibold">Facebook</label>
                    </div>
                    <div class="items-center justify-center gap-3 flex border rounded-md w-[150px] h-[50px] hover:bg-[#5B96A6] hover:text-white">
                        <i class="fa-brands fa-apple text-2xl"></i>
                        <label for="google" class="font-semibold">Apple Id</label>
                    </div>
                </div>
                <p class="mt-10 text-center">Don't have an account? <a href="/signup" class="font-semibold text-[#526BEE]">Sign Up</a></p>
            </form>
            
        </div>
    </section>
</body>
</html>