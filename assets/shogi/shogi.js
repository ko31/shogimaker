(function($){

    var init = function() {
        baseImg = new Image();
        baseImg.src = '/assets/shogi/shogiban.png';
        stage = new createjs.Stage('result');
    }
     
    var genImage = function() {
        var img = new createjs.Bitmap(baseImg);
         
        stage.addChild(img);
         
        var pieces = {
            'k_ou' : [
                { 'id' : 'k_ou', 'x' : 258, 'y' : 162 }
            ],
            'k_hi' : [
                { 'id' : 'k_hi', 'x' : 422, 'y' : 100 }
            ],
            'k_kaku' : [
                { 'id' : 'k_kaku', 'x' : 95, 'y' : 100 }
            ],
            'k_kin' : [
                { 'id' : 'k_kin1', 'x' : 203, 'y' : 162 },
                { 'id' : 'k_kin2', 'x' : 314, 'y' : 162 }
            ],
            'k_gin' : [
                { 'id' : 'k_gin1', 'x' : 148, 'y' : 162 },
                { 'id' : 'k_gin2', 'x' : 369, 'y' : 162 }
            ],
            'k_kei' : [
                { 'id' : 'k_kei1', 'x' : 95, 'y' : 162 },
                { 'id' : 'k_kei2', 'x' : 422, 'y' : 162 }
            ],
            'k_kyo' : [
                { 'id' : 'k_kyo1', 'x' : 40, 'y' : 162 },
                { 'id' : 'k_kyo2', 'x' : 478, 'y' : 162 }
            ],
            'k_fu' : [
                { 'id' : 'k_fu1', 'x' : 40, 'y' : 42 },
                { 'id' : 'k_fu2', 'x' : 95, 'y' : 42 },
                { 'id' : 'k_fu3', 'x' : 150, 'y' : 42 },
                { 'id' : 'k_fu4', 'x' : 206, 'y' : 42 },
                { 'id' : 'k_fu5', 'x' : 260, 'y' : 42 },
                { 'id' : 'k_fu6', 'x' : 314, 'y' : 42 },
                { 'id' : 'k_fu7', 'x' : 370, 'y' : 42 },
                { 'id' : 'k_fu8', 'x' : 422, 'y' : 42 },
                { 'id' : 'k_fu9', 'x' : 478, 'y' : 42 }
            ]
        }
         
        // タイトルを入れる
        $('#show_title').text($('#title').val());
        $('#save_title').val($('#title').val());
//        var obj = new createjs.Text($('#title').val());
//        obj.textAlign = 'center';
//        obj.font = '24px Hiragino Kaku Gothic Pro,Meiryo,sans-serif';
//        obj.x = 260;
//        obj.y = 3;
//        stage.addChild(obj);

        // 1種類の駒に同じ文字を入れる
        if ($('input[name="create_type"]:radio:checked').val() == 1) {

            $.each (pieces, function(key, piece) {
                var content = getContent(key);
             
                for (var i in piece) {
                    var obj = new createjs.Text(content);
                    obj.textAlign = 'center';
                    obj.font = 'bold 18px Hiragino Kaku Gothic Pro,Meiryo,sans-serif';
                    obj.x = piece[i].x;
                    if (content.length == 2) {
                        obj.y = piece[i].y + 10;
                    } else {
                        obj.y = piece[i].y;
                    }
                     
                    stage.addChild(obj);
                }
            });

        // 1種類の駒に別々の文字を入れる
        } else {

            $.each (pieces, function(key, piece) {
                for (var i in piece) {
                    var content = getContent(piece[i].id);

                    var obj = new createjs.Text(content);
                    obj.textAlign = 'center';
                    obj.font = 'bold 18px Hiragino Kaku Gothic Pro,Meiryo,sans-serif';
                    obj.x = piece[i].x;
                    if (content.length == 2) {
                        obj.y = piece[i].y + 10;
                    } else {
                        obj.y = piece[i].y;
                    }
                     
                    stage.addChild(obj);
                }
            });

        }
    }

    var getContent = function(key){
        var content = $('#' + key).val();
        // 3文字目以降は切り捨てる
        content = content.substring(0, 2);
        // 1文字おきに改行を入れる
        content = content.replace(/[\r|\r\n|\n]/g, "").replace(/(.{1})/g, "$1" + "\n");            
        return content;
    }
         
    // 画像保存処理
    var save = function(){
        var png = stage.toDataURL('image/png'); //base64エンコード
        if(png){
            $('input[name="img"]').remove();
            $('#saveform').append('<input type="hidden" name="img" value="'+png+'" />');
            return true;
        } else {
            return false;
        }
    }
     
    $(function(){
        $(window).on('load',function(){
            init();
            $('#create').trigger("click");
            $("#form2").hide();
            $("#result_area").hide();
            $('#title').val('');
        });
         
        $('#create').on('click',function(e){
            if (!($('#title').val())) {
                alert("タイトルを入力してください");
                $('#title').focus();
                window.location.href = "#title_position";
                return;
            }
            stage = new createjs.Stage('result');
            genImage();
            stage.update();
            $("#result_area").show();
        });
         
        $('#saveform').on('submit',function(){
            save();
        });

        $('input[name="create_type"]:radio').change(function(){
            if ($(this).val() == 1) {
                $("#form1").show();
                $("#form2").hide();
            } else {
                $("#form1").hide();
                $("#form2").show();
            }
        });
    });
})(jQuery);
