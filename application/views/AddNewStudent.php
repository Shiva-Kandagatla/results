<div class="alert alert-success" role="alert" style="margin:2%; color:black;">
  <h1 class="d-flex justify-content-center h3">Add New Student</h1>
</div>
  

<div class="container"> 
  <p class="d-flex justify-content-center h6" style="margin-bottom:2%;">NOTE : Fields Marked * are Mandatory.</p>
  
  <?php echo form_open("AdminPage/InsertStudent",array(
    "class"=>"needs-validation",
    "novalidate"=>"novalidate"
  )); ?>
  
<!-- <form class="needs-validation" novalidate method="post" action=""> -->
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="name" class="h4">Name*</label>
      <input type="text" class="form-control" id="name" placeholder="Name" name="name"  required>
      <div class="invalid-feedback">
        Please Enter a valid name.
      </div>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-2 mb-3 align-items-center">
      <label for="class" class="h4">class*</label>
      <select class="custom-select mr-sm-2" id="class" name="class" required>
        <option value="">Choose...</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
      </select>
      <div class="valid-feedback">
        Looks good!
      </div>
      <div class="invalid-feedback">
        oops..you missed me.
      </div>
    </div>
    <div class="col-md-2 mb-3  justify-content-center align-items-center">
      <label for="Section" class="h4">Section*</label>
      <select class="custom-select mr-sm-2" id="section" name="section" required>
        <option value="">Choose...</option>
        <option value="A">A</option>
        <option value="B">B</option>
        <option value="C">C</option>
      </select>
      <div class="valid-feedback">
        Looks good!
      </div>
      <div class="invalid-feedback">
        oops..you missed me.
      </div>
    </div>
    <div class="col-md-2 mb-3">
      <label for="Roll No" class="h4">Roll No*</label>
      <input type="number" class="form-control" id="rollno" placeholder="Roll No" name="rollno" min="1" max="200" required>
      <div class="valid-feedback">
        Looks good!
      </div>
      <div class="invalid-feedback">
        oops..you missed me.
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="dob" class="h4" >Date of Birth*</label>
      <input type="date" class="form-control" name="dob" id="dob" placeholder="DOB" required>
      <div class="invalid-feedback">
        oops...you missed me.
      </div>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    
    <div class="col-md-2 mb-3">
      <label for="yoj" class="h4">Year of Joining*</label>
        <input  type="text" pattern="[0-9]{4}" class="form-control" id="yoj" name="yoj" placeholder="Year of Joining" required >
      <div class="invalid-feedback">
        Please provide a valid Year.
      </div>
      <div class="valid-feedback">
       Looks good!
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="father_name" class="h4">Father Name*</label>
      <input type="text" class="form-control" id="father_name" name="father_name" placeholder="Father Name"  required>
      <div class="valid-feedback">
        Looks good!
      </div>
      <div class="invalid-feedback">
        Please Enter a valid Name.
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="father_mobile" class="h4">Father Mobile</label>
      <input  type="text" pattern="[0-9]{10}" class="form-control" id="father_mobile" name="father_mobile"  placeholder="Father Mobile Number"  >
      <div class="invalid-feedback">
        Please provide a valid Phone number.
      </div>
      <div class="valid-feedback">
      Looks good!
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="father_email" class="h4">Father Email</label>
      <input  type="email"  class="form-control" id="father_email" name="father_email" placeholder="Father Email"  >
      <div class="invalid-feedback">
        Please provide a valid email address.
      </div>
      <div class="valid-feedback">
      Looks good!
      </div>    
    </div>
  </div>
  <div class=" d-flex justify-content-center" style="margin-top:2%;">
  <button class="btn btn-primary" type="submit" data-toggle="modal" data-target="#exampleModal">Submit form</button>
   </div>
   </form>

    </div>
    
    <!-- Button trigger modal -->
<button type="button" style="visibility:false;" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>