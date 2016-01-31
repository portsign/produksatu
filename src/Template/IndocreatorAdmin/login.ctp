<div class="container">
    <div class="row">
		<div class="col-md-4 col-md-offset-4">
		<h3><strong>Login</strong> Admin</h3>
    		<div class="panel panel-default">
			  	<div class="panel-heading">
			    	<h3 class="panel-title">Please sign in</h3>
			 	</div>
			  	<div class="panel-body">
			    	<?= $this->Flash->render('loginfalse') ?>
					<?= $this->Form->create() ?>
                    <fieldset>
			    	  	<div class="form-group">
			    		    <?= $this->Form->input('username', ['class'=>'form-control']) ?>
			    		</div>
			    		<div class="form-group">
			    			<?= $this->Form->input('password', ['class'=>'form-control']) ?>
			    		</div>
			    		<?= $this->Form->button(__('Submit'), ['class'=>'btn btn-success']); ?>
			    	</fieldset>
			      	<?= $this->Form->end() ?>
			    </div>
			</div>
		</div>
	</div>
</div>