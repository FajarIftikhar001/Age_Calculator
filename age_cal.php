<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
    <style>
        .adjust::before {
    content: "";
    position: absolute;
    top:0px;
    left: 0;
    right: 0;
    height: 100vh;
    background-color: rgba(0, 0, 0, 0.5);
    z-index:1;
   
        }
      .adjust{
    background-image: url("image_cal.jfif");
    background-repeat: no-repeat;
    background-position: center;
    background-attachment: fixed;
    background-size: cover;
    width:100%;
    position: relative;
    top:0;
    height:100vh;
    z-index: 0;
      }
      
      
        
         .box{
            width: 35vw;
            box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
            border-radius: 25px;
background-color: #fff;
z-index:2;
color:#17a2b8;


         }
         @media screen and (max-width: 800px) {
  .box {
    width: 96vw;
  }
}
.input{
    width: 100%;
    outline:none;
    border: none;
    padding: 7px;
    background-color: whitesmoke;
    box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
}
.input:focus {
    outline:none;
    border: none;
}
.submit , .reset{
   margin-top:10px ;
    padding: 4px 14px;
    background-color: #17a2b8;
    color:white;
    border: 1px solid #17a2b8;
}
#ans{
    display: none;
    margin-top:10px ;
    padding: 10px;
    border : 1px solid #17a2b8;
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
}
    </style>
</head>
<body class="body">


<div class="container-fluid m-0 p-0  adjust d-flex justify-content-center align-items-center">
    <div class="row justify-content-center align-items-center">
     
<div class="box py-3">
    
    <h1 class="text-center"><i> Age Calculator</i> </h1>
<form action="" id="submit">
    <label for="">Enter  Date of Birth:</label>
    <br>
    <input type="date" class="input" required>
    <br>
    <div class="d-flex justify-content-center align-items-center">
    <input type="submit" value="Calculate"  class="submit me-4" >
    <input type="reset" class="reset">
    </div>
    
</form>
 <div id="ans">


 </div>
</div>

    </div>
    </div>
<script>
function age(event){

event.preventDefault()
 let age=document.getElementsByClassName("input")[0].value;
 var arr1 = age.split('-');
// user date
let date= arr1[2];
let month= arr1[1];
let year= arr1[0];

// current date
let today = new Date();
let currentyear = today.getFullYear() ;
let currentmonth = today.getMonth()+1;
let currentdate = today.getDate();

// minus
let finalYear= currentyear-year;
let finalmonth= currentmonth-month;
let finaldate = currentdate-date;
if(finalmonth<0 || finalmonth==0)
{
    finalYear--;
}
if(finalmonth<0|| finalmonth==0){
    finalmonth=12+finalmonth;
}
if(finaldate<0){
    finalmonth--;
    let previousMonth = new Date(today.getFullYear(), today.getMonth(), 0).getDate();
    
    finaldate=previousMonth+finaldate;
}
document.getElementById("ans").style.display="block";
document.getElementById("ans").innerHTML = `Age is: <b> ${finalYear}</b> Years, <b>${finalmonth}</b> months, and<b> ${finaldate} </b>days.`;

}
function  agedel() {
    document.getElementById("ans").style.display="none";
}
let form=document.getElementById("submit");
form.addEventListener("submit",age);
form.addEventListener("reset",agedel);
</script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>