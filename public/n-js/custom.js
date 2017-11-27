 //My custom jQuery
$(document).ready( function() {

/*Make Navigation Tabs active when clicked 
$('nav li').click(function(){
	$('nav li').removeClass("active")
	$(this).addClass("active")
});
*/

/******* Preloader js *****/
var Body = $('body');
    Body.addClass('preloader-site');

//Replacing nav1 with nav2
$(document).scroll(function(){
	var scroll_top = $(this).scrollTop();
	var style1 = {position:"fixed",zIndex:"1300px",top:"0px",right:"0px",left:"0px",marginTop:"0px"};
	var style2 = {position:"",zIndex:"",top:"",right:"",left:"",marginTop:""};
	if(scroll_top >= 72){
		$('#nav2').css(style1);
	}else{
		$('#nav2').css(style2);
	}



});

});

$(window).load(function() {
    $('.preloader-wrapper').fadeOut();
    $('body').removeClass('preloader-site');
});

$(window).scroll(function() {
    if ($(this).scrollTop() >= 350) {        // If page is scrolled more than 50px
        $('#up').fadeIn(200);    // Fade in the arrow
    } else {
        $('#up').fadeOut(200);   // Else fade out the arrow
    }
});

$('#up').click(function() {      // When arrow is clicked
    $('body,html').animate({
        scrollTop : 0                       // Scroll to top of body
    }, 1000);
});



// $(document).ready(function($) {
//     var Body = $('body');
//     Body.addClass('preloader-site');
// });
// $(window).load(function() {
//     $('.preloader-wrapper').fadeOut();
//     $('body').removeClass('preloader-site');
// });