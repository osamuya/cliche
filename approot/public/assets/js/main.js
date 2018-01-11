$(document).ready(function() {
    var main;
    main = new PagePlugin();
    // alert()
    $(window).on('load',this,function(){
        main.init();
        // main.setCap(this);
        // main.windowWidthChk(this);
        $(document).on('click','a[href^=#]',function(){
            main.pageScroll(this);
        });
       $('#modalAbout').click(function(){
            main.modal();
       });
        $("#modalAbout").on('click',function(){
            main.modal();
        });
        $("#d_overlay").click(function(){
             main.fOut();
         });
         $("#modalAbout_block").click(function(){
             main.fOut();
         });
        $('#secondFloor').on('click',function(){
            main.mmodal('#secondImg');
        });
        $('#firstFloor').on('click',function(){
            main.mmodal('#firstImg');
        });
        $("#d_overlay").click(function(){
            main.mFadeOut();
        });
        $("#secondImg").click(function(){
            main.mFadeOut();
        });
        $("#firstImg").click(function(){
            main.mFadeOut();
        });
    });
    $(window).on('resize',this,function() {
        main.windowWidthChk(this);
    });
});
// クラス定義（コンストラクタ）
PagePlugin = function(op) {
    this.speed=500;
};
// メソッド定義
PagePlugin.prototype = {
    init: function(){
        var self;
        self = this;
    },
    pageScroll:function(el){
        var self,href,target,position;
        self = this;

        href= $(el).attr("href");
        target = $(href == "#" || href == "" ? 'html' : href);
        position = target.offset().top;
        $("html, body").animate({scrollTop:position}, self.speed);
    },
    // setCap:function(){
    //     var self;
    //     self = this;
    //
    //     $("#captcha").setCaptcha({
    //             width:320,
    //             height:160,
    //             color:"#666666",
    //             size:50,
    //             length:4,
    //             hook:function(){
    //                     alert("認証用画像と入力された値が一致しません");
    //             },
    //             form:".form",
    //     });
    //     $(".form img").addClass('captcha_img');
    // },
    // windowWidthChk(){
    //     var self;
    //     self = this;
    //     var timer = false;
    //
    //     if (timer !== false) {
    //             clearTimeout(timer);
    //     }
    //     timer = setTimeout(function() {
    //         // var egwidth = $(window).width();
    //         var egwidth = window.outerWidth;
    //         if (egwidth <= 640) {
    //             // alert('sp'+egwidth);
    //         } else if (egwidth > 768) {
    //             // alert('pc'+egwidth);
    //             location.href = "pc.html";
    //         }
    //     }, 200);
    // },
    modal(){
         var self;
         self = this;
         $('#modalAbout_block').addClass('modalAbout_open');
         // 高さ取得
         var currentHeight = $("body").height();
         // ブロックを出す位置（スクロール量）
         var currentClass = $('#modalAbout_block').hasClass('modalAbout_open');

         if (currentClass == true) {
             $("#d_overlay").fadeIn();
             $("#modalAbout_block").fadeIn();
             $("#d_overlay").css('height', currentHeight+'px');
             $("body").css('position','fixed');
         }

     },
    fOut() {
        var currentClass = $('#modalAbout_block').hasClass('modalAbout_open');
        console.log(currentClass);
        if (currentClass == true) {
             $("#d_overlay").fadeOut();
             $("#modalAbout_block").fadeOut();
            $("body").css('position','static');
         }



    },
    mmodal(img_id){
        $('#secondFloor').addClass('modalAbout_open');
        var currentHeight = $("body").height();
        var currentClass = $('#secondFloor').hasClass('modalAbout_open');

        if(currentClass == true){
            $("#d_overlay").fadeIn();
            $(img_id).fadeIn();
            $("#d_overlay").css('height', currentHeight+'px');
        }
    },
    mFadeOut() {
        $(".mapArea").fadeOut();
        // $("#firstImg").fadeOut();
        $("#d_overlay").fadeOut();
    }

//    mAgreement() {
//        alert();
//    }



};
