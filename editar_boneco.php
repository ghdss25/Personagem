<form method="post" action="?go=editarBoneco" class="form-horizontal">
	<fieldset>
		<div id="legend">
			<legend class="">Alterar Boneco</legend>
		</div>

        <input type="hidden" name="idBonecoEdit" value="<?php echo $idBonecoEdit; ?>">  

		<div class="control-group">
			<label class="control-label" for="nome">Nome</label>
			<div class="controls">
				<textarea type="text" id="nome" name="nome" maxlength="100" required="true" class="input-xlarge form-control" style="height: 120px; resize: none;"><?php echo $nomeBonecoEdit; ?></textarea>
				<p class="help-block">Nome</p>
			</div>
		</div>

        <div class="control-group">
			<label class="control-label" for="nacionalidade">Nacionalidade</label>
			<div class="controls">
				<textarea type="text" id="nacionalidade" name="nacionalidade" maxlength="400" required="true" class="input-xlarge form-control" style="height: 120px; resize: none;"><?php echo $nacionalidadeBonecoEdit; ?></textarea>
				<p class="help-block">Cor</p>
			</div>
		</div>

        <div class="control-group">
			<label class="control-label" for="cor">Cor</label>
			<div class="controls">
				<textarea type="text" id="cor" name="cor" maxlength="400" required="true" class="input-xlarge form-control" style="height: 120px; resize: none;"><?php echo $corBonecoEdit; ?></textarea>
				<p class="help-block">Cor</p>
			</div>
		</div>

        <div class="control-group">

			<label class="control-label" for="perfil">Perfil</label>

			<div class="controls">

				<select id="perfil" name="perfil" required="true" class="input-xlarge form-control">

					<option selected value="Selecione">Selecione</option>
					
					<!-- OPTION PARA King_of_fighters -->
					<?php echo "<option value='King_of_fighters'"; ?> 
						<?=($perfilBonecoEdit == 'King_of_fighters')?'selected':'' ?> 
					<?php echo " >King_of_fighters</option>"; ?>					
					
					<!-- OPTION PARA Street_Fighter -->
					<?php echo "<option value='Street_Fighter'"; ?> 
						<?=($perfilBonecoEdit == 'Street_Fighter')?'selected':'' ?> 
					<?php echo " >Street_Fighter</option>"; ?>		

					<!-- OPTION PARA X_Men -->
					<?php echo "<option value='X_Men'"; ?> 
						<?=($perfilBonecoEdit == 'X_Men')?'selected':'' ?> 
					<?php echo " >X_Men</option>"; ?>		
                    
                    <!-- OPTION PARA Samurai_X -->
					<?php echo "<option value='Samurai_X'"; ?> 
						<?=($perfilBonecoEdit == 'Samurai_X')?'selected':'' ?> 
					<?php echo " >Samurai_X</option>"; ?>	
					
				</select>

				<p class="help-block">Defina um tipo de Situação do Boneco</p>

			</div>

		</div>

        <div class="control-group">

			<label class="control-label" for="tipo">Tipo</label>

			<div class="controls">

				<select id="tipo" name="tipo" required="true" class="input-xlarge form-control">

					<option selected value="Selecione">Selecione</option>
					
					<!-- OPTION PARA Ataque -->
					<?php echo "<option value='Ataque'"; ?> 
						<?=($tipoBonecoEdit == 'Ataque')?'selected':'' ?> 
					<?php echo " >Ataque</option>"; ?>					
					

					<!-- OPTION PARA Defesa -->
					<?php echo "<option value='Defesa'"; ?> 
						<?=($tipoBonecoEdit == 'Defesa')?'selected':'' ?> 
					<?php echo " >Defesa</option>"; ?>		


					<!-- OPTION PARA Equilibrio -->
					<?php echo "<option value='Equilibrio'"; ?> 
						<?=($tipoBonecoEdit == 'Equilibrio')?'selected':'' ?> 
					<?php echo " >Equilibrio</option>"; ?>			
					
				</select>

				<p class="help-block">Defina um tipo de Situação do Boneco</p>

			</div>

		</div>

		<div class="control-group">
			<!-- Button -->
			<div class="controls">
				<button type="submit" class="btn btn-success">Editar</button>
			</div>
		</div>

	</fieldset>
</form>
