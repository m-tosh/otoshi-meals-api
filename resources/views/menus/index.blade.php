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
<br><hr>
@endisset

<!-- フォームエリア -->
<h2>メニューと材料の登録</h2>
<form action="/menus" method="POST">
    Menu:<br>
    <input name="menu">
    @error('menu')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <br>
    <div id="materials">
        材料名：<input name="material[]"> 数量：<input name="amount[]">
        <br>
    </div>
    <br>
    <input type="button" value="追加" onclick="clickBtn()">
    <br>
    {{ csrf_field() }}
    <br>
    <button class="btn btn-success"> 送信 </button>
</form>

</body>
<script>
function clickBtn(){
    const div = document.getElementById("materials");

    // 要素の追加
    console.log("yeah");
    const text_for_name = document.createTextNode("材料名：");
    div.appendChild(text_for_name);
    const el_input_name = document.createElement("input");
    el_input_name.setAttribute("name","material[]");
    div.appendChild(el_input_name);

    const text_for_amount = document.createTextNode(" 数量：");
    div.appendChild(text_for_amount);
    const el_input_amount = document.createElement("input");
    el_input_amount.setAttribute("name","amount[]");
    div.appendChild(el_input_amount);

    div.appendChild(document.createElement("br"))
}
</script>
</html>