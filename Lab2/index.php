
<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />

         
        <h1 style="text-align: center;">Обращение к службе поддержки</h1>
    </head>



    <body>


        
        
        <main>
            <div class="container"> 
                <form method="post" action="head.php">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Фамилия</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="FIO" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Имя</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name = "names" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Отчество</label>
                        <input type="text" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class = "mb-3">
                        <label for="exampleInputPassword1" class="form-label">Дата</label>
                        <input type="date" class="form-control" id="exampleInputPassword1">
                    </div>
                    <select class="form-select mb-3" aria-label="Default select example">
                        <option selected>Выберите пол:</option>
                        <option value="1">Мужской</option>
                        <option value="2">Женский</option>
                    </select>
                    <div class = "mb-3">
                        <label for="exampleInputPassword1" class="form-label">Номер телефона</label>
                        <input type="tel" class="form-control" id="exampleInputPassword1" required>
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Место жительства</label>
                        <textarea class="form-control" name="address" id="address" rows="1"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" required>
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="chek" id="radioDefault1" value="Жалоба">
                        <label class="form-check-label" for="radioDefault1">
                            Жалоба
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="chek" id="radioDefault2" value="Благодарность">
                        <label class="form-check-label" for="radioDefault2">
                            Благодарность
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="chek" id="radioDefault2" value="Предложение">
                        <label class="form-check-label" for="radioDefault2">
                            Предложение
                        </label>
                    </div>
                    <div class="mb-3">
                        <label for="text" class="form-label">Текст обращения</label>
                        <textarea class="form-control" name="text" id="text" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" class="my-button">Otpravit</button>

                </form>
            </div>
            
                
        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
