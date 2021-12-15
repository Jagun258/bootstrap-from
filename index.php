<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap" rel="stylesheet">
    <title>From input by BOOTSTRAP</title>
</head>

<style>
    * {
        font-family: 'Kanit', sans-serif;
    }

    .row {
        padding: 5px 0px 10px 0px;
    }

    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    input[type=number] {
        -moz-appearance: textfield;
    }
</style>

<body>

    <nav class="navbar navbar-light bg-info bg-opacity-50 ">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="https://cdn.worldvectorlogo.com/logos/bootstrap-5-1.svg" alt="" width="30" height="24"
                    class="d-inline-block align-text-top">
                Form Input BOOTSTRAP
            </a>
        </div>
    </nav>

    <div class='container p-4' style='width: 50%;'>
        <!--  -->
        <div class="row">
            <label for="selectNameTitle">คำนำหน้าชื่อ *</label>
            <select class="form-select" id='selectNameTitle' style='width: 99%;' required>
                <option value="NotSpecified" selected>ไม่ระบุ</option>
                <option value="Mr.">นาย</option>
                <option value="Miss.">นางสาว</option>
            </select>
        </div>
        <!--  -->
        <div class="row">
            <div class="col px-1">
                <label for="inputFName" class="form-label">ชื่อ *</label>
                <input type="text" class="form-control " id="inputFname" required>
            </div>
            <div class="col px-1">
                <label for="inputLname" class="form-label">นามสกุล *</label>
                <input type="text" class="form-control " id="inputLname" required>
            </div>
        </div>
        <!--  -->
        <div class="row">
            <label for="inputGender" class="form-label">เพศ *</label>
            <select class="form-select" id="inputGender" style='width: 99%;' required>
                <option selected value="">เพศ</option>
                <option value="man">ชาย</option>
                <option value="women">หญิง</option>
            </select>
        </div>
        <!--  -->
        <div class="row">
            <label for="inputFaith" class="form-label">ศาสนา *</label>
            <select class="form-select" id="inputFaith" style='width: 99%;' required>
                <option selected value="">ศาสนา</option>
                <option value="buddhism">พุทธ</option>
                <option value="islam">อิสลาม</option>
                <option value="chris">คริสต์</option>
            </select>
        </div>
        <!--  -->
        <div class="row">
            <label for="groupCheckBox" class='pb-1'>หลักสูตรที่สนใจ *</label>
            <div class="groupcheckbox" id='groupCheckBox'>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="checkboxMTA" value="MTA">
                    <label class="form-check-label" for="checkboxMTA">
                        หลักสูตรวิชาเทคโนโลยีมัลติมีเดีย แอนิเมชัน และเกม
                    </label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="checkboxITD" value="ITD">
                    <label class="form-check-label" for="checkboxITD">
                        หลักสูตรวิชาเทคโนโลยีสารสนเทศและนวัตกรรมดิจิทัล
                    </label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="checkboxIMI" value="IMI">
                    <label class="form-check-label" for="checkboxIMI">
                        หลักสูตรวิชานวัตกรรมสารสนเทศทางการแพทย์
                    </label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="checkboxDCM" value="DCM">
                    <label class="form-check-label" for="checkboxDCM">
                        หลักสูตรวิชาดิจิทัลคอนเทนต์และสื่อ
                    </label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="checkboxDCA" value="DCA">
                    <label class="form-check-label" for="checkboxDCM">
                        หลักสูตรวิชานิเทศศาสตร์ดิจิทัล
                    </label>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="row">
            <label for="inputIDnumber" class="form-label">เลขบัตรประชาชน *</label>
            <input type="number" class="form-control " id="inputIDnumber" maxlength="13"
                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);  required">
        </div>
        <!--  -->
        <div class="row">
            <div class="col px-1">
                <label for="houseNo" class="form-label">บ้านเลขที่ *</label>
                <input type="text" class="form-control " id="houseNo" required>
            </div>
            <div class="col px-1">
                <label for="villageNo" class="form-label">หมู่ *</label>
                <input type="number" class="form-control " id="villageNo" required>
            </div>
        </div>
        <!--  -->
        <div class="row">
            <div class="col px-1">
                <label for="road" class="form-label">ถนน *</label>
                <input type="text" class="form-control " id="road" required>
            </div>
            <div class="col px-1">
                <label for="sub-district" class="form-label">ตำบล/แขวง *</label>
                <input type="text" class="form-control " id="sub-district" required>
            </div>
        </div>
        <!--  -->
        <div class="row">
            <div class="col px-1">
                <label for="district" class="form-label">อำเภอ/เขต *</label>
                <input type="text" class="form-control " id="district" required>
            </div>
            <div class="col px-1">
                <label for="postalCode" class="form-label">รหัสไปรษณีย์ *</label>
                <input type="number" class="form-control " id="postalCode" required min="10000" max="99999">
            </div>
        </div>
        <!--  -->
        <div class="row">
            <label for="province">จังหวัด *</label>
            <select class="form-select" id='province' style='width: 99%;' required>
                <option value="" selected>จังหวัด</option>
                <option value="NakhonSiThammarat">นครศรีธรรมราช</option>
                <option value="SuratThani">สุราษฎร์ธานี</option>
                <option value="PhangNga">พังงา</option>
                <option value="Trang">ตรัง</option>
                <option value="Phatthalung">พัทลุง</option>
            </select>
        </div>
        <!--  -->
        <div class="row">
            <div class="col px-1">
                <label for="phone" class="form-label">โทรศัพท์มือถือ *</label>
                <input type="number" class="form-control " id="phone" required maxlength="10"
                    oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
            </div>
            <div class="col px-1">
                <label for="phoneSecond" class="form-label">โทรศัพท์บ้าน</label>
                <input type="number" class="form-control " id="phoneSecond" maxlength="10"
                    oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
            </div>
        </div>
        <!--  -->

        <div class="row text-center" id='warming'>
            <div class='text-danger'>* กรุณาใส่ข้อมูลให้ครบ</div>
        </div>

        <!--  -->
        <div class="row pt-3">
            <div class="col">
                <div class="text-center">
                    <button type="button" class="btn btn-success w-50 " id='submit'>Submit</button>
                </div>
            </div>
        </div>
        <div class="success">
            <div class="row">
                <div class="col text-center">
                    <img src="https://i2.wp.com/www.icon0.com/wp-content/uploads/2021/05/stock-photo-tick-icon-sign-design-13148.jpg?fit=400%2C400&ssl=1"
                        alt="" style="width:10%;">
                    <div class="text-center fs-4"> Success </div>
                </div>
            </div>
        </div>

        <!--  -->
    </div>
    <footer>
        <div class="row footer bg-info bg-opacity-50 " style="padding: 16px">
        </div>
    </footer>

</body>

<script>


    $(() => {
        $('#warming').hide()
        $('.success').hide()
        $('#submit').click(() => {
            var nameTitle = $('#selectNameTitle').val()
            var fname = $('#inputFname').val()
            var lname = $('#inputLname').val()
            var gender = $('#inputGender').val()
            var faith = $('#inputFaith').val()
            var idNumber = $('#inputIDnumber').val()
            var houseNo = $('#houseNo').val()
            var villageNo = $('#villageNo').val()
            var road = $('#road').val()
            var subDistrict = $('#sub-district').val()
            var district = $('#district').val()
            var postalCode = $('#postalCode').val()
            var province = $('#province').val()
            var phone = $('#phone').val()
            var phoneSecond = $('#phoneSecond').val('')
            var interested = ''

            var very_required = [fname, lname, gender, faith, idNumber, houseNo, villageNo, road, subDistrict, district, province, phone]
            var len_vr = very_required.length
            very_required.forEach((val) => {
                if (val.length == 0) {
                    $('#warming').show();
                } else {
                    var array = []
                    var for_check_checkbox = 0
                    $('input:checkbox').each(function () {
                        if ($(this).is(':checked')) {
                            array.push('{' + '"course":' + '"' + $(this).val() + '"' + '}')
                            for_check_checkbox += 1
                        }
                    })
                    if (for_check_checkbox == 0) {
                        $('#warming').show();
                    }
                    else {
                        if (len_vr == 1) {
                            $('#submit').hide();
                            $('.success').show()
                            $('#warming').hide();


                            var data = '['
                            data += '{'
                            data += '"personal_information":' + '[' + '{'
                            data += '"idnumber":' + '"' + idNumber + '"' + ','
                            data += '"nametitle":' + '"' + nameTitle + '"' + ','
                            data += '"firstname":' + '"' + fname + '"' + ','
                            data += '"lastname":' + '"' + lname + '"' + ','
                            data += '"gender":' + '"' + gender + '"' + ','
                            data += '"faith":' + '"' + faith + '"' + ','
                            data += '"phone":' + '"' + phone + '"' + ','
                            data += '"phoneSecond":' + '"' + phoneSecond + '"'
                            data += '}' + ']' + ','

                            data += '"interested":' + '[' + array
                            data += ']' + ','

                            data += '"address":' + '[' + '{'
                            data += '"houseno":' + '"' + houseNo + '"' + ','
                            data += '"villageno":' + '"' + villageNo + '"' + ','
                            data += '"road":' + '"' + road + '"' + ','
                            data += '"subdistrict":' + '"' + subDistrict + '"' + ','
                            data += '"district":' + '"' + district + '"' + ','
                            data += '"postalCode":' + '"' + postalCode + '"' + ','
                            data += '"province":' + '"' + province + '"'
                            data += '}' + ']'

                            data += '}'
                            data += ']'
                            data = JSON.parse(data)
                            console.log(data)
                            $('#submit').hide();
                            $('.success').show()
                            $('#warming').hide();
                        }
                    }
                    len_vr -= 1
                }
            })


        })
    })

</script>

</html>
