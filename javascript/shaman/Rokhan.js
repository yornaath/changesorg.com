$(document).ready(function(){
    width = 700;
    leftm = parseInt((screen.availWidth/2) - (width/2));
    $("#pagewrapper").css("left", leftm+"px")
});

$(document).ready(function(){
    $("#main #forside").show();
    $("#prosjekter #pogk_generelt").show();
    $("#prosjekt1").show();
    $("#kurs1").show();
    $("[id='forside'][class='nav_inactive']").attr("class","nav_active");
    $("[id='pogk_generelt'][class='nav_inactive']").attr("class","nav_active");
});

$(document).ready(function(){
    $("#header #nav td").click(function(){
        $("#header .nav_active").attr("class","nav_inactive");
        $(this).attr("class","nav_active");
    });
    $("#prosjekter #nav td").click(function(){
        $("#prosjekter .nav_active").attr("class","nav_inactive");
        $(this).attr("class","nav_active");
    });

    p_open = 1;
    p_minopen = 1;
    p_maxopen = 1;
    $("[#prosjekter_nav td").click(function(){
        direction = $(this).attr("id");
        switch(direction)
        {
            case "+":
                if(p_open != p_maxopen)
                {
                    p_open++;
                }
                break;
            case "-":
                if(p_open != p_minopen)
                {
                    p_open--;
                }
                break;
        }
        $(".prosjekt_content:visible").fadeOut("fast", function(){
            $("#prosjekt"+p_open).fadeIn("fast");
        });
    });

    k_open = 1;
    k_minopen = 1;
    k_maxopen = 5;
    $("[#kurs_nav td").click(function(){
        direction = $(this).attr("id");
        switch(direction)
        {
            case "+":
                if(k_open != k_maxopen)
                {
                    k_open++;
                }
                break;
            case "-":
                if(k_open != k_minopen)
                {
                    k_open--;
                }
                break;
        }
        $(".kurs_content:visible").fadeOut("fast", function(){
            $("#kurs"+k_open).fadeIn("fast");
        });
    });


});



$(document).ready(function(){
    $("#header #nav td").click(function(){
        what = $(this).attr("id");
        $(".content").fadeOut("fast")
        setTimeout(function(){
            $("[class='content'][id='"+what+"']").fadeIn("fast");
        }, 250);
    });
    $("#prosjekter #nav td").click(function(){
        what = $(this).attr("id");
        $(".pogk_content").fadeOut("fast")
        setTimeout(function(){
            $("[class='pogk_content'][id='"+what+"']").fadeIn("fast");
        }, 250);
    });
});

$(document).ready(function(){
    $('.social_button').tipsy();
});

$(document).ready(function(){
    $('.social_button').click(function(){
        $(this).children('img').animate({
            'height': '28px',
            'margin-bottom': '2px',
            'margin-left': '2px'
        }, 40, function(){
            $(this).animate({
                'height': '32px',
                'margin-bottom': '0px',
                'margin-left': '0px'
            }, 40);
        });
    });
});
$(document).ready(function(){
    $("[id=1][class=gallery]").show(1);
    $("[id=1][class=gallery_page_button]").css({
        background: '#daf0f6'
    });
    $('.gallery_page_button').click(function(){
        $('.gallery_page_button').css({
            background: '#ebebeb'
        });
        $(this).css({
            background: '#daf0f6'
        });
        what = $(this).attr("id");
        $(".gallery").fadeOut("fast")
        setTimeout(function(){
            $("[id="+what+"][class=gallery]").fadeIn("fast");
        }, 300);

    });
});



$(document).ready(function(){

    var login_open = false;

    $('#show_login').mouseover(function(){
        $(this).animate({
            'opacity': '1'
        }, 250, function(){});
    });

    $('#show_login').mouseout(function(){
        switch(login_open)
        {
            case false:
                $(this).animate({
                    'opacity': '0'
                }, 250, function(){});
                break;
            case true:
                break;
        }
    });

    $('#show_login').click(function(){

        switch(login_open)
        {

            case false:
                $(this).css({
                    opacity: '1'
                })
                $("#login_tab").show(0, function(){
                    $(this).animate({
                        'height': '50px'
                    }, 50, function(){
                        $(this).animate({
                            'width': '+400'
                        }, 200, function(){
                            $(".login_form").show(1);
                        });
                    });
                });
                login_open = true;
                break;

            case true:
                $('#show_login').css({
                    opacity: '0'
                });
                $(".login_form").hide(10, function(){
                    $("#login_tab").animate({
                        'width': '-400px'
                    }, 400, function(){
                        $(this).animate({
                            'height': '-50px'
                        }, 1);
                        $(this).hide();
                    });
                });
                login_open = false;
                break;

        }
    });
});
$(document).ready(function(){
    $("#fbbutton").click(function(){
        width = 500;
        height = 400;
        leftm = parseInt((screen.availWidth/2) - (width/2));
        topm = parseInt((screen.availHeight/2) - (height/2));
        window.open("http://www.facebook.com/sharer.php?u=http://www.changesorg.com&t=Changes","_blank","toolbar=yes, location=yes, directories=no, status=no, menubar=yes, scrollbars=yes, resizable=no, copyhistory=yes, width="+width+", height="+height+", screenX="+leftm+", screenY="+topm);
    });
    $("#tweetbutton").click(function(){
        width = 550;
        height = 450;
        leftm = parseInt((screen.availWidth/2) - (width/2));
        topm = parseInt((screen.availHeight/2) - (height/2));
        window.open("http://twitter.com/share?url=http://changesorg.com&text=Changes(@changesorg)%20er%20en%20frivillig%20hjelpeorganisasjon%20med%20fokus%20p%C3%A5%20%C3%A5%20hjelpe%20barn%20og%20unge.","_blank","toolbar=yes, location=yes, directories=no, status=no, menubar=yes, scrollbars=yes, resizable=no, copyhistory=yes, width="+width+", height="+height+", screenX="+leftm+", screenY="+topm);
    });
});

$(document).ready(function(){
    $("#mailform_submit").click(function(){
        $("#mailform_response").html("<img src='style/img/sendanim.gif'/>");
        subject = $("#mailsubject").val();
        from = $("#mailfrom").val();
        content = $("#mailcontent").val();
        $.post("php/lib/mailer.php", {
            subject: subject,
            from: from,
            content: content
        },
        function(data){
            if(data == "true"){
                $("#mailform_response").css("color", "#476f47")
                $("#mailform_response").html("mailen ble sendt");
            }
            if(data == "false"){
                $("#mailform_response").css("color", "#bd2121")
                $("#mailform_response").html("det oppstod en feil, husk å fylle inn alle felt korrekt");
            }
        });
    });
});

