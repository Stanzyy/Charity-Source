//The script below constructs shuffleJS.  It allows the fluid motions for charities when they are being searched for, sorted, or filtered.
var galleryJS = 
    {
    Init : function()
    {
        //Initialization of shuffle functions
        galleryJS.SetGrid();
        galleryJS.SetFilter();
        galleryJS.SetSort();
        galleryJS.SetSearch();
    },

    //SetGrid function designs the invisible grid and places the charities accordingly.
    SetGrid : function(){
        var $grid = $('.resultList'),
        $sizer = $grid.find('.shuffle__sizer');
        $grid.shuffle({
            itemSelector: '.result',
            sizer: $sizer
        });
    },

    //SetFilter function applies all available filters, and when a filter is selected, the charities are shuffled accordingly.
    SetFilter: function(){
        $('#all').unbind().click(function(){
            $(".filterOn").removeClass("filterOn");
            $(this).addClass("filterOn");
            $('#resultSearch').val("");
            $('.resultList').shuffle('shuffle', function($el, shuffle){
                return $el;
            });
        });

        $('#blood').unbind().click(function(){
            $(".filterOn").removeClass("filterOn");
            $(this).addClass("filterOn");
            $('#resultSearch').val("");
            $('.resultList').shuffle('shuffle', function($el, shuffle){
                return $el.hasClass('blood');                      
            });
        });

        $('#food').unbind().click(function(){
            $(".filterOn").removeClass("filterOn");
            $(this).addClass("filterOn");
            $('#resultSearch').val("");
            $('.resultList').shuffle('shuffle', function($el, shuffle){
                return $el.hasClass('food');                      
            });
        });

        $('#community').unbind().click(function(){
            $(".filterOn").removeClass("filterOn");
            $(this).addClass("filterOn");
            $('#resultSearch').val("");
            $('.resultList').shuffle('shuffle', function($el, shuffle){
                return $el.hasClass('community');                      
            });
        });

        $('#cancer').unbind().click(function(){
            $(".filterOn").removeClass("filterOn");
            $(this).addClass("filterOn");
            $('#resultSearch').val("");
            $('.resultList').shuffle('shuffle', function($el, shuffle){
                return $el.hasClass('cancer');                      
            });
        });

        $('#children').unbind().click(function(){
            $(".filterOn").removeClass("filterOn");
            $(this).addClass("filterOn");
            $('#resultSearch').val("");
            $('.resultList').shuffle('shuffle', function($el, shuffle){
                return $el.hasClass('children');                      
            });
        });

        $('#clothes').unbind().click(function(){
            $(".filterOn").removeClass("filterOn");
            $(this).addClass("filterOn");
            $('#resultSearch').val("");
            $('.resultList').shuffle('shuffle', function($el, shuffle){
                return $el.hasClass('clothes');                      
            });
        });
    },
                
    //SetSort function applies all available filters in the DROPDOWN, and when a filter is selected, the charities are sorted accordingly
    SetSort : function(){
        $('.sort-options').on('change', function() {
            var sort = this.value,
            opts = {};
            if(sort === 'title'){
                opts = {
                    by: function($el){
                        return $el.data('name')
                    }
                };
            } else if(sort === 'popularity'){
                opts = {
                    by: function($el){
                        return $el.data('popularity')
                    }
                };
            }
            $('.resultList').shuffle('sort', opts);
        });
    },

    //SetSearch function applies all available filters in the SEARCH BOX, and when a filter is selected, the charities with matching names are displayed
    SetSearch : function(){
        $('#resultSearch').on('keyup change', function(){
            $(".filterOn").removeClass("filterOn");
            $("#all").addClass("filterOn");
            var val = this.value.toLowerCase();
            $('.resultList').shuffle('shuffle', function($el, shuffle){
                if(shuffle.group !== 'all' && $.inArray(shuffle.group, $el.data('groups')) === -1){
                    return false;
                }
                var text = $.trim($el.find('.charityHead').text() ).toLowerCase();
                return text.indexOf(val) !== -1;
            });
        });
    }
}//end of var galleryJS
            
$(function(){
    galleryJS.Init();
});