<?php
$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
		'links'=>array('Dashboard'=>Yii::app()->createUrl('dashboard/index'),
				'Kode Pos'=>array('index'),
				'Create'),
));

$this->menu=array(
	array('label'=>'List Wilayah','url'=>array('index')),
	array('label'=>'Manage Wilayah','url'=>array('admin')),
);
?>

<h1>Create Wilayah</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>