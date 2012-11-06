<?php
$this->breadcrumbs=array(
	'Pages'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Pages', 'url'=>array('index')),
	array('label'=>'Create Pages', 'url'=>array('create')),
);



?>

<h1>Manage Pages</h1>

<br><br><br>
<?php

function view_tree($model) {
	foreach($model as $one){
		if ($one->parent_id == '0') {
			$one_lvl[] = array ($one->id, $one->parent_id, $one->title);
		} else {
			$next_lvl[] = array ($one->id, $one->parent_id, $one->title);
		}
	}
	foreach ($one_lvl as $key){
		print '{ text: "'.$key[2].'", expanded: true, items: [';
        view_tree_next_level($key[0], $next_lvl); 
        print '] }, ';
	}
}

function view_tree_next_level($family, $next_lvl) {
	foreach ($next_lvl as $key) {
		if ($key[1]==$family) {
			print '{ text: "'.$key[2].'" },';
			view_tree_next_level($key[0], $next_lvl);
		}
    }
}
?>	

<div id="example" class="k-content">
<div class="demo-section">
    <div id="treeview-left"></div>
</div>
<script>
	$("#treeview-left").kendoTreeView({
		dragAndDrop: true,
		dataSource: [
			<?php view_tree($model); ?>
		]
	}).data("kendoTreeView");
</script>
<style scoped>
	#treeview-left,
	#treeview-right
	{
		float: left;
		width: 220px;
	}
	.demo-section {
		width: 500px;
	}
	.demo-section:after {
		content: ".";
		display: block;
		height: 0;
		clear: both;
		visibility: hidden;
	}
</style>
</div>