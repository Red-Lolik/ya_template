<?php
$db	= JFactory::getDbo();
$query = $db->getQuery(true);

/* Trade-in */
$query->clear()
	->select('COUNT(id)')
	->from('all_tradein')
	->where('visible = 1');
$db->setQuery($query);
$TradeinCars = $db->loadResult();

/* В наличии */
$stock_interval = 0;
while ($Stock==null || $Stock==0) {
	$stock_interval++;
	$query->clear()
		->select('SUM(stock)')
		->from('ya_statistics')
		->where('date=CURDATE()-INTERVAL '.$stock_interval.' DAY');
	$db->setQuery($query);
	$Stock = $db->loadResult();
}

/* Покупателей */
$query->clear()
	->select('SUM(sold)')
	->from('ya_statistics')
	->where('MONTH(date) = MONTH(CURDATE())-1');
$db->setQuery($query);
$Sold = $db->loadResult();
$month_name = array(
	1=>'январе',
	2=>'феврале',
	3=>'марте',
	4=>'апреле',
	5=>'мае',
	6=>'июне',
	7=>'июле',
	8=>'августе',
	9=>'сентябре',
	10=>'октябре',
	11=>'ноябре',
	12=>'декабре'
);
?>
<ul>				
	<a href='/car-selector/'>
		<li>
			<span class='number'><?php echo $Stock; ?></span>
			<p>Новых автомобилей в наличии</p>
		</li>
	</a>
	<a href='/car-selector/'>
		<li>
			<span class='number'><?php echo $Sold; ?></span>
			<p>Счастливых покупателей в <?php echo $month_name[date("n")-1]; ?></p>
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
			<span class='number'><?php echo $TradeinCars;?></span>
			<p>Автомобилей с пробегом</p>
		</li>
	</a>
</ul>