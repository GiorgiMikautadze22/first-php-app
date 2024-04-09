<?php require'views/partials/header.php' ?>

<body class="h-full">
<!--
This example requires updating your template:

```
<html class="h-full bg-gray-100">
<body class="h-full">
```
-->
<div class="min-h-full">
    <?php require('partials/nav.php')?>
    <?php require('partials/banner.php') ?>


    <main>
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
            <ul>
                <?php foreach ($notes as $note) : ?>
                    <li class="text-blue-500 hover:underline">
                        <a href="/note?id=<?= $note['id'] ?>"><?= htmlspecialchars($note['body']) ?></a>
                    </li>
                <?php endforeach;?>
            </ul>
            <p class="text-blue-500 mt-6">
                <a href="/note/create" class="hover:underline">Create new note</a>
            </p>
        </div>
    </main>
</div>

</body>
</html>