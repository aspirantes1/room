<html>
<title>Import</title>
<body>
<h1>Загрузка файлов</h1>

<form action="{{ URL::to('/upload') }}" enctype="multipart/form-data" method="post">
    <label for="file">Файл: <input type="file" name="file" value=""></label>
    <br/>
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <button type="submit">Отправить</button>
</form>

</body>
</html>