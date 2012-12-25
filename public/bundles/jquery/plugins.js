(function( $ ){

    /**
    * Расширение дропдауна Twitter Bootstrap
    */
    jQuery.fn.setselector = function(options) {  

        var opt = $.extend( {
          'target': 'setselector-target',
          'name'  : ''
        }, options);

        return this.each(function() {
            
            var me = this;
            
            $(me).click(function(){
                me.parent_element = $(me).parents('li.dropdown-submenu').get(0);
                me.base_ctg = $( $( me.parent_element ).children('.base-ctg').get(0) ).html();
                
                        $('#modal-place .plase-categorie-selected').removeClass('empty');
                        $('#modal-place form input[name="ctg"]').val( $(this).attr('id').split('-')[1] );
                        $('#modal-place .plase-categorie-selected').html( base_ctg + ' / ' + $(this).html() );
                        
                        //$(this).parents('.dropdown-menu').css('display', 'none');
                        $(this).parents('.btn-group').removeClass('open');

                        return false;
            });
        });

    };
    
})( jQuery );