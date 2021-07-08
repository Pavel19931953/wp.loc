<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <style>
        #form {
            position: fixed;
            top: 50%;
            left: 50%;
            width: 250px;
        }
    </style>
    <title>My Page</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <div id="form">
        <div>
            <label>Key
                <input type="text" name="key">
            </label>
        </div>
        <div>
            <label>Value
                <input type="text" name="value">
            </label>
        </div>
        <div>
            <button id="button">Submit</button>
        </div>
    </div>
    <script>
        $(document).ready(() => {
            $('#button').click(function (e) {
                e.preventDefault();
                $.post("/wp-admin/admin-ajax.php" , {
                    key: $('input[name="key"]').val(),
                    value: $('input[name="value"]').val(),
                }, function (data, status) {
                    м
                });
            })
        })
    </script>
</body>
</html>