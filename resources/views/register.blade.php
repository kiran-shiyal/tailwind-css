<!DOCTYPE html>

   <html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <!-- Include Tailwind CSS -->
    @vite('resources/css/app.css')


</head>
<body class="flex justify-center items-center min-h-screen">
    <form action="">
        <div class= " bg-gray-100 p-8 rounded-lg shadow-lg max-w-screen-md ">
            <h2 class="text-2xl font-bold  mb-9 text-center">User Registration</h2>
            <div class="grid sm:grid-cols-2 grid-cols-1 gap-4">
                <div>
                    <label class="" for="firstName">firstName :</label>
                    <input id="firstName" type="text" name="firstName" placeholder="Enter your first name"
                        class="w-full px-2  py-2 mt-2 bg-white border border-gray-300 rounded-md    focus:border-blue-500   focus:outline-none focus:ring">

                    </div>
                <div>
                    <label class="" for="lastName">lastName :</label>
                    <input id="lastName" type="text" name="lastName" placeholder="Enter your last name"
                        class="  w-full px-2  py-2 mt-2  bg-white border border-gray-300 rounded-md   focus:border-blue-500   focus:outline-none focus:ring">
                </div>
                <div>
                    <label class="" for="email">email :</label>
                    <input id="email" type="text" name="email" placeholder="Enter your email"
                        class="  w-full px-2  py-2 mt-2  bg-white border border-gray-300 rounded-md   focus:border-blue-500   focus:outline-none focus:ring">
                </div>
                <div>
                    <label class="" for="password">password :</label>
                    <input id="password" type="text" name="password" placeholder="Enter your password"
                        class="  w-full px-2  py-2 mt-2  bg-white border border-gray-300 rounded-md   focus:border-blue-500   focus:outline-none focus:ring">
                </div>
                <div>
                    <label class="" for="dob">Date of Birth :</label>
                    <input id="dob" type="date" max="<?php echo date("Y-m-d"); ?>" name="dob" placeholder="Enter your birth date"
                        class="  w-full px-2  py-2 mt-2  bg-white border border-gray-300 rounded-md   focus:border-blue-500   focus:outline-none focus:ring">
                </div>
                <div>
                    <label class="block mb-2">Gender :</label>
                    <div class="flex content-center mt-4  justify-evenly  flex-wrap">

                        <div class="">
                            <label class="inline-flex items-center  ">
                                <input type="radio" class="w-4 h-5" name="gender" value="male">
                                <span class="ml-1">Male</span>
                            </label>

                        </div>
                        <div>
                            <label class="inline-flex items-center">
                                <input type="radio" class="w-4 h-4" name="gender" value="female">
                                <span class="ml-1">Female</span>
                            </label>
                        </div>
                        <div>
                            <label class="inline-flex items-center">
                                <input type="radio" class="w-4 h-4" name="gender" value="other">
                                <span class="ml-1">Other</span>
                            </label>
                        </div>
                    </div>
                </div>
                <div>
                    <label class="" for="number">Contact Number :</label>
                    <input id="number" type="number" name="number" placeholder="Enter your contact number"
                        class="  w-full px-2  py-2 mt-2  bg-white border border-gray-300 rounded-md   focus:border-blue-500  focus:outline-none focus:ring">
                </div>
                <div>
                    <label class="" for="file"> Profile Picture :</label>
                    <input id="file" type="file" name="file"
                        class="  w-full px-2  py-[5px] mt-2   bg-white border border-gray-300 rounded-md   focus:border-blue-500  focus:outline-none focus:ring">
                </div>
            </div>
                <button type="submit"
                class="mt-5 bg-blue-500 text-white px-4 py-2 w-full rounded-md hover:bg-blue-600">Submit</button>
                <div class="text-center mt-8 "> Already have an account?
                    <a href="" class="text-blue-600"> Login Now</a>
                </div>
            </div>
    </form>
</body>
</html>
