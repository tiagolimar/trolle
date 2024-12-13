<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Home</title>
</head>

<body class="bg-lime-200">
<section class="flex justify-center items-center h-screen">
    <div class="rounded-lg text-center shadow-xl w-[600px]  pt-10 pb-40 backdrop-opacity-20  bg-white/30">
        <div class="">
            <div>
                <h1 class="m-5 font-medium text-purple-800 text-4xl">Trolle</h1>
            </div>
            <div class="">
                <h6 class="mb-5 font-bold">Login</h6>
            </div>
        </div>
        <div class="">
            <img src="./cicle.jpg" alt="">
            <form method="post" action="">
                <div class="grid gap-3">
                    <label for="email">
                        <input placeholder="Insira seu e-mail" type="text" name="email" id="email" class="shadow-md placeholder:text-stone-500 bg-lime-100 p-2 rounded-md h-10 w-96">
                    </label>
                    <label for="password">
                        <input placeholder="Insira sua senha" type="password" name="password" id="password" class="shadow-md placeholder:text-stone-500 bg-lime-100 p-2 rounded-md h-10 w-96">
                    </label>
                </div>
                <button class="text-white rounded-md px-5 py-1 my-6 bg-purple-700 font-bold hover:bg-stone-300 hover:text-purple-600">Entrar</button>
                <div class="h-px bg-purple-700 mb-6 mx-auto w-96"></div>
                <div class=" grid gap-1 text-sky-600">
                    <a href="/recuperarsenha" class="text-purple-700 hover:underline hover:text-purple-400 ">Não consegue entrar?</a> 
                    <a href="/cadastro" class="text-purple-700 hover:underline hover:text-purple-400">Criar uma conta</a>
                </div>

                
            </form>
        </div>
    </div>
</section>
</body>
</html>