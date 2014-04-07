<?php
$this->breadcrumbs=array(
	'Buckles'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Buckle', 'url'=>array('index')),
	array('label'=>'Create Buckle', 'url'=>array('create')),
	array('label'=>'Update Buckle', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Buckle', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Buckle', 'url'=>array('admin')),
);
?>

<h1>View Buckle #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'dataset_id',
		'type',
	),
)); ?>
