<?php
/**
 * @var \App\View\AppView $this
 */

$this->layout = 'CakeLte.login';
?>

<div class="card">
    <div class="card-body login-card-body">
        <p class="login-box-msg"><?= __('Sign in to start your session') ?></p>

        <?= $this->Form->create() ?>

        <?= $this->Form->control('username', [
            'label' => false,
            'placeholder' => __('Username'),
            'append' => '<i class="fas fa-user"></i>',
        ]) ?>

        <?= $this->Form->control('password', [
            'label' => false,
            'placeholder' => __('Password'),
            'append' => '<i class="fas fa-lock"></i>',
        ]) ?>

        <div class="row">
            <div class="col-8">
                <?= $this->Form->control('remember_me', ['type' => 'checkbox', 'custom' => true]) ?>
            </div>
            <div class="col-4">
                <?= $this->Form->control(__('Sign In'), ['type' => 'submit', 'class' => 'btn btn-primary btn-block']) ?>
            </div>
        </div>

        <?= $this->Form->end() ?>

        <div class="social-auth-links text-center mb-3">
            <p>- OR -</p>
            <?= $this->Html->link(
                '<i class="fab fa-facebook-f mr-2"></i>' . __('Sign in using Facebook'),
                '#',
                ['class' => 'btn btn-block btn-primary', 'escape' => false]
            ) ?>
            <?= $this->Html->link(
                '<i class="fab fa-google mr-2"></i>' . __('Sign in using Google'),
                '#',
                ['class' => 'btn btn-block btn-danger', 'escape' => false]
            ) ?>
        </div>
        <!-- /.social-auth-links -->

        <p class="mb-1">
            <?= $this->Html->link(__('I forgot my password'), ['action' => 'recovery']) ?>
        </p>
        <p class="mb-0">
            <?= $this->Html->link(__('Register a new membership'), ['action' => 'register']) ?>
        </p>
    </div>
    <!-- /.login-card-body -->
</div>