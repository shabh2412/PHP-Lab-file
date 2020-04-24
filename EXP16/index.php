<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <title>Fill Form</title>
    </head>
    <body style="font-size: 30px">
        <form action="action.php" method="post" class="form container-fluid mx-5">
            <div class="row text-center m-5">
                <div class="col text-center text-muted">
                    <h3 class="tex-muted">Registration Form</h3>
                </div>
            </div>
            <div class="row text-center m-5">
                <div class="col"></div>
                <div class="col">
                    <label for="usrName" class="text-muted">Username</label>
                </div>
                <div class="col">
                    <input type="text" name="usrName" id="usrName" placeholder="Ex: JohnDoe" required>
                </div>
                <div class="col"></div>
            </div>
            <div class="row text-center m-5">
                <div class="col"></div>
                <div class="col">
                    <label for="usrEmail" class="text-muted">Email</label>
                </div>
                <div class="col">
                    <input type="email" name="usrEmail" id="usrEmail" placeholder="Ex: johndoe@example.com" required>
                </div>
                <div class="col"></div>
            </div>
            <div class="row text-center m-5">
                <div class="col"></div>
                <div class="col">
                    <label for="Gender" class="text-muted">Gender</label>
                </div>
                <div class="col">
                    <input type="text" name="Gender" id="Gender" placeholder="Ex: M / F" required>
                </div>
                <div class="col"></div>
            </div>
            <div class="row text-center m-5">
                <div class="col text-center text-muted">
                    <button type="submit" name="sub" class="btn btn-success">SUBMIT</button>
                </div>
            </div>
        </form>
    </body>
</html>