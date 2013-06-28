<?php
/* TODO Настроить выборки данных на живом хостинге с применением объектов Joomla
$query = "SELECT id FROM ".$_tab_tradein." WHERE visible=1;";
$result = @mysql_query($query);
$TradeinCars = @mysql_num_rows($result);

//Цикл возвращается по 1 дню назад, пока не получит количество машин > 0
$stock_interval = 0;
while ($Stock[0]==null || $Stock[0]==0) {
	$stock_interval++;
	$stock_q = "SELECT SUM(stock) FROM $_tab_stat WHERE date=CURDATE()-INTERVAL $stock_interval DAY;";
	$stock_r = @mysql_query($stock_q);
	$Stock = @mysql_fetch_array($stock_r);
}

$sold_q = "SELECT SUM(sold) FROM ".$_tab_stat." WHERE MONTH(date) = MONTH(CURDATE())-1;";
$sold_r = @mysql_query($sold_q);
$Sold = @mysql_fetch_array($sold_r);
*/
?>
<ul>				
	<a href='/car-selector/'>
		<li>
			<span class='number'>$Stock[0]</span>
			<p>Новых автомобилей в наличии</p>
		</li>
	</a>
	<a href='/car-selector/'>
		<li>
			<span class='number'>$Sold[0]</span>
			<p>Счастливых покупателей в ".month_name4(date("n")-1)."</p>
		</li>
	</a>
	<a href='/car-selector/'>
		<li>
			<span class='number'>1267</span>
			<p>Новых автомобилей заказано</p>
		</li>
	</a>
	<a href='/tradein/'>
		<li>
			<span class='number'>$TradeinCars</span>
			<p>Автомобилей с пробегом</p>
		</li>
	</a>
</ul>