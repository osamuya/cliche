@inject('parameter', 'App\Http\Controllers\SetParameter')
@extends('layouts.applayout')

@section('content')
<form class="form" action="/lot" id="lotty_start" method="post">
    {{ csrf_field() }}
    <input type="text" id="captcha" placeholder="上の数字を入力してください">
    <input type="hidden" name="lotty_hash" value="iotNYV9ARVLDgWCW5ZXqbI7wbYodsVEJ">
    <p><a href="javascript:void(0)">応募要項・利用規約</a>に同意の上</p>
    <input type="submit" value="抽選する" id="ltt_start">
</form>
<!--approot/resources/views/index.blade.php-->
@endsection



