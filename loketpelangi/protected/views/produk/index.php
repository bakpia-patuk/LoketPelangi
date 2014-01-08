<?php
$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
		'links'=>array('Dashboard'=>Yii::app()->createUrl('dashboard/index'),
				'Produk'),
));

$this->menu=array(
	array('label'=>'Create Produk','url'=>array('create')),
	array('label'=>'Manage Produk','url'=>array('admin')),
);
?>

<div class="page-header">
  <h1>Produk</h1>
</div>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
