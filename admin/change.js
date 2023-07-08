function change(val,id){
    $.ajax({
        type:"POST",
        url:"prcd/change.php",
        data:{
            val:val,
            id:id
        },
        dataType: "JSON",
        async:true,
        cache: false,
          success: function(data)
          { 
            var jsonData = JSON.parse(JSON.stringify(data));
            var success = jsonData.success;

            if(success == 1){
                Swal.fire({
                    icon: 'success',
                    title: 'Done!',
                    html: 'the list is update!',
                    imageUrl: '../img/natatorial_logo.png',
                    imageWidth: 170,
                    imageHeight: 136,
                    imageAlt: 'Imagen',
                }).then(function(){
                    location.reload();
                 });
            }
            else{
                alert('Not update!');
            }
          }

    })
}