function validarInputs(){

  var inp1 = 0;
  var inp2 = 0;
  var inp3 = 0;
  var inp4 = 0;
  var inp5 = 0;
  var inp6 = 0;
  var inp7 = 0;
  var inp8 = 0;
  
  inp1 = document.getElementById('firstName');
  inp2 = document.getElementById('lastName');
  inp3 = document.getElementById('email');
  inp4 = document.getElementById('address');
  inp5 = document.getElementById('phone1');
  inp6 = document.getElementById('phone2');
  inp7 = document.getElementById('guardianName');
  inp8 = document.getElementById('guardianTelephone');

  if((inp1.value.length > 0) && (inp2.value.length > 0) && (inp3.value.length > 0) && (inp4.value.length > 0) && (inp5.value.length > 0) && (inp6.value.length > 0) && (inp7.value.length > 0) && (inp8.value.length > 0)){
    document.getElementById("button2").disabled = false;
  }
  else {
    document.getElementById("button2").disabled = true;
  }
}

function validarPayment(){
  
}

function validarInputs2(){

  // var inp1 = 0;
  var inp2 = 0;
  var inp3 = 0;
  var inp4 = 0;
  var inp5 = 0;
  
  // inp1 = document.getElementById('card');
  inp2 = document.getElementById('ccname');
  inp3 = document.getElementById('ccnumber');
  inp4 = document.getElementById('ccexpiration');
  inp5 = document.getElementById('cccvv');
  

  if((inp2.value.length > 0) && (inp3.value.length > 0) && (inp4.value.length > 0) && (inp5.value.length > 0)){
    document.getElementById("btnInfoCheck").disabled = false;
  }
  else {
    document.getElementById("btnInfoCheck").disabled = true;
  }
}
function validaG(){
  if (checkG.checked){
    document.getElementById('guardianName').value = "";
    document.getElementById('guardianTelephone').value = "";
  }
  else{
    document.getElementById('guardianName').value = "No apply";
    document.getElementById('guardianTelephone').value = 0;
  }

}

function validaGuardianC(){
  var checkG = document.getElementById('validaGuardian');
  ;

  if (checkG.checked){
    document.getElementById('guardianName').disabled = false;
    document.getElementById('guardianTelephone').disabled = false;
    document.getElementById('guardianName').value = "";
    document.getElementById('guardianTelephone').value = "";
    validarInputs();
    
  }
  else{
    document.getElementById('guardianName').disabled = true;
    document.getElementById('guardianTelephone').disabled = true;
    document.getElementById('guardianName').value = "No apply";
    document.getElementById('guardianTelephone').value = 0;
    validarInputs();
  }

}


$(document).ready(function (){
  $('.validarN').on('input',function (){
    this.value = (this.value + '').replace(/[^0-9]/g, '');
  });
});

// function dateTime(){
//   document.getElementById("hiddenDiv").hidden = false;
//   document.getElementById("button1").disabled = true;
//   document.getElementById("scheduleTime").value="";

// }

function checkOut(){
  document.getElementById("btnCheckout").disabled = false;
}

function dateTime(day){

  var dayC = new Date(day);
  var weekday = dayC.getDay();

  if(weekday == 0){
    dia = "Monday";
  }
  else if(weekday == 1){
    dia = "Tuesday";
  }
  else if(weekday == 2){
    dia = "Wednesday";
  }
  else if(weekday == 3){
    dia = "Thursday";
  }
  else if(weekday == 4){
    dia = "Friday";
  }
  else if(weekday == 5){
    dia = "Saturday";
  }
  else if(weekday == 6){
    dia = "Sunday";
  }
  console.log(dia);

  document.getElementById("hiddenDiv").hidden = false;
  // document.getElementById("hiddenDiv2").hidden = false;
  document.getElementById("hiddenDiv3").hidden = false;
  document.getElementById("button1").disabled = true;
  document.getElementById("scheduleTime").value="";

}
function locations(){
  var location = 1;
  $.ajax({
    type:"POST",
    url:"prcd/locations.php",
    data:{
      location:location
    },
    dataType: "html",
    cache: false,
      success: function(data) {
        $("#scheduleLocation").html(data);                  
      }               
    });

}

function mostrarInputLocation(x){
  var xx = x;
  document.getElementById("addressHome").value = "";

  if(xx == 3){
    document.getElementById("hiddenDiv4").hidden = false;
  }
  else{
    document.getElementById("hiddenDiv4").hidden = true;
    document.getElementById("addressHome").value = "No location at home";
  }
}

function dateLoc(){
  var location = document.getElementById("scheduleLocation").value;
  var day = document.getElementById("scheduleDate").value;

  var dayC = new Date(day);
  var weekday = dayC.getDay();

  console.log(day);
  console.log(weekday);

  if(weekday == 0){
    dia = "Monday";
  }
  else if(weekday == 1){
    dia = "Tuesday";
  }
  else if(weekday == 2){
    dia = "Wednesday";
  }
  else if(weekday == 3){
    dia = "Thursday";
  }
  else if(weekday == 4){
    dia = "Friday";
  }
  else if(weekday == 5){
    dia = "Saturday";
  }
  else if(weekday == 6){
    dia = "Sunday";
    alert("Sundays do not work");
  }

  $.ajax({
    type:"POST",
    url:"prcd/locationsDate.php",
    data:{
      location:location,
      dia:dia
    },
    dataType: "html",
    cache: false,
      success: function(data) {
        $("#scheduleTime").html(data);                  
      }               
    });
 
}

function queryDate(){
   
  var dateS= document.querySelector("[name='scheduleDate']").value;
  var dateT= document.querySelector("[name='scheduleTime']").value;
  var dateSK= document.querySelector("[name='scheduleSkill']").value;
  var dateL= document.querySelector("[name='scheduleLocation']").value;
  var dateLHome= document.querySelector("[name='addressHome']").value;

  if(dateS == "" || dateL == "" || dateT == "" || dateSK == "" || dateLHome == ""){
    alert("The fields are empty, you must fill in date, time, skill and location!");
  }
  else{
        $.ajax({
                type:"POST",
                url:"prcd/date.php",
                data:{
                  dateS:dateS,
                  dateT:dateT,
                  dateL:dateL
                },
                dataType: "html",
                cache: false,
                  success: function(data) {
                    $("#scheduleId").html(data);                  
                  }               
                });
    }
}

function clearList(){
  document.querySelector("[name='scheduleDate']").value = "";
  document.querySelector("[name='scheduleTime']").value = "";
  document.querySelector("[name='scheduleLocation']").value = "";
  document.getElementById('scheduleId').innerHTML = "";
  document.getElementById('button1').disabled = true;
}

function reservation(){
  var file = document.getElementById("inputPayment").value;
  // Payment
  if (file == "") {
    alert("Please enter a file of payment");
    return true;
  }
  else{
    $("#infoCheck2").modal("show");
    var date = document.getElementById('scheduleDate').value;
    document.getElementById('dateInf').innerHTML = date;

    var hour = document.getElementById('scheduleTime').value;
    document.getElementById('hourInf').innerHTML = hour+".30hs";

    var last = document.getElementById('lastName').value;
    document.getElementById('lastInf').innerHTML = last;

    var first = document.getElementById('firstName').value;
    document.getElementById('firstInf').innerHTML = first;

    var email = document.getElementById('email').value;
    document.getElementById('emailInf').innerHTML = email;

    var address = document.getElementById('address').value;
    document.getElementById('addressInf').innerHTML = address;

    var level = document.getElementById('scheduleSkill').value;
      if(level == 1){
        document.getElementById('levelInf').innerHTML = "Beginners";
      }
      else if(level == 2){
        document.getElementById('levelInf').innerHTML = "Intermedium";
      }
      else if(level == 3){
        document.getElementById('levelInf').innerHTML = "Advance";
      }
      else if(level == 4){
        document.getElementById('levelInf').innerHTML = "Adult";
      }

    var location = document.getElementById('scheduleLocation').value;
      if(location == 1){
        document.getElementById('locationInf').innerHTML = "Evegreen community acuatic center";
      }
      else if(location == 2){
        document.getElementById('locationInf').innerHTML = "Redmond eaves campus community";
      }
      else if(location == 3){
        var addressHome = document.getElementById('addressHome').value;
        document.getElementById('locationInf').innerHTML = "At home / "+addressHome;
      }
      
    }
}

function submitReservation(){
   
  var scheduleLocation = document.getElementById("scheduleLocation").value;
  var addressHome = document.getElementById("addressHome").value; // Domicilio por si fuera At Home o fuera de las localizaciones
  var scheduleDate = document.getElementById("scheduleDate").value;
  var scheduleTime = document.getElementById("scheduleTime").value;
  var scheduleSkill = document.getElementById("scheduleSkill").value;
  // Personal Swimmer Info
  var lastName = document.getElementById("lastName").value;
  var firstName = document.getElementById("firstName").value;
  var address = document.getElementById("address").value; //es para domicilio en Personal Swimmer Info
  var email = document.getElementById("email").value;
  var phone1 = document.getElementById("phone1").value;
  var phone2 = document.getElementById("phone2").value;
  // Guardian (Relatives Authorized to pick up the student)
  var guardianName = document.getElementById("guardianName").value;
  var guardianTelephone = document.getElementById("guardianTelephone").value;
  
    $.ajax({
      type:"POST",
      url:"prcd/save.php",
      data:{
        scheduleLocation:scheduleLocation,
        addressHome:addressHome,
        scheduleDate:scheduleDate,
        scheduleTime:scheduleTime,
        scheduleSkill:scheduleSkill,
        lastName:lastName,
        firstName:firstName,
        address:address,
        email:email,
        phone1:phone1,
        phone2:phone2,
        guardianName:guardianName,
        guardianTelephone:guardianTelephone
      },
      dataType: "json",
        success: function(data) {

          var jsonData = JSON.parse(JSON.stringify(data));
                var verificador = jsonData.success;
                if (verificador == 1){
                  var code = jsonData.code;
                  //timer
                  console.log("check");
                  uploadFile(code);
                }
                else if (verificador == 2){
                  console.log("no check");
                  
                }           
                else if (verificador == 0){
                    console.log(jsonData.error);
                }           
        }               
      });
      // event.preventDefault();

}

function _(el) {
  return document.getElementById(el);
}
  
  function uploadFile(code) {
    var file = _("inputPayment").files[0];
   
    var formdata = new FormData();
    // variable del name file
    formdata.append("file", file);
    // variables post
    formdata.append("code", code);
    var ajax = new XMLHttpRequest();
    ajax.upload.addEventListener("progress", progressHandler, false);
    ajax.addEventListener("load", completeHandler, false);
    ajax.addEventListener("error", errorHandler, false);
    ajax.addEventListener("abort", abortHandler, false);
    ajax.open("POST", "prcd/upload_file.php"); 
    
    // http://www.developphp.com/video/JavaScript/File-Upload-Progress-Bar-Meter-Tutorial-Ajax-PHP
    //use file_upload_parser.php from above url

    //ARCHIVO CON EL PROCEDIMIENTO PARA MOVER EL DOCUMENTO AL SERVIDOR
    ajax.send(formdata);
    
    function progressHandler(event) {

      $("#modalFile").modal('show');

        _("loaded_n_total").innerHTML = "Loaded " + event.loaded + " bytes of " + event.total;
        var percent = (event.loaded / event.total) * 100;
        _("progressBar").value = Math.round(percent);
        _("status").innerHTML = Math.round(percent) + "% upload... wait a moment...";

        if (percent == 100){
          document.getElementById("buttonClose").disabled = false;
        }
        else{
          document.getElementById("buttonClose").disabled = true;
        }
      }
      
      function completeHandler(event) {
        _("status").innerHTML = event.target.responseText;
        //_("progressBar").value = 0; //wil clear progress bar after successful upload
          //_("file").style.display='none';
          //_("progressBar").style.display='none';
      }
      
      function errorHandler(event) {
        _("status").innerHTML = "upload failed";
      }
      
      function abortHandler(event) {
        _("status").innerHTML = "upload failed";
      }
    
  }



function checkT(){
  var checkTerms = document.getElementById('checkTerms');

  if(checkTerms.checked){
    document.getElementById('buttonCheck').disabled = false;
    document.getElementById('buttonCheck').setAttribute('class','btn btn-primary');

  }
  else{
    document.getElementById('buttonCheck').disabled = true;
    document.getElementById('buttonCheck').setAttribute('class','btn btn-primary disabled');

  }
}

function pagoRealizado(){
   // success
   Swal.fire({
    icon: 'success',
    imageUrl: 'img/natatorial_logo.png',
    imageHeight: 200,
    imageAlt: 'Natatorial',
    title: 'Done!',
    text: 'Your reservation it´s done!',
    confirmButtonColor: '#3085d6',
    confirmButtonText: 'Thank you for your reservation!',
    footer: 'Natatorial.com'
  // });
}).then(function(){window.location.reload(true);}); 
// }).then(function(){window.location='https://buy.stripe.com/test_aEU7vn2qb1F30HmeUU','_blank';}); 
}
function pagoRechazado(){
  Swal.fire({
    position: 'top-end',
    icon: 'error',
    title: 'Not saved!',
    showConfirmButton: false,
    timer: 1500
  })
}