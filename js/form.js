
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