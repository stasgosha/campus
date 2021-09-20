$(document).ready(function(){
    $('.lang-list a').click(function(){
       window.location.href=$(this).attr('href');
    });
});