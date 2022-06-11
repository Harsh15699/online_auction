@include('header')
<div class="container rounded bg-white mt-5 mb-5">
<div class="row">
<div class="col-md-3 border-right">
    <img src="{{ url('/images/signup/') }}/signup-image.jpg" alt="sing up image">
</div>
<div class="col-md-5 border-right">
    <div class="p-3 py-5">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h4 class="text-right">Profile Settings</h4>
        </div>
        <div class="row mt-2">
            <div class="col-md-6"><label class="labels">First Name</label><input type="text" placeholder="first name" class="form-control" name="fname" id="fname" pattern="[A-Za-z]+" oninput="myfunction1()" title="First Name Should Only Contain Alphabet" required></div>
            <div class="col-md-6"><label class="labels">Last Name</label><input type="text" placeholder="last name" class="form-control" name="lname" id="lname" pattern="[A-Za-z]+" oninput="myfunction1()" title=" First Name Should Only Contain Alphabet" required></div>
            <div id="d1" style="color:red;"></div>
        </div>
        <div class="row mt-3">
          <div class="col-md-12"><label class="labels">Age</label><input type="text" class="form-control" placeholder="enter age" name="age" id="age" pattern="[0-9]{1,2}" oninput="myfunction2()" title="Age should be numeric and between 1 and 100" required max=100 min=1 ></div>
          <div id="d2" style="color:red;"></div>
          <div class="col-md-12"><label class="labels">Country</label><input type="text" class="form-control" placeholder="enter country" name="country" id="country" pattern="[A-Za-z]+" oninput="myfunction3()" title="Country Name Should Only Contain Alphabet" required></div>
          <div id="d3" style="color:red;"></div>
          <div class="col-md-12"><label class="labels">Nationality</label><br>
            <input type="radio" id="n1" name="nat" value="Domestic" oninput="myfunction4()" >
            <label for="n1">Domestic</label>
            <input type="radio" id="n2" name="nat" value="Foreign" oninput="myfunction4()">
            <label for="n2">Foreign</label></p>
          </div>
          <div id="d4" style="color:red;"></div>
          <div class="col-md-12"><label class="labels">Skill-Set</label><br>
            <input type="radio" id="s1" name="skill" value="Batsman" required>
              <label for="s1">Batsman</label>
              <input type="radio" id="s2" name="skill" value="Bowler">
              <label for="s2">Bowler</label>
              <input type="radio" id="s3" name="skill" value="All-Rounder">
              <label for="s3">All-Rounder</label>
          </div>
            <div class="col-md-12"><label class="labels">Base Price</label><input type="text" class="form-control" placeholder="Enter Base Price" name="bprice" id="bprice" pattern="[0-9]{1,8}" oninput="myfunction5()" title="Base Price Should be Numeric and Not Greater than INR 20000000" required></div>
            <div id="d5" style="color:red;"></div>
            <div class="col-md-12"><label class="labels">Mobile Number</label><input type="text" class="form-control" placeholder="Enter Phone Number" name="number" id="number" pattern="[0-9]{10}" oninput="myfunction7()" title="Mobile Number must be of Ten Digits" maxlength="10" required></div>
            <div id="d7" style="color:red;"></div>
            <div class="col-md-12"><label class="labels">Email ID</label><input type="email" class="form-control" placeholder="Enter Email" name="email" id="email" pattern="^[a-zA-Z0-9]+@[a-zA-Z0-9]+\.[a-zA-Z0-9]+$" oninput="myfunction6()" title=" Email must Contain @ and then ." required></div>
            <div id="d6" style="color:red;"></div>
            <div class="col-md-12"><label class="labels">Unique Id</label><input type="text" class="form-control"  placeholder="Enter Unique Id(Aadhar for IN)" name="uid" id="uid" required></div>
        </div>
    </div>
</div>
<div class="col-md-4">
    <div class="p-3 py-5">
      <div class="d-flex justify-content-between align-items-center mb-3">
          <h4 class="text-right">Additional Settings</h4>
      </div>
      <div class="row mt-2">
        <div class="col-md-12"><label class="labels">UserName</label><input type="text" class="form-control"  placeholder="Enter Username" name="uname" id="uname" pattern="^[a-zA-Z]+[0-9]+$" oninput="myfunction8()" title="Username Can Have Only Alphabet And Number" required></div>
        <div id="d8" style="color:red;"></div>
        <div class="col-md-12"><label class="labels">Password</label><input type="password" class="form-control"  placeholder="Enter Password" name="pass" id="pass" oninput="myfunction9()" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"  title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required></div>
        <div id="d9" style="color:red;"></div>
        <div class="col-md-12"><label class="labels">Player Image</label><p>Image Size must be 1200px X 1200px</p><input type="file" class="form-control"></div>
      </div>
    </div>
    <div class="p-3 py-5">
      <div class="d-flex justify-content-between align-items-center mb-3">
          <h4 class="text-right">T20 Stats</h4>
      </div>
      <div class="row mt-2">
        <div class="col-md-4"><label class="labels">Total Matches</label><input type="number" class="form-control" placeholder="total matches" value=""></div>
        <div class="col-md-4"><label class="labels">Total Innings</label><input type="number" class="form-control" placeholder="total innings" value=""></div>
        <div class="col-md-4"><label class="labels">Runs</label><input type="number" class="form-control" placeholder="runs" value=""></div>
        <div class="col-md-4"><label class="labels">Wicket</label><input type="number" class="form-control" placeholder="wicket" value=""></div>
        <div class="col-md-4"><label class="labels">Fifties</label><input type="number" class="form-control" placeholder="fifties" value=""></div>
        <div class="col-md-4"><label class="labels">Hundreds</label><input type="number" class="form-control" placeholder="hundreds" value=""></div>
        <div class="col-md-4"><label class="labels">Economy</label><input type="number" class="form-control" placeholder="economy" value=""></div>
        <div class="col-md-4"><label class="labels">Fifer</label><input type="number" class="form-control" placeholder="fifer" value=""></div>
        <div class="col-md-4"><label class="labels">Strike Rate<input type="number" class="form-control" placeholder="strike rate" value=""></div>
      </div>
    </div>
</div>
</div>
<div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button">Register</button></div>
</div>
@include('footer')
<script>
function myfunction1(){
var x = document.getElementById("fname").value;
var y = document.getElementById("lname").value;
if (/^[A-Za-z]+$/.test(x)) {
  document.getElementById("d1").innerHTML="";}
else{

    document.getElementById("d1").innerHTML="<b>*Name Should Not Be Empty And Must Contain Only Alphabet</b>";
}
if (/^[A-Za-z]+$/.test(y)) {
  document.getElementById("d1").innerHTML="";}
else{

    document.getElementById("d1").innerHTML="<b>*Name Should Not Be Empty And Must Contain Only Alphabet</b>";
}
}
function myfunction2(){
var y=document.getElementById("age").value;

if (isNaN(y) || y < 1 || y > 99) {
  document.getElementById("d2").innerHTML="<b>*Age should be numeric and between 1 and 100</b>";
}
else{
  document.getElementById("d2").innerHTML="";
}
}
function myfunction3(){
var x = document.getElementById("country").value;
if (/^[A-Za-z]+$/.test(x)) {
  document.getElementById("d3").innerHTML="";}
else{
    document.getElementById("d3").innerHTML="<b>*Country Name Should Not Be Empty And Must Contain Only Alphabet</b>";
}
}
function myfunction4(){
var x = document.getElementById("country").value;
var y = document.getElementById("n2");
if(document.getElementById("n2").checked==true && /India/i.test(x)){
    document.getElementById("d4").innerHTML="<b>Indian Player Can't choose nationality as foreign</b>";
}
else{
    document.getElementById("d4").innerHTML="";
}
}
function myfunction5(){
var y=document.getElementById("bprice").value;

if (isNaN(y) || y > 20000000) {
  document.getElementById("d5").innerHTML="<b>*Base Price Should be Numeric and Not Greater than INR 20000000</b>";
}
else{
  document.getElementById("d5").innerHTML="";
}
}
function myfunction6(){
var x = document.getElementById("email").value;
if (/^[a-zA-Z0-9]+@[a-zA-Z0-9]+\.[a-zA-Z0-9]+$/.test(x)) {
    document.getElementById("d6").innerHTML="";}
else{
    document.getElementById("d6").innerHTML="<b>*Email must Contain @ and then .</b>";
}
}
function myfunction7(){
var y=document.getElementById("number").value;

if (y.toString().length!=10){
  document.getElementById("d7").innerHTML="<b>*Mobile Number must be of Ten Digits</b>";
}
else{
  document.getElementById("d7").innerHTML="";
}
}
function myfunction8(){
  var x = document.getElementById("uname").value;
  if (/^[A-Za-z0-9]+$/.test(x)) {
      document.getElementById("d8").innerHTML="";}
  else{
      document.getElementById("d8").innerHTML="<b>Username Can Have Only Alphabet And Number</b>";
  }
}

function myfunction9(){
  var x = document.getElementById("pass").value;
  if (/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/.test(x)) {
      document.getElementById("d9").innerHTML="";}
  else{
      document.getElementById("d9").innerHTML="<b>Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters</b>";
  }
  }

</script>
