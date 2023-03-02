<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body>
    <h1 class="text-3xl font-bold text-birumuda">
        <section class="bg-gray-50 min-h-screen flex items-center justify-center">
            <!-- login container -->
            <div class=" text-center max-w-xl p-5 items-center">
                <img src="{{ asset('images/404.gif') }}" alt="">

                <a href="{{ url('/home')}}">
                    <button
                        class="py-2 mt-10 px-5 bg-birutua text-white text-sm border rounded-xl hover:scale-105 duration-300">Go Back</button>
                </a>
            </div>
        </section>
    </h1>
</body>

</html>