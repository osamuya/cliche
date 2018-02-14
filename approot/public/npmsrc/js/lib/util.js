export default class Util {
    constructor (opts = {}) {
        
        this.name = opts.name;
        this.item = opts.item;
        
//        console.log(this.name);
//        console.log(this.item);
        
    };
    
    /* ejs6 test */
    test() {
        $(function(){
            $('body').on('click',function(){
                var rand = Math.floor( Math.random() * (999 + 1 - 100) ) + 100 ;
//                console.log("click! " + rand);
            });
        });
    };
    
    /**
     * fileUploaderHelper()
     * get file path on file uploader
     */
    fileUploaderHelper() {
        $(function(){
            $(document).on('change', ':file', function() {
                
                var input = $(this);
                var file = input.get(0).files;
                var path = input.val();
                path = path.replace(/\\/g, '/').replace(/.*\//, '');
//                    console.log(file);
//                    console.log(path);
                    input.parent().parent().next(':text').val(path);
            });
        });
        return true;
    };
    
    /**
     * threadOpener()
     * get file path on file uploader
     */
    threadOpener() {
        $(function(){
            $(".opener").on('click', function(){
                
                var targetName = $(this).attr("name");
                var targetStatus = $("#"+targetName).attr("class");
                console.log(targetName);
                console.log(targetStatus);
                
                if ($("#"+targetName).hasClass("nowOpen")) {
                    $("#"+targetName).slideUp();
                    $("#"+targetName).removeClass("nowOpen");
                } else {
                    $("#"+targetName).slideDown();
                    $("#"+targetName).addClass("nowOpen");
                }
                
                console.log(targetName);
            });
        });
    }
    
}; // Util