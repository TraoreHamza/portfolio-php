<?php

/**
 * Page des projets à partir du fichier
 * '/assets/projects.json
 */

$data = file_get_contents('./assets/projects.json'); // Récupération du contenu d'un fichier
$projects = json_decode($data, true); // Décodage du JSON en tableau associatif

?>

<h1 class="bg-clip-text bg-gradient-to-br from-slate-800 to-slate-400 text-6xl font-bold text-transparent text-center">
    Mes projets
</h1>

<?php foreach ($projects as $item): ?>
<div class="p-4 flex">
    <div class="w-1/3 border-r border-slate-500">
        <h3 class="text-2xl font-bold mb-5">Lorem ipsum</h3>
        <p class="">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Impedit, voluptatem?</p>
    </div>
    <div class="w-screen border-r border-slate-500">
        <h3 class="text-2xl font-bold mb-5">Stack</h3>
        <ul class="flex gap-4">
            <li class="">
                <img src="https://placehold.co/40x40" alt="logo ">
            </li>
            <li class="">
                <img src="https://placehold.co/40x40" alt="logo ">
            </li>
            <li class="">
                <img src="https://placehold.co/40x40" alt="logo ">
            </li>
            <li class="">
                <img src="https://placehold.co/40x40" alt="logo ">
            </li>
        </ul>
    </div>
    <div class="w-24 text-slate-400 flex items-center justify-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24">
            <path fill="currentColor" d="m8.006 21.308l-1.064-1.064L15.187 12L6.942 3.756l1.064-1.064L17.314 12z" />
        </svg>
    </div>
</div>
<? endforeach; ?>