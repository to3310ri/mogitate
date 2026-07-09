<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>FashionablyLate</title>
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
</head>
<body>
<header>
    <h1>FashionablyLate</h1>
</header>

<main>
    <h2>Contact</h2>

    <form action="/confirm" method="post">
        @csrf

        <p>お名前 ※</p>
        <input type="text" name="last_name" value="{{ old('last_name') }}" placeholder="例：山田">
        @error('last_name')
            <p class="error">{{ $message }}</p>
        @enderror

        <input type="text" name="first_name" value="{{ old('first_name') }}" placeholder="例：太郎">
        @error('first_name')
            <p class="error">{{ $message }}</p>
        @enderror

        <p>性別 ※</p>
        <label>
            <input type="radio" name="gender" value="1" {{ old('gender', '1') == '1' ? 'checked' : '' }}>
            男性
        </label>
        <label>
            <input type="radio" name="gender" value="2" {{ old('gender') == '2' ? 'checked' : '' }}>
            女性
        </label>
        <label>
            <input type="radio" name="gender" value="3" {{ old('gender') == '3' ? 'checked' : '' }}>
            その他
        </label>
        @error('gender')
            <p class="error">{{ $message }}</p>
        @enderror

        <p>メールアドレス ※</p>
        <input type="email" name="email" value="{{ old('email') }}" placeholder="例：test@example.com">
        @error('email')
            <p class="error">{{ $message }}</p>
        @enderror

        <p>電話番号 ※</p>
        <input type="text" name="tel" value="{{ old('tel') }}" placeholder="例：08012345678">
        @error('tel')
            <p class="error">{{ $message }}</p>
        @enderror

        <p>住所 ※</p>
        <input type="text" name="address" value="{{ old('address') }}" placeholder="例：東京都渋谷区千駄ヶ谷1-2-3">
        @error('address')
            <p class="error">{{ $message }}</p>
        @enderror

        <p>建物名</p>
        <input type="text" name="building" value="{{ old('building') }}" placeholder="例：千駄ヶ谷マンション101">

        <p>お問い合わせの種類 ※</p>
        <select name="category_id">
            <option value="" disabled {{ old('category_id') ? '' : 'selected' }}>選択してください</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                    {{ $category->content }}
                </option>
            @endforeach
        </select>
        @error('category_id')
            <p class="error">{{ $message }}</p>
        @enderror

        <p>お問い合わせ内容 ※</p>
        <textarea name="detail" placeholder="お問い合わせ内容をご記載ください">{{ old('detail') }}</textarea>
        @error('detail')
            <p class="error">{{ $message }}</p>
        @enderror

        <br><br>
        <button type="submit">確認画面</button>
    </form>
</main>
</body>
</html>