<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>가정교회-360 관리 시스템</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
    <link href="/plugin/fontawesome-free-6.1.1-web/css/all.css" rel="stylesheet" />
    <link href="/plugin/fontawesome-free-6.1.1-web/css/fontawesome.css" rel="stylesheet" />
    <link href="/plugin/fontawesome-free-6.1.1-web/css/v4-font-face.css" rel="stylesheet" />
    <link href="/plugin/fontawesome-free-6.1.1-web/css/v4-shims.css" rel="stylesheet" />
    <link href="/plugin/fontawesome-free-6.1.1-web/css/v5-font-face.css" rel="stylesheet" />
    <script src="/plugin/fontawesome-free-6.1.1-web/js/all.js" ></script>

</head>
<body>
    <main class="bg-gray-100 dark:bg-gray-800 h-screen overflow-hidden relative">
        <?php echo $this->include('/templates/default/component/header'); ?>
        <div class="flex items-start justify-between">
            <?php echo $this->include('/templates/default/component/sidebar'); ?>
            <div class="flex flex-col w-full md:space-y-4">
                <?php echo $this->renderSection('content'); ?>
            </div>
        </div>
    </main>
</body>
</html>