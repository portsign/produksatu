<?= $this->element('common/header'); ?>
<?= $this->element('common/navbar'); ?>
    <?= $this->Flash->render() ?>
    <section class="container clearfix">
    <?= $this->fetch('content') ?>
    </section>
<?= $this->element('common/footer'); ?>