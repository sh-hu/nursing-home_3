<?php $counter = 0; ?>
<?php foreach ($facilities as $facility): ?>
    <?= $facility->id ?>
    <?= $facility->type_of_facility ?>
    <?= $facility->facility_name ?>
    <?= $facility->movein_price ?>
    <?= $facility->monthly_price ?>
    <?= $facility->prefecture ?>
    <?= $facility->address_of_facility ?>
    <?= $facility->access ?>
    <?= $this->Html->link(__('View'), ['action' => 'view', $facility->id]) ?>
    <br>
<?php if ($counter >= 2) {break;} ?>
<?php $counter++; ?>
<?php endforeach; ?>