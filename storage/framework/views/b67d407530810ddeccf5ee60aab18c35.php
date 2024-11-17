<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login | GX DOJO</title>
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
</head> 

<body class="bg-lime-50 static " style="background-image: url('')">
    <img src="<?php echo e(asset('img/bg login.jpg')); ?>" alt="" class="absolute top-0 right-0 h-screen w-1/3">

    
    <div id="kiri" class=" absolute w-2/3 bg-gradient-to-tr from-lime-700 to-lime-300 h-dvh  backdrop-blur-sm">

        
        <div class="w-full  h-1/3 ">
            
            
            <div class="border-2 shadow w-[180px] h-[150px] mx-auto mt-12">

            </div>

            
            <div class="mt-2 w-full h-auto text-center">
                <span class="font-extrabold text-5xl text-gray-900">GX DOJO</span><br>
                <span class="font-semibold text-white text-xl">Green Energy System Phase 3</span>
            </div>
        </div>

        
        <div class="w-full  h-1/4 ">
            <div class="max-w-[400px] min-w-[50px] h-2/3 mx-auto mt-14 ">
                
                <form action="#" >
                    <label for="username"><span class="text-white font-bold text-3xl tracking-wide ">Username</span>
                        <input type="text" id="username" class="rounded-lg w-full mt-1 mb-5 p-3 outline-none focus:ring focus:ring-lime-200 shadow-xl text-slate-600 font-semibold text-lg" placeholder="Input Username...">
                    </label>
                    <label for="password" ><span class="text-white font-bold text-3xl tracking-wide ">Password</span>
                        <input type="password" id="password" class="rounded-lg w-full mt-1 p-3 outline-none focus:ring focus:ring-lime-200 shadow-lg text-slate-600 font-semibold text-lg mb-5" placeholder="Your Password...">
                    </label>
                    <label for="rememberMe" class="flex "><input type="checkbox" class=" w-5 h-8 text-green-600 bg-gray-100 border-gray-300 rounded"><span class="text-white font-semibold ml-3 text-lg  ">Remember Me</span></label>
                    
                    <button type="submit" class="block mt-10  py-2  w-full rounded-lg bg-gray-900 text-white mx-auto text-center text-2xl font-bold hover:bg-gray-800">
                        Login
                    </button>
                </form>
            </div>
        </div>
        

    </div>
    
</body>

</html>
<?php /**PATH C:\CODES\LARAVEL\laravel-11\resources\views//auth/login.blade.php ENDPATH**/ ?>