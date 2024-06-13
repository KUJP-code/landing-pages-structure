function check_contactform() {
	var name = $('input[name="name"]').val();
	var furigana = $('input[name="furigana"]').val();
	var address = $('input[name="address"]').val();
	var tel = $('input[name="tel"]').val();
	var otoiawase = $('textarea[name="otoiawase"]').val();
	var errmsg = "";
	if(name == "") {
		errmsg = "�����O����͂��ĉ�����\n";
	}
	if(furigana == "") {
		errmsg = errmsg + "�t���K�i����͂��ĉ�����\n";
	}
	if(address == "") {
		errmsg = errmsg + "���[���A�h���X����͂��ĉ�����\n";
	}
	if(!address.match(/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/)) {
		errmsg = errmsg + "���[���A�h���X�����m�F������\n";
	}
	if(tel == "") {
		errmsg = errmsg + "�d�b�ԍ�����͂��ĉ�����\n";
	}
	if(otoiawase == "") {
		errmsg = errmsg + "���₢���킹���e����͂��ĉ�����\n";
	}
	if(errmsg != "") {
		alert(errmsg);
		return false;
	}
	$('form[name="myform"]').submit();
}