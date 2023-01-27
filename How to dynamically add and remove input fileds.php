<!-- hOW TO DYNAMICALLY ADD AND REMOVE INPUT FIELDS -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
</head>
<style>
.textInput {

    padding: 6px;
}
h2 {
    color: red;
}
</style>

<body>
    <h2>JQUERY LEARNING</h2>
    <div id="row" class="divs">
        <div class="textInput">
            <input type="text" id="fname" placeholder="enter your first name...">
        </div>
        <div class="textInput">
            <input type="text" id="lname" placeholder="enter your last name...">
        </div>
        <button type="submit" id="addInput" class="btn btn-warning">Add</button>
    </div>
    
    <script>
    $(document).ready(function() {

        $("#addInput").on("click", function() {

            let html = `
            <div id='removeDiv' class='registration-form'>
                <div id class='textInput'>
                    <input type='text' placeholder='enter your first name'>
                </div>
                <div id class='textInput'>
                    <input type='text' id='lname' placeholder='enter your last name...'>
                </div>

                <button type="submit" class="btn btn-warning removeDivId">remove</button>
            </div>`;

            $(".divs").append(html);

        });

        $(document).on('click', '.removeDivId', function() {
            $(this).parent('div').remove();
        })

    });
    </script>
</body>
</html>