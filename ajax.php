<?php
$distance = array('Charbagh'=>0,'Indira Nagar'=>10,'BBD'=>30,'Barabanki'=>60,'Faizabad'=>100,'Basti'=>150,'Gorakhpur'=>210);

$p = $_POST['p'];$d =$_POST['d'];$c = $_POST['c'];$w =$_POST['w'];

$total_distance =abs($distance[$d] - $distance[$p]);

if($c == 'CabMicro'){
	if($total_distance==10)
		$price = 185; //185=50+10*13.50
	elseif($total_distance>10 && $total_distance<=60)
		$price =185+(($total_distance-10)*12);
	elseif($total_distance>60 && $total_distance<=160)
		$price =785+(($total_distance-60)*10.2); //785=50+10*13.50 +50*12
	else
		$price =1805+(($total_distance-160)*8.5); //1805=50+10*13.50 +50*12+100*10.2
}
if($c == 'CabMini'){
	if($total_distance==10)
		$price = 295; //295=150+10*14.5
	elseif($total_distance>10 && $total_distance<=60)
		$price =295+(($total_distance-10)*13);
	elseif($total_distance>60 && $total_distance<=160)
		$price =945+(($total_distance-60)*11.2);//945=150+10*14.5+50*13
	else
		$price =2065+(($total_distance-160)*9.5); //2065=150+10*14.5+50*13+100*10.20
}
if($c == 'CabRoyal'){
	if($total_distance==10)
		$price = 355; //335=200+10*15.5
	elseif($total_distance>10 && $total_distance<=60)
		$price =355+(($total_distance-10)*14);
	elseif($total_distance>60 && $total_distance<=160)
		$price =1055+(($total_distance-60)*12.2); //1055=200+10*15.5+100*50*14
	else
		$price =2275+(($total_distance-160)*10.5); //2275=200+10*15.5+100*50*14+100*10.5
}
if($c == 'CabSUV'){
	if($total_distance==10)
		$price = 415; //415=250+10*16.50
	elseif($total_distance>10 && $total_distance<=60)
		$price =415+(($total_distance-10)*15);
	elseif($total_distance>60 && $total_distance<=160)
		$price =1165+(($total_distance-60)*13.2); //1165=250+10*16.50+50*15
	else
		$price =2485+(($total_distance-160)*11.5); //1165=250+10*16.50+50*15+100*13.20
}

$weight = 0;

if($c == 'CabMini' || $c == 'CabRoyal'){
	if($w<=10){
		$weight = 50;
	}
	if($w>10 && $w<=20){
		$weight = 100;
	}
	if($w>20){
		$weight = 200;
	}
}
if($c == 'CabSUV'){
	if($w<=10){
		$weight = 2*50;
	}
	if($w>10 && $w<=20){
		$weight = 2*100;
	}
	if($w>20){
		$weight = 2*200;
	}	
}

$total_price =$price + $weight;
echo $total_price;
?>