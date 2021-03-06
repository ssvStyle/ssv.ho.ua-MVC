<!DOCTYPE html>
<html>
<head>
	<title><?php echo $this->siteTitle(); ?></title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="description" content="Статьи о парикмахерском искусстве. Запись к мастеру онлайн. Сайт для записи на стрижку, краску или другие парикмахерские услуги в Одессе">
	<meta name="keywords" content="стрижка женская мужская одесса, стрижка на средние волосы, длинные волосы, короткие волосы, записаться фото парикмахер боб каре каскад пикси лесенка голивуд, каре с удлинением к лицу">
	<meta name="author" content="Сергей Симонов">
        <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="<?php echo PROOT; ?>css/style.css" rel="stylesheet">
	<link href="<?php echo PROOT; ?>css/calendar.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="<?php echo PROOT; ?>slick/slick.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo PROOT; ?>slick/slick-theme.css"/>
        <script async src="<?php echo PROOT; ?>js/calendar.js"></script>
        <?php echo $this->content('head'); ?>
	<script  async src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script async src="<?php echo PROOT; ?>js/scripts.js"></script>
        <script async src="<?php echo PROOT; ?>js/.js"></script>
         
         
</head>
	<body>
            <!--TopBar-->
            	<div class="topBar">
                    <div class="social">
                            <a href="https://www.facebook.com/profile.php?id=100011624896547"><img src="<?php echo PROOT; ?>img/social/facebook.png" alt="facebook" title="facebook"></a>
                            <a href="https://plus.google.com/u/0/117666727034301662419"><img src="<?php echo PROOT; ?>img/social/google.png" alt="google" title="google"></a>
                            <!--<a href="#"><img src="img/social/instagram.png" alt="instagram" title="instagram"></a>-->
                    </div>
                    
                    
                        <?php if (!isset($_SESSION['user_id'])){?><div class="menuToggle"><img src="<?php echo PROOT; ?>img/login.png" class="loginImg"></div>
                                                    <div class="login">
                                                        <form action="" method="post">
                                                                <label>Логин : </label>
                                                                <input placeholder="Номер телефона 067..." required="" id="username" type="text" name="login">
                                                                <label>Пароль : </label><input placeholder="Пароль" required="" id="password" type="password" name="pass">
                                                                <br><button type="submit">Войти</button>
                                                                <a href="<?php echo PROOT; ?>registration">Регистрация</a>
							</form>
                                                    </div>
						<?php } else { ?>
                        <div class="hello">
                            Здравствуйте &nbsp<a href="<?php echo PROOT;?>mypage"><?php echo $_SESSION['name'] ?></a>&nbsp<form action="" method="post"><button type="submit" name="logout" value="exit">Exit</button></form>
                        </div>
									<!--<a href="">Выход <img src="images/exit.png" width="14px" style="float:right; padding-left: 10px;"></a>-->
						<?php } ?>
                    
                </div>
            <!--endTopBar-->
            <!--menu-->
                <div class="header">
                    <div class="logo"><a href="<?php echo PROOT; ?>home"><img src="<?php echo PROOT; ?>img/logov2.png" alt="Логотип" title="Логотип"></a></div>
                    <div class="hambMenu"><img src="<?php echo PROOT; ?>img/hambmenu.png"></div>
                    <div class="menu">
                        <div class="menuPages"><a href="<?php echo PROOT; ?>home">Главная</a></div>
                            <div class="menuPages"><a href="<?php echo PROOT; ?>entry">Запись</a></div>
                            <div class="menuPages"><a href="<?php echo PROOT; ?>services">Виды услуг</a></div>
                            <div class="menuPages"><a href="<?php echo PROOT; ?>about">О сайте</a></div>
                            <div class="menuPages"><a href="<?php echo PROOT; ?>contact">Контакты</a></div>
                    </div>  <?php //dnd($_SESSION); ?>
                </div>
            <!--endmenu-->
            <!--slider-->
                <div class="slider">
                    <!--<div class="caption">это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал </div>
                -->
                        <div><img src="<?php echo PROOT; ?>img/galery/1.jpg" title="" alt=""></div>
                        <div><img src="<?php echo PROOT; ?>img/galery/2.jpg" title="" alt=""></div>
                        <div><img src="<?php echo PROOT; ?>img/galery/3.jpg" title="" alt=""></div>
                        <div><img src="<?php echo PROOT; ?>img/galery/4.jpg" title="" alt=""></div>
                        <div><img src="<?php echo PROOT; ?>img/galery/5.jpg" title="" alt=""></div>
                        <div><img src="<?php echo PROOT; ?>img/galery/6.jpg" title="" alt=""></div>
                        <div><img src="<?php echo PROOT; ?>img/galery/7.jpg" title="" alt=""></div>
                        <div><img src="<?php echo PROOT; ?>img/galery/8.jpg" title="" alt=""></div>
                </div>
            <!--endslider-->
            <!--content-->
                <div class="content">
                    <div class="leftCol">
                        <p>Для записи выберите месяц и число</p><br>
                            <div id="calendar">
                                <noscript><?php include PROOT.'lib/calendar.php';?></noscript>
                                <img src="<?php echo PROOT; ?>img/prev.png" alt="Предыдущий месяц" title="Предыдущий месяц" id="prevMonth" onclick="prevMonth()"  style="cursor: pointer;"><span id="monthJS"></span><img src="<?php echo PROOT; ?>img/next.png" alt="Следующий месяц" title="Следующий месяц" id="nextMonth" onclick="nextMonth()" style="cursor: pointer;">
                                <div id="month"></div>
                                <div id="week">Пн</div><div id="week">Вт</div><div id="week">Ср</div><div id="week">Чт</div><div id="week">Пт</div><div id="week">Сб</div><div id="week">Вс</div>
                                <span id="days"></span>	
                            </div>
                    </div>
                         <?php echo $this->content('body'); ?>
                </div>

            <!--endContent-->
            <!--footer-->
                <div class="footer">
                    <div class="contacts">
                            <h3>Контакты</h3>
                            <address>
                                Украина г. Одесса<br>Ул. Давида Ойстраха 1<br>(бывш. Затонского)<br>Салон красоты &quot Локон &quot <br>Телефон: 80679070779<br>Email: ssv.style@gmail.com
                            </address>
                    </div>
                    <div class="links">
                            <h3>Ссылки</h3>
                    </div>
                    <div class="fromBlog">
                            <h3>Из блога</h3>

                    </div>
                    <div class="newsletter">
                            <h3>Подписка</h3>


                    </div>
                </div>
            <!--endFooter-->
            <!--Copiring-->
            <div class="copyring">
                <p>Copyright © 2018 s.s.v.</p>
                </div>
                    <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
                    <script type="text/javascript" src="<?php echo PROOT; ?>slick/slick.min.js"></script>
                    <script type="text/javascript">
                          $('.slider').slick({
                                infinite: true,
                                speed: 600,
                                fade: true,
                                cssEase: 'linear',
                                slidesToScroll: 1,
                                autoplay: true,
                                autoplaySpeed: 5000
                            });
                    </script>
            </body>
</html>
