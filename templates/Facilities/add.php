<h1>記事の追加</h1>
<?php
    echo $this->Form->create($facility);
    // 今はユーザーを直接記述
    echo $this->Form->control('id', ['type' => 'hidden', 'value' => 1]);
    echo $this->Form->control('type_of_facility');
    echo $this->Form->control('facility_name');
    echo $this->Form->control('movein_price');
    echo $this->Form->control('monthly_price');
    echo $this->Form->control('prefecture');
    echo $this->Form->control('address_of_facility');
    echo $this->Form->control('access');
    echo $this->Form->button(__('Save Faciliy'));
    echo $this->Form->end();
?>