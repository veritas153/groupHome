<!DOCTYPE html>
<html lang="UTF-8">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>가정교회-360 로그인</title>
    <meta name="author" content="David Grzyb">
    <meta name="description" content="">

    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
    <style>
        .body-bg {
            background-color: #9921e8;
            background-image: linear-gradient(315deg, #9921e8 0%, #5f72be 74%);
        }
    </style>
</head>
<body class="body-bg min-h-screen pt-12 md:pt-20 pb-6 px-2 md:px-0" style="font-family:'Lato',sans-serif;">
<header class="max-w-lg mx-auto">
    <a href="#">
        <h1 class="text-4xl font-bold text-white text-center">가정교회-360 관리 시스템</h1>
    </a>
</header>

<main class="bg-white max-w-lg mx-auto p-8 md:p-12 my-10 rounded-lg shadow-2xl">
    <section>
        <h3 class="font-bold text-2xl">로그인</h3>
        <p class="text-gray-600 pt-2">계정을 입력하세요.</p>
    </section>

    <section class="mt-10">
        <form class="flex flex-col" method="POST" action="#">
            <div class="mb-6 pt-3 rounded bg-gray-200">
                <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="email">아이디</label>
                <input type="text" id="email" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-purple-600 transition duration-500 px-3 pb-3">
            </div>
            <div class="mb-6 pt-3 rounded bg-gray-200">
                <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="password">비밀번호</label>
                <input type="password" id="password" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-purple-600 transition duration-500 px-3 pb-3">
            </div>
            <div class="flex justify-end">
                <a href="#" class="text-sm text-purple-600 hover:text-purple-700 hover:underline mb-6">비밀번호를 잊으셨나요?</a>
            </div>
            <button class="bg-purple-600 hover:bg-purple-700 text-white font-bold py-2 rounded shadow-lg hover:shadow-xl transition duration-200" type="submit">로그인</button>
        </form>
    </section>
</main>

<div class="max-w-lg mx-auto text-center mt-12 mb-6">
    <p class="text-white">새로 등록하시나요? <a href="#" class="font-bold hover:underline">회원 가입</a>.</p>
</div>

<footer class="max-w-lg mx-auto flex justify-center text-white">
    <a href="#" class="hover:underline">가입 사항</a>
    <span class="mx-3">•</span>
    <a href="#" class="hover:underline">사이트 간략 소개</a>
</footer>
</body>
</html>
