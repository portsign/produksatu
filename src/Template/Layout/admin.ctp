<?= $this->element('common/header'); ?>
	<div class="distance"></div>
	<div class="distance"></div>
	<div class="distance"></div>
	
    <?= $this->Flash->render() ?>
    <section class="container clearfix">
    <?= $this->fetch('content') ?>
    </section>