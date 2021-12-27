<HTML>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<BODY>
<form method="post" action="display.php" >
<div class="container">
 <div class="row">
    <div class="col">
     <label for="exampleFormControlSelect1">Property Type</label>
    <select class="form-control" name="pType" id="exampleFormControlSelect1">
      <option>Flat</option>
      <option>Bunglow</option>
      <option>Floor</option>
      <option>Shop</option>
      <option>Cabin</option>
    </select>
      City<input type="Name" class="form-control" id="exampleInputName" name="pCity" placeholder="Enter the City">
       
      <label for="exampleFormControlName">Room Count</label>
            <input type="Name" class="form-control" id="exampleInputName" name="pRooms" placeholder="Enter the count of rooms">
      <label for="exampleFormControlName">Rent between</label>
            <input type="Name" class="form-control" id="exampleInputName" name="pRentfrom" placeholder="Minimum Rent Amout">
       
      </div>
       
    <div class="col">
      <br><br>
      <legend class="col-form-label col-l-2 pt-0">Property Location Area</legend>
      <div class="form-check form-check-inline" >
            <input class="form-check-input" type="radio" name="AreaType" id="exampleRadios2" value="Urban">Urban
            <input class="form-check-input" type="radio" name="AreaType" id="exampleRadios2" value="Rural">Rural
      </div>
      <legend class="col-form-label col-l-2 pt-0">Locality Type</legend>
      <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="LocalityType" id="exampleRadios2" value="Society">Society
            <input class="form-check-input" type="radio" name="LocalityType" id="exampleRadios2" value="Locality">Locality
      </div>
            <legend class="col-form-label col-l-2 pt-0">Property Furnished</legend>
      <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="pFur" id="exampleRadios2" value="F">Furnished
            <input class="form-check-input" type="radio" name="pFur" id="exampleRadios2" value="S">Semi-Furnished
            <input class="form-check-input" type="radio" name="pFur" id="exampleRadios2" value="U">UnFurnished
      </div><br><br>
      <input type="Name" class="form-control" id="exampleInputName" name="pRentTo" placeholder="Maximum Rent Amout">
    </div>
    </div>
      <br><button class="btn btn-success"  name="submit" id="exampleSubmit" value="submit" style="border-color:rgb(255, 99, 71);background-color:rgb(255, 99, 71)">Show Properties</button>
 </div>
</form>      
</BODY>
</HTML>
