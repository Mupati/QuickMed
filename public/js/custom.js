 //My custom jQuery
$(document).ready( function() {

//Make Navigation Tabs active when clicked 
$('nav li').click(function(){
	$('nav li').removeClass("active")
	$(this).addClass("active")
});

//Organizations Tabs
$(function () {
	$('.nav-tabs a:first').tab('show');
  });

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


$('#pro img').mousemove(function(){
	$(this).css("background-color","green","opacity","0.4");
});

	

});