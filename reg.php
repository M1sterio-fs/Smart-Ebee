<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>СмартЭбээ</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
  <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />
  <link href="http://fonts.cdnfonts.com/css/montserrat" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <div class="container">
      <img src="img/logo.png" class="mt-32 ml-28">
      <div class="bg-white w-72 rounded-xl h-72 ml-12 mt-14">
        <h1 class="font-black text-3xl ml-12 pt-4">Регистрация</h1>
        <div>
          <div class="relative mb-6 ml-8 mt-8">
            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
              <img src="img/name.svg" class="w-5 h-5 text-white">
            </div>
            <input type="text" class="bg-[#004398] border border-gray-300 text-white text-sm placeholder-white rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-56 pl-10 p-2.5" placeholder="Имя">
          </div>
          <div class="relative mb-6 ml-8 mt-6">
            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
              <img src="img/tel.svg" class="w-5 h-5 text-white">
            </div>
            <input type="text" class="bg-[#004398] border border-gray-300 text-white text-sm placeholder-white rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-56 pl-10 p-2.5" placeholder="Телефон" pattern="+7 [0-9]{3}-[0-9]{3}-[0-9]{2}-[0-9]{2}">
          </div>
          <form action="test.php">
            <input type="submit" class="bg-gradient-to-r from-black via-black to-gray-500 border border-gray-300 text-white text-sm font-bold placeholder-white rounded-2xl focus:ring-blue-500 focus:border-blue-500 block ml-8 w-56 p-2.5" value="ЗАРЕГИСТРИРОВАТЬСЯ" >
          </form>
        </div>
      </div>
    </div> 
</body>
<script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
</html>