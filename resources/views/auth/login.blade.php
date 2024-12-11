<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Home</title>
</head>

<body class="bg-violet-300">
<section class="flex justify-center items-center h-screen">
    <div class="rounded-lg text-center shadow-xl w-96  pt-10 pb-60 backdrop-opacity-10 backdrop-invert bg-white/30">
        <div class="">
            <div>
                <h1 class="m-5 font-black text-4xl">Trolle</h1>
            </div>
            <div class="">
                <h6 class="mb-5 text-black font-bold">Login</h6>
            </div>
        </div>
        <div class="">
            <form method="post" action="">
                <div class="grid gap-3">
                    <label for="email">
                        <input placeholder="Insira seu e-mail" type="text" name="email" id="email" class="p-2 rounded-md h-10 w-64">
                    </label>
                    <label for="password">
                        <input placeholder="Insira sua senha" type="password" name="password" id="password" class="p-2 rounded-md h-10 w-64">
                    </label>
                </div>
                <button class="rounded-md px-4 py-1 my-6 bg-red-500">Entrar</button>
                <hr class="mb-4 mx-auto w-64">
                <div class=" grid gap-2 text-sky-600">
                    <a href="/recuperarsenha" class="">Não consegue entrar?</a> 
                    <a href="/cadastro" class="">Criar uma conta</a>
                </div>

                
            </form>
        </div>
    </div>
</section>
</body>
</html>