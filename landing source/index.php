<html>
  <head>
    <title>Garage_87</title>
	<link rel="stylesheet" type="text/css" href="./style.css"> 
	<link rel="stylesheet" type="text/css" href="calligraph.css">	
	<link rel="stylesheet" type="text/css" href="./fancybox/jquery.fancybox-1.3.4.css" media="screen" />
	
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
	<script type="text/javascript" src="fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
	<script type="text/javascript" src="fancybox/jquery.fancybox-1.3.4.pack.js"></script>
	<script>
		!window.jQuery && document.write('<script src="jquery-1.4.3.min.js"><\/script>');
	</script>
	<script type="text/javascript" src="all_scripts.js"></script>
  </head>
  <body>  
    <div id="wrapper">
	 <div id="header">
	   <div id="capt_nav">
		 <ul>
		   <li style="width:auto; font-family:Calligraph; font-size:80px; ">(Garage_87)</li>
		 </ul>
	   </div>
	   <div class="overlay" id="overlay">
	    <div class="wrap"></div> 
	   </div>
	 </div>
	 <div id="content">
	   <div id="about_gar">   
	     <p align="center"><font size="8"><a name="garage87">О Garage_87</a></font></p>
		 <div id="work_with_cl">
		   <img src="time.png" align="center">
		   <div id="work_with_cl_text">
		     <div id="textt">
			  <p align="center"><font size="5">Работа с клиентами</font></p>
			  <p align="justify">Мы предоставляем клиенту различные услуги по доступным ценам,
		      мы следим за качеством и сроками исполнения наших договоренностей о выполнении заказа.</p>
			 </div> 
		   </div>
		 </div>
		 <div id="recall">
		   <img src="call.png" align="center"><br>
		   <div id="recall_text">
		     <? include('recall.php') ?>
		   </div>
		 </div>
		 <div id="where_we">
		   <img src="adress.png" align="center"><br>
		   <div id="where_we_text">
		     <div id="textt">
			  <p align="center"><font size="5">Где мы?</font></p>
		      <p align="justify">Мы распологаемся в гаражном кооперативе "Бадеево". 
			  По адресу МО, город Чехов, мкр-н Бадеево, улица Бадеевская-1.
			  Лучше к нам подъехать со стороны карнавала или бензоколонки, там вас встретит один из нас и провродит к гаражу.</p>
			  <p align = "justify"><iframe src="<iframe src="https://www.google.com/maps/embed?pb=!1m17!1m11!1m3!1d1198.1257662582052!2d37.44064215825176!3d55.15223269018872!2m2!1f0!2f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x619621c7c7828131!2sBadeevo%2C+Garazh!5e1!3m2!1sen!2sru!4v1489184641936" width="100%" height="100%; frameborder="0" style="border:0" allowfullscreen></iframe></iframe></p>
			 </div> 
		   </div>
		 </div>
	   </div>
	   
	   <div id="about_comm">
	     <p align="center"><font size="8"><a name="command">О команде</a></font></p>
		 <div id="bg_layer"></div>
		 <div id="video">
		    <div class="imag" title="Нажми на меня!"><img src="kai-oberhauser.png"></div>
		    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/MTIx9n4zFVc" frameborder="0" allowfullscreen></iframe>
		 </div>
	   </div>
	   <div id="photo">
	     <p align="center"><font size="8"><a name="works">Работы</a></font></p>
		 <div id="gallery">
		    <!--Создание галерии-->
			  <?
			    //Определяем галерею
				$directory = './works';
				//Определяем массив допустимых типов картинок
				$allowed_types=array('jpg','jpeg','png','tiff');
				//Определяем массив частей типов
				$file_parts=array();
				$ext='';
				$i=0;
				//Открываем директорию
				$dir_handle = @opendir($directory);
				//Запускаем цикл чтения данных из папки
				while($file = readdir($dir_handle))
				{
				  //если путь начинается с "." или "..", 
				  if($file=='.'||$file=='..') continue;
					//то переписываем путь "."
					$file_parts = explode('.',$file);
					$ext = strtolower(array_pop($file_parts));
					if(in_array($ext,$allowed_types))
					{
					  //вызываем галерею по-штучно
					  echo '<div class="item">';
					  echo '<a rel="group" href="'.$directory.'/'.$file.'">';
					  echo '<img src="'.$directory.'/'.$file.'">';
					  echo '</a>';
					  echo '</div>';
					  //вызываем галерею по-штучно
					  //выбираем следующий пункт
					  $i++;
					  //выбираем следующий пункт
					}
				}
				//закрываем директорию
				closedir($dir_handle);
			  ?>
			  <!--Создание галерии-->
		 </div>
	</div>

	<script type="text/javascript">
      document.querySelector(".imag").onclick = function(){
      this.style.display = "none";
	  iframe.style.visibility = "visible";
	  iframe.src= src+"&amp;autoplay=1";    }
	  
     </script>
	 <div id="footer">
	    <a href="https://vk.com/garage87"><img src="vk.png" style="position:absolute; margin-top:7%; margin-left:50%;"></a>
		<img src="david-straight-37577.jpg" style="margin:0; padding:0; width:100%;">
	 </div>

  </body>
</html>