<div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header"><i class="fa fa-table"></i> LIST RDV</div>
            <div class="card-body">
              <div class="table-responsive">
              <table id="default-datatable" class="table table-bordered">
                <thead>
                    <tr>
                        <th>DATE</th>
                        <th>TIME</th>
                        <th>PATIENT</th>
                        <th>SPECIALITE</th>
						<th>ACTION</th>
                    </tr>
                </thead>
                <tbody>
				<?php foreach($rdvs as $rdv){ ?>
                    <tr>
                        <td><?php echo $rdv['date']; ?></td>
                        <td><?php echo $rdv['time']; ?></td>
						<td><?php echo $rdv['patient']; ?></td>
						<td><?php echo $rdv['specialite']; ?></td>

						<td nowrap>
						<a class='btn btn-warning' href="admin.php?controller=rdv&action=edit&id_rdv=<?php echo $rdv['id_rdv']; ?>" title='EDIT'><i class='fa fa-edit'></i></a>
						<a class='btn btn-danger' href="javascript:ConfirmDelete('<?php echo $rdv['id_rdv']; ?>')" title='DELETE'><i class='fa fa-trash'></i></a>
						</td>
                    </tr>
				<?php } ?>
				</tbody>
			</table>
			</div>
			</div>
		</div>
	</div>
</div>


<SCRIPT language=javascript>
   function ConfirmDelete(id_rdv) {
       if (confirm("Voulez-vous supprimer ce rdv ?")) { 
           window.location.href='admin.php?controller=rdv&action=delete&id_rdv='+id_rdv;
       }
   }
</SCRIPT>