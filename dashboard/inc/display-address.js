function displayAddress()
{
    var selectvalue = document.getElementById("location").value;
    $.ajax({
        type: "POST",
        url: "outlet-setup-checking.ajax.php",
        data:
        {
            'oid': selectvalue
        },
        success:function(data)
        {
            document.getElementById("address").value = data;
        }
    })
}