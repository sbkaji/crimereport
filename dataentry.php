<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/registration.css">
    <title>Forms</title>
</head>

<body>
    <div class="wrapHead">
        <h1 id="header">Report Registration</h1>
    </div>

    <div id="wrap">
        <div class="container">
            <form action="index.html">
                <div class="row">
                    <div class="labelName">
                        <label for="cname">Crime Name</label>
                    </div>
                    <div class="inputName">
                        <input type="text" id="cname" name="crimename" placeholder="">
                    </div>
                </div>

                <div class="row">
                    <div class="State">
                        <label for="state">State</label>
                    </div>
                    <div class="divCon">
                        <select id="states" name="state">
                        <option value="australia">Select</option>
                        <option value="australia">Argentina</option>
                        <option value="canada">Algonia</option>
                        <option value="usa">Australia</option>
                        <option value="usa">canada</option>
                        <option value="usa">France</option>
                        <option value="usa">Germany</option>
                        <option value="usa">India</option>
                        <option value="usa">Japan</option>
                        <option value="usa">Nepal</option>
                        <option value="usa">Mexico</option>
                        <option value="usa">Portugal</option>
                        <option value="usa">USA</option>
                    </select>
                    </div>
                </div>
                <div class="row">
                    <div class="districtname">
                        <label for="distname">District</label>
                    </div>
                    <div class="inputName">
                        <input type="text" id="distname" name="districtname" placeholder="">
                    </div>
                </div>


                <div class="row">
                    <div class="city">
                        <label for ="city">City</label>
                    </div>
                    <div class="inputName">
                        <input type="text" id="city" placeholder="">
                    </div>
                </div>
                <div class="row">
                    <div class="stationName">
                        <label for="stnname">Station Name</label>
                    </div>
                    <div class="inputName">
                        <input type="text" id="stnname" name="stationname" placeholder="">
                    </div>
                </div>
                <!---
                <div class="row">
                    <div class="LabelMsg">
                        <label for="subject">Report</label>
                    </div>
                    <div class="inputMsg">
                        <textarea id="msg" name="msg" placeholder="Message.." style="height:200px"></textarea>
                    </div>
                </div> --->
                <div class="row">
                    <input type="submit" value="Submit">
                </div>
            </form>
        </div>
    </div>

</body>

</html