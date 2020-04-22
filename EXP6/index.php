<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <style>
        .user-inst {
            float: left;
            clear: both;
            margin-left: 50px;
            width: 100px;
            padding: 5px;
        }
        .user-input {
            float: left;
            margin-left: 50px;
            width: 200px;
            padding: 5px;
        }
        .main-body {
            margin: 20vh;
            font-size: 30px;
            border: 1px solid black;
            width: 500px;
            height: 350px;
            padding: 50px;
            background:#007777;
        }
        .submit {
            width: 100px;
            font-size: 0.5em;
            margin-left: 150px;
            height: 40px;
            border-radius: 5px;
            margin-top: 22px;
            border: 2px solid green;
        }
        input {
            height: 30px;
            font-size: 0.5em;
            border-radius: 5px;
            border: 2px solid white;
            text-align: center;
            width: 280px;
        }
    </style>
</head>
<body>
    <form action="action.php" method="post">
        <div class="main-body">
            <div class="row">
                <div class="user-inst">
                    <label for="name">Name</label>
                </div>
                <div class="user-input">
                    <input type="text" name="name" id="name" placeholder="Enter name">
                </div>
            </div>
            
            <!-- Written by Rishabh Panesar only -->
            <div class="row">
                <div class="user-inst">
                    <label for="email">Email</label>
                </div>
                <div class="user-input">
                    <input type="text" name="email" id="email" placeholder="Enter email" >
                </div>
            </div>
            <div class="row">
                <div class="user-inst">
                    <label for="Website">Website</label>
                </div>
                <div class="user-input">
                    <input type="text" name="Website" id="Website" placeholder="Enter Website" required>
                </div>
            </div>
            <div class="row">
                <div class="user-inst">
                    <label for="comment">Comment</label>
                </div>
                <div class="user-input">
                    <textarea name="comment" id="comment" cols="36" rows="5"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="user-inst">
                    <label for="Phone">Phone</label>
                </div>
                <div class="user-input">
                    <input type="number" name="Phone" id="Phone" placeholder="Enter Phone" required>
                </div>
            </div>
            <!-- Written by Rishabh Panesar only -->
            <div class="row">
                <div class="user-inst">
                    <label for="Password">Password</label>
                </div>
                <div class="user-input">
                    <input type="password" name="Password" id="Password" placeholder="Enter Password" required>
                </div>
            </div>
            <input type="submit" name="sub" value="Submit" class="submit">
        </div>
    </form>
    <!-- Written by Rishabh Panesar only -->
</body>
</html>