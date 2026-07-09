<form action="/thanks" method="post">
    @csrf

    <h2>確認画面</h2>

<p>姓：{{ $contact['last_name'] }}</p>
<p>名：{{ $contact['first_name'] }}</p>
<p>性別：{{ $genderText[$contact['gender']] }}</p>
<p>メール：{{ $contact['email'] }}</p>
<p>電話番号：{{ $contact['tel'] }}</p>
<p>住所：{{ $contact['address'] }}</p>
<p>建物名：{{ $contact['building'] }}</p>
<p>お問い合わせ種類：{{ $category->content }}</p>
<p>お問い合わせ内容：{{ $contact['detail'] }}</p><!-- 確認画面の表示 -->

    <input type="hidden" name="last_name" value="{{ $contact['last_name'] }}">
    <input type="hidden" name="first_name" value="{{ $contact['first_name'] }}">
    <input type="hidden" name="gender" value="{{ $contact['gender'] }}">
    <input type="hidden" name="email" value="{{ $contact['email'] }}">
    <input type="hidden" name="tel" value="{{ $contact['tel'] }}">
    <input type="hidden" name="address" value="{{ $contact['address'] }}">
    <input type="hidden" name="building" value="{{ $contact['building'] }}">
    <input type="hidden" name="category_id" value="{{ $contact['category_id'] }}">
    <input type="hidden" name="detail" value="{{ $contact['detail'] }}">

<button type="button" onclick="history.back()">修正</button>
<button type="submit">送信</button>
</form>