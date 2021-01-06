<div class="row">
        <div class="col-lg-12">
          <div class="card">
             <div class="card-header text-uppercase">EDIT RDV</div>
             <div class="card-body">
			 
			 <form action = "" method="post">
			 
			    <div class="form-group row">
				  <label for="name" class="col-sm-3 col-form-label">Patient</label>
				  <div class="col-sm-9">
					<select name='id_patient' required class='form-control'>
						<option>Choose Patient</option>
						<?php foreach($patients as $patient){ 
						$s = "";
						if($patient['id_patient']==$rdv['id_patient'])
							$s = "selected";
						?>
						<option <?php echo $s; ?> value="<?php echo $patient['id_patient'];?>"><?php echo $patient['name']; ?></option>
						<?php } ?>
					</select>
				  </div>
				</div>
				
				<div class="form-group row">
				  <label for="cin" class="col-sm-3 col-form-label">Spécialité</label>
				  <div class="col-sm-9">
					<select name='id_specialite' required class='form-control'>
						<option>Choose Spécialité</option>
						<?php foreach($specialites as $specialite){ 
						$s = "";
						if($specialite['id_specialite']==$rdv['id_specialite'])
							$s = "selected";
						?>
						<option <?php echo $s; ?> value="<?php echo $specialite['id_specialite'];?>"><?php echo $specialite['name']; ?></option>
						<?php } ?>
					</select>
				  </div>
				</div>
				
				
				<div class="form-group row">
				  <label for="date" class="col-sm-3 col-form-label">Date</label>
				  <div class="col-sm-9">
					<input type="date" id="date" name="date" class="form-control" value="<?php echo $rdv['date']; ?>" required>
				  </div>
				</div>
				
				<div class="form-group row">
				  <label for="time" class="col-sm-3 col-form-label">Time</label>
				  <div class="col-sm-9">
					<input type="time" id="time" name="time" class="form-control" required value="<?php echo $rdv['time']; ?>">
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