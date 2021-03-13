<!DOCTYPE HTML>
<html>
<head>
    <title>list</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div class="container">
    <h1>LIST</h1>

    <!-- 一覧テーブル -->
    <div class="table-responsive">
        <div class="float-right my-3">
            <button class="btn btn-success" onclick="window.location='{{ route("menu-ope") }}'">追加</button>
        </div>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th>メニュー</th>
            </tr>
            </thead>
            <tbody id="tbl">
            @foreach ($menus as $key => $menu)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $menu->menu }}</td>
                    <!-- <td class="text-nowrap">
                        <p><a href="" class="btn btn-primary btn-sm">詳細</a></p>
                        <p><a href="" class="btn btn-info btn-sm">編集</a></p>
                        <p><a href="" class="btn btn-danger btn-sm">削除</a></p>
                    </td> -->
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    
</div>
</body>
<!-- <script>
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
</script> -->
</html>