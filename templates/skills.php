<?php
    $skills = [];
    $skills['html'] = [
        'name' => 'HTML',
        'image' => '/image/html5.svg'
    ];
    $skills['css'] = [
        'name' => 'CSS',
        'image' => '/image/css.svg'
    ];
    $skills['sass'] = [
        'name' => 'SASS',
        'image' => '/image/sass.svg'
    ];
    $skills['tailwind'] = [
        'name' => 'Tailwind',
        'image' => '/image/tailwindcss.svg'
    ];
    $skills['js'] = [
        'name' => 'JavaScript',
        'image' => '/image/javascript.svg'
    ];
    $skills['React'] = [
        'name' => 'React',
        'image' => '/image/react_light.svg'
    ];
    $skills['node'] = [
        'name' => 'Node.js',
        'image' => '/image/nodejs.svg'
    ];
    $skills['php'] = [
        'name' => 'PHP',
        'image' => '/image/PHP-logo.svg.png'
    ];
    $skills['mysql'] = [
        'name' => 'MySQL',
        'image' => '/image/mysql.svg'
    ];
    $skills['symfony'] = [
        'name' => 'Symfony',
        'image' => '/image/symfony-icon.svg'
    ];
    $skills['swift'] = [
        'name' => 'Swift',
        'image' => '/image/swift.svg'
    ];
    $skills['vs'] = [
        'name' => 'Visual Studio',
        'image' => '/image/vscode.svg'
    ];
    $skills['figma'] = [
        'name' => 'Figma',
        'image' => '/image/figma.svg'
    ];
    $skills['git'] = [
        'name' => 'Git',
        'image' => '/image/git.svg'
    ];
    $skills['gitHub'] = [
        'name' => 'GitHub',
        'image' => '/image/github-light.svg'
    ];
    
?>
<div id="compétences" class="m-auto">
            <h1 class="text-center mt-10 mb-10 text-5xl">Découvrez mes compétences</h1>
            <p class="text-center mb-20">Elles sont en constantes améliorations car pour moi la joie de ce <br> métier
            fait que l’on en apprend tous les jours, d’autant <br>plus en étant impliqué, 
            curieux et passionné.</p>
    <div class="flex justify-around items-center ">
        <div class="grid grid-cols-3 gap-4 ">
        <?php foreach ($skills as $skill) : ?>
            <div class="flex flex-col ">
                <h3 class="text-center"><?= $skill['name'] ?></h3>
                <img class="w-30 h-20" src="<?= $skill['image'] ?>" alt="<?= $skill['name'] ?>">
            </div>
        <?php endforeach; ?>
        </div>
        <div class="flex flex-col justify-center items-center">
            <img src="/image/cv.png" alt="CV" class="w-96 ">
            <a href="/image/CV_TRAORE_HAMZA_01_04_2025.pdf" class="mt-3 bg-teal-950 text-amber-50 p-4 rounded-2xl">Téléchargez mon CV</a>
        </div>
    </div>
</div>