<!DOCTYPE HTML>
<html>
<head>
    <title>registration</title>
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
    <h1>REGISTRATION</h1>
    @isset($menu, $mtrl_1, $amount_1)
    commited...<br>
    {{ $menu }}
    <br><hr>
    @endisset

    <!-- フォームエリア -->
    <h2>メニューと材料の登録</h2>
    <form action="/menus" method="POST">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="menu" class="col-form-label text-md-right">{{ __('メニュー：') }}</label>
            <input id="menu" type="text" class="form-control @error('menu') is-invalid @enderror" name="menu" value="{{ old('menu') }}" required autocomplete="menu" autofocus>
            @error('menu')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="material[]">材料名</label>
                <input type="text" class="form-control" id="material[]" name="material[]" placeholder="ざいりょう">
            </div>
            <div class="form-group col-md-6">
                <label for="amount[]">数量</label>
                <input type="text" class="form-control" id="amount[]" name="amount[]" placeholder="かず">
            </div>
        </div>
        <div id="materials">
        </div>
        <div class="mt-3">
            <button type="button" class="btn btn-primary rounded-circle p-0" style="width:2rem;height:2rem;" onclick="clickBtn()">＋</button>
            <button class="btn btn-success float-right"> 登録 </button>
        </div>
    </form>
</div>
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