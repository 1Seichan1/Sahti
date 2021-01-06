<div class="row">
        <div class="col-lg-12">
          <div class="card">
             <div class="card-header text-uppercase">EDIT SPECIALTE</div>
             <div class="card-body">
			 
			 <form action = "" method="post">
			 
			    <div class="form-group row">
				  <label for="name" class="col-sm-3 col-form-label">Name</label>
				  <div class="col-sm-9">
					<input type="text" id="name" name="name" class="form-control" required value="<?php echo $specialite['name']; ?>">
				  </div>
				</div>
				
				
				
				
				<div class="form-group row">
					  <label for="input-1" class="col-sm-3 col-form-label"></label>
					  <div class="col-sm-9">
						<button type="submit" name="edit" class="btn btn-primary shadow-primary px-5"><i class="fa fa-edit"></i> EDIT</button>
					  </div>
				</div>
					
					
			 </form>
			 
             </div>
          </div>
        </div>
      </div><!--End Row-->