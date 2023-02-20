<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page - Your Site</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config({
            theme: {
                extend: {
                    colors: {
                                'primary': '#2B3467',
                        },
                    },
                },
            },
        })

    </script>

    <!-- Material Tailwind -->
    <link rel="stylesheet" href="https://unpkg.com/@material-tailwind/html@latest/styles/material-tailwind.css" />
    <script src="https://unpkg.com/@material-tailwind/html@latest/scripts/script-name.js"></script>

</head>

<body>
    <div class="flex h-screen bg-gradient-to-r from-[#002B5B] via-[#2B4865] to-[#256D85]">
        <div class="m-auto w-full sm:w-4/5 md:w-3/4 lg:w-2/3 xl:w-1/4">
            <div class="bg-white p-8 rounded-xl shadow-md">
                <h1 class="text-2xl font-bold mb-8 text-center font-poppins">Login Page</h1>
                <form>
                    <div class="mt-4">
                        <label class="text-gray-700 font-bold mb-2" for="username">Nama pengguna</label>
                        <input class="mt-2 appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" id="username" name="username">
                    </div>
                    <div class="mt-4">
                        <label class="text-gray-700 font-bold mb-2" for="password">Kata sandi</label>
                        <input class="mt-2 appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="password" id="password" name="password">
                    </div>
                    <div class="mt-4">
                        <input type="checkbox" class="default:ring-2" id="remember">
                        <label class="text-gray-700" for="remember">Remember Me</label>
                    </div>
                    <div class="mt-8">
                        <button class="w-full bg-[#002B5B] hover:bg-sky-700 text-white font-bold py-3 px-4 rounded-lg focus:outline-none focus:shadow-outline" type="submit">Masuk</button>
                    </div>
                    <div class="mt-4">
                        <a href="#" class="text-center w-full bg-[#8FE3CF] hover:bg-[#2B4865] text-white font-bold py-3 px-4 rounded-lg focus:outline-none focus:shadow-outline" type="submit">Daftar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
