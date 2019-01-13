<html>

	<head>
		<?php include"standart.php" ?>
	</head>
	<body>
	<div class="main">
	<h1>Вектор</h1>

<p>Вектор S&nbsp;является абстрактным типом данных (АТД), который поддерживает следующие основные методы:<br />
elemAtRank (r): возвращает элемент S&nbsp;с&nbsp;разрядом r; если r&nbsp;&lt; 0 или r&nbsp;&gt; n&nbsp;&mdash; 1, где n&nbsp;&mdash; текущее число элементов, выдается сообщение об&nbsp;ошибке.<br />
Input: целое число; Output: объект.</p>
<p>replaceAtRank (r, е): замещает объектом е&nbsp;элемент с&nbsp;разрядом r&nbsp;и&nbsp;возвращает замещаемый объект. Если r&nbsp;&lt; 0 или r&nbsp;&gt; n&nbsp;&mdash; 1 выдается сообщение об&nbsp;ошибке.<br />
Input: целое число г&nbsp;и&nbsp;объект е\ Output: объект.<br />
insertAtRank (r, е): добавляет в&nbsp;S&nbsp;новый элемент е, если r&nbsp;&lt; 0 или r&nbsp;&gt; n, выдается сообщение об&nbsp;ошибке.<br />
Input: целое число r&nbsp;и&nbsp;объект e&nbsp;Output: нет.</p>
<p>removeAtRank (г): удаляет из&nbsp;S&nbsp;элемент с&nbsp;разрядом r&nbsp;если r&nbsp;&lt; 0 или r&nbsp;&gt; n&nbsp;&mdash; 1, выдается сообщение об&nbsp;ошибке.<br />
Input: целое число; Output: объект.</p>
	
	</div>
	</body>
</html>