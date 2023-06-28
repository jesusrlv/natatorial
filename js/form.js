
  function valorClic(x){
    var valor = x;
    document.getElementById('inputValor').value = valor;
    if(valor == 1){
        document.getElementById('star1').setAttribute('class','bi bi-star-fill');
        document.getElementById('star1').setAttribute('style','color:#EFB810');
        console.log(x);
        document.getElementById('star2').setAttribute('class','bi bi-star');
        document.getElementById('star2').setAttribute('style','color:#ffffff');
        document.getElementById('star3').setAttribute('class','bi bi-star');
        document.getElementById('star3').setAttribute('style','color:#ffffff');
        document.getElementById('star4').setAttribute('class','bi bi-star');
        document.getElementById('star4').setAttribute('style','color:#ffffff');
        document.getElementById('star5').setAttribute('style','color:#ffffff');
        document.getElementById('star5').setAttribute('class','bi bi-star');
        }
    else if(valor == 2){
        document.getElementById('star1').setAttribute('class','bi bi-star-fill');
        document.getElementById('star1').setAttribute('style','color:#EFB810');
        document.getElementById('star2').setAttribute('class','bi bi-star-fill');
        document.getElementById('star2').setAttribute('style','color:#EFB810');
        console.log(x);
        document.getElementById('star3').setAttribute('class','bi bi-star');
        document.getElementById('star3').setAttribute('style','color:#ffffff');
        document.getElementById('star4').setAttribute('class','bi bi-star');
        document.getElementById('star4').setAttribute('style','color:#ffffff');
        document.getElementById('star5').setAttribute('class','bi bi-star');
        document.getElementById('star5').setAttribute('style','color:#ffffff');
        }
    else if(valor == 3){
        document.getElementById('star1').setAttribute('class','bi bi-star-fill');
        document.getElementById('star1').setAttribute('style','color:#EFB810');
        document.getElementById('star2').setAttribute('class','bi bi-star-fill');
        document.getElementById('star2').setAttribute('style','color:#EFB810');
        document.getElementById('star3').setAttribute('class','bi bi-star-fill');
        document.getElementById('star3').setAttribute('style','color:#EFB810');
        console.log(x);
        document.getElementById('star4').setAttribute('class','bi bi-star');
        document.getElementById('star4').setAttribute('style','color:#ffffff');
        document.getElementById('star5').setAttribute('class','bi bi-star');
        document.getElementById('star5').setAttribute('style','color:#ffffff');

        }
    else if(valor == 4){
        document.getElementById('star1').setAttribute('class','bi bi-star-fill');
        document.getElementById('star1').setAttribute('style','color:#EFB810');
        document.getElementById('star2').setAttribute('class','bi bi-star-fill');
        document.getElementById('star2').setAttribute('style','color:#EFB810');
        document.getElementById('star3').setAttribute('class','bi bi-star-fill');
        document.getElementById('star3').setAttribute('style','color:#EFB810');
        document.getElementById('star4').setAttribute('class','bi bi-star-fill');
        document.getElementById('star4').setAttribute('style','color:#EFB810');
        console.log(x);
        document.getElementById('star5').setAttribute('class','bi bi-star');
        document.getElementById('star5').setAttribute('style','color:#ffffff');
        }
    else if(valor == 5){
        document.getElementById('star1').setAttribute('class','bi bi-star-fill');
        document.getElementById('star1').setAttribute('style','color:#EFB810');
        document.getElementById('star2').setAttribute('class','bi bi-star-fill');
        document.getElementById('star2').setAttribute('style','color:#EFB810');
        document.getElementById('star3').setAttribute('class','bi bi-star-fill');
        document.getElementById('star3').setAttribute('style','color:#EFB810');
        document.getElementById('star4').setAttribute('class','bi bi-star-fill');
        document.getElementById('star4').setAttribute('style','color:#EFB810');
        document.getElementById('star5').setAttribute('class','bi bi-star-fill');
        document.getElementById('star5').setAttribute('style','color:#EFB810');
        console.log(x);
        }
  }

  function saveTestimonial(){
    var testimonial = document.getElementById('textAreaTestimonial').value;
    var calif = document.getElementById('inputValor').value;
    var charactersNum = document.getElementById('caracteres').value;
    console.log('el valor de caractéres es '+ charactersNum);

    if(calif == "" || testimonial == "" || charactersNum > 300){
        alert("Empty testimonial or empty score or there are more than 300 letters!");
    }
    else{
    $.ajax({
        type:"POST",
        url:"admin/prcd/testimonial.php",
        data:{
            testimonial:testimonial,
            calif:calif
        },
        dataType: "JSON",
        async:true,
        cache: false,
          success: function(response)
          { 
            var jsonData = JSON.parse(JSON.stringify(response));
            var texto = jsonData.texto;
            console.log(texto);

                        if(jsonData.success = 0){
                            Swal.fire(
                                'Natatorial',
                                'Not registered!',
                                'danger'
                              )
                        }
                        else if (jsonData.success = 1)
                        { 
                            Swal.fire({
                                icon: 'success',
                                imageUrl: 'img/natatorial_logo.png',
                                imageHeight: 200,
                                imageAlt: 'Natatorial',
                                title: 'Thank you!',
                                text: 'Thank you for your testimonial, it will help us to improve our service!',
                                confirmButtonColor: '#3085d6',
                                footer: 'Natatorial'
                            }).then(function(){window.location='schedule.php';});
                        }

          }
        });
    }
  }

  function testimonials(){
    var x = 0;
    $.ajax({
        type:"POST",
        url:"admin/prcd/reviews.php",
        data:{
            x:x
        },
        dataType: "html",
       
        cache: false,
          success: function(response)
          { 
            $('#reviews').fadeIn(1000).html(response);
          }
        });
  }

  function countChars(obj){
    var maxLength = 300;
    var strLength = obj.value.length;
    
    if(strLength > maxLength){
        document.getElementById("charNum").innerHTML = '<span style="color: red;">'+strLength+' out of '+maxLength+' characters</span><input value="'+strLength+'" id="caracteres" hidden>';
    }else{
        document.getElementById("charNum").innerHTML = strLength+' out of '+maxLength+' characters <input value="'+strLength+'" id="caracteres" hidden>';
    }
}