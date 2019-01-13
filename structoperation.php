<html>

	<head>
		<title>Операции над структурами данных</title>
		<?php include"standart.php"?>
		
		
	</head>
	<body>
	<div  class="main">
	<h1 text align="center">Операции над структурами данных</h1>
		<table>
			<tr>
				<th>Структура данных</th>
				<th colspan="8">Временная сложность алгоритма(time complexity)</th>
				<th>пространственная сложность алгоритма(space complexity)</th>
				
			</tr>
			<tr>
				<td></td>
				<td colspan="4">Лучшая</td>
				<td colspan="4">худшая</td>
				<td>худшая</td>
			</tr>
			<tr>
				<td></td>
				<td>Доступ</td>
				<td>Поиск</td>
				<td width="74">Вставка</td>
				<td>Удаление</td>
				<td>Доступ</td>
				<td>Поиск</td>
				<td width="74">Вставка</td>
				<td>Удаление</td>
			</tr>
			<tr>
				<td>Массив(Array)</td>
				<td class="td_excellent">O(1)</td>
				<td class="td_fair">O(n)</td>
				<td class="td_fair">O(n log(n))</td>
				<td class="td_fair">O(n)</td>
				
				<td class="td_excellent">O(1)</td>
				<td class="td_fair">O(n)</td>
				<td class="td_fair">O(n log(n))</td>
				<td class="td_fair">O(n)</td>
				<td class="td_fair">O(n)</td>
			</tr>
			<tr>
				<td>Стэк(Stack)</td>
				<td class="td_fair">O(n)</td>
				<td class="td_fair">O(n)</td>
				<td class="td_excellent">O(1))</td>
				<td class="td_excellent">O(1)</td>
				
				<td class="td_fair">O(n)</td>
				<td class="td_fair">O(n)</td>
				<td class="td_excellent">O(1)</td>
				<td class="td_excellent">O(1)</td>
				
				<td class="td_fair">O(n)</td>
			</tr>
				<td>Односвязный список<br>(Singly-Linked List)</td>
				<td class="td_fair">O(n)</td>
				<td class="td_fair">O(n)</td>
				<td class="td_excellent">O(1))</td>
				<td class="td_excellent">O(1)</td>
				
				<td class="td_fair">O(n)</td>
				<td class="td_fair">O(n)</td>
				<td class="td_excellent">O(1)</td>
				<td class="td_excellent">O(1)</td>
				
				<td class="td_fair">O(n)</td>
			<tr>
				<td>Двусвязный список<br>(Doubly-Linked List)</td>
				<td class="td_fair">O(n)</td>
				<td class="td_fair">O(n)</td>
				<td class="td_excellent">O(1))</td>
				<td class="td_excellent">O(1)</td>
				
				<td class="td_fair">O(n)</td>
				<td class="td_fair">O(n)</td>
				<td class="td_excellent">O(1)</td>
				<td class="td_excellent">O(1)</td>
				
				<td class="td_fair">O(n)</td>
			</tr>
				<td>Список с пропусками<br>(Skip List)</td>
				<td class="td_good">O(log(n))</td>
				<td class="td_good">O(log(n))</td>
				<td class="td_good">O(log(n))</td>
				<td class="td_good">O(log(n))</td>
				
				<td class="td_fair">O(n)</td>
				<td class="td_fair">O(n)</td>
				<td class="td_fair">O(n)</td>
				<td class="td_fair">O(n)</td>
				
				<td class="td_bad">O(n log(n))</td>
			<tr>
				<td>Хеш-таблица(Hash Table)</td>
				<td>-</td>
				<td class="td_excellent">O(1)</td>
				<td class="td_excellent">O(1)</td>
				<td class="td_excellent">O(1)</td>
				
				<td>-</td>
				<td class="td_fair">O(n)</td>
				<td class="td_fair">O(n)</td>
				<td class="td_fair">O(n)</td>
				
				<td class="td_fair">O(n)</td>	
			</tr>
			<tr>
				<td>Двоичное дерево поиска<br>(Binary Search Tree)</td>
				<td class="td_good">O(log(n))</td>
				<td class="td_good">O(log(n))</td>
				<td class="td_good">O(log(n))</td>
				<td class="td_good">O(log(n))</td>
				
				<td class="td_fair">O(n)</td>
				<td class="td_fair">O(n)</td>
				<td class="td_fair">O(n)</td>
				<td class="td_fair">O(n)</td>
				
				<td class="td_fair">O(n)</td>	
			</tr>
				<td>Декартово дерево<br>(Cartesian Tree)</td>
				<td>-</td>
				<td class="td_good">O(log(n))</td>
				<td class="td_good">O(log(n))</td>
				<td class="td_good">O(log(n))</td>
				
				<td>-</td>
				<td class="td_fair">O(n)</td>
				<td class="td_fair">O(n)</td>
				<td class="td_fair">O(n)</td>
				
				<td class="td_fair">O(n)</td>			
			<tr>
				<td>B-дерево(B-Tree)</td>
				<td class="td_good">O(log(n))</td>
				<td class="td_good">O(log(n))</td>
				<td class="td_good">O(log(n))</td>
				<td class="td_good">O(log(n))</td>
				
				<td class="td_good">O(log(n))</td>
				<td class="td_good">O(log(n))</td>
				<td class="td_good">O(log(n))</td>
				<td class="td_good">O(log(n))</td>
				
				<td class="td_fair">O(n)</td>
			</tr>
			<tr>
				<td>Красно-чёрное дерево<br>(Red-Black Tree)</td>
				<td class="td_good">O(log(n))</td>
				<td class="td_good">O(log(n))</td>
				<td class="td_good">O(log(n))</td>
				<td class="td_good">O(log(n))</td>
				
				<td class="td_good">O(log(n))</td>
				<td class="td_good">O(log(n))</td>
				<td class="td_good">O(log(n))</td>
				<td class="td_good">O(log(n))</td>
				
				<td class="td_fair">O(n)</td>
			</tr>
			<tr>
				<td>Расширяющееся дерево<br>(Splay Tree)</td>
				<td>-</td>
				<td class="td_good">O(log(n))</td>
				<td class="td_good">O(log(n))</td>
				<td class="td_good">O(log(n))</td>
				
				<td>-</td>
				<td class="td_good">O(log(n))</td>
				<td class="td_good">O(log(n))</td>
				<td class="td_good">O(log(n))</td>
				
				<td class="td_fair">O(n)</td>	
			</tr>
			<tr>
				<td>АВЛ-дерево<br>(AVL Tree)</td>
				<td class="td_good">O(log(n))</td>
				<td class="td_good">O(log(n))</td>
				<td class="td_good">O(log(n))</td>
				<td class="td_good">O(log(n))</td>
				
				<td class="td_good">O(log(n))</td>
				<td class="td_good">O(log(n))</td>
				<td class="td_good">O(log(n))</td>
				<td class="td_good">O(log(n))</td>
				
				<td class="td_fair">O(n)</td>	
			</tr>
		</table>
	</main>

	</body>
</html>