
<h1><?= h($facility->facility_name) ?></h1>
<p><?= h($facility->type_of_facility) ?></p>
<p><?= h($facility->movein_price) ?></p>
<p><?= h($facility->monthly_price ) ?></p>
<p><?= h($facility->prececture) ?></p>
<p><?= h($facility->address_of_facility) ?></p>
<p><?= h($facility->access) ?></p>
<p><?= $this->Html->link('Edit', ['action' => 'edit', $facility->slug]) ?></p>
