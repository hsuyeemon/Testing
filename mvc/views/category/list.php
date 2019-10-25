<h2>List</h2>
<ul>
	<? 		
		foreach($data as &$cat){
	    ?>
	<li>
		[ <a href="http://localhost/Testing/mvc/category/del/<?= $cat['id'] ?>">delete</a> ]
		[ <a href="http://localhost/Testing/mvc/category/edit/<?= $cat['id'] ?>">edit</a> ]

		<strong><?= $cat['id'] ?></strong>


	</li>
	<? } ?>
</ul>
<br>
<a href="http://localhost/Testing/mvc/category/new/">New Category </a>
