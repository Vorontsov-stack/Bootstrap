<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit-no">
    
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/main.css">

<title>work</title>
</head>

<body>
<header class="header row">
    <div class="container">
	    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
		    <nav class="navbar navbar-expand-lg navbar-light bg-light">
			    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navContent" 
					aria-controls="navContent" aria-expanded="false" aria-label="Toggle navigation">
			    </button>
			    <div class="collapse navbar-collapse" id="navContent">
			        <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a href="#" class="nav-link"><i class="fa fa-fw fa-envelope"></i>Сохранить</a>
                        </li>
		                <div class="dropdown">
                            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="far fa-edit"></i>Заполнить
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">test1</a>
                                <a class="dropdown-item" href="#">test2</a>
                                <a class="dropdown-item" href="#">test3</a>
                            </div>
                        </div>								
                        <div class="dropdown">
                            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="far fa-file-word"></i>Печать
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">test1</a>
                                <a class="dropdown-item" href="#">test2</a>
                                <a class="dropdown-item" href="#">test3</a>
                            </div>
                        </div>
		                <div class="dropdown">
                            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="far fa-file-excel"></i>в Exel
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">test1</a>
                                <a class="dropdown-item" href="#">test2</a>
                                <a class="dropdown-item" href="#">test3</a>
                            </div>
                        </div>
					    <li class="nav-item">
                            <a href="#" class="nav-link"><i class="far fa-list-alt"></i>Таблица</a>
                        </li>
					    <li class="nav-item">
                            <a href="#" class="nav-link"><i class="far fa-trash-alt"></i>Удалить</a>
                        </li>
					    <li class="nav-item">
                            <a href="#" class="nav-link"><i class="far fa-check-circle"></i>Создать по текущему</a>
                        </li>
					    <li class="nav-item">
                            <a href="#" class="nav-link"><i class="fas fa-cog"></i>Выбор операции</a>
                        </li>
			        </ul>
			    </div>
		    </nav>
		</div>
	</div>
</header>

<section>
    <div class="container-fluid">
	    <div class="row row-cols-2 gy-2">
		<form>
            <div class="col-4 col-sm-4 col-md-4 col-lg-4">
	            <div class="form-group">
                    <label for="inputNumber">№</label>
                    <input type="text" class="form-control" id="docNumber" aria-describedby="number" placeholder="номер накладной">
                </div>
                <div class="form-group">
                    <label for="inputDate">Дата</label>
                    <input type="text" class="form-control" id="inputDate" aria-describedby="date" placeholder="дата заполнения">
                </div>
            </div>
            <div class="col-md-8">
                <div class="form-group">
                    <label for="inputFrom">От кого</label>
                    <input type="text" class="form-control" id="inputFrom">
                </div>
                <div class="form-group">
                    <label for="inputWho">Кому</label>
                    <input type="text" class="form-control" id="inputWho">
                </div>
            </div>
        </form>
            <div class="col-4 col-sm-4 col-md-4 col-lg-4">
		        <h6><span class="letter">Документ:</span><br> Накладная расход</h6><br>
                <h6><span class="letter">Операция:</span><br> Продажа</h6><br>
                <h6><span class="letter">Связи:</span><br> Касса приход</h6><br>
                <h6><span class="letter">Пользователь:</span><br> Руководитель</h6><br>
                <h6><span class="letter">Создан:</span><br> </h6><br>
                <h6><span class="letter">Изменен:</span><br> </h6><br>
            </div>
            <div class="col-8 col-sm-8 col-md-8 col-lg-8">
		        <nav class="navbar navbar-expand-lg navbar-light">
		            <div class="collapse navbar-collapse" id="navContent">
		                <ul class="navbar-nav mr-auto mb-3 mb-lg-0">
                            <li class="nav-item">
                                <a href="#" class="nav-link">Содержание</a>
                            </li>
					        <li class="nav-item">
                                <a href="#" class="nav-link">Настройка</a>
                            </li>								
                            <li class="nav-item">
                                <a href="#" class="nav-link">Реальный учет</a>
                            </li>
					        <li class="nav-item">
                                <a href="#" class="nav-link">Отчетность</a>
                            </li>
			            </ul>
			        </div>
		        </nav>
	        </div>
	        <div class="col-8 col-sm-8 col-md-8 col-lg-8">
		        <table class="table table-bordered">
                    <thead>
                        <tr>
                            <td>Код</td>			
                            <td>Наименование</td>			
                            <td>Кол-во</td>
                            <td>Цена</td>
                            <td>Сумма</td>
			            </tr>	
                    </thead>
                    <tbody>
		                <tr>
			                <td></td>
			                <td></td>
			                <td></td>
			            </tr>
			            <tr>
			                <td></td>
			                <td></td>
			                <td></td>
			            </tr>
			            <tr>
			                <td></td>
			                <td></td>
			                <td></td>
			            </tr>
			            <tr>
			                <td></td>
			                <td></td>
			                <td></td>
			            </tr>
		            </tbody>
                </table>
            </div>	
	    </div>
    </div>
</section>

<footer>
    <div class="container-fluid px-4">
	    <div class="row">
            <form>
			    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="form-group">
                        <label for="inputComment">Примечания</label>
                        <input type="text" class="form-control" id="inputComment">
                    </div>
				</div>	
            </form>
			    <div class="col-4 col-sm-4 col-md-4 col-lg-4">
                    <button type="button" class="btn btn-outline-dark">5 от 13.05.18</button>
                    <button type="button" class="btn btn-outline-dark">Новый документ</button>
                    <button type="button" class="btn btn-outline-dark">Не проведен</button>
                </div>
	    </div>
	</div>	
</footer>



<script src="https://kit.fontawesome.com/dd4694582e.js" crossorigin="anonymous"></script>
<script src="js/bootstrap.bundle.min.js">
</body>
</html>