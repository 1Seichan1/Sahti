<div class="row">
        <div class="col-lg-12">
          <div class="card">
             <div class="card-header text-uppercase">EDIT PATIENT</div>
             <div class="card-body">
			 
			 <form action = "" method="post">
			 
			    <div class="form-group row">
				  <label for="name" class="col-sm-3 col-form-label">Name</label>
				  <div class="col-sm-9">
					<input type="text" id="name" name="name" class="form-control" required value="<?php echo $patient['name']; ?>">
				  </div>
				</div>
				
				<div class="form-group row">
				  <label for="cin" class="col-sm-3 col-form-label">CIN</label>
				  <div class="col-sm-9">
					<input type="text" id="cin" name="cin" class="form-control" pattern="[0-9]{8}" title="CIN doit etre en 8 chiffres" required value="<?php echo $patient['cin']; ?>">
				  </div>
				</div>
				
				
				<div class="form-group row">
				  <label for="email" class="col-sm-3 col-form-label">E-mail</label>
				  <div class="col-sm-9">
					<input type="email" id="email" name="email" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" value="<?php echo $patient['email']; ?>">
				  </div>
				</div>
				
				<div class="form-group row">
				  <label for="tel" class="col-sm-3 col-form-label">Phone</label>
				  <div class="col-sm-9">
					<input type="number" id="tel" name="tel" class="form-control" required value="<?php echo $patient['tel']; ?>">
				  </div>
				</div>
				
				<div class="form-group row">
				  <label for="region" class="col-sm-3 col-form-label">Region</label>
				  <div class="col-sm-9">
					<input type="text" id="region" name="region" class="form-control" value="<?php echo $patient['region']; ?>">
				  </div>
				</div>
				
				
				<div class="form-group row">
				  <label for="type_sang" class="col-sm-3 col-form-label">Type SANG</label>
				  <div class="col-sm-9">
					<input type="text" id="type_sang" name="type_sang" class="form-control" value="<?php echo $patient['type_sang']; ?>">
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