<?php
/**
 * @var \App\View\AppView $this
 */

$this->layout = 'CakeLte.login';
?>

<div class="card">
    <div class="card-body register-card-body">
        <p class="login-box-msg"><?= __('Register a new membership') ?></p>

        <?= $this->Form->create() ?>

        <?= $this->Form->control('nik', [
            'placeholder' => __('NIK'),
            'label' => false,
            'append' => '<i class="fas fa-user"></i>',
        ]) ?>

        <?= $this->Form->control('nama', [
            'placeholder' => __('Name'),
            'label' => false,
            'append' => '<i class="fas fa-user"></i>',
        ]) ?>

        <?= $this->Form->control('username', [
            'placeholder' => __('Username'),
            'label' => false,
            'append' => '<i class="fas fa-user"></i>',
        ]) ?>

        <?= $this->Form->control('telp', [
            'placeholder' => __('No. Telepon'),
            'label' => false,
            // 'type' => 'number',
            'append' => '<i class="fas fa-envelope"></i>',
        ]) ?>

        <?= $this->Form->control('level', [
            'placeholder' => __('Role'),
            'label' => false,
            'append' => '<i class="fas fa-user"></i>',
        ]) ?>

        <?= $this->Form->control('password', [
            'placeholder' => __('Password'),
            'label' => false,
            'append' => '<i class="fas fa-lock"></i>',
        ]) ?>

        <?= $this->Form->control('password_confirm', [
            'type' => 'password',
            'placeholder' => __('Confirm Password'),
            'label' => false,
            'append' => '<i class="fas fa-lock"></i>',
        ]) ?>

        <div class="row">
            <div class="col-8">
                <?= $this->Form->control('agree_terms', [
                    'label' => 'I agree to the <a href="#">terms</a>',
                    'type' => 'checkbox',
                    'custom' => true,
                    'escape' => false,
                ]) ?>
            </div>
            <div class="col-4">
                <?= $this->Form->control(__('Register'), [
                    'type' => 'submit',
                    'class' => 'btn btn-primary btn-block',
                ]) ?>
            </div>
        </div>

        <?= $this->Form->end() ?>

        <div class="social-auth-links text-center mb-3">
            <p>- OR -</p>
            <?= $this->Html->link(
                '<i class="fab fa-facebook-f mr-2"></i>' . __('Sign up using Facebook'),
                '#',
                ['class' => 'btn btn-block btn-primary', 'escape' => false]
            ) ?>
            <?= $this->Html->link(
                '<i class="fab fa-google mr-2"></i>' . __('Sign up using Google'),
                '#',
                ['class' => 'btn btn-block btn-danger', 'escape' => false]
            ) ?>
        </div>
        <!-- /.social-auth-links -->

        <?= $this->Html->link(__('I already have a membership'), ['action' => 'login']) ?>
    </div>
    <!-- /.register-card-body -->
</div>