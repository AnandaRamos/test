<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 * @var \App\Model\Entity\Address $address
 * @var \App\Model\Entity\Phones $phone
 * @var \App\Model\Entity\Individual $individual
 */
?>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Edit User') ?></legend>
        <?php
            echo $this->Form->control('Users.first_name');
            echo $this->Form->control('Users.last_name');
            echo $this->Form->control('Users.cpf');
            echo $this->Form->control('Users.email');
            echo $this->Form->control('Users.password');
        ?>
        <?= $this->Form->create($user->address) ?>
        <legend><?= __('Edit Address') ?></legend>
        <?php
            echo $this->Form->control('Addresses.country');
            echo $this->Form->control('Addresses.state');
            echo $this->Form->control('Addresses.city');
            echo $this->Form->control('Addresses.street');
            echo $this->Form->control('Addresses.neighborhood');
            echo $this->Form->control('Addresses.number');
            echo $this->Form->control('Addresses.complement');
        ?>
        <?= $this->Form->create($user->individual) ?>
        <legend><?= __('Edit Address') ?></legend>
        <?php
            echo $this->Form->control('Individuals.birthdate');
            echo $this->Form->control('Individuals.photo');
            echo $this->Form->control('Individuals.gender');
        ?>
        <?= $this->Form->create($user->phone) ?>
        <legend><?= __('Edit Address') ?></legend>
        <?php
            echo $this->Form->control('Phones.country_code');
            echo $this->Form->control('Phones.area_code');
            echo $this->Form->control('Phones.phone_number');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
