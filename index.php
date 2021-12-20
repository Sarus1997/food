<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="agenda.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.1/css/all.css"
        integrity="sha384-xxzQGERXS00kBmZW/6qxqJPyxW3UR0BPsL4c8ILaIWXva5kFi7TxkIIaMiKtqV1Q" crossorigin="anonymous" />
    <script src="https://www.gstatic.com/firebasejs/7.15.5/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.15.5/firebase-database.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
    <script src="form.js"></script>
    <script src="createEvent.js"></script>
    <script src="updateEvent.js"></script>
    <script src="reset.js"></script>
    <script src="updateForm.js"></script>

    <title>CRUD Form</title>

    <style>
        body {
            background-color: #c7c7c7;
        }
    </style>
</head>

<body class="bg-light">
    <div class="container">
        <div class="row bg-white border rounded p-4 mt-5">
            <div id="agenda" class="col-12 col-lg-9">
                <div class="text-center">
                    <img src="https://www.kibrispdr.org/data/gambar-logo-catering-4.jpg"
                        alt="network-logo" width="130" height="100" />
                    <h2>
                        <font color="red">Food_PNG.com</font>
                    </h2>
                    <p>มื้อโปรด สำหรับคุณ</p>
                </div>
                <hr>

                <div id="agenda-table" class="table-responsive-md">

                    <table class="table table-striped table-bordered">

                        <thead>
                            <tr>
                                <th class="agenda-date" class="text-center">วันที่่</th>
                                <th class="agenda-time" class="text-center">เวลา</th>
                                <th class="agenda-room" class="text-center">ห้อง</th>
                                <th class="text-center">ข้อมูลเพิ่มเติม</th>
                            </tr>
                        </thead>

                        <tbody id="agenda-table-rows">

                        </tbody>

                    </table>

                </div>
                <hr>
            </div>

            <div class="col-12 col-lg-3">

                <div class="text-center">
                    <br>
                    <img src="https://www.downloadclipart.net/large/menu-png-transparent.png"
                        alt="network-logo" width="150" height="72" />
                    <h2>
                        <font color="blue">Menu Form</font>
                    </h2>
                </div>

                <div id="form">

                    <form id="myForm" action="#agenda" method="" autocomplete="on" validate>

                        <div class="form-group">
                            <hr>
                            <h4><label for="inputDate">วันที่จอง</label></h4>
                            <input type="date" class="form-control" id="inputDate" name="date" required />
                        </div>
                        <hr>

                        <div class="form-group">
                            <br>
                            <h4><label>เลือกเมนู</label></h4>
                            <div class="d-flex flex-row justify-content-between align-items-center">
                                <select class="form-control mr-1" id="inputStartTimeHour" name="startHour" required>
                                    <option value="" disabled selected>...</option>
                                    <option value="ชุดเล็ก">ชุดเล็ก</option>
                                    <option value="ชุดกลาง">ชุดกลาง</option>
                                    <option value="ชุดใหญ่">ชุดใหญ่</option>
                                    <option value="ชุดพิเศษ">ชุดพิเศษ</option>
                                    <option value="ชุดใหญ่พิเศษ">ชุดใหญ่พิเศษ</option>
                                    <option value="ชุดครอบครัว">ชุดครอบครัว</option>
                                </select>
                            </div>
                            <hr>

                            <div class="form-group">
                                <br>
                                <h4><label>เครื่องเดื่ม</label></h4>
                                <div class="d-flex flex-row justify-content-between align-items-center">
                                    <select class="form-control mr-1" id="inputEndTimeHour" name="endHour" required>
                                        <option value="" disabled selected>...</option>
                                        <option value="ชุดเล็ก">ชุดเล็ก</option>
                                        <option value="ชุดกลาง">ชุดกลาง</option>
                                        <option value="ชุดใหญ่">ชุดใหญ่</option>
                                        <option value="ชุดพิเศษ">ชุดพิเศษ</option>
                                        <option value="ชุดใหญ่พิเศษ">ชุดใหญ่พิเศษ</option>
                                        <option value="ชุดครอบครัว">ชุดครอบครัว</option>
                                    </select>
                                </div>
                                <hr>

                                <div class="form-group">
                                    <br>
                                <h4><legend class="col-form-label pt-0">เลือกห้องอาหาร</legend></h4>
                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input" id="inlineRadioType1"
                                            name="roomType" value="Room 1" required />
                                        <label class="form-check-label" for="inlineRadioType1">ห้อง 1 (10 คน)</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input" id="inlineRadioType2"
                                            name="roomType" value="Room 2" required />
                                        <label class="form-check-label" for="inlineRadioType2">ห้อง 2 (10 คน)</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input" id="inlineRadioType3"
                                            name="roomType" value="Room 3" required />
                                        <label class="form-check-label" for="inlineRadioType3">ห้อง 3 (10 คน)</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input" id="inlineRadioType4"
                                            name="roomType" value="Room 4" required />
                                        <label class="form-check-label" for="inlineRadioType4">ห้อง 4 (10 คน)</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input" id="inlineRadioType4"
                                            name="roomType" value="Room 4" required />
                                        <label class="form-check-label" for="inlineRadioType4">ห้อง 5 (15 คน)</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input" id="inlineRadioType4"
                                            name="roomType" value="Room 4" required />
                                        <label class="form-check-label" for="inlineRadioType4">ห้อง 6 (15 คน)</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input" id="inlineRadioType4"
                                            name="roomType" value="Room 4" required />
                                        <label class="form-check-label" for="inlineRadioType4">ห้อง 7 (50 คน)</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input" id="inlineRadioType4"
                                            name="roomType" value="Room 4" required />
                                        <label class="form-check-label" for="inlineRadioType4">ห้อง 8(20 คน)</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input" id="inlineRadioType4"
                                            name="roomType" value="Room 4" required />
                                        <label class="form-check-label" for="inlineRadioType4">ห้อง 9 (30 คน)</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input" id="inlineRadioType4"
                                            name="roomType" value="Room 4" required />
                                        <label class="form-check-label" for="inlineRadioType4">ห้อง 10 (30 คน)</label>
                                    </div>
                                    <hr>

                                    <div class="form-group">
                                        <br>
                                        <h4><label for="textAreaEvent">ข้อมูลเพิ่มเติม</label></h4>
                                        <textarea class="form-control" name="event" id="textAreaEvent" rows="2"
                                            placeholder="Tell us your event name..."></textarea>
                                    </div>

                                    <button class="btn btn-primary btn-block" type="submit" id="btnSubmit">
                                        <i class="fas fa-paper-plane"></i> Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <form id="myFormUpdate" action="#agenda" method="" autocomplete="on" validate>
        <div class="form-group">
            <h4><label for="inputDate">Date</label></h4>
            <input type="date" class="form-control" id="inputDate" name="date" required />
        </div>

        <div class="form-group">
            <br>
            <h4><label>Start Time</label></h4>
            <div class="d-flex flex-row justify-content-between align-items-center">
                <select class="form-control mr-1" id="inputStartTimeHour" name="startHour" required>
                    <option value="" disabled selected>เพิ่มชุดอาหาร</option>
                    <option value="ชุดเล็ก">ชุดเล็ก</option>
                    <option value="ชุดกลาง">ชุดกลาง</option>
                    <option value="ชุดใหญ่">ชุดใหญ่</option>
                    <option value="ชุดพิเศษ">ชุดพิเศษ</option>
                    <option value="ชุดใหญ่พิเศษ">ชุดใหญ่พิเศษ</option>
                    <option value="ชุดครอบครัว">ชุดครอบครัว</option>
                </select>
            </div>
            <hr>

            <div class="form-group">
                <br>
                <h4><label>End Time</label></h4>
                <div class="d-flex flex-row justify-content-between align-items-center">
                    <select class="form-control mr-1" id="inputEndTimeHour" name="endHour" required>
                        <option value="" disabled selected>เพิ่มชุดเครื่องดื่ม</option>
                        <option value="ชุดเล็ก">ชุดเล็ก</option>
                        <option value="ชุดกลาง">ชุดกลาง</option>
                        <option value="ชุดใหญ่">ชุดใหญ่</option>
                        <option value="ชุดพิเศษ">ชุดพิเศษ</option>
                        <option value="ชุดใหญ่พิเศษ">ชุดใหญ่พิเศษ</option>
                        <option value="ชุดครอบครัว">ชุดครอบครัว</option>
                    </select>
                </div>
                <hr>

                <div class="form-group">
                    <br>
                    <h4>
                        <legend class="col-form-label pt-0">เพิ่มโต๊ะ</legend>
                    </h4>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="inlineRadioType1" name="roomType"
                            value="Room 1" required />
                        <label class="form-check-label" for="inlineRadioType1">1 โต๊ะ</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="inlineRadioType2" name="roomType"
                            value="Room 2" required />
                        <label class="form-check-label" for="inlineRadioType2">2 โต๊ะ</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="inlineRadioType3" name="roomType"
                            value="Room 3" required />
                        <label class="form-check-label" for="inlineRadioType3">3 โต๊ะ</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="inlineRadioType4" name="roomType"
                            value="Room 4" required />
                        <label class="form-check-label" for="inlineRadioType4">4 โต๊ะ</label>
                    </div>
                </div>
                <hr>

                <button class="btn btn-success btn-block" type="submit" id="btnUpdate"><i class="fas fa-sync-alt"></i>
                    Update
                </button>
                <button class="btn btn-danger btn-block" type="button" id="btnReset"><i class="fas fa-ban"></i>
                    Cancel
                </button>
    </form>

</body>

<script>
    function deleteEvent(id) {
        let event = firebase.database().ref("Your Reference Database" + id);
        event.remove();
        readEvent();
    }

    function updateForm(id, dateBooking, roomType, eventName, startTime, endTime) {

        let form = document.getElementById("form")


        document.getElementById("inputDate").setAttribute("value", dateBooking);
        document.getElementById("inputStartTimeHour").value = startTime.split(":")[0];
        document.getElementById("inputStartTimeMinute").value = startTime.split(
            ":"
        )[1];
        document.getElementById("inputEndTimeHour").value = endTime.split(":")[0];
        document.getElementById("inputEndTimeMinute").value = endTime.split(":")[1];
        document.querySelector(`input[value="${roomType}"]`).checked = true;
        document.getElementById("textAreaEvent").value = eventName;

        document.getElementById("myFormUpdate").addEventListener("submit", (e) => {
            e.preventDefault();

            let dateBooking = document.getElementById("inputDate").value;
            let startHour = document.getElementById("inputStartTimeHour").value;
            let startMinute = document.getElementById("inputStartTimeMinute").value;
            let endHour = document.getElementById("inputEndTimeHour").value;
            let endMinute = document.getElementById("inputEndTimeMinute").value;
            let roomType = document.querySelector('input[name="roomType"]:checked')
                .value;
            let eventName = document.getElementById("textAreaEvent").value;

            let startTime = `${startHour}:${startMinute}`;
            let endTime = `${endHour}:${endMinute}`;

            updateEvent(id, dateBooking, roomType, eventName, startTime, endTime);

            readEvent();
            reset();
        });

        document.getElementById("btnReset").addEventListener("click", (e) => {
            reset();
        });
    }

</script>

</html>
