$(function() {
	var headNav = $("#top-header");
	//scroll�������Ɠǂݍ��ݎ�����̂�load���ǉ�
	$(window).on('load scroll', function () {
		//���݂̈ʒu��500px�ȏォ�A�N���Xfixed���t�^����Ă��Ȃ���
		if($(this).scrollTop() > 400 && headNav.hasClass('m_fixed') == false) {
			//header�̍�������ɐݒ�
			headNav.css({"top": '-80px'});
			//�N���Xfixed��t�^
			headNav.addClass('m_fixed');
			//�ʒu��0�ɐݒ肵�A�A�j���[�V�����̃X�s�[�h���w��
			headNav.animate({"top": 0},400);
		}
		//���݂̈ʒu��300px�ȉ����A�N���Xfixed���t�^����Ă��鎞��fixed���O��
		else if($(this).scrollTop() < 300 && headNav.hasClass('m_fixed') == true){
			headNav.removeClass('m_fixed');
		}
	});
});