<!DOCTYPE html>
<html lang="pt-br" data-theme="coffee">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Banco Loja de Livros</title>
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.9.0/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body>
  <div class="navbar bg-base-100">
    <div class="navbar-start">
      <div class="dropdown">
        <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" /></svg>
        </div>
        <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
          <li><a href="listlivros.php">Listar Livros</a></li>
          <li><a href="listautores.php">Listar Autores</a></li>
          <li><a href="listcategorias.php">Listar Categorias</a></li>
        </ul>
      </div>
      <a href="/Atividade Select/" class="btn btn-ghost text-xl">Banco Loja de Livros</a>
    </div>
    <div class="navbar-center hidden lg:flex">
      <ul class="menu menu-horizontal px-1">
        <li><a href="listlivros.php">Listar Livros</a></li>
        <li><a href="listautores.php">Listar Autores</a></li>
        <li><a href="listcategorias.php">Listar Categorias</a></li>
      </ul>
    </div>
  </div>

  </body>
</html>
