
$(document).ready(function () {
    //adding user
$(document).on('submit','#addForm',function (e) {
    e.preventDefault()
    //ajax
    $.ajax({
        url:'/phpcrudajax/ajax.php',
        type:'POST',
        dataType:'json',
        data: new FormData(this),
        processData: false,
        contentType:false,
        beforeSend:function () {
            console.log("Wait..")
        },

        success:function (response) {
            //alert('AJAX call was successful!');
            console.log(response)
        },
        error:function (request,error) {
            console.log(arguments)
            console.log("Error"+ error)
        },
    })
})
})