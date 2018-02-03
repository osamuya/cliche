export default class Util {
    constructor (opts = {}) {
        
        this.name = opts.name;
        this.item = opts.item;
        
        console.log(this.name);
        console.log(this.item);
        
    }
    
    
    test() {
        
        $(function(){
            $('body').on('click',function(){
                var rand = Math.floor( Math.random() * (999 + 1 - 100) ) + 100 ;
                console.log("click! " + rand);
            });
        });
        

        
        $(function(){
            $(document).on('change', ':file', function() {
                
                var input = $(this);
                var file = input.get(0).files;
                var path = input.val();
                path = path.replace(/\\/g, '/').replace(/.*\//, '');
                    console.log(file);
                    console.log(path);
                    input.parent().parent().next(':text').val(path);

//                var input = $(this),
////                    alert(input);
//                numFiles = input.get(0).files ? input.get(0).files.length : 1,
//                label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
//                input.parent().parent().next(':text').val(label);
            });
        });
        
    }
    
};