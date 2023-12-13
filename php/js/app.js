$(function() {

    let filter1 =$("[data-filter]");
    let filter2 =$("[data-filter2]");
    let filter3 =$("[data-filter3]");
    let square =  undefined;
    let floor =  undefined;
    let material =  undefined;

    function filter (){
        $("[data-square], [data-floor], [data-material]").each (function(){
            $(this).removeClass('hide');
        });
        if (square){
        $("[data-square]").each(function(){
         
            let workSquare = $(this).data('square');

            if(workSquare != square) {
                $(this).addClass('hide');
            } 
        });
    };
    if (floor){
        $("[data-floor]").each(function(){
         
            let workFloor = $(this).data('floor');

            if(workFloor != floor) {
                $(this).addClass('hide');
            } 
        });
    };
    if (material){
        $("[data-material]").each(function(){
         
            let workMaterial = $(this).data('material');

            if(workMaterial != material) {
                $(this).addClass('hide');
            } 
        });
    };
    };
    filter1.on("click", function(event){
        $(this).addClass('active').siblings().removeClass('active');
        event.preventDefault();
    
        square = $(this).data('filter');

       filter()
    });


    filter2.on("click", function(event){
        $(this).addClass('active').siblings().removeClass('active');
        event.preventDefault();
    
       floor = $(this).data('filter2');
        
       filter()
    });

    
    filter3.on("click", function(event){
        $(this).addClass('active').siblings().removeClass('active');

        event.preventDefault();
    
        material = $(this).data('filter3');

        filter()
    });
});
