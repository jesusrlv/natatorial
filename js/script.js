function validarInputs(){

  var inp1 = 0;
  var inp2 = 0;
  var inp3 = 0;
  var inp4 = 0;

  inp1 = document.getElementById('firstName');
  inp2 = document.getElementById('lastName');
  inp3 = document.getElementById('email');
  inp4 = document.getElementById('address');

  if((inp1.value.length > 0) && (inp2.value.length > 0) && (inp3.value.length > 0) && (inp4.value.length > 0)){
    document.getElementById("button2").disabled = false;
  }
  else {
    document.getElementById("button2").disabled = true;
  }
}

function dateTime(){
  document.getElementById("hiddenDiv").hidden = false;
  document.getElementById("button1").disabled = true;
  document.getElementById("scheduleTime").value="";

}

function validarInputs2(){
  var valor = document.getElementById("fileSwimm").value;
  if(valor !== "" || valor !== NULL){
    document.getElementById("button3").disabled = false;
  }
  else{
    document.getElementById("button3").disabled = true;
  }
}

function checkOut(){
  document.getElementById("btnCheckout").disabled = false;
}

function dateTime(){
  var location = 1;
  document.getElementById("hiddenDiv").hidden = false;
  document.getElementById("hiddenDiv2").hidden = false;
  document.getElementById("hiddenDiv3").hidden = false;
  document.getElementById("button1").disabled = true;
  document.getElementById("scheduleTime").value="";
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
  if(xx == 3){
    document.getElementById("hiddenDiv4").hidden = false;
  }
  else{
    document.getElementById("hiddenDiv4").hidden = true;
  }
}

function queryDate(){
   
  var dateS= document.querySelector("[name='scheduleDate']").value;
  var dateT= document.querySelector("[name='scheduleTime']").value;
  var dateL= document.querySelector("[name='scheduleLocation']").value;
  console.log(dateS);
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

function clearList(){
  document.querySelector("[name='scheduleDate']").value = "";
  document.querySelector("[name='scheduleTime']").value = "";
  document.querySelector("[name='scheduleLocation']").value = "";
  document.getElementById('scheduleId').innerHTML = "";
  document.getElementById('button1').disabled = true;
}

function reservation(){
    var date = document.getElementById('scheduleDate').value;
    document.getElementById('dateInf').innerHTML = date;

    var hour = document.getElementById('scheduleTime').value;
    document.getElementById('hourInf').innerHTML = hour;

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

function submitReservation(){
   
  var formData = new FormData(document.getElementById("formSchedule"));

    $.ajax({
      type:"POST",
      url:"prcd/save.php",
      data:formData,
      dataType: "json",
      contentType:false,
      processData:false,
      cache: false,
        success: function(data) {

          var jsonData = JSON.parse(JSON.stringify(data));
                var verificador = jsonData.success;
                if (verificador = 1){
                  Swal.fire({
                    icon: 'success',
                    imageUrl: 'img/natatorial_logo.png',
                    imageHeight: 200,
                    imageAlt: 'Natatorial',
                    title: 'Done!',
                    text: 'Your reservation its done!',
                    confirmButtonColor: '#3085d6',
                    footer: 'Natatorial.com'
                }).then(function(){window.location='schedule.php';}); 
                }
                else if (verificador = 2){
                    Swal.fire({
                        position: 'top-end',
                        icon: 'error',
                        title: 'Not saved!',
                        showConfirmButton: false,
                        timer: 1500
                    })
                }           
        }               
      });
      event.preventDefault();

}

function checkT(){
  var checkTerms = document.getElementById('checkTerms');

  if(checkTerms.checked){
    document.getElementById('buttonCheck').disabled = false;
  }
  else{
    document.getElementById('buttonCheck').disabled = true;
  }
}