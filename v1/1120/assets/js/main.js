$(document).ready(function () {
    $("#login_button").click(function () {
        let empID = $("#normal_emp_id").val();
        if (empID == "emp001") {
            toggleForm('login_div', 'new_password_firstTime_div');
        } else {
            toggleForm('login_div', 'mfa_div');
        }
    });

    // check height function call
    checkHeight();


    //      Copy Clipboard Script     //
    // -------------------------------

    var userText = $(".copy-to-clipboard");
    var btnCopy = $(".copy-btn");

    // copy text on click
    btnCopy.on("click", function () {
        userText.select();
        document.execCommand("copy");
    });

});


// check if User Personal page is editable or not

var getUrlParameter = function getUrlParameter(sParam) {
    var sPageURL = window.location.search.substring(1),
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;

    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');

        if (sParameterName[0] === sParam) {
            return sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
        }
    }
    return false;
};

let editPage = getUrlParameter('edit');
if (editPage) {
    $('#userPersonalForm.form input').attr('disabled', false);
}

// check if User Personal page is editable or not




// Notification js -------

function success_notification(title, text, type) {
    Swal.fire({
        title: title,
        text: text,
        type: type,
        showConfirmButton: false,
        // timer: 2000
    });
}

function checkHeight() {
    setTimeout(function () {
        let rightSideWrapperCard = $(".right-side-wrapper .card").height();
        $(".left-side-wrapper .card").css({
            height: rightSideWrapperCard,
        });
    }, 450)
}

$(".vl-tab").click(function () {
    $(".vl-tab.active-tab").removeClass("active-tab");
    $(this).addClass("active-tab")
});

function vlActiveTabs(showDivClassName, hideDivClassName) {
    $("." + showDivClassName).slideDown();
    $("." + hideDivClassName).slideUp();

    checkHeight();
}

function toggleForm(hide, show) {
    $('#' + hide).fadeOut(600);
    $('#' + show).fadeIn(600);
}

$('#type-success').on('click', function () {
    Swal.fire({
        title: "Login Successful",
        type: "success",
        showConfirmButton: false,
    });

    setTimeout(function () {
        window.location = window.location.href.replace("authentication", "dashboard").replace("authentication.html", "index.html");
    }, 2000);
});

$("#logoutBtn").click(function () {
    setTimeout(function () {
        var urlArr = window.location.href.split("/");
        window.location = window.location.href.replace(urlArr[urlArr.length - 2], "authentication").replace(urlArr[urlArr.length - 1], "authentication.html");
    }, 1000);
});

$("#success_reset_password_submit").on('click', function () {
    Swal.fire({
        title: "Success",
        text: "password sent successfully to registered email address",
        type: "success",
        showConfirmButton: false,
        timer: 1500
    });
});




// toggle password
$(".reset_new_password_icon").click(function () {
    let type = $("#reset_new_password").attr('type');
    if (type == "password") {
        $("#reset_new_password").attr('type', 'text');
    } else {
        $("#reset_new_password").attr('type', 'password');
    }
});