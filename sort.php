<html>

	<head>
		
		<?php include"standart.php"?>
		
		
	</head>
	<body>
	<div class="main">
	<h1 text align="center">Алгоритмы сортировки массивов</h1>
	<table>
		<tr>
			<th>Алгоритм</th>
			<th colspan="3">Временная сложность алгоритма(time complexity)</th>
			<th>пространственная сложность алгоритма(space complexity)</th>
			
		</tr>
		<tr>
			<td></td>
			<td>Лучшая</td>
			<td>Средняя</td>
			<td>худшая</td>
			<td>худшая</td>
		</tr>
		<tr>
			<td>Быстрая сортировка(QuickSort)</td>
			<td class="td_bad">O(n log(n))</td>
			<td class="td_bad">O(n log(n))</td>
			<td class="td_horrible">O(n^2)</td>
			<td class="td_good">O(log(n))</td>
		</tr>
		<tr>
			<td>Cортировка слиянием(MergeSort)</td>
			<td class="td_bad">O(n log(n))</td>
			<td class="td_bad">O(n log(n))</td>
			<td class="td_horrible">O(n log(n))</td>
			<td class="td_fair">O(n)</td>
		</tr>
		<tr>
			<td>TimSort</td>
			<td class="td_excellent">O(n)</td>
			<td class="td_bad">O(n log(n))</td>
			<td class="td_bad">O(n log(n))</td>
			<td class="td_fair">O(n)</td>
		</tr>
		<tr>
			<td>Пирамидальная сортировка(HeapSort)</td>
			<td class="td_bad">O(n log(n))</td>
			<td class="td_bad">O(n log(n))</td>
			<td class="td_bad">O(n log(n))</td>
			<td class="td_excellent">O(1)</td>
		</tr>
		<tr>
			<td>Cортировка пузырьком(BubbleSort)</td>
			<td class="td_excellent">O(n)</td>
			<td class="td_horrible">O(n^2)</td>
			<td class="td_horrible">O(n^2)</td>
			<td class="td_excellent">O(1)</td>
		</tr>
		<tr>
			<td>Cортировка вставками(Insertion Sort)</td>
			<td class="td_excellent">O(n)</td>
			<td class="td_horrible">O(n^2)</td>
			<td class="td_horrible">O(n^2)</td>
			<td class="td_excellent">O(1)</td>
		</tr>
		<tr>
			<td>Сортировка выбором(Selection Sort)</td>
			<td class="td_horrible">O(n^2)</td>
			<td class="td_horrible">O(n^2)</td>
			<td class="td_horrible">O(n^2)</td>
			<td class="td_excellent">O(1)</td>
		</tr>
		<tr>
			<td>Сортировка Шелла(Shell Sort)</td>
			<td class="td_excellent">O(n)</td>
			<td class="td_horrible">O((nlog(n))^2)</td>
			<td class="td_horrible">O((nlog(n))^2)</td>
			<td class="td_excellent">O(1)</td>
		</tr>
		<tr>
			<td>Карманная сортировка(Bucket sort)</td>
			<td class="td_excellent">O(nk)</td>
			<td class="td_excellent">O(nk)</td>
			<td class="td_horrible">O(nk)</td>
			<td class="td_fair">O(n+k)</td>
		</tr>
		<tr>
			<td>Поразрядная сортировка(Radix Sort)</td>
			<td class="td_excellent">O(nk)</td>
			<td class="td_excellent">O(nk)</td>
			<td class="td_excellent">O(nk)</td>
			<td class="td_fair">O(n+k)</td>
		</tr>
	</table>
		<h1>Быстрая сортировка(Quick Sort)</h1>
		<h2>Псевдокод</h2>
		<pre>
		quickSort ( массив a, верхняя граница N ) {
			Выбрать опорный элемент p - середину массива
			Разделить массив по этому элементу
			Если подмассив слева от p содержит более одного элемента, 
				вызвать quickSort для него. 
			Если подмассив справа от p содержит более одного элемента,
				вызвать quickSort для него. 
			}
		</pre>	
		<h2>Реализация на c++</h2>
		<pre>
		void quickSort(int arr[], int left, int right) {

			 int i = left, j = right;

			 int tmp;

			 int pivot = arr[(left + right) / 2];

		 

			 /* partition */

			 while (i <= j) {

				while (arr[i] < pivot)

					  i++;

				while (arr[j] > pivot)

					  j--;

				if (i <= j) {

					  tmp = arr[i];

					  arr[i] = arr[j];

					  arr[j] = tmp;

					  i++;

					  j--;

				}

			};

		 

			 /* recursion */

			 if (left < j)

				quickSort(arr, left, j);

			if (i < right)

				quickSort(arr, i, right);

		}

		<h1>Сортировка вставками</h1>
		<h2>Псевдокод</h2>
			<pre>
			sort (А)
				for pos = 1 to n-1 do
					insert (A, pos, A[pos])
			end
			insert (A, pos, value)
				i = pos - 1
				while i >= 0 and A [i] > value do О
					A [i+1] = A [i]
					i = i-1
				A[i+1] = value 
			end
			</pre>
		</div>	

	</body>
</html>