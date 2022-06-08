$(function(){
    $("#confirm").click(function (e) {
        let scroll_top = $(document).scrollTop();
		$(".hidden").val(scroll_top);
    });
    $("#back").click(function (e) {
        let scroll_top = $(document).scrollTop();
		$(".hidden").val(scroll_top);	
    });
    $("#submit").click(function (e) {
        let scroll_top = $(document).scrollTop();
		$(".hidden").val(scroll_top);	
    });
});