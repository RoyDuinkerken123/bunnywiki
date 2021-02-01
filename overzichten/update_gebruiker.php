<div class="modal fade" id="update_modal<?php echo $fetch['gebruiker_id']?>" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<form method="POST" action="update_query.php">
				<div class="modal-header">
					<h3 class="modal-title">Update gebruiker</h3>
				</div>
				<div class="modal-body">
					<div class="col-md-2"></div>
					<div class="col-md-8">
						<div class="form-group">
							<label>voornaam</label>
							<input type="hidden" name="gebruiker_id" value="<?php echo $fetch['gebruiker_id']?>"/>
							<input type="text" name="voornaam" value="<?php echo $fetch['voornaam']?>" class="form-control" required="required"/>
						</div>
						<div class="form-group">
							<label>achternaam</label>
							<input type="text" name="achternaam" value="<?php echo $fetch['achternaam']?>" class="form-control" required="required" />
						</div>
						<div class="form-group">
							<label>email</label>
							<input type="text" name="email" value="<?php echo $fetch['email']?>" class="form-control" required="required"/>
						</div>
						<div class="form-group">
							<label>Woonplaats</label>
							<input type="text" name="woonplaats" value="<?php echo $fetch['woonplaats']?>" class="form-control" required="required"/>
						</div>
						<div class="form-group">
							<label>Postcode</label>
							<input type="text" name="postcode" value="<?php echo $fetch['postcode']?>" class="form-control" required="required"/>
						</div>
						<div class="form-group">
							<label>Telefoonnummer</label>
							<input type="text" name="telefoonnummer" value="<?php echo $fetch['telefoonnummer']?>" class="form-control" required="required"/>
						</div>
						<div class="form-group">
							<label>Rol</label>
							<input type="number" name="rol" value="<?php echo $fetch['rol']?>" class="form-control" required="required"/>
						</div>
					</div>
				</div>
				<div style="clear:both;"></div>
				<div class="modal-footer">
					<button name="update" class="btn btn-success">Wijzigen</button>
					<button class="btn btn-danger" type="button" data-dismiss="modal">Verlaten</button>
				</div>
				</div>
			</form>
		</div>
	</div>
</div>
