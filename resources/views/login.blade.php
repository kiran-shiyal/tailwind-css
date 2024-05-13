<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
    @vite('resources/css/app.css')
</head>
<body class="flex justify-center items-center min-h-screen bg-slate-300">

    <form action="#">
        <div class="bg-green-100  p-6 rounded-md max-w-screen-md  ">
            <h2 class="text-3xl text-center mb-7">Login form</h2>
            <div class="grid grid-cols-1 gap-y-4" >
                    <div>
                    <label class="" for="email">email :</label>
                    <input id="email" type="text" name="email" placeholder="Enter your email"
                        class="w-full  px-2         py-2 mt-2  bg-white border border-gray-300 rounded-md   focus:border-blue-500   focus:outline-none focus:ring"></div>
                <div> <label class="" for="password">password :</label>
                    <input id="password" type="text" name="password" placeholder="Enter your password"
                        class="w-full px-2  py-2 mt-2  bg-white border border-gray-300 rounded-md   focus:border-blue-500   focus:outline-none focus:ring"></div>
                <div>
                     <button type="submit"
                    class="mt-4 bg-blue-500 text-white px-4 py-2 w-full rounded-md hover:bg-blue-600">Submit</button>
                </div>
            </div>
                <div class="text-center mt-3 "> Don't have an account?
                    <a href="" class="text-blue-600">Register Now</a>
                </div>
        </div>
    </form>
</body>
</html>
