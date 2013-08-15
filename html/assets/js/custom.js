$(document).ready(function() {

    //点击显示菜单的按钮
    $(".left_menu_btn").click(function(){
        if($(".left_menu").css("display") == "none"){
            $(".left_menu").show();
            $(".left_menu").css("top", "80px");
            $(".left_menu").css("height", $(window).height()-80);
        }
        else{
            $(".left_menu").hide();
            $(".left_menu").css("top", "5px");
            $(".left_menu").css("height", $(window).height()-5);
        }
    });

    //拉动浏览器，自适应
    $(window).resize(function(){
        if($(window).width() > 768){
            $(".left_menu").show();
            $(".left_menu").css("top", "5px");
            $(".left_menu").css("height", $(window).height()-5);
            $(".left_menu > .logo").show();
        }
        else{
            $(".left_menu").hide();
            $(".left_menu").css("top", "80px");
            $(".left_menu").css("height", $(window).height()-80);
            $(".left_menu > .logo").hide();
        }
    });

    //手机中，堆叠式排列
    function navStacked(){
        if($(window).width() > 360){
            $('.nav-tabs').removeClass('nav-stacked');
        }
        else{
            $('.nav-tabs').addClass('nav-stacked');
            //手机中，底部分两行
            $('footer > div.bottom > img').before('<br />');
        }
    }
    navStacked();
});