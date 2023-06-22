
// function ranking(){
//     document.getElementById('star1').setAttribute('class','bi bi-star-fill');
//     document.getElementById('star1').setAttribute('style','color:#EFB810');
//   }
//   function rankingOut(){
//     document.getElementById('star1').setAttribute('class','bi bi-star');
    
//   }

//   function ranking2(){
//     document.getElementById('star1').setAttribute('class','bi bi-star-fill');
//     document.getElementById('star1').setAttribute('style','color:#EFB810');
//     document.getElementById('star2').setAttribute('class','bi bi-star-fill');
//     document.getElementById('star2').setAttribute('style','color:#EFB810');
//   }
//   function rankingOut2(){
//     document.getElementById('star1').setAttribute('class','bi bi-star');
//     document.getElementById('star2').setAttribute('class','bi bi-star');
    
//   }

//   function ranking3(){
//     document.getElementById('star1').setAttribute('class','bi bi-star-fill');
//     document.getElementById('star1').setAttribute('style','color:#EFB810');
//     document.getElementById('star2').setAttribute('class','bi bi-star-fill');
//     document.getElementById('star2').setAttribute('style','color:#EFB810');
//     document.getElementById('star3').setAttribute('class','bi bi-star-fill');
//     document.getElementById('star3').setAttribute('style','color:#EFB810');
//   }
//   function rankingOut3(){
//     document.getElementById('star1').setAttribute('class','bi bi-star');
//     document.getElementById('star2').setAttribute('class','bi bi-star');
//     document.getElementById('star3').setAttribute('class','bi bi-star');
    
//   }

//   function ranking4(){
//     document.getElementById('star1').setAttribute('class','bi bi-star-fill');
//     document.getElementById('star1').setAttribute('style','color:#EFB810');
//     document.getElementById('star2').setAttribute('class','bi bi-star-fill');
//     document.getElementById('star2').setAttribute('style','color:#EFB810');
//     document.getElementById('star3').setAttribute('class','bi bi-star-fill');
//     document.getElementById('star3').setAttribute('style','color:#EFB810');
//     document.getElementById('star4').setAttribute('class','bi bi-star-fill');
//     document.getElementById('star4').setAttribute('style','color:#EFB810');
//   }
//   function rankingOut4(){
//     document.getElementById('star1').setAttribute('class','bi bi-star');
//     document.getElementById('star2').setAttribute('class','bi bi-star');
//     document.getElementById('star3').setAttribute('class','bi bi-star');
//     document.getElementById('star4').setAttribute('class','bi bi-star');
    
//   }

//   function ranking5(){
//     document.getElementById('star1').setAttribute('class','bi bi-star-fill');
//     document.getElementById('star1').setAttribute('style','color:#EFB810');
//     document.getElementById('star2').setAttribute('class','bi bi-star-fill');
//     document.getElementById('star2').setAttribute('style','color:#EFB810');
//     document.getElementById('star3').setAttribute('class','bi bi-star-fill');
//     document.getElementById('star3').setAttribute('style','color:#EFB810');
//     document.getElementById('star4').setAttribute('class','bi bi-star-fill');
//     document.getElementById('star4').setAttribute('style','color:#EFB810');
//     document.getElementById('star5').setAttribute('class','bi bi-star-fill');
//     document.getElementById('star5').setAttribute('style','color:#EFB810');
//   }
//   function rankingOut5(){
//     document.getElementById('star1').setAttribute('class','bi bi-star');
//     document.getElementById('star2').setAttribute('class','bi bi-star');
//     document.getElementById('star3').setAttribute('class','bi bi-star');
//     document.getElementById('star4').setAttribute('class','bi bi-star');
//     document.getElementById('star5').setAttribute('class','bi bi-star');
    
//   }

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

    if(calif == "" || testimonial == ""){
        alert("Empty fields");
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
        async:false,
        cache: false,
          success: function(response)
          { 
            var jsonData = JSON.parse(JSON.stringify(response));
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
                        else if (jsonData.success = 1)
                        { }

          }
        });
    }
  }