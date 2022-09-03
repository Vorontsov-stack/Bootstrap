<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit-no">
    
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
            <div class="col-8 col-sm-8 col-md-8 col-lg-8">
		        <nav class="navbar navbar-expand-lg navbar-light">
		            <div class="collapse navbar-collapse" id="navContent">
		                <ul class="navbar-nav mr-auto mb-3 mb-lg-1 mt-3">
                            <li class="nav-item">
                                <a href="#" class="nav-link">Расчетный счет(а)</a>
                            </li>
					        <li class="nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-plus-square"></i>Добавить</a>
                            </li>								
                            <li class="nav-item">
                                <a href="#" class="nav-link"><i class="far fa-edit"></i>Изменить</a>
                            </li>
					        <li class="nav-item">
                               <a href="#" class="nav-link"><i class="far fa-trash-alt"></i>Удалить</a>
                            </li>
			            </ul>
			        </div>
		        </nav>
	
	            <table class="table table-bordered">
                    <thead>
                        <tr>
                            <td>Банк</td>			
                            <td>МФО</td>			
                            <td>Р/счет</td>
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
			        </tbody>
                </table>
            </div>
	
            <div class="col-4 col-sm-4 col-md-4 col-lg-4">
		        <h6><span class="letter">Наш долг:</span><br> </h6><br><br><br><br><br>
                <h6><span class="letter">Последняя поставка:</span><br> </h6><br><br>
                <h6><span class="letter">Последняя оплата:</span><br> </h6><br>
            </div>	
	    </div>
	    <div class="row align-items-end">
		    <div class="col-6 col-sm-6 col-md-6 col-lg-6">
	                <h6><span>НДС</span></h6><br>
		            <label>
                        <h6><input type="checkbox"><span>&nbsp;Плательщик НДС</span></h6>
                    </label>
	            <form>
		            <div class="form-group">
                            <label for="inputINumber">Индив.налог.номер</label>
						<input type="text" class="form-control" id="docINumber" aria-describedby="inumber">    
                    </div>
                    <div class="form-group">
                            <label for="inputSNumber">Номер свидет-ва</label>
						<input type="text" class="form-control" id="inputSNumber" aria-describedby="snumber">    
                    </div>
                    <div class="form-group">
                            <label for="inputSignature ">Подпись</label>
						<input type="text" class="form-control" id="docSignature " aria-describedby="signature">						    
                    </div>
				</form>	
	        </div>
        		
		
		    <div class="col-4 col-sm-4 col-md-4 col-lg-4">
			    <form>
		            <input type="radio" id="contactChoice1" name="contact" value="userInd">
                        <label for="contactChoice1">Физ.лицо</label><br>
		            <input type="radio" id="contactChoice1" name="contact" value="userLegal">
                        <label for="contactChoice1">Юр.лицо</label><br><br>
		            <input type="radio" id="contactChoice1" name="contact" value="system">
                        <label for="contactChoice1">Общ.система</label><br>
		            <input type="radio" id="contactChoice1" name="contact" value="tax">
                        <label for="contactChoice1">Единый налог</label>
		        </form>
			</div>
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