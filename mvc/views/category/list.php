<h2>List</h2>
<ul>
	<? foreach ($data as $cats): ?>
	<li>
		[ <a href="http://localhost/Testing/mvc/category/del/<?= $cat['id'] ?>">del</a> ]
		[ <a href="http://localhost/Testing/mvc/category/edit/<?= $cat['id'] ?>">edit</a> ]

		<strong><?= $cats['name'] ?></strong>


	</li>
	<? endforeach ?>
</ul>
<br>
<a href="http://localhost/Testing/mvc/category/new/">New Category </a>
