<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php include "standart.php"?>

    <title>Сортировка слиянием</title>
</head>

<body>
    <div class="main">
       <div class="crumbs"><a href="index.php">Главная/&nbsp</a><a href="sort.php">Сортировка/&nbsp</a><a href="#">Сортировка слиянием/&nbsp</a></div>
        <h1>Сортировка слиянием</h1>
        <p>Эта сортировка&nbsp;&mdash; хороший пример использования принципа &laquo;разделяй и&nbsp;властвуй&raquo;. Сначала задача разбивается на&nbsp;несколько подзадач меньшего размера. Затем эти задачи решаются с&nbsp;помощью рекурсивного вызова или непосредственно, если их&nbsp;размер достаточно мал. Наконец, их&nbsp;решения комбинируются, и&nbsp;получается решение исходной задачи.
        Алгоритм был изобретён Джоном фон Нейманом в&nbsp;1945 году.<br>
        </p>
        <div class="autor">
           <img src="imgs/John_von_Neumann.jpg">
            <p><i>Джон фон Не&#769;йман (англ. John von Neumann)</i><br>
            <p>&mdash;&nbsp;<nobr>венгеро-американский</nobr> математик еврейского происхождения, сделавший важный вклад в&nbsp;квантовую физику, квантовую логику, функциональный анализ, теорию множеств, информатику, экономику и&nbsp;другие отрасли науки.</p>
<p>Наиболее известен как человек, с&nbsp;именем которого связывают архитектуру большинства современных компьютеров (так называемая архитектура фон Неймана), применение теории операторов к&nbsp;квантовой механике (алгебра фон Неймана), а&nbsp;также как участник Манхэттенского проекта и&nbsp;как создатель теории игр и&nbsp;концепции клеточных автоматов.</p>
            </p>
            
        </div>
        <h2>Подробный алгоритм</h2>
        <p>Для решения задачи сортировки эти три этапа выглядят так:</p>
        <ol>
            <li>Сортируемый массив разбивается на&nbsp;две части примерно одинакового размера;</li>
            <li>Каждая из&nbsp;получившихся частей сортируется отдельно, например&nbsp;&mdash; тем&nbsp;же самым алгоритмом;</li><br />
            <li>Два упорядоченных массива половинного размера соединяются в&nbsp;один.</li>
        </ol>
         <div class="gif_img">
            <img src="imgs/Merge-sort-example-300px.gif">
        </div>
        <h2>Пример сортировки на языке С</h2>
        <pre>
            int* merge_sort(int *up, int *down, unsigned int left, unsigned int right)
{
    if (left == right)
    {
        down[left] = up[left];
        return down;
    }

    unsigned int middle = (left + right) / 2;

    // разделяй и властвуй
    int *l_buff = merge_sort(up, down, left, middle);
    int *r_buff = merge_sort(up, down, middle + 1, right);

    // слияние двух отсортированных половин
    int *target = l_buff == up ? down : up;

    unsigned int l_cur = left, r_cur = middle + 1;
    for (unsigned int i = left; i <= right; i++)
    {
        if (l_cur <= middle && r_cur <= right)
        {
            if (l_buff[l_cur] < r_buff[r_cur])
            {
                target[i] = l_buff[l_cur];
                l_cur++;
            }
            else
            {
                target[i] = r_buff[r_cur];
                r_cur++;
            }
        }
        else if (l_cur <= middle)
        {
            target[i] = l_buff[l_cur];
            l_cur++;
        }
        else
        {
            target[i] = r_buff[r_cur];
            r_cur++;
        }
    }
    return target;
}
        </pre>
    </div>
</body>
</html>