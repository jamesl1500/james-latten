$(function(){
    var busy = false;
    var folder = "/jameslatten.com";

    $(".startHireModal").click(function(){
        $(".hireModal").removeClass('hidden');
        $(".overlay").fadeIn('fast');
    });

    $(".availHireBtn").click(function() {
        $('html, body').animate({
            scrollTop: $("#availHire").offset().top
        }, 1000);
    });

    $("#closeBox").click(function() {
        $(".hireModal").addClass('hidden');
        $(".overlay").fadeOut('fast');
        return false;
    });

    $(document).on('submit', '#emailHireForm', function(){
        if(busy == false)
        {
            busy = true;

            // Vars
            var name = $("#name");
            var email = $("#email");
            var phoneNumber = $("#phoneNumber");
            var website = $("#website");
            var aboutProject = $("#aboutYouAndProject");

            if(name.val() != "" && email.val() != ""  && aboutProject.val() != "")
            {
                $.post(folder + "/api/email/send", {name: name.val(), email: email.val(), aboutYouAndProject: aboutProject.val(), website: website.val(), phoneNumber: phoneNumber.val()}, function(data) {
                    var obj = jQuery.parseJSON(data);

                    if(obj.code == 1)
                    {
                        alert(obj.status);
                        busy = false;
                    }else{
                        alert(obj.status);
                        busy = false;
                    }
                });
            }else{
                alert("Please enter the required fields(Name, email, and About yourself");
                busy = false;

                return false;
            }
        }
    });
});