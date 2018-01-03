@inject('parameter', 'App\Http\Controllers\SetParameter')

<head>
<!--
<style>
body {
    *: initial;
}
</style>
-->
</head>
<body>
********************************************<br>
{{$parameter->app_name}} パスワードの再設定<br>
********************************************<br>
<br>
{{-- Action Button --}}
@isset($actionText)
以下のURLをクリックしてパスワードを再設定してください。<br>
<a href="{{$actionUrl}}">{{$actionUrl}}</a><br>
@endisset
<br>
パスワード再設定の申請をした覚えのない場合は、このまま無視してください。
<br>
@include('mails.mailfooter')
</body>