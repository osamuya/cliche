<html>
<head>
<title>Ajax test</title>
<script
  src="https://code.jquery.com/jquery-1.11.2.min.js"
  integrity="sha256-Ls0pXSlb7AYs7evhd+VLnWsZ/AqEHcXBeMZUycz/CcA="
  crossorigin="anonymous"></script>
<script>
    $(function(){
        
        $("#button").on('click', function(){
            alert();
            $.ajax({
                type: 'get',
                datatype: 'json',
                url: 'ajaxtest/hogehoge'
            })
            .done(function(data){ //ajaxの通信に成功した場合
                alert("success!");
                console.log(data['status']);
                console.log(data['message']);
                $("#example").html(data['status']+' '+data['message']);
            })
            .fail(function(data){ //ajaxの通信に失敗した場合
                alert("error!");
            });
        });
    });
</script>
</head>
<body>
    
    <input type="button" id="button" value="ajax">
</body>
</html>
