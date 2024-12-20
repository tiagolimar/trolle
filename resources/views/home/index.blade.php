<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Home</title>
</head>

<body class="bg-violet-300 p-8">
    <main class="flex gap-4">
        <section class="card rounded rounded-4 shadow-lg w-[16em] max-w-[30em] border-t-2 border-blue-600 bg-stone-100">
            <header class="flex align-center justify-between py-1 px-2 bg-stone-300">
                <h3 class="text-xl">Pendências</h3>
                <div class="buttons flex gap-1">
                    <p class="cursor-pointer hover:text-white hover:bg-stone-400 text-2xl bg-stone-200 rounded-full w-6 text-center h-6 text-stone-700 flex justify-center">-</p>
                    <p class="cursor-pointer hover:text-white hover:bg-stone-400 text-2xl bg-stone-200 rounded-full w-6 text-center h-6 text-stone-700 flex justify-center">+</p>
                </div>
            </header>
            <article class="bg-white rounded shadow m-4 p-2 hover:bg-stone-200 cursor-pointer">
                <p class="bg-red-500 rounded-full px-2 py-1 text-sm text-white font-semibold">#PRIORIDADE</p>
                <h3 class="py-3">Título da tarefa a ser executada</h3>
                <footer class="flex justify-between align-center">
                    <p class="text-sm py-1">Comentários: 0</p>
                    <img class="rounded-full w-[2em]" src="https://avatars.githubusercontent.com/u/47084105?v=4" alt="" srcset="">
                </footer>
            </article>
            <article class="bg-white rounded shadow m-4 p-2 hover:bg-stone-200 cursor-pointer">
                <p class="bg-red-500 rounded-full px-2 py-1 text-sm text-white font-semibold">#PRIORIDADE</p>
                <h3 class="py-3">Título da tarefa a ser executada</h3>
                <footer class="flex justify-between align-center">
                    <p class="text-sm py-1">Comentários: 0</p>
                    <img class="rounded-full w-[2em]" src="https://avatars.githubusercontent.com/u/47084105?v=4" alt="" srcset="">
                </footer>
            </article>
            <article class="bg-white rounded shadow m-4 p-2 hover:bg-stone-200 cursor-pointer">
                <p class="bg-red-500 rounded-full px-2 py-1 text-sm text-white font-semibold">#PRIORIDADE</p>
                <h3 class="py-3">Título da tarefa a ser executada</h3>
                <footer class="flex justify-between align-center">
                    <p class="text-sm py-1">Comentários: 0</p>
                    <img class="rounded-full w-[2em]" src="https://avatars.githubusercontent.com/u/47084105?v=4" alt="" srcset="">
                </footer>
            </article>
        </section>
    </main>
</body>

</html>
