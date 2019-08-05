function check_formet(obj, typeCheck) {
    if (typeCheck == 'idCard') {
        var pattern = new String("__-____-______"); // กำหนดรูปแบบในนี้
        var pattern_ex = new String("_"); // กำหนดสัญลักษณ์หรือเครื่องหมายที่ใช้แบ่งในนี้     
    } else {
        var pattern = new String("__-____-______"); // กำหนดรูปแบบในนี้
        var pattern_ex = new String("-"); // กำหนดสัญลักษณ์หรือเครื่องหมายที่ใช้แบ่งในนี้                 
    }
    var returnText = new String("");
    var obj_l = obj.value.length;
    var obj_l2 = obj_l - 1;
    for (i = 0; i < pattern.length; i++) {
        if (obj_l2 == i && pattern.charAt(i + 1) == pattern_ex) {
            returnText += obj.value + pattern_ex;
            obj.value = returnText;
            chkSubmit(obj);
        }
    }
    if (obj_l >= pattern.length) {
        obj.value = obj.value.substr(0, pattern.length);

    }
}

function chkSubmit(obj) {
    //  if(isNaN($("#product_amount").val())) # ประกาศถึง id
    if (isNaN(obj)) {
        // alert('Please input Number only.');
        return false;
    }
}
function check_password() {
    var pass1 = $("#password1").val();
    var pass2 = $("#password2").val();
    if (pass1 != pass2) {
        alert(" ! Password ทั้ง 2 ช่องไม่ตรงกัน กรุณาใส่ให้ถูกต้องต้อง");
        $("#password2").val("");

    }

}

function checkVlue(id) {
    var elem = $('#' + id).val();
    
    if (!elem.match(/^([0-9])+$/i)) {
        alert("กรอกได้เฉพาะตัวเลขเท่านั้น");
        $('#' + id).val("");
    }
}