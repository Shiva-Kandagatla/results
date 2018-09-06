


    </body>
    <!--  
                  ******Enable this only if there is internet connection******
                  
       <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    
       <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
       
       <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
       -->
    <script src="<?php echo base_url("js/jquery.min.js");?>"  type="text/javascript"></script>
    <script src="<?php echo base_url("js/bootstrap.min.js");?>"  type="text/javascript"></script>
    <script src="<?php echo base_url("js/popper.min.js");?>"  type="text/javascript"></script>
    <?php if($this->uri->segment(2)=="AddNewStudent"): ?>
    <script src="<?php echo base_url("js/AddNewStudent.js");?>"  type="text/javascript"></script>
  <?php endif ?>
  
    
</html>
