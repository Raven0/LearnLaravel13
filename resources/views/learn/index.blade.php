<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="proses" method="post">
        {{ csrf_field() }}
        <label>
            Nama:
            <input type="text" name="nama">
        </label>
        <br>
        <label>
            Nilai:
            <input type="text" name="nilai">
        </label>
        <br>
        <input type="submit">
    </form>
</body>
</html>