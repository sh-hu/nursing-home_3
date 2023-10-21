
<h1><?= h($facility->type_of_facility) ?></h1>
<p><?= h($facility->facility_name) ?></p>
<p><?= $this->Html->link('Edit', ['action' => 'edit', $facility->slug]) ?></p>
