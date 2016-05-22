<div class="row">
    <div class="col-lg-3 col-lg-offset-5">
        <h1>Login</h1>

        <?= $this->Form->create('User',['class' => 'form-horizontal']) ?>
        <div class="col-sm-10">
            <?= $this->Form->input('email', ['class' => 'form-control']) ?>
        </div>
        <div class="col-sm-10">e.g</div>
        <div class="col-sm-10">
            <?= $this->Form->input('password', ['class' => 'form-control']) ?>
        </div>
        <div class="col-sm-10">...</div>
        <div class="col-sm-offset-6 col-sm-10">
            <?php echo $this->Form->button('Login',array('class'=>'btn btn-primary'))?>
        </div>
        <?= $this->Form->end() ?>
    </div>
</div>
