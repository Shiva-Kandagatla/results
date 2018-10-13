<?php if($this->session->flashdata("message")=="notok"): ?>
  <div class="alert  " role="alert" style="margin:2%; color:black ;height:10vh ;background-color: red;">
    <h1 class="d-flex justify-content-center h3">Some Error has Occured. Please Try Again</h1>
  </div>
<?php endif ?>

<div class="alert alert-success" role="alert" style="margin:2%; color:black;">
  <h1 class="d-flex justify-content-center h3">Delete Messages sent to Specific Student.</h1>
</div>

<div class="container "> 
  <p class="d-flex justify-content-center h6" style="margin-bottom:2%;">NOTE : Fields Marked * are Mandatory.</p>
  
  <?php echo form_open("AdminPage/DeletingMessagesSpecific",array(
    "class"=>"needs-validation",
    "novalidate"=>"novalidate"
  )); ?>      
  
  <div class="form-row">
    <div class="col-md-4 mb-3">
    </div>
    
    <div class=" col-md-4">
      <label for="admno" class="h4">Admission Number*</label>
      <input  type="text"  class="form-control" id="admno" name="admno" placeholder="Admission Number" required >
    </div>
    
    <div class="col-md-4 mb-3">
    </div>
  </div>
    
  <div class=" d-flex justify-content-center" style="margin-top:2%;">
  <button class="btn btn-primary" type="submit" >Get Messages </button>
   </div>
   </form>

    </div>
