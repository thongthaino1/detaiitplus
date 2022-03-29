$("#submit_search").on("click",function (e) {
    e.preventDefault();
});
$("#orderby").on("change",function (e) {
    e.preventDefault();
});
$("#filter").on("click",function (e) {
    e.preventDefault();
});
function getLink() {

    var data = [];
     data[data.length] =  $("#searchForm").serialize();
     data[data.length] = $("#orderby").serialize();
    data[data.length] = $("#filterPrice").serialize();

    var string = data.join("&");
    var arr = string.trim().split("&");
    var result = [];
    for(var  i = 0;i<arr.length;i++)
    {
        var a = arr[i].split("=");
        if(a[1] == "")
        {
            continue;
        }else
        {
            result[result.length] = arr[i];
        }
    }

     string = result.join("&");
    // alert(string);
   window.location =  "shop.php?"+string ;


}