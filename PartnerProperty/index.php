<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit-no">
    
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/main.css">

<title>test</title>
</head>

<body>
<header>
    <div class="container-fluid px-4">
		<div class="row">
			<div class="col-6 col-sm-6 col-md-6 col-lg-6">
	            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Тип<i class="fas fa-user"></i>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">test1</a>
                    <a class="dropdown-item" href="#">test2</a>
                    <a class="dropdown-item" href="#">test3</a>
                </div>
        
                <nav class="navbar navbar-expand-lg navbar-light">
			        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navContent" 
					    aria-controls="navContent" aria-expanded="false" aria-label="Toggle navigation">
			        </button>
			
			        <div class="collapse navbar-collapse" id="navContent">
			            <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a href="#" class="nav-link">Общие</a>
                            </li>
						    <li class="nav-item">
                                <a href="#" class="nav-link">Реквизиты</a>
                            </li>
					        <li class="nav-item">
                                <a href="#" class="nav-link">Договор</a>
                            </li>
					        <li class="nav-item">
                                <a href="#" class="nav-link">Произвольные свойства</a>
                            </li>
					    </ul>
			        </div>
		        </nav>
	        </div>
	    </div>
	</div>
</header>

<section>
    <div class="container-fluid">
	    <div class="row row-cols-2 gy-3">
            <div class="col-6 col-sm-6 col-md-6 col-lg-6">
	            <form>
                        <div class="form-group">
                            <label for="inputName">Название</label>
                            <input type="text" class="form-control" id="docName" aria-describedby="name">
                        </div>
                        <div class="form-group">
                            <label for="inputFullName">Полное название</label>
                            <input type="text" class="form-control" id="inputFullName" aria-describedby="fullName">
                        </div>
    
	                <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                        <div class="form-group">
                            <label for="inputNumber">Код ЕГРПОУ(ИНН)</label>
                            <input type="text" class="form-control" id="docNumber" aria-describedby="number">
                        </div>
	                </div>	
		                <div class="form-group">
                            <label for="inputTelephone">Телефон</label>
                            <input type="text" class="form-control" id="inputTelephone">
                        </div>
                        <div class="form-group">
                            <label for="inputAdress">Адрес</label>
                            <input type="text" class="form-control" id="inputAdress">
                        </div>
		                <div class="form-group">
                            <label for="input">Группа</label>
                            <input type="text" class="form-control" id="inputAdress">
                        </div>
		                <div class="form-group">
                            <label for="inputAdress">Примечание(ФИО,e-mail)</label>
                            <input type="text" class="form-control" id="inputAdress">
                        </div>
                </form>
		    </div>

            <div class="col-4 col-sm-4 col-md-4 col-lg-4">
		        <h6><span class="letter">Наш долг:</span><br> </h6><br><br><br><br><br>
                <h6><span class="letter">Последняя поставка:</span><br> </h6><br><br>
                <h6><span class="letter">Последняя оплата:</span><br> </h6><br>
            </div>
	
	            <nav class="navbar navbar-expand-lg navbar-light">
		                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navContent" 
			                aria-controls="navContent" aria-expanded="false" aria-label="Toggle navigation">
		                </button>
			            <h6><span>Прайс-лист:</span><br></h6>
	                <div class="dropdown">
                        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Основной
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">test1</a>
                            <a class="dropdown-item" href="#">test2</a>
                            <a class="dropdown-item" href="#">test3</a>
                        </div>
                    </div>
		            <form>
		                <div class="form-group">
                            <label for="inputAdress">Скидка%</label>
                            <input type="text" class="form-control" id="inputAdress">
                        </div>
		            </form>
	            </nav>
	    </div>	
    </div>
</section><br>

<footer>
    <div class="container-fluid px-4">
	    <div class="row">
	        <div class="col-4 col-sm-4 col-md-4 col-lg-4">
	            <label>
                    <input type="checkbox"><span>Еще&nbsp;</span>
                </label>
		        <button type="button" class="btn btn-outline-dark">Сохранить</button>
                <button type="button" class="btn btn-outline-dark">Закрыть</button>
			</div>
		</div>
	</div>
</footer>

<script src="https://kit.fontawesome.com/dd4694582e.js" crossorigin="anonymous"></script>
<script src="js/bootstrap.bundle.min.js">
</body>
</html>