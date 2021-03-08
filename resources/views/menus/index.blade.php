<!DOCTYPE HTML>
<html>
<head>
    <title>registration</title>
</head>
<body>

<h1>REGISTRATION</h1>
@isset($menu, $mtrl_1, $amount_1)
commited...<br>
{{ $menu }}
{{ $mtrl_1 }}
{{ $amount_1 }}
<br><hr>
@endisset

<!-- フォームエリア -->
<h2>メニューと材料の登録</h2>
<form action="/menus" method="POST">
    Menu:<br>
    <input name="menu">
    <br>
    material 1:<br>
    <input name="material_1">
    <br>
    amount 1:<br>
    <input name="amount_1">
    <br>
    {{ csrf_field() }}
    <button class="btn btn-success"> 送信 </button>
</form>

</body>
</html>