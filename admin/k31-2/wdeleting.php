<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    




<!-- CDN For Javascript -->

<script src="jquery.js"></script>

<script src="sweetalert.js"></script>

<script>
 $(document).ready(function () {
    
    $('.delete_btn_ajax').click(function (e) { 
        e.preventDefault();
        
          var deleteidfor = $(this).closest("tr").find('.delete_id_value').val();
          var deletenamefor = $(this).closest("tr").find('.delete_name_value').val();
        //   console.log(deleteidfor);

                    swal({
                title: "Are you sure?",
                text: "You want to delete data of " + (deletenamefor) + " From Database",
                icon: "warning",
                buttons: true,
                dangerMode: true,
                })
                .then((willDelete) => {
                if (willDelete) {
                    $.ajax({
                      type: "POST",
                      url: "delete6534676546.php",
                      data: {
                        "delete_btn_set": 1,
                        "delete_id_num": deleteidfor,

                      },
                      
                      success: function (response) {
                                swal("Data Deleted Successfully. ", {
                        
                        icon: "success",
                                }).then((result) => {
                                location.reload();
                              });
    
                        }
                      });

                    }

                    });
                
                });
        
        
    }); 
 </script>
</body>
</html>