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
        <div id="materials">
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
    // 要素の追加
    const parent_div = document.getElementById("materials");
    const row_div = document.createElement("div");
    row_div.setAttribute('class', 'form-row');

    // form-groupのdivを作成
    const form_material_div = addFormElements("material[]","ざいりょう");
    row_div.appendChild(form_material_div);
    const form_amount_div = addFormElements("amount[]","かず");
    row_div.appendChild(form_amount_div);

    parent_div.appendChild(row_div);
}

function addFormElements(keyName, placeholder){
    const formgroup_div = document.createElement("div");
    formgroup_div.setAttribute('class', 'form-group col-md-6');

    const a_input = document.createElement("input");
    a_input.setAttribute('type', 'text');
    a_input.setAttribute('class', 'form-control');
    a_input.setAttribute('id', keyName);
    a_input.setAttribute('name', keyName);
    a_input.setAttribute('placeholder', placeholder);

    formgroup_div.appendChild(a_input);

    return formgroup_div
}
</script>
</html>