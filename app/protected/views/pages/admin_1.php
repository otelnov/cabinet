<?php
$this->breadcrumbs=array(
	'Pages'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Pages', 'url'=>array('index')),
	array('label'=>'Create Pages', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('pages-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Pages</h1>

<br><br><br>
<style>
.tree_lvl_1 {
  padding-left:20px;
}

.tree_lvl_2 {
  padding-left:24px;
  margin-left:-12px;
  margin-top:-3px;
}
</style>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.9.1/themes/base/jquery-ui.css" />
<script src="http://code.jquery.com/ui/1.9.1/jquery-ui.js"></script>
<style>
    ul { list-style-type: none; margin: 0; padding: 0; margin-bottom: 10px; }
    li { margin: 5px; padding: 5px; width: 150px; }
    </style>
<script>
    $(function() {
        $( "#sortable" ).sortable({
            revert: true
        });
        $( "#draggable" ).draggable({
            connectToSortable: "#sortable",
            helper: "clone",
            revert: "invalid"
        });
        $( "ul, li" ).disableSelection();
    });
</script>
<?php

function view_tree($model) {
	foreach($model as $one){
		if ($one->parent_id == '0') {
			$one_lvl[] = array ($one->id, $one->parent_id, $one->title);
		} else {
			$next_lvl[] = array ($one->id, $one->parent_id, $one->title);
		}
	}
	print '<ul class="tree_lvl_1" id="sortable">';
	foreach ($one_lvl as $key){
		print '<li class="ui-state-default"><a href="/pages/view?id='.$key[0].'">'.$key[2].'</a>';
		view_tree_next_level($key[0], $next_lvl);
		print '</li>';
	}
	print '</ul>';
}

function view_tree_next_level($family, $next_lvl) {
	foreach ($next_lvl as $key) {
		if ($key[1]==$family) {
			print '<ul class="tree_lvl_2" id="sortable"><li class="ui-state-default"><a href="/pages/view?id='.$key[0].'">'.$key[2].'</a>';
			view_tree_next_level($key[0], $next_lvl);
			print '</li></ul>';
		}
    }
}

view_tree($model);
?>

<!--<ul class="tree_lvl_1">
	<li>
		<a href="/pages/view?id=2">info</a>
			<ul class="tree_lvl_2">
				<li>
					<a href="/pages/view?id=6">about</a>
				</li>
			</ul>
			<ul class="tree_lvl_2">
				<li>
					<a href="/pages/view?id=7">contacts</a>
				</li>
			</ul>
	</li>
	<li>
		<a href="/pages/view?id=8">topic</a>
			<ul class="tree_lvl_2">
				<li>
					<a href="/pages/view?id=5">text</a>
				</li>
			</ul>
	</li>
</ul>    -->