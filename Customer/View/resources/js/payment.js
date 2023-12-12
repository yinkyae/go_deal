$(document).ready(function () {
    var checked = false;
    $("#CODlabel").click(function () {
        if(!checked){
            $(this).css('text-decoration', 'underline');
            checked = !checked;
        } else {
            $(this).css('text-decoration', 'none');
            checked = !checked;
        }
    })
})