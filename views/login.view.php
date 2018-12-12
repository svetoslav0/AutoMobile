
<div class="container">
    <div class="d-flex justify-content-center h-100">
        <div class="card">
            <div class="card-header">
                <h3>Влезте в профила</h3>
            </div>
            <div class="card-body">
                <form method="POST">
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Потребителско име" name="username">
                        
                    </div>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="password" class="form-control" placeholder="Парола" name="password">
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Вход!" class="btn float-right login_btn" name="submit">
                    </div>
                </form>
            </div>
            <div class="card-footer">
                <div class="d-flex justify-content-center links">
                    Все още нямате профил? <br /> <a href="register.php">Регистрирайте се!</a>
                </div>
            </div>
        </div>
    </div>
</div>