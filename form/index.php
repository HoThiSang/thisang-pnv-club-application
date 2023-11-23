<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./index.css">

</head>

<body>
    <div class="conatiner main-form">
        <h1 class="text-center">PNV Application Club</h1>
        <form action="result.php" id="form-main" method="get" class="col-8 mx-auto">
            <div class="form-group row">
                <label for="inputName" class="col-sm-2 col-form-label">Your name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputName" name="name">
                </div>
            </div>
            <div class="form-group row">
                <label for="club" class="col-sm-2 col-form-label" style="white-space: nowrap;">Club you want to
                    apply</label>
                <div class="col-sm-10">
                    <select name="club" id="club">
                        <option value="Robotic Club">Robotic Club</option>
                        <option value="English Club">English Club</option>
                        <option value="Javascript Club">Javascript Club</option>
                        <option value="Sing Club">Sing Club</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="time">Be time for you : </label>

                <input type="radio" class="radio-item" name="time" id="time" value="Saturday morning">Saturday morning
                <input type="radio" class="radio-item" name="time" id="time" value="Saturday afternoon">Saturday
                afternoon <br>
                <input type="radio" class="radio-item" name="time" id="time" value="Sunday afternoon" style="margin-left: 123px;">Sunday afternoon

            </div>

            <div class="form-check-main">
                <label for="ddd" class="title-check" style="padding-right: 50px;">Your skills : </label>
                <div class="row">
                    <div class="col-5">
                        <div class="form-check" id="ddd">
                            <input class="form-check-input" type="checkbox" name="skills[]" id="check1" value=" The best code">
                            <label class="form-check-label" for="check1">
                                The best code
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="skills[]" id="check2" value=" A super star">
                            <label class="form-check-label" for="check2">
                                A super star
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="skills[]" id="check3" value=" Singer">
                            <label class="form-check-label" for="check3">
                                Singer
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="skills[]" id="check4" value="The best eater">
                            <label class="form-check-label" for="check3">
                                The best eater
                            </label>
                        </div>
                    </div>
                    <div class="col-5" id="ddd">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="skills[]" id="check5" value=" Good in arts">
                            <label class="form-check-label" for="check1">
                                Good in arts
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="skills[]" id="check6" value=" A crazy dancer">
                            <label class="form-check-label" for="check2">
                                A crazy dancer
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="skills[]" id="check7" value=" Good in design">
                            <label class="form-check-label" for="check3">
                                Good in design
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="skills[]" id="check8" value="Good in speeches">
                            <label class="form-check-label" for="check3">
                                Good in speeches
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <div><input type="submit" value="Submit" class="submit" style="width: 90%;"></div>
        </form>
    </div>
</body>

</html>

<!-- <div id="form-check-main">
                <label for="form-check">Yourr skilss</label>
                <div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="skills[]" id="check1" value=" The best code" >
                        <label class="form-check-label" for="check1">
                            The best code
                        </label>
                        </div>
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="skills[]" id="check2" value=" A super star">
                        <label class="form-check-label" for="check2">
                            A super star
                        </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="skills[]" id="check3" value=" Singer">
                            <label class="form-check-label" for="check3">
                                Singer
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="skills[]" id="check4" value="The best eater">
                            <label class="form-check-label" for="check3">
                                The best eater
                            </label>
                        </div>
                </div>
                <div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="skills[]" id="check5" value=" Good in arts" >
                        <label class="form-check-label" for="check1">
                            Good in arts
                        </label>
                        </div>
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="skills[]" id="check6" value=" A crazy dancer">
                        <label class="form-check-label" for="check2">
                            A crazy dancer
                        </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="skills[]" id="check7" value=" Good in design">
                            <label class="form-check-label" for="check3">
                                Good in design
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="skills[]" id="check8" value="Good in speeches">
                            <label class="form-check-label" for="check3">
                                Good in speeches
                            </label>
                        </div>
                </div>
            </div> -->