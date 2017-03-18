var star = 0;

$("#s1").hover(function(){
    $('#s1').html('★ <input type="hidden" value="1" name="rating">');
    $('#s2').html('☆');
    $('#s3').html('☆');
    $('#s4').html('☆');
    $('#s5').html('☆');
    $('#s1').css('color','#5cb85c');
    $( "#s1" ).click(function(){
        star = 1;
        console.log(star);
    });
});
$("#s2").hover(function(){
    $('#s1').html('★');
    $('#s2').html('★ <input type="hidden" value="2" name="rating">');
    $('#s3').html('☆');
    $('#s4').html('☆');
    $('#s5').html('☆');
    $('#s5').html('☆');
    $('#s1, #s2').css('color','#5cb85c');
    $( "#s2" ).click(function(){
        star = 2;
        console.log(star);
    });
});
$("#s3").hover(function(){
    $('#s1').html('★');
    $('#s2').html('★');
    $('#s3').html('★ <input type="hidden" value="3" name="rating">');
    $('#s4').html('☆');
    $('#s5').html('☆');
    $('#s1, #s2, #s3').css('color','#5cb85c');
    $( "#s3" ).click(function(){
        star = 3;
        console.log(star);
    });
});

$("#s4").hover(function(){
    $('#s1').html('★');
    $('#s2').html('★');
    $('#s3').html('★');
    $('#s4').html('★ <input type="hidden" value="4" name="rating">');
    $('#s5').html('☆');
    $('#s1, #s2, #s3, #s4').css('color','#5cb85c');
    $( "#s4" ).click(function() {
        star = 4;
        console.log(star);
    });
});
$("#s5").hover(function(){
    $('#s1').html('★');
    $('#s2').html('★');
    $('#s3').html('★');
    $('#s4').html('★');
    $('#s5').html('★ <input type="hidden" value="5" name="rating">');
    $('#s1, #s2, #s3, #s4, #s5').css('color','#5cb85c');
    $( "#s5" ).click(function() {
        star = 5;

    });
});


$('.rating').mouseleave(function() {
    if (star == 0) {
        $('#s1').html('☆ <input type="hidden" value="0" name="rating">');
        $('#s2').html('☆');
        $('#s3').html('☆');
        $('#s4').html('☆');
        $('#s5').html('☆');

    }else if (star == 1) {
        $('#s1').html('★ <input type="hidden" value="1" name="rating">');
        $('#s2').html('☆');
        $('#s3').html('☆');
        $('#s4').html('☆');
        $('#s5').html('☆');
        $('#s1').css('color','#5cb85c');

    }else if (star == 2) {
        $('#s1').html('★');
        $('#s2').html('★ <input type="hidden" value="2" name="rating">');
        $('#s3').html('☆');
        $('#s4').html('☆');
        $('#s5').html('☆');
        $('#s5').html('☆');
        $('#s1, #s2').css('color','#5cb85c');

    }else if (star == 3) {
        $('#s1').html('★');
        $('#s2').html('★');
        $('#s3').html('★ <input type="hidden" value="3" name="rating">');
        $('#s4').html('☆');
        $('#s5').html('☆');
        $('#s1, #s2, #s3').css('color','#5cb85c');

    }else if (star == 4) {
        $('#s1').html('★');
        $('#s2').html('★');
        $('#s3').html('★');
        $('#s4').html('★ <input type="hidden" value="4" name="rating">');
        $('#s5').html('☆');
        $('#s1, #s2, #s3, #s4').css('color','#5cb85c');

    }else if(star == 5){
        $('#s1').html('★');
        $('#s2').html('★');
        $('#s3').html('★');
        $('#s4').html('★');
        $('#s5').html('★ <input type="hidden" value="5" name="rating">');
        $('#s1, #s2, #s3, #s4, #s5').css('color','#5cb85c');

    }
});
$('#myTabs a').click(function (e) {
    e.preventDefault()
    $(this).tab('show')
})

$('#myTabs a[href="#profile"]').tab('show') // Select tab by name
$('#myTabs a:first').tab('show') // Select first tab
$('#myTabs a:last').tab('show') // Select last tab
$('#myTabs li:eq(2) a').tab('show') // Select third tab (0-indexed)




$('#myTabs a').click(function (e) {
    e.preventDefault()
    $(this).tab('show')
})

$('#myTabs a[href="#profile"]').tab('show') // Select tab by name
$('#myTabs a:first').tab('show') // Select first tab
$('#myTabs a:last').tab('show') // Select last tab
$('#myTabs li:eq(2) a').tab('show') // Select third tab (0-indexed)