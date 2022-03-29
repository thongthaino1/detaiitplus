    function deleteBanner(id) {
        swal({
            title: "Bạn có muốn xoá tiêu đề này không?",
            text: "Khi đã xóa ,bạn sẽ không thể khôi phục lại!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        }).then((willDelete) => {
                if (willDelete) {
                    $.post('api/delete_banner.php', {
                        'id': id
                    }, function(data) {
                        console.log(data);
                        if(data == 'success')
                        {
                            swal("Good job!", "Xóa thành công!", "success").then(()=>
                            {
                                location.reload();
                            });

                        }else{
                            swal("Fail!", "Xóa thất bại!", "error");
                        }

                    })

                } else {
                    swal("Bạn đã hủy!");
                    return;
                }
            });
    }
    function deleteProduct(id) {
        swal({
            title: "Bạn có muốn xoá sản phẩm này không?",
            text: "Khi đã xóa ,bạn sẽ không thể khôi phục lại!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        }).then((willDelete) => {
            if (willDelete) {
                $.post('api/delete_product.php', {
                    'id': id
                }, function(data) {
                    console.log(data);
                    if(data == 'success')
                    {
                        swal("Good job!", "Xóa thành công!", "success").then(()=>
                        {
                            location.reload();
                        });
                    }else{
                        swal("Fail!", "Xóa thất bại!", "error");
                    }

                })

            } else {
                swal("Bạn đã hủy!");
                return;
            }
        });
    }
    function delete_category(id) {
        swal({
            title: "Bạn có muốn xoá loại sản phẩm này không?",
            text: "Khi đã xóa ,bạn sẽ không thể khôi phục lại!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        }).then((willDelete) => {
            if (willDelete) {
                $.post('api/delete_category.php', {
                    'id': id
                }, function(data) {
                    console.log(data);
                    if(data == 'success')
                    {
                        swal("Good job!", "Xóa thành công!", "success").then(()=>
                        {
                            window.location.href="category.php";
                        });
                    }else{
                        swal("Fail!", "Xóa thất bại!", "error");
                    }

                })

            } else {
                swal("Bạn đã hủy!");
                return;
            }
        });

    }

    function deleteAccount(id) {
        var option = confirm('Bạn có muốn xoá tài khoản này không');
        if(!option) {
            return;
        }
        $.post('api/delete_account.php', {
            'id': id
        }, function(data) {
            alert(data);
            location.reload()
        })
    }

    function deleteArticle(id) {
        var option = confirm('Bạn có muốn xoá bài viết này không');
        if(!option) {
            return;
        }
        $.post('api/delete_article.php', {
            'id': id
        }, function(data) {
            alert(data);
            location.reload()
        })
    }

    function deleteCustomer(id) {
        var option = confirm('Bạn có muốn xoá khách hàng này không');
        if(!option) {
            return;
        }
        $.post('api/delete_customer.php', {
            'id': id
        }, function(data) {
            alert(data);
            location.reload()
        })
    }
    function deleteCoupon(id) {
        swal({
            title: "Bạn có muốn xoá khuyến mãi này không",
            text: "Khi đã xóa ,bạn sẽ không thể khôi phục lại!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        }).then((willDelete) => {
            if (willDelete) {
                $.post('api/delete_coupon.php', {
                    'id': id
                }, function(data) {
                    console.log(data);
                    if(data == 'success')
                    {
                        swal("Good job!", "Xóa thành công!", "success").then(()=>
                        {
                            location.reload();
                        });
                    }else{
                        swal("Fail!", "Xóa thất bại!", "error");
                    }

                })

            } else {
                swal("Bạn đã hủy!");
                return;
            }
        });
    }
    function sendMail(id) {
        swal({
            title: "Bạn có muốn gửi mail khuyến mãi này không",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        }).then((willDelete) => {
            if (willDelete) {
                $.post('api/send_coupon.php', {
                    'id': id
                }, function(data) {
                    console.log(data);
                    if(data == 'success')
                    {
                        swal("Good job!", "Gửi thành công!", "success").then(()=>
                        {
                            location.reload();
                        });
                    }else{
                        swal("Fail!", "Gửi thất bại!", "error");
                    }

                })

            } else {
                swal("Bạn đã hủy!");
                return;
            }
        });
    }


