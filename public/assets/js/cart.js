function AddToCart(id) {
    var num = 1;
    if($("#quantity").val() != undefined)
    {
        num = $("#quantity").val();
    }

    if(num > 100 || num < 1)
    {
        swal("Số lượng sản p ko hợp lệ",{icon:"error"}).then(()=>{
            console.log(data);
            return ;
        });

    }else
    {
        $.post("addtocart.php", {
                'id': id,
                'num': num,
                'action': 'add'
            }, function (data) {
                swal("Thêm thành công",{icon:"success"}).then(()=>{
                    console.log(data);
                    location.reload();
                });

            }
        );
    }

}
function UpdateCart() {
    var cart = [];
    var as;
    const cookies = document.cookie.split(';');
    for (let i = 0; i < cookies.length; i++) {
        let c = cookies[i].trim().split('=');
        // console.log(c);
        // console.log(c[0]);
        if (c[0] == 'cart') {
            cart = c[1];
            cart = decodeURIComponent(cart);
            console.log(cart);
            as = JSON.parse(cart);

        }
    }
    console.log(as);
    var num, id;
    for (let i = 0; i < as.length; i++) {
        console.log(as[i]['id']);
        id = "quantity" + as[i]['id'];
        num = document.getElementById(id).value;
        if (num > 100 || num < 1) {
            swal("Lỗi","Số lượng sản phẩm ko hợp lệ",{icon:"error"}).then(() => {
            });

            return;
        } else {
            as[i]['num'] = num;

        }
    }
    var cartUpdate = JSON.stringify(as);

    $.post("addtocart.php", {
        'cartUpdate': cartUpdate,
        'action': 'update'
    }, function (data) {
        swal("Cập nhật  thành công",{icon:"success"}).then(() => {
            console.log(data);
            location.reload();
        });

    });
}


function DeleteFromCart(id) {

        swal("Bạn có muốn xóa sẩn phẩm khỏi giỏ hàng không",{icon:"warning",dangerMode:true,buttons: true}).then((willDelete) => {
            if(willDelete){
                $.post("addtocart.php", {
                    'id': id,
                    'action': 'delete'
                }, function (data) {
                    swal("Xóa thành công", {icon: "success"}).then(() => {
                        location.reload();
                    });
                });
            }else {
                return;
            }
        });
}


