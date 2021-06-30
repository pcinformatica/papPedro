function fillTableBlog(txt='') {
    $.ajax({
        url: "AJAXFillBlog.php",
        type: "post",
        data: {
            txt: txt
        },
        success: function (result) {
            $('#tableContent').html(result);
        }
    });
}