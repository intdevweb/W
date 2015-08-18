<?php $this->layout('layout', ['title' => 'Accueil !']) ?>

<?php $this->start('main_content') ?>
	<h2>Qui sommes nous.</h2>
	<img src="<?php echo $this->assetUrl('img/test.png'); ?>" alt="test"/>
	
<?php $this->stop('main_content') ?>
