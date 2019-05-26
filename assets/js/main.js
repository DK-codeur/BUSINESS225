/************************[ navbar shrink / full function]******************************/

function changeNav()
    {
        $(window).scroll(function() {

            if($(window).scrollTop() > 105)
                {
                    $('.navbar').removeClass('full');
                    $('.navbar').addClass('shrink');

                    $('.navbar').addClass('fixed-top-n');
                    $('.fixed-top-s').css('top', '45px');
                    $('#search').addClass('fixed-top-s');

                    $('.navbar-collapse').addClass('navbar-collapse-shrink');
                    $('.navbar-collapse').removeClass('navbar-collapse-full');
                }

            else
                {
                    $('.navbar').addClass('full');
                    $('.navbar').removeClass('shrink');
                    $('.navbar').removeClass('fixed-top-n');

                    $('.fixed-top-s').css('top', '136px');
                    $('#search').addClass('fixed-top-s');   
                    
                    $('.navbar-collapse').removeClass('navbar-collapse-shrink');                
                    $('.navbar-collapse').addClass('navbar-collapse-full');                
                }
        })
    }







$('document').ready(function() {

    $(window).resize(function() {

        if( $(window).width() < 576 ) {
                // $('.br').css('display', 'inline');
                $('.prix').css('fontSize', '0.8rem');
            }

        else{
            // $('.br').css('display', 'none');
            $('.prix').css('fontSize', '1.25rem')
        }
    })


    $(window).scroll(function() {
        changeNav();
    })

/************************[ back to scroll]***********************/
   
    $('#toTop').on("click", function(){
        $('html, body').animate({scrollTop: 0}, 800);
    });
 

   


}) //script end