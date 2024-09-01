$('#nav_menu').click(function(){
    if ($('.nav').css('left') == '-205px') {
        $('.nav').transition({
            left:"0px"
          },1000)
    }
    else if ($('.nav').css('left') == '0px') {
        $('.nav').transition({
            left:"-205px"
          },1000)
    }
})
$('.enter_select').click(function(){
        localStorage.act = 1
        $('#switch_box1').css('display','block')
        $('#switch_box2').css('display','none')
        $('.enter_select').css('background-color','rgba(161, 161, 161, 0.192)')
        $('.reg_select').css('background-color','rgb(59, 59, 59)')
})
$('.reg_select').click(function(){
        localStorage.act = 2
        $('#switch_box2').css('display','block')
        $('#switch_box1').css('display','none')
        $('.enter_select').css('background-color','rgb(59, 59, 59)')
        $('.reg_select').css('background-color','rgba(161, 161, 161, 0.192)')
})
if(localStorage.getItem('act') == 1){
    $('#switch_box1').css('display','block')
    $('#switch_box2').css('display','none')
    $('.enter_select').css('background-color','rgba(161, 161, 161, 0.192)')
    $('.reg_select').css('background-color','rgb(59, 59, 59)')
}
if(localStorage.getItem('act') == 2){
    $('#switch_box2').css('display','block')
    $('#switch_box1').css('display','none')
    $('.enter_select').css('background-color','rgb(59, 59, 59)')
    $('.reg_select').css('background-color','rgba(161, 161, 161, 0.192)')
}