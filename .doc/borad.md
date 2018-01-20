# Board

## checkbox
複数選択できる項目なので、hiddenにあらかじめチェックボックスのインプット項目の総数を設定しておきます。
以下の場合はチェック項目のinputが5つなので、hiddenに5を設定しておきます。

````
<p>興味のある項目にチェックを入れてください</p>
<input type="hidden" name="multipleSelectSum" value="5">
<input type="checkbox" name="multipleSelect0" class="" value="インターネット">
<label for="enquete">インターネット</label>&nbsp;
<input type="checkbox" name="multipleSelect1" class="" value="不動産">
<label for="enquete">不動産</label>&nbsp;
<input type="checkbox" name="multipleSelect2" class="" value="広告・メディア">
<label for="enquete">広告・メディア</label>&nbsp;
<input type="checkbox" name="multipleSelect3" class="" value="政治・法律">
<label for="enquete">政治・法律</label>&nbsp;
<input type="checkbox" name="multipleSelect4" class="" value="芸術・文学・音楽">
<label for="enquete">芸術・文学・音楽</label>&nbsp;
<div class="errorMessage">
    <p class="validationsError">{{$errors->first('multipleSelect0')}}</p>
</div>
````
バリデーションでは、それぞれの項目を手動で設定する必要があります。
どれか一つ以上を必ず選択しなければならないバリデーションルールのときは、
````
$this->validate($request, [
    ....中略....
    'multipleSelect0' => 'required_without_all:,multipleSelect1,multipleSelect2,multipleSelect3,multipleSelect4'
    ....中略....
],[
    ....中略....
    'multipleSelect0.required_without_all' => 'どれか一つ以上を選択してください。',
    ....中略....
]);
````
コントローラ側では、multipleSelectSumで渡ってくる合計値を使ってforでまわすようにします。複数選択が可能なので取得した値は配列に格納してシリアライズし一つの文字列として保存する準備をします。
````
/* Serialize for checkbox values */
$multipleSelects = array();
for($i=0;$i<$request->input('multipleSelectSum');$i++) {
     array_push($multipleSelects, $request->input('multipleSelect'.$i));
}
$serializedMultipleSelects = serialize($multipleSelects);
````
結果として、$multipleSelectsという配列とその配列をシリアライズした$serializedMultipleSelectsが作成されるようにします。
DBに保存する際には、$serializedMultipleSelectsを保存し、再び取得するときはunserializ()して戻します。








