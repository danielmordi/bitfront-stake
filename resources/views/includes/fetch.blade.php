<script>
    $(document).ready(function () {
        $("#walletBalanceBtn").click(function (e) { 
            e.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            })

            let formData = {
                amount: $('input[name="wb_amount"]').val(),
            };

            let type = 'PATCH';
            let url = 'view/update/wb/'+{{ $user->id }};

            $.ajax({
                type: type,
                url: url,
                data: formData,
                dataType: "json",
                success: function (response) {
                    console.log(response);
                    $("#walletBalanaceAlert").addClass('text-success');
                    $("#walletBalanaceAlert").html(response.success);
                    setTimeout(function() { 
                        $("#success").hide().html(''); 
                        location.reload();
                    }, 5000);
                },
                error: function (response) {
                    console.log(response);
                }
            });
        });
    });
    
    $(document).ready(function () {
        $("#hashRateBtn").click(function (e) { 
            e.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            })

            let formData = {
                amount: $('input[name="hr_amount"]').val(),
            };

            let type = 'PATCH';
            let url = 'view/update/hr/'+{{ $user->id }};

            $.ajax({
                type: type,
                url: url,
                data: formData,
                dataType: "json",
                success: function (response) {
                    console.log(response);
                    $("#hashRateAlert").addClass('text-success');
                    $("#hashRateAlert").html(response.success);
                    setTimeout(function() { 
                        $("#success").hide().html(''); 
                        location.reload();
                    }, 5000);
                },
                error: function (response) {
                    console.log(response);
                }
            });
        });
    });
    
    $(document).ready(function () {
        $("#bonusBtn").click(function (e) { 
            e.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            })

            let formData = {
                amount: $('input[name="b_amount"]').val(),
            };

            let type = 'PATCH';
            let url = 'view/update/bonus/'+{{ $user->id }};

            $.ajax({
                type: type,
                url: url,
                data: formData,
                dataType: "json",
                success: function (response) {
                    console.log(response);
                    $("#bonusAlert").addClass('text-success');
                    $("#bonusAlert").html(response.success);
                    setTimeout(function() { 
                        $("#success").hide().html(''); 
                        location.reload();
                    }, 5000);
                },
                error: function (response) {
                    console.log(response);
                }
            });
        });
    });

</script>