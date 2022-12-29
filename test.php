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
      <div class="w-full h-10 mt-4 bg-gradient-to-r from-[#0665DC] to-[#062A56]">
        <h1 class="text-white font-bold text-3xl ml-36">Опрос</h1>
      </div>
      <div class="cont-radio mt-5">
        <h3 class="text-white text-xl font-bold ml-6 w-80">1.На какой ОС ваш телефон?</h3>
        <div class="flex items-center ml-16">
          <input id="inline-radio" type="radio" value="" name="inline-radio-group" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 ">
          <label for="inline-radio" class="ml-2 text-lg font-bold text-white">IOS</label>
        </div>
        <div class="flex items-center ml-16">
            <input id="inline-2-radio" type="radio" value="" name="inline-radio-group" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
            <label for="inline-2-radio" class="ml-2 text-lg font-bold text-white">Android</label>
        </div>
      </div>
      <div class="cont-radio mt-5">
        <h3 class="text-white text-xl font-bold ml-6 w-80">2.Есть ли у вас электронная почта?</h3>
        <div class="flex items-center ml-16">
          <input id="inline-radio" type="radio" value="" name="inline-radio-group" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 ">
          <label for="inline-radio" class="ml-2 text-lg font-bold text-white">Есть</label>
        </div>
        <div class="flex items-center ml-16">
            <input id="inline-2-radio" type="radio" value="" name="inline-radio-group" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
            <label for="inline-2-radio" class="ml-2 text-lg font-bold text-white">Нету</label>
        </div>
      </div>
      <div class="cont-radio mt-5">
        <h3 class="text-white text-xl font-bold ml-6 w-80">3.Есть ли у вас социальные сети? (К примеру Одноклассники, Facebook и т.п.)</h3>
        <div class="flex items-center ml-16">
          <input id="inline-radio" type="radio" value="" name="inline-radio-group" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 ">
          <label for="inline-radio" class="ml-2 text-lg font-bold text-white">Нету</label>
        </div>
        <div class="flex items-center ml-16">
            <input id="inline-2-radio" type="radio" value="" name="inline-radio-group" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
            <label for="inline-2-radio" class="ml-2 text-lg font-bold text-white">Нету. Не знаю как ими пользоваться!</label>
        </div>
      </div>
      <div class="cont-radio mt-5">
        <h3 class="text-white text-xl font-bold ml-6 w-80">4.Как часто вы пользуетесь телефоном?</h3>
        <div class="flex items-center ml-16">
          <input id="inline-radio" type="radio" value="" name="inline-radio-group" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 ">
          <label for="inline-radio" class="ml-2 text-lg font-bold text-white">Довольно часто</label>
        </div>
        <div class="flex items-center ml-16">
            <input id="inline-2-radio" type="radio" value="" name="inline-radio-group" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
            <label for="inline-2-radio" class="ml-2 text-lg font-bold text-white">Не очень активно. Раза два включаю за день</label>
        </div>
        <div class="flex items-center ml-16">
            <input id="inline-2-radio" type="radio" value="" name="inline-radio-group" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
            <label for="inline-2-radio" class="ml-2 text-lg font-bold text-white">Редко! Так как не умею им пользоваться</label>
        </div>
      </div>
      <div class="cont-radio mt-5">
        <h3 class="text-white text-xl font-bold ml-6 w-80">5.Умеете ли вы искать информацию в интернете через браузер?</h3>
        <div class="flex items-center ml-16">
          <input id="inline-radio" type="radio" value="" name="inline-radio-group" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 ">
          <label for="inline-radio" class="ml-2 text-lg font-bold text-white">Да</label>
        </div>
        <div class="flex items-center ml-16">
            <input id="inline-2-radio" type="radio" value="" name="inline-radio-group" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
            <label for="inline-2-radio" class="ml-2 text-lg font-bold text-white">Нет</label>
        </div>
        <form action="lk.php">
          <input type="submit" class="bg-gradient-to-r from-black via-black to-gray-500 text-white text-sm font-bold placeholder-white rounded-2xl focus:ring-blue-500 focus:border-blue-500 block ml-20 mt-10 mb-10 w-56 p-2.5" value="ОТПРАВИТЬ" >
        </form>
      </div>
    </div>
</body>
<script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
</html>