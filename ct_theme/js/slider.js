

        function isNumberKey(evt) {
            var charCode = (evt.which) ? evt.which : event.keyCode
            if (charCode > 31 && (charCode < 48 || charCode > 57))
                return false;
        }
        function message() {

            var name = document.getElementById("name");
            document.getElementById("rtrmessage").style.display = "none";

        }
        function Clear() {
            document.getElementById("contactName").value = "";
            document.getElementById("contactemail").value = "";
            document.getElementById("contactphone").value = "";
            document.getElementById("contactmessage").value = "";
        }
        function trim(stringToTrim) {

            return stringToTrim.replace(/^\s+|\s+$/g, "");

        }

        function ltrim(stringToTrim) {

            return stringToTrim.replace(/^\s+/, "");

        }

        function rtrim(stringToTrim) {

            return stringToTrim.replace(/\s+$/, "");

        }
        function validate(Email) {

            var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;


            if (reg.test(Email) == false) {

                return false;
            }
            else {
                return true;
            }
        }
        function MobileValidate(MobileNo) {
            var reg = /^([7-9]{1})([0-9]{9})$/;
            if (reg.test(MobileNo) == false)
            { return false; }
            else {
                return true;
            }
        }
        function sendmail() {

            var varname = document.getElementById("contactName").value;
            var varemail = document.getElementById("contactemail").value;
            var varmobileNo = document.getElementById("contactphone").value;
            var varcomment = document.getElementById("contactmessage").value;


            if(trim(varname)=="") {

                sweetAlert("Oops...", "Please enter Name!", "error");
                return false;
            }


            if (trim(varmobileNo) == "") {
                sweetAlert("Oops...", "Please enter Mobile No.!", "error");
                return false;
            }
            if (!MobileValidate(varmobileNo)) {
                sweetAlert("Oops...", "Please enter valid Mobile No.!", "error");
                return false;
            }
            if (trim(varemail) == "") {
                sweetAlert("Oops...", "Please enter Email ID!", "error");
                return false;
            }

            if (!validate(varemail)) {

                sweetAlert("Oops...", "Please enter valid Email ID!", "error");
                return false;
            }
            if (trim(varcomment) == "") {
                sweetAlert("Oops...", "Please enter Msg Detail!", "error");
                return false;
            }


            var xmlhttp;

            if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari

                xmlhttp = new XMLHttpRequest();

            }

            else {// code for IE6, IE5

                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");

            }
            swal("Email Sent!", "Thank You for contacting us, we will get back to you soon...!!!", "success")

            xmlhttp.onreadystatechange = function () {

                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {

                    var varMaxQuestion = xmlhttp.responseText;

                    Clear();

                }

            }

            xmlhttp.open("POST", "bottom-mail.php?Name=" + varname + "&Mobile=" + varmobileNo + "&Email=" + varemail + "&Message=" + varcomment, true);

            xmlhttp.send();


        }
