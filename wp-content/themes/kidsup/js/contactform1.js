function check_contactform() {
	var name = $('input[name="name"]').val();
	var companyname = $('input[name="companyname"]').val();
	var email = $('input[name="email"]').val();
	var tel = $('input[name="tel"]').val();
	var errmsg = "";
	if(name == "") {
		errmsg = "Name please\n";
	}
	if(companyname == "") {
		errmsg = errmsg + "��Ж�����͂��ĉ�����\n";
	}
	if(email == "") {
		errmsg = errmsg + "���[���A�h���X����͂��ĉ�����\n";
	}
	if(!email.match(/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/)) {
		errmsg = errmsg + "���[���A�h���X�����m�F������\n";
	}
	if(tel == "") {
		errmsg = errmsg + "�d�b�ԍ�����͂��ĉ�����\n";
	}

	if(errmsg != "") {
		alert(errmsg);
		return false;
	}
	$('form[name="myform"]').submit();
}